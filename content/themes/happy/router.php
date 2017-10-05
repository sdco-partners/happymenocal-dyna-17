<?php 

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require('../../../wordpress/wp-blog-header.php');

$response = "default";

if(isset($_POST['queryType'])) {
	$query = strtolower($_POST['queryType']);
	$query_post_id;

  
  if($query === 'ajx-about') {
  	$query_post_id = 12;
  }


  try {
  	$post_query = array(
  		'post_type' => 'any',
  		'p' => $query_post_id
  	);
	  $post = new wp_query($post_query);

	  if($post->have_posts()) :
	  	


	  $response = ["post" => $post];
  	 
  } catch (Exception $e) {
  	$response = [$e];
  }

  // $response = ['page-content', $content];

}

echo json_encode($response);


?>