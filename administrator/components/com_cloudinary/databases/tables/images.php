<?php

/**
 * @version     $Id: $
 * @copyright   Copyright (C) 2012 Tom Janssens. (http://tom.janssens.me).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://tom.janssens.me
 */

class ComCloudinaryDatabaseTableImages extends KDatabaseTableDefault
{
    protected function _initialize(KConfig $config)
    {
        $config->append(array(
            'behaviors' => array(
            	'creatable'
            )
        ));

        parent::_initialize($config);
    }
}