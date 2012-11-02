<?php

/**
 * @version     $Id: $
 * @copyright   Copyright (C) 2012 Tom Janssens. (http://tom.janssens.me).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://tom.janssens.me
 */

echo KService::get('com://admin/cloudinary.dispatcher')->dispatch();