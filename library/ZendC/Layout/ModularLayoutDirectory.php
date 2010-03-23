<?php
class ZendC_Layout_ModularLayoutDirectory
    extends Zend_Layout_Controller_Plugin_Layout
{
    public function preDispatch(Zend_Controller_Request_Abstract $request)
    {
        $moduleName = $request->getModuleName();
        $path = APPLICATION_PATH . "/modules/{$moduleName}/views/layouts";
        if(is_dir($path)){
            $this->getLayout()->setLayoutPath($path);
        }
    }
}