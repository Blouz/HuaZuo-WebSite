<?php
class ControllerExtensionModuleMpAccountpage extends Controller {
	private $error = array();

	public function index() {
		$this->document->addStyle('view/javascript/modulepoints/colorpicker/css/bootstrap-colorpicker.css');
		$this->document->addScript('view/javascript/modulepoints/colorpicker/js/bootstrap-colorpicker.js');

		$this->document->addStyle('view/stylesheet/modulepoints/accountdashboard.css');

		$this->load->language('extension/module/mp_accountpage');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');
		
		$this->load->model('tool/image');

		if(isset($this->request->get['store_id'])) {
			$data['store_id'] = $this->request->get['store_id'];
		}else{
			$data['store_id'] = 0;
		}

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_mp_accountpage', $this->request->post, $data['store_id']);

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
		$data['entry_total_orders'] = $this->language->get('entry_total_orders');
		$data['entry_total_balance'] = $this->language->get('entry_total_balance');
		$data['entry_total_wishlist'] = $this->language->get('entry_total_wishlist');
		$data['entry_total_rewardpoints'] = $this->language->get('entry_total_rewardpoints');
		$data['entry_total_downloads'] = $this->language->get('entry_total_downloads');
		$data['entry_recent_orders'] = $this->language->get('entry_recent_orders');

		$data['entry_acc_stats_heading_bg'] = $this->language->get('entry_acc_stats_heading_bg');
		$data['entry_acc_stats_heading_color'] = $this->language->get('entry_acc_stats_heading_color');
		$data['entry_acc_stats_bg'] = $this->language->get('entry_acc_stats_bg');
		$data['entry_acc_stats_icon_border_color'] = $this->language->get('entry_acc_stats_icon_border_color');
		$data['entry_acc_stats_text_color'] = $this->language->get('entry_acc_stats_text_color');
		$data['entry_acc_stats_icon_color'] = $this->language->get('entry_acc_stats_icon_color');
		$data['entry_acc_other_links_border_color'] = $this->language->get('entry_acc_other_links_border_color');
		$data['entry_acc_other_links_border_hovcolor'] = $this->language->get('entry_acc_other_links_border_hovcolor');
		$data['entry_acc_other_links_icon_bg'] = $this->language->get('entry_acc_other_links_icon_bg');
		$data['entry_acc_other_links_icon_color'] = $this->language->get('entry_acc_other_links_icon_color');
		$data['entry_acc_other_links_text_color'] = $this->language->get('entry_acc_other_links_text_color');
		$data['entry_acc_table_heading_bg'] = $this->language->get('entry_acc_table_heading_bg');
		$data['entry_acc_table_heading_color'] = $this->language->get('entry_acc_table_heading_color');
		$data['entry_acc_table_text_color'] = $this->language->get('entry_acc_table_text_color');
		$data['entry_acc_table_thead_bodr_color'] = $this->language->get('entry_acc_table_thead_bodr_color');
		$data['entry_order_label_complete_bg'] = $this->language->get('entry_order_label_complete_bg');
		$data['entry_order_label_complete_color'] = $this->language->get('entry_order_label_complete_color');
		$data['entry_order_label_pending_bg'] = $this->language->get('entry_order_label_pending_bg');
		$data['entry_order_label_pending_color'] = $this->language->get('entry_order_label_pending_color');
		$data['entry_order_label_failed_bg'] = $this->language->get('entry_order_label_failed_bg');
		$data['entry_order_label_failed_color'] = $this->language->get('entry_order_label_failed_color');
		$data['entry_order_table_complete_bg'] = $this->language->get('entry_order_table_complete_bg');
		$data['entry_order_table_complete_color'] = $this->language->get('entry_order_table_complete_color');
		$data['entry_order_innertable_color'] = $this->language->get('entry_order_innertable_color');
		$data['entry_order_innertable_bordercolor'] = $this->language->get('entry_order_innertable_bordercolor');
		$data['entry_order_table_pending_bg'] = $this->language->get('entry_order_table_pending_bg');
		$data['entry_order_table_pending_color'] = $this->language->get('entry_order_table_pending_color');
		$data['entry_order_table_failed_bg'] = $this->language->get('entry_order_table_failed_bg');
		$data['entry_order_table_failed_color'] = $this->language->get('entry_order_table_failed_color');

		$data['column_title'] = $this->language->get('column_title');
		$data['column_link'] = $this->language->get('column_link');
		$data['column_icon'] = $this->language->get('column_icon');

		
		$data['tab_general'] = $this->language->get('tab_general');
		$data['tab_link'] = $this->language->get('tab_link');
		$data['tab_color'] = $this->language->get('tab_color');
		$data['tab_css'] = $this->language->get('tab_css');
		
		$data['fieldset_general'] = $this->language->get('fieldset_general');
		$data['fieldset_widget'] = $this->language->get('fieldset_widget');
		$data['fieldset_recent_orders'] = $this->language->get('fieldset_recent_orders');
		$data['fieldset_link'] = $this->language->get('fieldset_link');
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
			'href' => $this->url->link('extension/module/mp_accountpage', 'user_token=' . $this->session->data['user_token'], true)
		);

		if(isset($data['store_id'])) {
			$data['action'] = $this->url->link('extension/module/mp_accountpage', 'user_token=' . $this->session->data['user_token'].'&store_id='. $data['store_id'], true);
		} else{
			$data['action'] = $this->url->link('extension/module/mp_accountpage', 'user_token=' . $this->session->data['user_token'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		$module_info = $this->model_setting_setting->getSetting('module_mp_accountpage', $data['store_id']);

		if (isset($this->request->post['module_mp_accountpage_status'])) {
			$data['module_mp_accountpage_status'] = $this->request->post['module_mp_accountpage_status'];
		} else if(isset($module_info['module_mp_accountpage_status'])) {
			$data['module_mp_accountpage_status'] = $module_info['module_mp_accountpage_status'];
		} else {
			$data['module_mp_accountpage_status'] = '';
		}
		

		if (isset($this->request->post['module_mp_accountpage_total_orders'])) {
			$data['module_mp_accountpage_total_orders'] = $this->request->post['module_mp_accountpage_total_orders'];
		} else if(isset($module_info['module_mp_accountpage_total_orders'])) {
			$data['module_mp_accountpage_total_orders'] = $module_info['module_mp_accountpage_total_orders'];
		} else {
			$data['module_mp_accountpage_total_orders'] = '1';
		}

		if (isset($this->request->post['module_mp_accountpage_total_balance'])) {
			$data['module_mp_accountpage_total_balance'] = $this->request->post['module_mp_accountpage_total_balance'];
		} else if(isset($module_info['module_mp_accountpage_total_balance'])) {
			$data['module_mp_accountpage_total_balance'] = $module_info['module_mp_accountpage_total_balance'];
		} else {
			$data['module_mp_accountpage_total_balance'] = '1';
		}

		if (isset($this->request->post['module_mp_accountpage_total_wishlist'])) {
			$data['module_mp_accountpage_total_wishlist'] = $this->request->post['module_mp_accountpage_total_wishlist'];
		} else if(isset($module_info['module_mp_accountpage_total_wishlist'])) {
			$data['module_mp_accountpage_total_wishlist'] = $module_info['module_mp_accountpage_total_wishlist'];
		} else {
			$data['module_mp_accountpage_total_wishlist'] = '1';
		}

		if (isset($this->request->post['module_mp_accountpage_total_rewardpoints'])) {
			$data['module_mp_accountpage_total_rewardpoints'] = $this->request->post['module_mp_accountpage_total_rewardpoints'];
		} else if(isset($module_info['module_mp_accountpage_total_rewardpoints'])) {
			$data['module_mp_accountpage_total_rewardpoints'] = $module_info['module_mp_accountpage_total_rewardpoints'];
		} else {
			$data['module_mp_accountpage_total_rewardpoints'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_total_downloads'])) {
			$data['module_mp_accountpage_total_downloads'] = $this->request->post['module_mp_accountpage_total_downloads'];
		} else if(isset($module_info['module_mp_accountpage_total_downloads'])) {
			$data['module_mp_accountpage_total_downloads'] = $module_info['module_mp_accountpage_total_downloads'];
		} else {
			$data['module_mp_accountpage_total_downloads'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_recent_orders'])) {
			$data['module_mp_accountpage_recent_orders'] = $this->request->post['module_mp_accountpage_recent_orders'];
		} else if(isset($module_info['module_mp_accountpage_recent_orders'])) {
			$data['module_mp_accountpage_recent_orders'] = $module_info['module_mp_accountpage_recent_orders'];
		} else {
			$data['module_mp_accountpage_recent_orders'] = '1';
		}

		if (isset($this->request->post['module_mp_accountpage_link'])) {
			$data['module_mp_accountpage_links'] = $this->request->post['module_mp_accountpage_link'];
		} else if(isset($module_info['module_mp_accountpage_link'])) {
			$data['module_mp_accountpage_links'] = (array)$module_info['module_mp_accountpage_link'];
		} else {
			$data['module_mp_accountpage_links'] = array();
		}

		if (isset($this->request->post['module_mp_accountpage_css'])) {
			$data['module_mp_accountpage_css'] = $this->request->post['module_mp_accountpage_css'];
		} else if(isset($module_info['module_mp_accountpage_css'])) {
			$data['module_mp_accountpage_css'] = $module_info['module_mp_accountpage_css'];
		} else {
			$data['module_mp_accountpage_css'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_acc_stats_heading_bg'])) {
			$data['module_mp_accountpage_acc_stats_heading_bg'] = $this->request->post['module_mp_accountpage_acc_stats_heading_bg'];
		} else if(isset($module_info['module_mp_accountpage_acc_stats_heading_bg'])) {
			$data['module_mp_accountpage_acc_stats_heading_bg'] = $module_info['module_mp_accountpage_acc_stats_heading_bg'];
		} else {
			$data['module_mp_accountpage_acc_stats_heading_bg'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_acc_stats_heading_color'])) {
			$data['module_mp_accountpage_acc_stats_heading_color'] = $this->request->post['module_mp_accountpage_acc_stats_heading_color'];
		} else if(isset($module_info['module_mp_accountpage_acc_stats_heading_color'])) {
			$data['module_mp_accountpage_acc_stats_heading_color'] = $module_info['module_mp_accountpage_acc_stats_heading_color'];
		} else {
			$data['module_mp_accountpage_acc_stats_heading_color'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_acc_stats_bg'])) {
			$data['module_mp_accountpage_acc_stats_bg'] = $this->request->post['module_mp_accountpage_acc_stats_bg'];
		} else if(isset($module_info['module_mp_accountpage_acc_stats_bg'])) {
			$data['module_mp_accountpage_acc_stats_bg'] = $module_info['module_mp_accountpage_acc_stats_bg'];
		} else {
			$data['module_mp_accountpage_acc_stats_bg'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_acc_stats_icon_border_color'])) {
			$data['module_mp_accountpage_acc_stats_icon_border_color'] = $this->request->post['module_mp_accountpage_acc_stats_icon_border_color'];
		} else if(isset($module_info['module_mp_accountpage_acc_stats_icon_border_color'])) {
			$data['module_mp_accountpage_acc_stats_icon_border_color'] = $module_info['module_mp_accountpage_acc_stats_icon_border_color'];
		} else {
			$data['module_mp_accountpage_acc_stats_icon_border_color'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_acc_stats_text_color'])) {
			$data['module_mp_accountpage_acc_stats_text_color'] = $this->request->post['module_mp_accountpage_acc_stats_text_color'];
		} else if(isset($module_info['module_mp_accountpage_acc_stats_text_color'])) {
			$data['module_mp_accountpage_acc_stats_text_color'] = $module_info['module_mp_accountpage_acc_stats_text_color'];
		} else {
			$data['module_mp_accountpage_acc_stats_text_color'] = '';
		}
		
		if (isset($this->request->post['module_mp_accountpage_acc_stats_icon_color'])) {
			$data['module_mp_accountpage_acc_stats_icon_color'] = $this->request->post['module_mp_accountpage_acc_stats_icon_color'];
		} else if(isset($module_info['module_mp_accountpage_acc_stats_icon_color'])) {
			$data['module_mp_accountpage_acc_stats_icon_color'] = $module_info['module_mp_accountpage_acc_stats_icon_color'];
		} else {
			$data['module_mp_accountpage_acc_stats_icon_color'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_acc_other_links_border_color'])) {
			$data['module_mp_accountpage_acc_other_links_border_color'] = $this->request->post['module_mp_accountpage_acc_other_links_border_color'];
		} else if(isset($module_info['module_mp_accountpage_acc_other_links_border_color'])) {
			$data['module_mp_accountpage_acc_other_links_border_color'] = $module_info['module_mp_accountpage_acc_other_links_border_color'];
		} else {
			$data['module_mp_accountpage_acc_other_links_border_color'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_acc_other_links_border_hovcolor'])) {
			$data['module_mp_accountpage_acc_other_links_border_hovcolor'] = $this->request->post['module_mp_accountpage_acc_other_links_border_hovcolor'];
		} else if(isset($module_info['module_mp_accountpage_acc_other_links_border_hovcolor'])) {
			$data['module_mp_accountpage_acc_other_links_border_hovcolor'] = $module_info['module_mp_accountpage_acc_other_links_border_hovcolor'];
		} else {
			$data['module_mp_accountpage_acc_other_links_border_hovcolor'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_acc_other_links_icon_bg'])) {
			$data['module_mp_accountpage_acc_other_links_icon_bg'] = $this->request->post['module_mp_accountpage_acc_other_links_icon_bg'];
		} else if(isset($module_info['module_mp_accountpage_acc_other_links_icon_bg'])) {
			$data['module_mp_accountpage_acc_other_links_icon_bg'] = $module_info['module_mp_accountpage_acc_other_links_icon_bg'];
		} else {
			$data['module_mp_accountpage_acc_other_links_icon_bg'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_acc_other_links_icon_color'])) {
			$data['module_mp_accountpage_acc_other_links_icon_color'] = $this->request->post['module_mp_accountpage_acc_other_links_icon_color'];
		} else if(isset($module_info['module_mp_accountpage_acc_other_links_icon_color'])) {
			$data['module_mp_accountpage_acc_other_links_icon_color'] = $module_info['module_mp_accountpage_acc_other_links_icon_color'];
		} else {
			$data['module_mp_accountpage_acc_other_links_icon_color'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_acc_other_links_text_color'])) {
			$data['module_mp_accountpage_acc_other_links_text_color'] = $this->request->post['module_mp_accountpage_acc_other_links_text_color'];
		} else if(isset($module_info['module_mp_accountpage_acc_other_links_text_color'])) {
			$data['module_mp_accountpage_acc_other_links_text_color'] = $module_info['module_mp_accountpage_acc_other_links_text_color'];
		} else {
			$data['module_mp_accountpage_acc_other_links_text_color'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_acc_table_heading_bg'])) {
			$data['module_mp_accountpage_acc_table_heading_bg'] = $this->request->post['module_mp_accountpage_acc_table_heading_bg'];
		} else if(isset($module_info['module_mp_accountpage_acc_table_heading_bg'])) {
			$data['module_mp_accountpage_acc_table_heading_bg'] = $module_info['module_mp_accountpage_acc_table_heading_bg'];
		} else {
			$data['module_mp_accountpage_acc_table_heading_bg'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_acc_table_heading_color'])) {
			$data['module_mp_accountpage_acc_table_heading_color'] = $this->request->post['module_mp_accountpage_acc_table_heading_color'];
		} else if(isset($module_info['module_mp_accountpage_acc_table_heading_color'])) {
			$data['module_mp_accountpage_acc_table_heading_color'] = $module_info['module_mp_accountpage_acc_table_heading_color'];
		} else {
			$data['module_mp_accountpage_acc_table_heading_color'] = '';
		}
		
		if (isset($this->request->post['module_mp_accountpage_acc_table_text_color'])) {
			$data['module_mp_accountpage_acc_table_text_color'] = $this->request->post['module_mp_accountpage_acc_table_text_color'];
		} else if(isset($module_info['module_mp_accountpage_acc_table_text_color'])) {
			$data['module_mp_accountpage_acc_table_text_color'] = $module_info['module_mp_accountpage_acc_table_text_color'];
		} else {
			$data['module_mp_accountpage_acc_table_text_color'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_acc_table_thead_bodr_color'])) {
			$data['module_mp_accountpage_acc_table_thead_bodr_color'] = $this->request->post['module_mp_accountpage_acc_table_thead_bodr_color'];
		} else if(isset($module_info['module_mp_accountpage_acc_table_thead_bodr_color'])) {
			$data['module_mp_accountpage_acc_table_thead_bodr_color'] = $module_info['module_mp_accountpage_acc_table_thead_bodr_color'];
		} else {
			$data['module_mp_accountpage_acc_table_thead_bodr_color'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_order_label_complete_bg'])) {
			$data['module_mp_accountpage_order_label_complete_bg'] = $this->request->post['module_mp_accountpage_order_label_complete_bg'];
		} else if(isset($module_info['module_mp_accountpage_order_label_complete_bg'])) {
			$data['module_mp_accountpage_order_label_complete_bg'] = $module_info['module_mp_accountpage_order_label_complete_bg'];
		} else {
			$data['module_mp_accountpage_order_label_complete_bg'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_order_label_complete_color'])) {
			$data['module_mp_accountpage_order_label_complete_color'] = $this->request->post['module_mp_accountpage_order_label_complete_color'];
		} else if(isset($module_info['module_mp_accountpage_order_label_complete_color'])) {
			$data['module_mp_accountpage_order_label_complete_color'] = $module_info['module_mp_accountpage_order_label_complete_color'];
		} else {
			$data['module_mp_accountpage_order_label_complete_color'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_order_table_complete_bg'])) {
			$data['module_mp_accountpage_order_table_complete_bg'] = $this->request->post['module_mp_accountpage_order_table_complete_bg'];
		} else if(isset($module_info['module_mp_accountpage_order_table_complete_bg'])) {
			$data['module_mp_accountpage_order_table_complete_bg'] = $module_info['module_mp_accountpage_order_table_complete_bg'];
		} else {
			$data['module_mp_accountpage_order_table_complete_bg'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_order_table_complete_color'])) {
			$data['module_mp_accountpage_order_table_complete_color'] = $this->request->post['module_mp_accountpage_order_table_complete_color'];
		} else if(isset($module_info['module_mp_accountpage_order_table_complete_color'])) {
			$data['module_mp_accountpage_order_table_complete_color'] = $module_info['module_mp_accountpage_order_table_complete_color'];
		} else {
			$data['module_mp_accountpage_order_table_complete_color'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_order_innertable_color'])) {
			$data['module_mp_accountpage_order_innertable_color'] = $this->request->post['module_mp_accountpage_order_innertable_color'];
		} else if(isset($module_info['module_mp_accountpage_order_innertable_color'])) {
			$data['module_mp_accountpage_order_innertable_color'] = $module_info['module_mp_accountpage_order_innertable_color'];
		} else {
			$data['module_mp_accountpage_order_innertable_color'] = '';
		}

		if (isset($this->request->post['module_mp_accountpage_order_innertable_bordercolor'])) {
			$data['module_mp_accountpage_order_innertable_bordercolor'] = $this->request->post['module_mp_accountpage_order_innertable_bordercolor'];
		} else if(isset($module_info['module_mp_accountpage_order_innertable_bordercolor'])) {
			$data['module_mp_accountpage_order_innertable_bordercolor'] = $module_info['module_mp_accountpage_order_innertable_bordercolor'];
		} else {
			$data['module_mp_accountpage_order_innertable_bordercolor'] = '';
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
		$this->response->setOutput($this->load->view('extension/module/mp_accountpage', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/mp_accountpage')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}