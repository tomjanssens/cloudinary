<?
	require "cloudinary.php";
	require "uploader.php";
	
	Cloudinary::config(array("cloud_name"=>"timble", "api_key" => '426719939497139', "api_secret" => 'xyZ1xph3GD9w9ue6bLt2xuNOFq4'));
	
	//$result = Cloudinary\Uploader::upload("tests/image.png", array("tags"=> "kinepolis"));
	
	$result = Cloudinary\Uploader::destroy("tncjvqoqbihpknwt44mp");
	
	var_dump($result); die;
?>