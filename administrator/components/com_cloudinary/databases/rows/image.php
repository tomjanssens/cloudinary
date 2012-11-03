<?php

/**
 * @version     $Id: $
 * @copyright   Copyright (C) 2012 Tom Janssens. (http://tom.janssens.me).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://tom.janssens.me
 */

class ComCloudinaryDatabaseRowImage extends KDatabaseRowDefault
{
    public function save()
    {		
		require JPATH_LIBRARIES.DS.'cloudinary/cloudinary.php';
		require JPATH_LIBRARIES.DS.'cloudinary/uploader.php';
		
		$this->file 	= $_FILES['file']['tmp_name'];
		$this->name 	= $_FILES['file']['name'];
		
		$component = $this->getService('com://admin/extensions.model.components')->id('33')->getItem();
		$params = $component->params->toArray();
		
		Cloudinary::config(array("cloud_name" => $params['cloud_name'], "api_key" => $params['api_key'], "api_secret" => $params['api_secret']));
		
		$result = Cloudinary\Uploader::upload($this->file, array("tags"=> ""));
		
		$this->public_id = $result['public_id'];
		
        $result   = parent::save();

        return $result;
    }
    
    public function delete()
    {
        require JPATH_LIBRARIES.DS.'cloudinary/cloudinary.php';
        require JPATH_LIBRARIES.DS.'cloudinary/uploader.php';
        
        $component = $this->getService('com://admin/extensions.model.components')->id('33')->getItem();
        $params = $component->params->toArray();
        
        Cloudinary::config(array("cloud_name" => $params['cloud_name'], "api_key" => $params['api_key'], "api_secret" => $params['api_secret']));
        
        $result = parent::delete();
        
        $destroy = Cloudinary\Uploader::destroy($this->public_id);

        return $result;
    }
}