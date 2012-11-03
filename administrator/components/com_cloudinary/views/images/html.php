<?php

class ComCloudinaryViewImagesHtml extends ComDefaultViewHtml
{
    public function display()
    {
        $component = $this->getService('com://admin/extensions.model.components')->id('33')->getItem();
        $params = $component->params->toArray();
        
        $this->assign('params', $params);
        return parent::display();
    }
}