<?php
include_once 'config/Database.php';
include_once 'class/Post.php';
$database = new Database();
$db = $database->getConnection();
$post = new Post($db);
if(!empty($_POST['message']) && $_POST['message'] && $_POST['action'] == 'save') {	
	$post->message = $_POST['message'];
	$post->user_id = 2;
	$post->topic_id = 2;
	$post->insert();	
}
if(!empty($_POST['message']) && $_POST['message'] && $_POST['action'] == 'update') {	
	$post->message = $_POST['message'];
	$post->post_id = $_POST['post_id'];	
	$post->update();	
}
?>