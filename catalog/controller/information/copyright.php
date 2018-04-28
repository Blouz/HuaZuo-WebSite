<?php
Class ControllerInformationCopyright extends Controller {
    public function index(){
        $this->document->setTitle('版权中心');
        $this->document->setDescription('版权中心页面');
        $this->document->setKeywords('画作网, 版权中心');

        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('/information/copyright', $data));

    }
}
/*End of copyright.php*/
/*Location: /catalog/controller/information/copyright.php*/
