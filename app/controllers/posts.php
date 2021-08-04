<?php
include(ROOT_PATH."/app/database/db.php");
include(ROOT_PATH."/app/helpers/validatePost.php");

$topics=selectAll('topics');
$posts=selectAll('posts');
$table='posts';
$errors=array();
if (isset($_POST['add-post'])) 
{
    unset($_POST['add-post'],$_POST['topic_id']);
    $_POST['user_id']=1;
    $_POST['published']=1;
    $post_id=create($table,$_POST);
    header('location: '. BASE_URL . '/admin/posts/index.php');
}
