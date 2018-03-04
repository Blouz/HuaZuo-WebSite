<?php
class ModelExtensionModuleiSenseLabsSeo extends Model {
    public function getSetting($key = '') {
        $result = $this->db->query("SELECT `value` FROM `" . DB_PREFIX . "seo_module_settings` WHERE `key` = '" . $this->db->escape($key) . "' LIMIT 1");
        
        if ($result->num_rows > 0) { 
            return $result->row['value'];
        } else {
            return false;
        }
    }
    
    public function getAutoLinks() {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_autolinks`");
        
        if ($query->num_rows > 0) {
            return $query->rows;
        } else {
            return false;
        }
    }
    
    public function getDescriptionWithAutolinks($text = "") {
        $autolinks = $this->getAutoLinks();
        
        if ($autolinks) {
            foreach ($autolinks as $autolink) {
                $actual_replacement = '<a href="'.$autolink['url'].'">'.$autolink['keyword'].'</a>';
                $text = preg_replace('/('.$autolink['keyword'].')(?!\.[a-z]{2,6})\b/', $actual_replacement, $text);
            }
        }
        
        return $text;
    }
    
    public function getCategoryPathByCategoryId($category_id) {
        $path = NULL;
        if (!empty($category_id)) {
            $paths = $this->db->query("SELECT path_id FROM " . DB_PREFIX . "category_path WHERE category_id='" . (int)$this->db->escape($category_id) . "' ORDER BY level ASC");
            $result_paths = array();
            foreach ($paths->rows as $pathRow) {
                $result_paths[] = $pathRow['path_id'];
            }
            $path = implode('_', $result_paths);
        }
        return $path;
    }
    
    public function getManufacturerData($manufacturer_id = 0) {
        $table_check = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "seo_manufacturer_description'")->num_rows;
        
        $manufacturer_data = array();
        $language_id = $this->config->get('config_language_id');
        
        if ($table_check && $manufacturer_id != 0) {
            $meta_title = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_manufacturer_description` WHERE `manufacturer_id` = '" . $manufacturer_id . "' AND `language_id` = '" . $language_id . "' LIMIT 1");
            if (!empty($meta_title->row['meta_title'])) {
                $manufacturer_data['meta_title'] = $meta_title->row['meta_title'];
            }
            if (!empty($meta_title->row['meta_description'])) {
                $manufacturer_data['meta_description'] = $meta_title->row['meta_description'];
            }
            if (!empty($meta_title->row['meta_keyword'])) {
                $manufacturer_data['meta_keyword'] = $meta_title->row['meta_keyword'];
            }
            
            if (!empty($manufacturer_data)) 
                return $manufacturer_data;
            else
                return false;
        }
        
        return false;
    }
    
    public function MissingPageWorker($route) {
        $redirect_table_check = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "seo_404_pages'")->num_rows;
        $status = false;
        
        if ($redirect_table_check) {
            $route_check = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_404_redirects` WHERE `route_from` = '" . $route . "' LIMIT 1");

            if ($route_check->num_rows) {
                $status = (!empty($route_check->row['route_to'])) ? $route_check->row['route_to'] : false;
            }
        }
        
        $function_check = $this->getSetting('404_pages_gathering');

        if ($function_check && $status == false) {
            $table_check = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "seo_404_pages'")->num_rows;
            
            if ($table_check) {
                $route_check = $this->db->query("SELECT page_id FROM `" . DB_PREFIX . "seo_404_pages` WHERE `route` = '" . $route . "' LIMIT 1");
                $route_data = array();
                
                if ($route_check->num_rows) {
                    $route_data = $route_check->row;
                }
                
                if ($route_data) {
                    $this->db->query("UPDATE `" . DB_PREFIX . "seo_404_pages` SET visits = visits+1, last_visited=NOW() WHERE page_id = ".$route_data['page_id']."");
                } else {
                    $this->db->query("INSERT INTO `" . DB_PREFIX . "seo_404_pages` SET route='" . $this->db->escape($route) . "', visits = 1, first_visited=NOW(), last_visited=NOW()");
                }
                
            }
        }
        
        return $status;
    }    
    
    public function getProductH1Tag($product_id = 0) {
        $result = $this->db->query("SELECT h1 FROM `" . DB_PREFIX . "seo_product_description` WHERE product_id=" . (int)$this->db->escape($product_id) . " AND language_id='".$this->config->get('config_language_id')."' LIMIT 1");
        
        if ($result->num_rows) {
            return $result->row['h1'];
        } else {
            return '';
        }
    }
    
    public function getProductH2Tag($product_id = 0) {
        $result = $this->db->query("SELECT h2 FROM `" . DB_PREFIX . "seo_product_description` WHERE product_id=" . (int)$this->db->escape($product_id) . " AND language_id='".$this->config->get('config_language_id')."' LIMIT 1");
        
        if ($result->num_rows) {
            return $result->row['h2'];
        } else {
            return '';
        }
    }
    
}