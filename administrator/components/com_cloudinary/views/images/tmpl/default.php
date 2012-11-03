<?

/**
 * @version     $Id: $
 * @copyright   Copyright (C) 2012 Tom Janssens. (http://tom.janssens.me).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://tom.janssens.me
 */

defined('KOOWA') or die('Restricted access'); ?>

<?= @helper('behavior.modal'); ?>

<form action="" method="get" class="-koowa-grid">
	<table class="adminlist">
	<thead>
		<tr>
			<th width="10"></th>
			<th>
				<?= @helper('grid.sort', array('column' => 'public_id', 'title' => 'Public ID')) ?>
			</th>
			<th>
				<?= @helper('grid.sort', array('column' => 'table')) ?>
			</th>
			<th>
				<?= @helper('grid.sort', array('column' => 'row')) ?>
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
				<a class="modal" href="http://res.cloudinary.com/<?= $params['cloud_name'] ?>/image/upload/w_400/<?= $image->public_id ?>.jpg"><?= @escape($image->public_id); ?></a>
			</td>
			<td>
				<?= $image->table ?>
			</td>
			<td>
				<?= $image->row ?>
			</td>
		</tr>
		<? endforeach; ?>
	</tbody>
	</table>
</form>