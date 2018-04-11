<?php
Class ControllerInformationAboutUs extends Controller {
    public function index(){
        $this->document->setTitle('关于我们');
        $this->document->setDescription('网站介绍页面');
        $this->document->setKeywords('画作网, 关于我们');

        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('/information/aboutus', $data));

    }
}
/*End of aboutus.php*/
/*Location: /catalog/controller/information/aboutus.php*/