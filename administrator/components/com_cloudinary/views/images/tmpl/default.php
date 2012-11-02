<?

/**
 * @version     $Id: $
 * @copyright   Copyright (C) 2012 Tom Janssens. (http://tom.janssens.me).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://tom.janssens.me
 */

defined('KOOWA') or die('Restricted access'); ?>

<!--
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />
-->

<form action="" method="get" class="-koowa-grid">
	<table class="adminlist">
	<thead>
		<tr>
			<th width="10"></th>
			<th>
				<?= @helper('grid.sort', array('column' => 'public_id', 'title' => 'Public ID')) ?>
			</th>
		</tr>
		<tr>
			<td align="center">
				<?= @helper( 'grid.checkall'); ?>
			</td>
			<td>
				<?= @helper( 'grid.search'); ?>
			</td>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="4">
				<?= @helper('paginator.pagination', array('total' => $total)) ?>
			</td>
		</tr>
	</tfoot>
	<tbody>
		<? foreach ($images as $image) : ?>
		<tr>
			<td align="center">
				<?= @helper('grid.checkbox', array('row' => $image))?>
			</td>
			<td>
				<a href="<?= @route( 'view=image&task=edit&id='. $image->id ); ?>"><?= @escape($image->public_id); ?></a>
			</td>
		</tr>
		<? endforeach; ?>
	</tbody>
	</table>
</form>