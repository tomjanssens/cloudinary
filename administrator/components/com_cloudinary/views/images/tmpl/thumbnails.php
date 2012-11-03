<? foreach ($images as $image) : ?>
	<img src="http://res.cloudinary.com/<?= $params['cloud_name'] ?>/image/upload/<?= $state->dimensions ?>/<?= $image->public_id ?>.jpg" />
<? endforeach; ?>