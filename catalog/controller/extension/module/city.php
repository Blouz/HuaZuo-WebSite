
<?php

class ControllerExtensionModuleCity extends Controller {

    public function index() {
        $json = array();
        if (isset($this->request->get['zone_id'])) {
            $sql = "SELECT c.* FROM " . DB_PREFIX . "city as c," . DB_PREFIX . "zone z WHERE c.zone_id = '" . (int) $this->request->get['zone_id'] . "' AND  c.zone_id = z.zone_id AND z.status = 1 and c.status = 1 ORDER BY sort_order ASC";
            $query = $this->db->query($sql);
            if ($query->rows) {
                foreach ($query->rows as $city) {
                    $json['cities'][] = array('city_id' => $city['city_id'], 'name' => $city['name']);
                }
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

}
?>