<?php
class ControllerExtensionModuleMpAccountLinks extends Controller {
	public function index() {
		$this->load->language('extension/module/mp_accountlinks');
		
		$this->load->model('account/customer');

		$this->load->model('account/customer_group');

		$this->load->model('tool/image');

		$this->document->addStyle('catalog/view/theme/default/stylesheet/mp-account-dashboard/style.css');

		$data['text_customer_group'] = $this->language->get('text_customer_group');
		
		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_email'] = $this->language->get('entry_email');
		$data['entry_enquiry'] = $this->language->get('entry_enquiry');
		$data['button_submit'] = $this->language->get('button_submit');

	 	if($this->customer->isLogged()) {
			$data['name'] = $this->customer->getFirstName() .' '. $this->customer->getLastName();
		} else {
			$data['name'] = $this->language->get('text_guestuser');
		}

		$data['email'] = $this->customer->getEmail();

		$data['telephone'] = $this->customer->getTelephone();		
		
		$data['logged'] = $this->customer->isLogged();

		$customer_info = $this->model_account_customer->getCustomer($this->customer->getId());

		if($customer_info) {
			$customer_group_info = $this->model_account_customer_group->getCustomerGroup($customer_info['customer_group_id']);
			if($customer_group_info) {
				$data['customer_group'] = $customer_group_info['name'];
			} else {
				$data['customer_group'] = '';
			}
		} else {
			$data['customer_group'] = '';
		}

		if (!empty($customer_info['picture'])) {
			$data['customer_thumb'] = $this->model_tool_image->resize($customer_info['picture'], 200, 200);
		} else if($this->customer->isLogged() && $this->config->get('module_mp_accountlinks_photo')) {
			$data['customer_thumb'] = $this->model_tool_image->resize($this->config->get('module_mp_accountlinks_photo'), 200, 200);
		} else if(!$this->customer->isLogged() && $this->config->get('module_mp_accountlinks_guest_photo')) {
			$data['customer_thumb'] = $this->model_tool_image->resize($this->config->get('module_mp_accountlinks_guest_photo'), 200, 200);
		} else {
			$data['customer_thumb'] = '';
		}

		// Basic Links
		$links = (array)$this->config->get('module_mp_accountlinks_link');
		
		$data['links'] = array();

		foreach($links as $link) {
			$data['links'][] = array(
				'title'		=> isset($link['description'][$this->config->get('config_language_id')]['title']) ? $link['description'][$this->config->get('config_language_id')]['title'] : '',
				'link'		=> $link['link'],
				'icon'		=> $link['icon'],
			);
		}

		// More Links
		$more_links = (array)$this->config->get('module_mp_accountlinks_more');
		
		$data['more_links'] = array();

		foreach($more_links as $more_link) {
			$data['more_links'][] = array(
				'title'		=> isset($more_link['description'][$this->config->get('config_language_id')]['title']) ? $more_link['description'][$this->config->get('config_language_id')]['title'] : '',
				'link'		=> $more_link['link'],
			);
		}

		// Contact Us
		$data['contact_status'] = $this->config->get('module_mp_accountlinks_contact_status');
		$data['contact_icon'] = $this->config->get('module_mp_accountlinks_contact_icon');
		$data['show_name'] = $this->config->get('module_mp_accountlinks_name');
		$data['show_group'] = $this->config->get('module_mp_accountlinks_group');
		$data['show_email'] = $this->config->get('module_mp_accountlinks_email');
		$data['show_telephone'] = $this->config->get('module_mp_accountlinks_telephone');

		// Colors
		$data['profile_info_bg'] = $this->config->get('module_mp_accountlinks_profile_info_bg');
		$data['profile_info_bg_shadow'] = $this->config->get('module_mp_accountlinks_profile_info_bg_shadow');
		$data['profile_text_color'] = $this->config->get('module_mp_accountlinks_profile_text_color');
		$data['links_bgcolor'] = $this->config->get('module_mp_accountlinks_links_bgcolor');
		$data['links_text_color'] = $this->config->get('module_mp_accountlinks_links_text_color');
		$data['links_text_hover_color'] = $this->config->get('module_mp_accountlinks_links_text_hover_color');
		$data['links_border_color'] = $this->config->get('module_mp_accountlinks_links_border_color');
		$data['button_color'] = $this->config->get('module_mp_accountlinks_button_color');
		$data['button_hover_color'] = $this->config->get('module_mp_accountlinks_button_hover_color');
		$data['adminchat_bgcolor'] = $this->config->get('module_mp_accountlinks_adminchat_bgcolor');
		$data['adminchat_icon_color'] = $this->config->get('module_mp_accountlinks_adminchat_icon_color');
		$data['adminchat_heading_color'] = $this->config->get('module_mp_accountlinks_adminchat_heading_color');
		$data['adminchat_form_color'] = $this->config->get('module_mp_accountlinks_adminchat_form_color');
		$data['adminchat_form_color'] = $this->config->get('module_mp_accountlinks_adminchat_form_color');
		
		$data['links_icon_color'] = $this->config->get('module_mp_accountlinks_links_icon_color');
		$data['buttons_shadow'] = $this->config->get('module_mp_accountlinks_buttons_shadow');
		$data['adminchat_fields_shadow'] = $this->config->get('module_mp_accountlinks_adminchat_fields_shadow');
		$data['adminchat_fields_error_shadow'] = $this->config->get('module_mp_accountlinks_adminchat_fields_error_shadow');
		$data['adminchat_fields_error_color'] = $this->config->get('module_mp_accountlinks_adminchat_fields_error_color');

		$contact_description = $this->config->get('module_mp_accountlinks_contact_description');
		
		$data['contact_title'] = !empty($contact_description[$this->config->get('config_language_id')]['title']) ? $contact_description[$this->config->get('config_language_id')]['title'] : $this->language->get('contact_title');
		
		$data['css'] = $this->config->get('module_mp_accountlinks_css');

		return $this->load->view('extension/module/mp_accountlinks', $data);
	}

	public function send() {
		$this->load->language('information/contact');

		$json = array();

		if ((utf8_strlen($this->request->post['contact_name']) < 3) || (utf8_strlen($this->request->post['contact_name']) > 32)) {
			$json['error']['contact_name'] = $this->language->get('error_name');
		}

		if (!filter_var($this->request->post['contact_email'], FILTER_VALIDATE_EMAIL)) {
			$json['error']['contact_email'] = $this->language->get('error_email');
		}

		if ((utf8_strlen($this->request->post['contact_enquiry']) < 10) || (utf8_strlen($this->request->post['contact_enquiry']) > 3000)) {
			$json['error']['contact_enquiry'] = $this->language->get('error_enquiry');
		}

		if(!$json) {
			$mail = new Mail();
			$mail->protocol = $this->config->get('config_mail_protocol');
			$mail->parameter = $this->config->get('config_mail_parameter');
			$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
			$mail->smtp_username = $this->config->get('config_mail_smtp_username');
			$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
			$mail->smtp_port = $this->config->get('config_mail_smtp_port');
			$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

			$mail->setTo($this->config->get('config_email'));
			$mail->setFrom($this->request->post['contact_email']);
			$mail->setSender(html_entity_decode($this->request->post['contact_name'], ENT_QUOTES, 'UTF-8'));
			$mail->setSubject(html_entity_decode(sprintf($this->language->get('email_subject'), $this->request->post['contact_name']), ENT_QUOTES, 'UTF-8'));
			$mail->setText($this->request->post['contact_enquiry']);
			$mail->send();

			$json['success'] = $this->language->get('text_success');
		}


		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function upload() {
		$this->load->language('tool/upload');
		
		$this->load->model('tool/image');

		$this->load->model('account/customer');

		$json = array();

		if (!empty($this->request->files['file']['name']) && is_file($this->request->files['file']['tmp_name'])) {
			// Sanitize the filename
			$filename = basename(preg_replace('/[^a-zA-Z0-9\.\-\s+]/', '', html_entity_decode($this->request->files['file']['name'], ENT_QUOTES, 'UTF-8')));

			// Validate the filename length
			if ((utf8_strlen($filename) < 3) || (utf8_strlen($filename) > 64)) {
				$json['error'] = $this->language->get('error_filename');
			}

			// Allowed file extension types
			$allowed = array();
			$file_ext_allowed = "png\njpe\njpeg\njpg\ngif\nbmp";
			$file_mime_allowed = "image/png\nimage/jpeg\nimage/gif\nimage/bmp";

			$extension_allowed = preg_replace('~\r?\n~', "\n", $file_ext_allowed);

			$filetypes = explode("\n", $extension_allowed);

			foreach ($filetypes as $filetype) {
				$allowed[] = trim($filetype);
			}

			if (!in_array(strtolower(substr(strrchr($filename, '.'), 1)), $allowed)) {
				$json['error'] = $this->language->get('error_filetype');
			}

			// Allowed file mime types
			$allowed = array();

			$mime_allowed = preg_replace('~\r?\n~', "\n", $file_mime_allowed);

			$filetypes = explode("\n", $mime_allowed);

			foreach ($filetypes as $filetype) {
				$allowed[] = trim($filetype);
			}

			if (!in_array($this->request->files['file']['type'], $allowed)) {
				$json['error'] = $this->language->get('error_filetype');
			}

			// Check to see if any PHP files are trying to be uploaded
			$content = file_get_contents($this->request->files['file']['tmp_name']);

			if (preg_match('/\<\?php/i', $content)) {
				$json['error'] = $this->language->get('error_filetype');
			}

			// Return any upload error
			if ($this->request->files['file']['error'] != UPLOAD_ERR_OK) {
				$json['error'] = $this->language->get('error_upload_' . $this->request->files['file']['error']);
			}
		} else {
			$json['error'] = $this->language->get('error_upload');
		}

		if (!$json) {
			$namedire = 'customer-profile';

			$dir = DIR_IMAGE . $namedire . '/';

			if (!file_exists($dir)) {
			    mkdir($dir, 0777, true);
			}

			if (is_file($dir . $filename)) {
				$parts = pathinfo($dir . $filename);
				if($parts) {
					$file = $parts['filename'] . '-' . rand(1, 5000) . '.'. $parts['extension'];
				} else{
					$file = $filename;
				}				
			} else{
				$file = $filename;
			}

			move_uploaded_file($this->request->files['file']['tmp_name'], $dir . $file);

			// Hide the uploaded file name so people can not link to it directly.
			$this->load->model('tool/upload');

			$json['success'] = $this->language->get('text_upload');

			$customer_profile = $namedire . '/' . $file;

			$this->model_account_customer->EditPicture($customer_profile);

			if (is_file($dir . $file)) {
				$json['customer_thumb'] = $this->model_tool_image->resize($customer_profile, 200, 200);
			} else {
				$json['customer_thumb'] = $this->model_tool_image->resize($namedire . 'avtar.png', 200, 200);	
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}