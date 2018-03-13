<?php

/*
 * IT IS NOT FREE, YOU SHOULD BUY / REFISTER A LICENSE AT HTTPS://MMOSolution.COM
 * CONTACT: toan@MMOSOLUTION.COM 
 * AUTHOR: MMOSOLUTION TEAM AT VIETNAM
 * All code within this file is copyright MMOSOLUTION.COM TEAM | FOUNDED @2012
 * You can not copy or reuse code within this file without written permission.
 */

class ControllerExtensionModuleCity extends Controller {

    private $error = array();

    public function index() {

	$this->load->language('extension/module/city');

	$this->document->setTitle($this->language->get('heading_title'));

	$this->load->model('extension/module/city');

	if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {

	    $this->session->data['country_id'] = $this->request->post['country_id'];

	    $this->session->data['zone_id'] = $this->request->post['zone_id'];

	    $this->model_extension_module_city->editCity($this->request->post);

	    $this->session->data['success'] = $this->language->get('text_success');

	    $this->response->redirect($this->url->link('extension/module/city', 'user_token=' . $this->session->data['user_token'], true));
	}

	$data['heading_title'] = $this->language->get('heading_title');

	$data['text_form'] = $this->language->get('text_edit');
	$data['text_select'] = $this->language->get('text_select');

	$data['entry_name'] = $this->language->get('entry_name');
	$data['entry_code'] = $this->language->get('entry_code');
	$data['entry_zone'] = $this->language->get('entry_zone');
	$data['entry_country'] = $this->language->get('entry_country');
	$data['entry_status'] = $this->language->get('entry_status');

	$data['tab_setting'] = $this->language->get('tab_setting');
	$data['tab_support'] = $this->language->get('tab_support');

	$data['button_save'] = $this->language->get('button_save');
	$data['button_city_add'] = $this->language->get('button_city_add');
	$data['button_cancel'] = $this->language->get('button_cancel');
	$data['button_remove'] = $this->language->get('button_remove');
	$data['text_enabled'] = $this->language->get('text_enabled');
	$data['text_disabled'] = $this->language->get('text_disabled');
	$data['entry_sort_order'] = $this->language->get('entry_sort_order');
	
	$data['row'] = 0;


	$data['error_country_id'] = $this->language->get('error_country_id');
	$data['error_zone_id'] = $this->language->get('error_zone_id');


	$data['MMOS_version'] = '1.0';
	$data['MMOS_code_id'] = 'MMOSOC211';

	if (isset($this->error['warning'])) {
	    $data['error_warning'] = $this->error['warning'];
	} else {
	    $data['error_warning'] = '';
	}

	if (isset($this->session->data['success'])) {
	    $data['success'] = $this->session->data['success'];

	    unset($this->session->data['success']);
	} else {
	    $data['success'] = '';
	}

	if (isset($this->error['name'])) {
	    $data['error_name'] = $this->error['name'];
	} else {
	    $data['error_name'] = array();
	}

	if (isset($this->error['zone'])) {
	    $data['error_zone'] = $this->error['zone'];
	} else {
	    $data['error_zone'] = '';
	}

	$data['breadcrumbs'] = array();

	$data['breadcrumbs'][] = array(
	    'text' => $this->language->get('text_home'),
	    'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
	);

	$data['breadcrumbs'][] = array(
	    'text' => $this->language->get('heading_title'),
	    'href' => $this->url->link('extension/module/city', 'user_token=' . $this->session->data['user_token'], true)
	);

	$data['action'] = $this->url->link('extension/module/city', 'user_token=' . $this->session->data['user_token'], true);

	$data['cancel'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true);

	$data['zone_to_cities'] = array();

	if (isset($this->request->post['zone_to_city'])) {
	    $data['zone_to_cities'] = $this->request->post['zone_to_city'];
	    $data['country_id'] = $this->request->post['country_id'];
	    $data['zone_id'] = $this->request->post['zone_id'];
	} else {

	    if ($this->config->get('citiesdropdown_country_id')) {
		$data['country_id'] = $this->config->get('citiesdropdown_country_id');
	    } else {
		$data['country_id'] = 0;
	    }

	    if ($this->config->get('citiesdropdown_zone_id')) {
		$data['zone_id'] = $this->config->get('citiesdropdown_zone_id');
	    } else {
		$data['zone_id'] = 0;
	    }

	    $data['zone_to_cities'] = $this->model_extension_module_city->getCity($data['zone_id']);
	}


	$this->load->model('localisation/country');

	$data['countries'] = $this->model_localisation_country->getCountries();

	$data['user_token'] = $this->session->data['user_token'];

	$data['header'] = $this->load->controller('common/header');
	$data['column_left'] = $this->load->controller('common/column_left');
	$data['footer'] = $this->load->controller('common/footer');


	$this->response->setOutput($this->load->view('extension/module/city', $data));
	
    }

    protected function validateForm() {

	if (!$this->user->hasPermission('modify', 'extension/module/city')) {
	    $this->error['warning'] = $this->language->get('error_permission');
	}

	if (empty($this->request->post['zone_id'])) {
	    $this->error['zone'] = $this->language->get('error_zone_id');
	}

	if (isset($this->request->post['zone_to_city'])) {
	    foreach ($this->request->post['zone_to_city'] as $key => $value) {
		if (empty($value['name'])) {
		    $this->error['name'][$key] = $this->language->get('error_name');
		}
	    }
	}

	return !$this->error;
    }

    public function savecity() {

	$this->load->model('extension/module/city');
	$this->load->language('extension/module/city');
	$json = array();

	if (!$this->user->hasPermission('modify', 'extension/module/city')) {
	    $json['permission'] = $this->language->get('error_permission');
	} else {
	    if (empty($this->request->post['zone_id'])) {
		$json['error']['warning']['country_id'] = $this->language->get('error_country_id');
	    }
	    if (empty($this->request->post['zone_id'])) {
		$json['error']['warning']['zone_id'] = $this->language->get('error_zone_id');
	    }
	    if (empty($this->request->post['zone_to_city'])) {
		$json['error']['warning']['zone_to_city'] = $this->language->get('error_zone_to_city');
	    }

	    if (!isset($json['error'])) {

		foreach ($this->request->post['zone_to_city'] as $key => $value) {
		    if (empty($value['name'])) {
			$json['error']['name'][$key] = $this->language->get('error_name');
		    }
		}
	    }

	    if (!isset($json['error'])) {
		$this->model_extension_module_city->editCity($this->request->post);

		$json['success'] = $this->language->get('text_success');

		$this->load->model('setting/setting');
		$config = array(
		    'citiesdropdown_country_id' => $this->request->post['country_id'],
		    'citiesdropdown_zone_id' => $this->request->post['zone_id']
		);
		$this->model_setting_setting->editSetting('citiesdropdown', $config);
	    }
	}

	$this->response->addHeader('Content-Type: application/json');
	$this->response->setOutput(json_encode($json));
    }

    public function zone() {

	$this->load->language('extension/module/city');

	$this->load->model('localisation/zone');

	$results = $this->model_localisation_zone->getZonesByCountryId($this->request->get['country_id']);

	$output = '<option value="0">' . $this->language->get('text_select') . '</option>';

	foreach ($results as $result) {
	    $output .= '<option value="' . $result['zone_id'] . '"';
	    if ($this->request->get['zone_id'] == $result['zone_id']) {
		$output .= ' selected="selected"';
	    }
	    $output .= '>' . $result['name'] . '</option>';
	}

	$this->response->setOutput($output);
    }

    public function ajaxcity() {
	$json = array();

	$this->load->language('extension/module/city');

	$this->load->model('extension/module/city');

	$cities = $this->model_extension_module_city->getCity($this->request->post['zone_id']);

	$html = '';

	$row = 0;
	foreach ($cities as $city) {

	    if ($city['status'] == 1) {
		$status_enabled = 'selected';
		$status_disabled = '';
	    } else {

		$status_enabled = '';
		$status_disabled = 'selected';
	    }

	    $html .= '<tr id = "zone-to-city-row' . $row . '">';

	    $html .= '<input type = "hidden" name = "zone_to_city[' . $row . '][city_id]" value = "' . $city['city_id'] . '"/>';
	    $html .= '<td /*
 * IT IS NOT FREE, YOU SHOULD BUY / REFISTER A LICENSE AT HTTPS://MMOSolution.COM
 * CONTACT: toan@MMOSOLUTION.COM 
 * AUTHOR: MMOSOLUTION TEAM AT VIETNAM
 * All code within this file is copyright MMOSOLUTION.COM TEAM | FOUNDED @2012
 * You can not copy or reuse code within this file without written permission.
*/

 class = "text-left"><input type = "text" name = "zone_to_city[' . $row . '][name]" value = "' . $city['name'] . '" /*
 * IT IS NOT FREE, YOU SHOULD BUY / REFISTER A LICENSE AT HTTPS://MMOSolution.COM
 * CONTACT: toan@MMOSOLUTION.COM 
 * AUTHOR: MMOSOLUTION TEAM AT VIETNAM
 * All code within this file is copyright MMOSOLUTION.COM TEAM | FOUNDED @2012
 * You can not copy or reuse code within this file without written permission.
*/

 class = "form-control"/></td>';
	    $html .= '<td /*
 * IT IS NOT FREE, YOU SHOULD BUY / REFISTER A LICENSE AT HTTPS://MMOSolution.COM
 * CONTACT: toan@MMOSOLUTION.COM 
 * AUTHOR: MMOSOLUTION TEAM AT VIETNAM
 * All code within this file is copyright MMOSOLUTION.COM TEAM | FOUNDED @2012
 * You can not copy or reuse code within this file without written permission.
*/

 class = "text-left"><input type = "text" name = "zone_to_city[' . $row . '][code]" value = "' . $city['code'] . '" /*
 * IT IS NOT FREE, YOU SHOULD BUY / REFISTER A LICENSE AT HTTPS://MMOSolution.COM
 * CONTACT: toan@MMOSOLUTION.COM 
 * AUTHOR: MMOSOLUTION TEAM AT VIETNAM
 * All code within this file is copyright MMOSOLUTION.COM TEAM | FOUNDED @2012
 * You can not copy or reuse code within this file without written permission.
*/

 class = "form-control"/></td>';
	    $html .= '<td /*
 * IT IS NOT FREE, YOU SHOULD BUY / REFISTER A LICENSE AT HTTPS://MMOSolution.COM
 * CONTACT: toan@MMOSOLUTION.COM 
 * AUTHOR: MMOSOLUTION TEAM AT VIETNAM
 * All code within this file is copyright MMOSOLUTION.COM TEAM | FOUNDED @2012
 * You can not copy or reuse code within this file without written permission.
*/

 class = "text-left"><input type = "text" name = "zone_to_city[' . $row . '][sort_order]" value = "' . $city['sort_order'] . '" /*
 * IT IS NOT FREE, YOU SHOULD BUY / REFISTER A LICENSE AT HTTPS://MMOSolution.COM
 * CONTACT: toan@MMOSOLUTION.COM 
 * AUTHOR: MMOSOLUTION TEAM AT VIETNAM
 * All code within this file is copyright MMOSOLUTION.COM TEAM | FOUNDED @2012
 * You can not copy or reuse code within this file without written permission.
*/

 class = "form-control"/></td>';
	    $html .= '<td /*
 * IT IS NOT FREE, YOU SHOULD BUY / REFISTER A LICENSE AT HTTPS://MMOSolution.COM
 * CONTACT: toan@MMOSOLUTION.COM 
 * AUTHOR: MMOSOLUTION TEAM AT VIETNAM
 * All code within this file is copyright MMOSOLUTION.COM TEAM | FOUNDED @2012
 * You can not copy or reuse code within this file without written permission.
*/

 class="text-center">';
	    $html .= '    <select name="zone_to_city[' . $row . '][status]"  /*
 * IT IS NOT FREE, YOU SHOULD BUY / REFISTER A LICENSE AT HTTPS://MMOSolution.COM
 * CONTACT: toan@MMOSOLUTION.COM 
 * AUTHOR: MMOSOLUTION TEAM AT VIETNAM
 * All code within this file is copyright MMOSOLUTION.COM TEAM | FOUNDED @2012
 * You can not copy or reuse code within this file without written permission.
*/

 class="form-control">';
	    $html .= '        <option value="1" ' . $status_enabled . '>' . $this->language->get('text_enabled') . '</option>';
	    $html .= '        <option value="0" ' . $status_disabled . '>' . $this->language->get('text_disabled') . '</option>';
	    $html .= '    </select>';
	    $html .= '</td>';
	    $html .= '<td /*
 * IT IS NOT FREE, YOU SHOULD BUY / REFISTER A LICENSE AT HTTPS://MMOSolution.COM
 * CONTACT: toan@MMOSOLUTION.COM 
 * AUTHOR: MMOSOLUTION TEAM AT VIETNAM
 * All code within this file is copyright MMOSOLUTION.COM TEAM | FOUNDED @2012
 * You can not copy or reuse code within this file without written permission.
*/

 class="text-left"><button type="button" onclick="$(\'#zone-to-city-row' . $row . '\').remove();" data-toggle="tooltip" title="<?php echo $button_remove; ?>" /*
 * IT IS NOT FREE, YOU SHOULD BUY / REFISTER A LICENSE AT HTTPS://MMOSolution.COM
 * CONTACT: toan@MMOSOLUTION.COM 
 * AUTHOR: MMOSOLUTION TEAM AT VIETNAM
 * All code within this file is copyright MMOSOLUTION.COM TEAM | FOUNDED @2012
 * You can not copy or reuse code within this file without written permission.
*/

 class="btn btn-danger"><i /*
 * IT IS NOT FREE, YOU SHOULD BUY / REFISTER A LICENSE AT HTTPS://MMOSolution.COM
 * CONTACT: toan@MMOSOLUTION.COM 
 * AUTHOR: MMOSOLUTION TEAM AT VIETNAM
 * All code within this file is copyright MMOSOLUTION.COM TEAM | FOUNDED @2012
 * You can not copy or reuse code within this file without written permission.
*/

 class="fa fa-minus-circle"></i></button></td>';
	    $html .= '</tr>';
	    $row++;
	}

	$json['html'] = $html;
	$json['row'] = $row;

	$this->response->addHeader('Content-Type: application/json');
	$this->response->setOutput(json_encode($json));
    }

    public function install() {

	$this->load->model('extension/module/city');
	$this->model_extension_module_city->install();
	$permissions = array("city");

	$this->load->model('user/user_group');
	
	foreach ($permissions as $p) {

	    $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'extension/module/' . $p);
	    $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'extension/module/' . $p);
    
	}
    }

}
