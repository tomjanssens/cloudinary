<?

/**
 * @version     $Id: $
 * @copyright   Copyright (C) 2012 Tom Janssens. (http://tom.janssens.me).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://tom.janssens.me
 */

defined('KOOWA') or die('Restricted access'); ?>

<form action="" method="post" class="-koowa-form" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?= $image->id ?>" />

<label for="file">Filename:</label>
<input type="file" name="file" id="file" /> 

</form>