<?php
Class ControllerInformationCooperation extends Controller {
    public function index(){
        $this->document->setTitle('商业合作');
        $this->document->setDescription('商业合作页面');
        $this->document->setKeywords('画作网, 商业合作');

        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('/information/cooperation', $data));

    }
}
/*End of cooperation.php*/
/*Location: /catalog/controller/information/cooperation.php*/
