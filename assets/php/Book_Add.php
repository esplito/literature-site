<?php
require('connect.php');
if (isset($_POST['submit_new_book'])) {

$ISBN = mysqli_real_escape_string($connection, $_POST['add_ISBN']);
$title = mysqli_real_escape_string($connection, $_POST['add_title']);
$author = mysqli_real_escape_string($connection, $_POST['add_author']);
$edition = mysqli_real_escape_string($connection, $_POST['add_edition']);
$released_year = mysqli_real_escape_string($connection, $_POST['add_published_year']);
$imgsbook = basename($_FILES['fileimage']['name']);

$insertbook = mysqli_query($connection, "INSERT INTO book_table (book_ISBN, book_title, book_author, book_edition, book_releashed_year, book_picture) VALUES ('$ISBN','$title','$author','$edition','$released_year', '$imgsbook')");

$upload_img = "../../uploads/$imgsbook";
if($imgsbook != ""){
	move_uploaded_file($_FILES['fileimage']['tmp_name'], $upload_img);
}

header("Location: ../../pages/profile.php");
}
