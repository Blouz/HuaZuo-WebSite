<?php

/*
 * IT IS NOT FREE, YOU SHOULD BUY / REFISTER A LICENSE AT HTTPS://MMOSolution.COM
 * CONTACT: toan@MMOSOLUTION.COM 
 * AUTHOR: MMOSOLUTION TEAM AT VIETNAM
 * All code within this file is copyright MMOSOLUTION.COM TEAM | FOUNDED @2012
 * You can not copy or reuse code within this file without written permission.
*/

 class ModelExtensionModuleCity extends Model {

    public function editCity($data) {
        $this->db->query("DELETE FROM " . DB_PREFIX . "city WHERE zone_id = '" . (int) $data['zone_id'] . "'");

        if (isset($data['zone_to_city'])) {
            foreach ($data['zone_to_city'] as $key => $value) {
				$city_id = isset($value['city_id']) ?  (int) $value['city_id'] :  '';
				
                $this->db->query("INSERT INTO " . DB_PREFIX . "city SET city_id='".$city_id."', name = '" . $this->db->escape($value['name']) . "', code = '" . $this->db->escape($value['code']) . "', zone_id = '" . (int) $data['zone_id'] . "', sort_order = '" . (int) $value['sort_order'] . "', status = '" . (int) $value['status'] . "'");
            }
        }
    }

    public function getCity($zone_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "city WHERE zone_id = '" . (int) $zone_id . "'");

        return $query->rows;
    }

    public function CheckInstall() {
        $query = $this->db->query('SELECT COUNT(*) as total FROM information_schema.tables WHERE table_schema = "' . DB_DATABASE . '" AND table_name = "' . DB_PREFIX . 'city"');
        return $query->row['total'];
    }

    public function install() {

        $sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "city` (
                    `city_id` int(11) NOT NULL AUTO_INCREMENT,
                    `zone_id` int(11) NOT NULL,
                    `name` varchar(128) NOT NULL,
                    `code` varchar(32) NOT NULL,
					`sort_order` int(11)  NOT NULL DEFAULT '0',
					`status` tinyint(1) NOT NULL DEFAULT '1',
                    PRIMARY KEY (`city_id`)
                ) DEFAULT CHARSET=utf8 COLLATE=utf8_bin;";

        $this->db->query($sql);
    }

}
