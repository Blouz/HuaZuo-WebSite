<?php
class ControllerCommonFooter extends Controller {
	public function index() {
		$this->load->language('common/footer');

		if ($this->user->isLogged() && isset($this->request->get['user_token']) && ($this->request->get['user_token'] == $this->session->data['user_token'])) {
			$data['text_version'] = sprintf($this->language->get('text_version'), VERSION);
		} else {
			$data['text_version'] = '';
		}
		

              $data['width'] = 800;
              $data['height'] = 600;
              $data['lang'] = 'en';
							$data['image_url'] = HTTP_CATALOG."image/";
							$data['image_url2'] = HTTPS_CATALOG."image/";
							$data['version_compare'] = version_compare(VERSION, '2.2.0.0');
              if ($this->config->get('pim_status')) {
                $data['width'] = $this->config->get('pim_width');
                $data['height'] = $this->config->get('pim_height');

                if ($this->config->get('pim_language')) {
                $data['lang'] = $this->config->get('pim_language');
                }
              }
          $data['pim_status'] = $this->config->get('pim_status');                         
     
		return $this->load->view('common/footer', $data);
	}
}
