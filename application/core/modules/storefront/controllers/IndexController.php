<?php
class Storefront_IndexController extends Zend_Controller_Action
{
    public function indexAction()
    {
        Cosmos_Profiler::start('calc.multiply');
        // This is not typical because a core action would not be using add-on methods.
        $this->view->result = Cosmos_Api::get()->calc->divide(10,2);
        $this->view->service_plugin_result = Cosmos_Api::get()->sample->add(5,5);
        Cosmos_Profiler::stop('calc.multiply');
    }
}