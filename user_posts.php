<?php
include_once "includes/functions.php";

$id = 0;
if (isset($_GET['id']) && !empty($_GET['id'])) {
	$id = $_GET['id']
}
$posts = get_posts($id);
echo '<>';
include_once "includes/header.php";
include_once "includes/tweet_form.php";
include_once "includes/posts.php";
include_once "includes/footer.php";
?>
		
