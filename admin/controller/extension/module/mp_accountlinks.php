<?php
class ControllerExtensionModuleMpAccountlinks extends Controller {
	private $error = array();

	public function index() {
		$this->document->addStyle('view/javascript/modulepoints/colorpicker/css/bootstrap-colorpicker.css');
		$this->document->addScript('view/javascript/modulepoints/colorpicker/js/bootstrap-colorpicker.js');

		$this->document->addStyle('view/stylesheet/modulepoints/accountdashboard.css');

		$this->load->language('extension/module/mp_accountlinks');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');
		
		$this->load->model('tool/image');

		if(isset($this->request->get['store_id'])) {
			$data['store_id'] = $this->request->get['store_id'];
		}else{
			$data['store_id'] = 0;
		}

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_mp_accountlinks', $this->request->post, $data['store_id']);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_default'] = $this->language->get('text_default');
		$data['text_show'] = $this->language->get('text_show');		
		$data['text_show'] = $this->language->get('text_show');		
		$data['text_hide'] = $this->language->get('text_hide');
		$data['text_store'] = $this->language->get('text_store');

		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_css'] = $this->language->get('entry_css');
		$data['entry_icon'] = $this->language->get('entry_icon');
		$data['entry_title'] = $this->language->get('entry_title');
		$data['entry_photo'] = $this->language->get('entry_photo');
		$data['entry_guest_photo'] = $this->language->get('entry_guest_photo');
		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_email'] = $this->language->get('entry_email');
		$data['entry_group'] = $this->language->get('entry_group');
		$data['entry_telephone'] = $this->language->get('entry_telephone');
		$data['entry_profile_info_bg'] = $this->language->get('entry_profile_info_bg');
		$data['entry_profile_info_bg_shadow'] = $this->language->get('entry_profile_info_bg_shadow');
		$data['entry_profile_text_color'] = $this->language->get('entry_profile_text_color');
		$data['entry_links_bgcolor'] = $this->language->get('entry_links_bgcolor');
		$data['entry_links_text_color'] = $this->language->get('entry_links_text_color');
		$data['entry_links_text_hover_color'] = $this->language->get('entry_links_text_hover_color');
		$data['entry_links_border_color'] = $this->language->get('entry_links_border_color');
		$data['entry_button_color'] = $this->language->get('entry_button_color');
		$data['entry_button_hover_color'] = $this->language->get('entry_button_hover_color');
		$data['entry_adminchat_bgcolor'] = $this->language->get('entry_adminchat_bgcolor');
		$data['entry_adminchat_icon_color'] = $this->language->get('entry_adminchat_icon_color');
		$data['entry_adminchat_heading_color'] = $this->language->get('entry_adminchat_heading_color');
		$data['entry_adminchat_form_color'] = $this->language->get('entry_adminchat_form_color');
		$data['entry_links_icon_color'] = $this->language->get('entry_links_icon_color');
		$data['entry_buttons_shadow'] = $this->language->get('entry_buttons_shadow');
		$data['entry_adminchat_fields_shadow'] = $this->language->get('entry_adminchat_fields_shadow');
		$data['entry_adminchat_fields_error_shadow'] = $this->language->get('entry_adminchat_fields_error_shadow');
		$data['entry_adminchat_fields_error_color'] = $this->language->get('entry_adminchat_fields_error_color');

		$data['column_title'] = $this->language->get('column_title');
		$data['column_link'] = $this->language->get('column_link');
		$data['column_icon'] = $this->language->get('column_icon');

		$data['help_photo'] = $this->language->get('help_photo');
		$data['help_guest_photo'] = $this->language->get('help_guest_photo');
		
		$data['tab_general'] = $this->language->get('tab_general');
		$data['tab_link'] = $this->language->get('tab_link');
		$data['tab_color'] = $this->language->get('tab_color');
		$data['tab_contact'] = $this->language->get('tab_contact');
		$data['tab_css'] = $this->language->get('tab_css');
		
		$data['fieldset_general'] = $this->language->get('fieldset_general');
		$data['fieldset_customer'] = $this->language->get('fieldset_customer');
		$data['fieldset_link'] = $this->language->get('fieldset_link');
		$data['fieldset_more'] = $this->language->get('fieldset_more');
		$data['fieldset_contact'] = $this->language->get('fieldset_contact');
		$data['fieldset_css'] = $this->language->get('fieldset_css');
		$data['fieldset_shadow'] = $this->language->get('fieldset_shadow');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		$data['button_link_add'] = $this->language->get('button_link_add');
		$data['button_more_add'] = $this->language->get('button_more_add');
		$data['button_remove'] = $this->language->get('button_remove');

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

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/mp_accountlinks', 'user_token=' . $this->session->data['user_token'], true)
		);

		if(isset($data['store_id'])) {
			$data['action'] = $this->url->link('extension/module/mp_accountlinks', 'user_token=' . $this->session->data['user_token'].'&store_id='. $data['store_id'], true);
		} else{
			$data['action'] = $this->url->link('extension/module/mp_accountlinks', 'user_token=' . $this->session->data['user_token'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		$module_info = $this->model_setting_setting->getSetting('module_mp_accountlinks', $data['store_id']);

		if (isset($this->request->post['module_mp_accountlinks_status'])) {
			$data['module_mp_accountlinks_status'] = $this->request->post['module_mp_accountlinks_status'];
		} else if(isset($module_info['module_mp_accountlinks_status'])) {
			$data['module_mp_accountlinks_status'] = $module_info['module_mp_accountlinks_status'];
		} else {
			$data['module_mp_accountlinks_status'] = '';
		}
		

		if (isset($this->request->post['module_mp_accountlinks_name'])) {
			$data['module_mp_accountlinks_name'] = $this->request->post['module_mp_accountlinks_name'];
		} else if(isset($module_info['module_mp_accountlinks_name'])) {
			$data['module_mp_accountlinks_name'] = $module_info['module_mp_accountlinks_name'];
		} else {
			$data['module_mp_accountlinks_name'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_group'])) {
			$data['module_mp_accountlinks_group'] = $this->request->post['module_mp_accountlinks_group'];
		} else if(isset($module_info['module_mp_accountlinks_group'])) {
			$data['module_mp_accountlinks_group'] = $module_info['module_mp_accountlinks_group'];
		} else {
			$data['module_mp_accountlinks_group'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_email'])) {
			$data['module_mp_accountlinks_email'] = $this->request->post['module_mp_accountlinks_email'];
		} else if(isset($module_info['module_mp_accountlinks_email'])) {
			$data['module_mp_accountlinks_email'] = $module_info['module_mp_accountlinks_email'];
		} else {
			$data['module_mp_accountlinks_email'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_telephone'])) {
			$data['module_mp_accountlinks_telephone'] = $this->request->post['module_mp_accountlinks_telephone'];
		} else if(isset($module_info['module_mp_accountlinks_telephone'])) {
			$data['module_mp_accountlinks_telephone'] = $module_info['module_mp_accountlinks_telephone'];
		} else {
			$data['module_mp_accountlinks_telephone'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_link'])) {
			$data['module_mp_accountlinks_links'] = $this->request->post['module_mp_accountlinks_link'];
		} else if(isset($module_info['module_mp_accountlinks_link'])) {
			$data['module_mp_accountlinks_links'] = (array)$module_info['module_mp_accountlinks_link'];
		} else {
			$data['module_mp_accountlinks_links'] = array();
		}

		if (isset($this->request->post['module_mp_accountlinks_more'])) {
			$data['module_mp_accountlinks_mores'] = $this->request->post['module_mp_accountlinks_more'];
		} else if(isset($module_info['module_mp_accountlinks_more'])) {
			$data['module_mp_accountlinks_mores'] = (array)$module_info['module_mp_accountlinks_more'];
		} else {
			$data['module_mp_accountlinks_mores'] = array();
		}

		if (isset($this->request->post['module_mp_accountlinks_contact_status'])) {
			$data['module_mp_accountlinks_contact_status'] = $this->request->post['module_mp_accountlinks_contact_status'];
		} else if(isset($module_info['module_mp_accountlinks_contact_status'])) {
			$data['module_mp_accountlinks_contact_status'] = $module_info['module_mp_accountlinks_contact_status'];
		} else {
			$data['module_mp_accountlinks_contact_status'] = 1;
		}

		if (isset($this->request->post['module_mp_accountlinks_contact_description'])) {
			$data['module_mp_accountlinks_contact_description'] = $this->request->post['module_mp_accountlinks_contact_description'];
		} else if(isset($module_info['module_mp_accountlinks_contact_description'])) {
			$data['module_mp_accountlinks_contact_description'] = (array)$module_info['module_mp_accountlinks_contact_description'];
		} else {
			$data['module_mp_accountlinks_contact_description'] = array();
		}


		if (isset($this->request->post['module_mp_accountlinks_contact_icon'])) {
			$data['module_mp_accountlinks_contact_icon'] = $this->request->post['module_mp_accountlinks_contact_icon'];
		} else if(isset($module_info['module_mp_accountlinks_contact_icon'])) {
			$data['module_mp_accountlinks_contact_icon'] = $module_info['module_mp_accountlinks_contact_icon'];
		} else {
			$data['module_mp_accountlinks_contact_icon'] = 'fa-comments-o';
		}

		if (isset($this->request->post['module_mp_accountlinks_css'])) {
			$data['module_mp_accountlinks_css'] = $this->request->post['module_mp_accountlinks_css'];
		} else if(isset($module_info['module_mp_accountlinks_css'])) {
			$data['module_mp_accountlinks_css'] = $module_info['module_mp_accountlinks_css'];
		} else {
			$data['module_mp_accountlinks_css'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_profile_info_bg'])) {
			$data['module_mp_accountlinks_profile_info_bg'] = $this->request->post['module_mp_accountlinks_profile_info_bg'];
		} else if(isset($module_info['module_mp_accountlinks_profile_info_bg'])) {
			$data['module_mp_accountlinks_profile_info_bg'] = $module_info['module_mp_accountlinks_profile_info_bg'];
		} else {
			$data['module_mp_accountlinks_profile_info_bg'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_profile_info_bg_shadow'])) {
			$data['module_mp_accountlinks_profile_info_bg_shadow'] = $this->request->post['module_mp_accountlinks_profile_info_bg_shadow'];
		} else if(isset($module_info['module_mp_accountlinks_profile_info_bg_shadow'])) {
			$data['module_mp_accountlinks_profile_info_bg_shadow'] = $module_info['module_mp_accountlinks_profile_info_bg_shadow'];
		} else {
			$data['module_mp_accountlinks_profile_info_bg_shadow'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_profile_text_color'])) {
			$data['module_mp_accountlinks_profile_text_color'] = $this->request->post['module_mp_accountlinks_profile_text_color'];
		} else if(isset($module_info['module_mp_accountlinks_profile_text_color'])) {
			$data['module_mp_accountlinks_profile_text_color'] = $module_info['module_mp_accountlinks_profile_text_color'];
		} else {
			$data['module_mp_accountlinks_profile_text_color'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_links_bgcolor'])) {
			$data['module_mp_accountlinks_links_bgcolor'] = $this->request->post['module_mp_accountlinks_links_bgcolor'];
		} else if(isset($module_info['module_mp_accountlinks_links_bgcolor'])) {
			$data['module_mp_accountlinks_links_bgcolor'] = $module_info['module_mp_accountlinks_links_bgcolor'];
		} else {
			$data['module_mp_accountlinks_links_bgcolor'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_links_text_color'])) {
			$data['module_mp_accountlinks_links_text_color'] = $this->request->post['module_mp_accountlinks_links_text_color'];
		} else if(isset($module_info['module_mp_accountlinks_links_text_color'])) {
			$data['module_mp_accountlinks_links_text_color'] = $module_info['module_mp_accountlinks_links_text_color'];
		} else {
			$data['module_mp_accountlinks_links_text_color'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_links_text_hover_color'])) {
			$data['module_mp_accountlinks_links_text_hover_color'] = $this->request->post['module_mp_accountlinks_links_text_hover_color'];
		} else if(isset($module_info['module_mp_accountlinks_links_text_hover_color'])) {
			$data['module_mp_accountlinks_links_text_hover_color'] = $module_info['module_mp_accountlinks_links_text_hover_color'];
		} else {
			$data['module_mp_accountlinks_links_text_hover_color'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_links_border_color'])) {
			$data['module_mp_accountlinks_links_border_color'] = $this->request->post['module_mp_accountlinks_links_border_color'];
		} else if(isset($module_info['module_mp_accountlinks_links_border_color'])) {
			$data['module_mp_accountlinks_links_border_color'] = $module_info['module_mp_accountlinks_links_border_color'];
		} else {
			$data['module_mp_accountlinks_links_border_color'] = '';
		}
		
		if (isset($this->request->post['module_mp_accountlinks_button_color'])) {
			$data['module_mp_accountlinks_button_color'] = $this->request->post['module_mp_accountlinks_button_color'];
		} else if(isset($module_info['module_mp_accountlinks_button_color'])) {
			$data['module_mp_accountlinks_button_color'] = $module_info['module_mp_accountlinks_button_color'];
		} else {
			$data['module_mp_accountlinks_button_color'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_button_hover_color'])) {
			$data['module_mp_accountlinks_button_hover_color'] = $this->request->post['module_mp_accountlinks_button_hover_color'];
		} else if(isset($module_info['module_mp_accountlinks_button_hover_color'])) {
			$data['module_mp_accountlinks_button_hover_color'] = $module_info['module_mp_accountlinks_button_hover_color'];
		} else {
			$data['module_mp_accountlinks_button_hover_color'] = '';
		}
		
		if (isset($this->request->post['module_mp_accountlinks_adminchat_bgcolor'])) {
			$data['module_mp_accountlinks_adminchat_bgcolor'] = $this->request->post['module_mp_accountlinks_adminchat_bgcolor'];
		} else if(isset($module_info['module_mp_accountlinks_adminchat_bgcolor'])) {
			$data['module_mp_accountlinks_adminchat_bgcolor'] = $module_info['module_mp_accountlinks_adminchat_bgcolor'];
		} else {
			$data['module_mp_accountlinks_adminchat_bgcolor'] = '';
		}
		
		if (isset($this->request->post['module_mp_accountlinks_adminchat_icon_color'])) {
			$data['module_mp_accountlinks_adminchat_icon_color'] = $this->request->post['module_mp_accountlinks_adminchat_icon_color'];
		} else if(isset($module_info['module_mp_accountlinks_adminchat_icon_color'])) {
			$data['module_mp_accountlinks_adminchat_icon_color'] = $module_info['module_mp_accountlinks_adminchat_icon_color'];
		} else {
			$data['module_mp_accountlinks_adminchat_icon_color'] = '';
		}
		
		if (isset($this->request->post['module_mp_accountlinks_adminchat_heading_color'])) {
			$data['module_mp_accountlinks_adminchat_heading_color'] = $this->request->post['module_mp_accountlinks_adminchat_heading_color'];
		} else if(isset($module_info['module_mp_accountlinks_adminchat_heading_color'])) {
			$data['module_mp_accountlinks_adminchat_heading_color'] = $module_info['module_mp_accountlinks_adminchat_heading_color'];
		} else {
			$data['module_mp_accountlinks_adminchat_heading_color'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_adminchat_form_color'])) {
			$data['module_mp_accountlinks_adminchat_form_color'] = $this->request->post['module_mp_accountlinks_adminchat_form_color'];
		} else if(isset($module_info['module_mp_accountlinks_adminchat_form_color'])) {
			$data['module_mp_accountlinks_adminchat_form_color'] = $module_info['module_mp_accountlinks_adminchat_form_color'];
		} else {
			$data['module_mp_accountlinks_adminchat_form_color'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_links_icon_color'])) {
			$data['module_mp_accountlinks_links_icon_color'] = $this->request->post['module_mp_accountlinks_links_icon_color'];
		} else if(isset($module_info['module_mp_accountlinks_links_icon_color'])) {
			$data['module_mp_accountlinks_links_icon_color'] = $module_info['module_mp_accountlinks_links_icon_color'];
		} else {
			$data['module_mp_accountlinks_links_icon_color'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_buttons_shadow'])) {
			$data['module_mp_accountlinks_buttons_shadow'] = $this->request->post['module_mp_accountlinks_buttons_shadow'];
		} else if(isset($module_info['module_mp_accountlinks_buttons_shadow'])) {
			$data['module_mp_accountlinks_buttons_shadow'] = $module_info['module_mp_accountlinks_buttons_shadow'];
		} else {
			$data['module_mp_accountlinks_buttons_shadow'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_adminchat_fields_shadow'])) {
			$data['module_mp_accountlinks_adminchat_fields_shadow'] = $this->request->post['module_mp_accountlinks_adminchat_fields_shadow'];
		} else if(isset($module_info['module_mp_accountlinks_adminchat_fields_shadow'])) {
			$data['module_mp_accountlinks_adminchat_fields_shadow'] = $module_info['module_mp_accountlinks_adminchat_fields_shadow'];
		} else {
			$data['module_mp_accountlinks_adminchat_fields_shadow'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_adminchat_fields_error_shadow'])) {
			$data['module_mp_accountlinks_adminchat_fields_error_shadow'] = $this->request->post['module_mp_accountlinks_adminchat_fields_error_shadow'];
		} else if(isset($module_info['module_mp_accountlinks_adminchat_fields_error_shadow'])) {
			$data['module_mp_accountlinks_adminchat_fields_error_shadow'] = $module_info['module_mp_accountlinks_adminchat_fields_error_shadow'];
		} else {
			$data['module_mp_accountlinks_adminchat_fields_error_shadow'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_adminchat_fields_error_color'])) {
			$data['module_mp_accountlinks_adminchat_fields_error_color'] = $this->request->post['module_mp_accountlinks_adminchat_fields_error_color'];
		} else if(isset($module_info['module_mp_accountlinks_adminchat_fields_error_color'])) {
			$data['module_mp_accountlinks_adminchat_fields_error_color'] = $module_info['module_mp_accountlinks_adminchat_fields_error_color'];
		} else {
			$data['module_mp_accountlinks_adminchat_fields_error_color'] = '';
		}
		
		if (isset($this->request->post['module_mp_accountlinks_photo'])) {
			$data['module_mp_accountlinks_photo'] = $this->request->post['module_mp_accountlinks_photo'];
		} else if(isset($module_info['module_mp_accountlinks_photo'])) {
			$data['module_mp_accountlinks_photo'] = $module_info['module_mp_accountlinks_photo'];
		} else {
			$data['module_mp_accountlinks_photo'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_photo']) && is_file(DIR_IMAGE . $this->request->post['module_mp_accountlinks_photo'])) {
			$data['photo'] = $this->model_tool_image->resize($this->request->post['module_mp_accountlinks_photo'], 100, 100);
		} elseif (isset($module_info['module_mp_accountlinks_photo']) && is_file(DIR_IMAGE . $module_info['module_mp_accountlinks_photo'])) {
			$data['photo'] = $this->model_tool_image->resize($module_info['module_mp_accountlinks_photo'], 100, 100);
		} else {
			$data['photo'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		if (isset($this->request->post['module_mp_accountlinks_guest_photo'])) {
			$data['module_mp_accountlinks_guest_photo'] = $this->request->post['module_mp_accountlinks_guest_photo'];
		} else if(isset($module_info['module_mp_accountlinks_guest_photo'])) {
			$data['module_mp_accountlinks_guest_photo'] = $module_info['module_mp_accountlinks_guest_photo'];
		} else {
			$data['module_mp_accountlinks_guest_photo'] = '';
		}

		if (isset($this->request->post['module_mp_accountlinks_guest_photo']) && is_file(DIR_IMAGE . $this->request->post['module_mp_accountlinks_guest_photo'])) {
			$data['guest_photo'] = $this->model_tool_image->resize($this->request->post['module_mp_accountlinks_guest_photo'], 100, 100);
		} elseif (isset($module_info['module_mp_accountlinks_guest_photo']) && is_file(DIR_IMAGE . $module_info['module_mp_accountlinks_guest_photo'])) {
			$data['guest_photo'] = $this->model_tool_image->resize($module_info['module_mp_accountlinks_guest_photo'], 100, 100);
		} else {
			$data['guest_photo'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		$this->load->model('localisation/language');
		$data['languages'] = $this->model_localisation_language->getLanguages();

		$this->load->model('setting/store');
		$data['stores'] = $this->model_setting_store->getStores();

		$store_info = $this->model_setting_store->getStore($data['store_id']);
		if($store_info) {
			$data['store_name'] = $store_info['name'];
		}else{
			$data['store_name'] = $this->language->get('text_default');
		}

		$data['user_token']	= $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->config->set('template_engine', 'template');
		$this->response->setOutput($this->load->view('extension/module/mp_accountlinks', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/mp_accountlinks')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}