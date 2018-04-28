<?php
class ControllerAccountMpaccountpage extends Controller {
	public function index() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/account', '', true);
			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$this->document->addStyle('catalog/view/theme/default/stylesheet/mp-account-dashboard/style.css');

		$this->load->language('account/mp_accountpage');
		
		$this->load->model('account/order');
		$this->load->model('account/reward');
		$this->load->model('account/transaction');
		$this->load->model('account/download');
		$this->load->model('catalog/product');
		$this->load->model('tool/image');


		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		} 

		// Language
		$data['heading_title'] = $this->language->get('heading_title');

		$data['title_total_orders'] = $this->language->get('title_total_orders');
		$data['title_total_transaction'] = $this->language->get('title_total_transaction');
		$data['title_total_wishlist'] = $this->language->get('title_total_wishlist');
		$data['title_total_reward_points'] = $this->language->get('title_total_reward_points');
		$data['title_total_downloads'] = $this->language->get('title_total_downloads');
		$data['title_recent_orders'] = $this->language->get('title_recent_orders');

		$data['text_orders'] = $this->language->get('text_orders');
		$data['text_balance'] = $this->language->get('text_balance');
		$data['text_wishlist'] = $this->language->get('text_wishlist');
		$data['text_downloads'] = $this->language->get('text_downloads');
		$data['text_reward_points'] = $this->language->get('text_reward_points');
		$data['text_price'] = $this->language->get('text_price');
		$data['text_quantity'] = $this->language->get('text_quantity');
		
		$data['coulmn_order_id'] = $this->language->get('coulmn_order_id');
		$data['coulmn_status'] = $this->language->get('coulmn_status');
		$data['coulmn_total'] = $this->language->get('coulmn_total');
		$data['coulmn_date'] = $this->language->get('coulmn_date');
		$data['coulmn_action'] = $this->language->get('coulmn_action');

		$data['button_viewall'] = $this->language->get('button_viewall');
		$data['button_reorder'] = $this->language->get('button_reorder');
		$data['button_return'] = $this->language->get('button_return');
		$data['button_order_details'] = $this->language->get('button_order_details');

		// Totals
		$data['total_orders'] = $this->model_account_order->getTotalOrders();
		$data['total_transactions'] = $this->currency->format($this->model_account_transaction->getTotalAmount(), $this->session->data['currency']);
		$data['total_reward_points'] = $this->model_account_reward->getTotalPoints();
		$data['total_downloads'] = $this->model_account_download->getTotalDownloads();

		if ( VERSION > '2.0.3.1') {
			$this->load->model('account/wishlist');
			$data['total_wishlist'] = $this->model_account_wishlist->getTotalWishlist();
		} else{
			$data['total_wishlist'] = (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0);
		}

		$data['show_total_orders'] = $this->config->get('module_mp_accountpage_total_orders');
		$data['show_total_balance'] = $this->config->get('module_mp_accountpage_total_balance');
		$data['show_total_wishlist'] = $this->config->get('module_mp_accountpage_total_wishlist');
		$data['show_total_rewardpoints'] = $this->config->get('module_mp_accountpage_total_rewardpoints');
		$data['show_total_downloads'] = $this->config->get('module_mp_accountpage_total_downloads');
		$data['show_recent_orders'] = $this->config->get('module_mp_accountpage_recent_orders');
		$data['css'] = $this->config->get('module_mp_accountpage_css');
		
		$data['order_link'] = $this->url->link('account/order', '', true);
		$data['transaction_link'] = $this->url->link('account/transaction', '', true);
		$data['wishlist_link'] = $this->url->link('account/wishlist', '', true);
		$data['reward_points_link'] = $this->url->link('account/reward', '', true);
		$data['download_link'] = $this->url->link('account/download', '', true);

		// Links
		$links = (array)$this->config->get('module_mp_accountpage_link');
		$data['links'] = array();
		foreach($links as $link) {
			$data['links'][] = array(
				'title'		=> isset($link['description'][$this->config->get('config_language_id')]['title']) ? $link['description'][$this->config->get('config_language_id')]['title'] : '',
				'link'		=> $link['link'],
				'icon'		=> $link['icon'],
			);
		}

		// Recent Orders
		$data['orders'] = array();
		$results = $this->model_account_order->getOrders(0, 5);
		foreach ($results as $result) {
			$order_products = $this->model_account_order->getOrderProducts($result['order_id']);
			$order_product_data = array();
			foreach ($order_products as $order_product) {
				$product_info = $this->model_catalog_product->getProduct($order_product['product_id']);

				if ($product_info) {
					$reorder = $this->url->link('account/order/reorder', 'order_id=' . $result['order_id'] . '&order_product_id=' . $order_product['order_product_id'], true);
					$image = $this->model_tool_image->resize($product_info['image'], 50, 50);
				} else {
					$reorder = '';
					$image = '';
				}

				$order_product_data[] = array(
					'name'			=> $order_product['name'],
					'image'			=> $image,
					'price'    		=> $this->currency->format($order_product['price'] + ($this->config->get('config_tax') ? $order_product['tax'] : 0), $result['currency_code'], $result['currency_value']),
					'total'    		=> $this->currency->format($order_product['total'] + ($this->config->get('config_tax') ? ($order_product['tax'] * $order_product['quantity']) : 0), $result['currency_code'], $result['currency_value']),
					'quantity' 		=> $order_product['quantity'],
					'reorder'  		=> $reorder,
					'return'   		=> $this->url->link('account/return/add', 'order_id=' . $result['order_id'] . '&product_id=' . $order_product['product_id'], true)
				);
			}

			$data['orders'][] = array(
				'order_id'   => $result['order_id'],
				'name'       => $result['firstname'] . ' ' . $result['lastname'],
				'status'     => $result['status'],
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'total'      => $this->currency->format($result['total'], $result['currency_code'], $result['currency_value']),
				'view'       => $this->url->link('account/order/info', 'order_id=' . $result['order_id'], $this->ssl),
				'products'	=> $order_product_data,
			);
		}

		$data['acc_stats_heading_bg'] = $this->config->get('module_mp_accountpage_acc_stats_heading_bg');
		$data['acc_stats_heading_color'] = $this->config->get('module_mp_accountpage_acc_stats_heading_color');
		$data['acc_stats_bg'] = $this->config->get('module_mp_accountpage_acc_stats_bg');
		$data['acc_stats_icon_border_color'] = $this->config->get('module_mp_accountpage_acc_stats_icon_border_color');
		$data['acc_stats_text_color'] = $this->config->get('module_mp_accountpage_acc_stats_text_color');
		$data['acc_stats_icon_color'] = $this->config->get('module_mp_accountpage_acc_stats_icon_color');
		$data['acc_other_links_border_color'] = $this->config->get('module_mp_accountpage_acc_other_links_border_color');
		$data['acc_other_links_border_hovcolor'] = $this->config->get('module_mp_accountpage_acc_other_links_border_hovcolor');
		$data['acc_other_links_icon_bg'] = $this->config->get('module_mp_accountpage_acc_other_links_icon_bg');
		$data['acc_other_links_icon_color'] = $this->config->get('module_mp_accountpage_acc_other_links_icon_color');
		$data['acc_other_links_text_color'] = $this->config->get('module_mp_accountpage_acc_other_links_text_color');
		$data['acc_table_heading_bg'] = $this->config->get('module_mp_accountpage_acc_table_heading_bg');
		$data['acc_table_heading_color'] = $this->config->get('module_mp_accountpage_acc_table_heading_color');
		$data['acc_table_text_color'] = $this->config->get('module_mp_accountpage_acc_table_text_color');
		$data['acc_table_thead_bodr_color'] = $this->config->get('module_mp_accountpage_acc_table_thead_bodr_color');
		$data['order_label_complete_bg'] = $this->config->get('module_mp_accountpage_order_label_complete_bg'); 
		$data['order_label_complete_color'] = $this->config->get('module_mp_accountpage_order_label_complete_color');
		$data['order_table_complete_bg'] = $this->config->get('module_mp_accountpage_order_table_complete_bg');
		$data['order_table_complete_color'] = $this->config->get('module_mp_accountpage_order_table_complete_color');
		$data['order_innertable_color'] = $this->config->get('module_mp_accountpage_order_innertable_color');
		$data['order_innertable_bordercolor'] = $this->config->get('module_mp_accountpage_order_innertable_bordercolor');

		$data['themeclass'] = $this->themeclass();

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		
		$this->response->setOutput($this->load->view('account/mp_accountpage', $data));
	}

	public function themeclass() {
		if($this->config->get('theme_default_directory')) {
			$custom_themename = $this->config->get('theme_default_directory');
		} else if($this->config->get('config_template')) {
			$custom_themename = $this->config->get('config_template');
		} else{
			$custom_themename = 'default';
		}

		if(empty($custom_themename)) {
			$custom_themename = 'default';
		}

		if(isset($custom_themename) && $custom_themename == 'journal2') {
			$account_class = 'journal-account';
		} else{
			$account_class = 'default-account';
		}

		return $account_class;
	}
}
