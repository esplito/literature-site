<?php
require('connect.php');
if (isset($_POST['submit_new_book'])) {

$ISBN = mysqli_real_escape_string($connection, $_POST['add_ISBN']);
$title = mysqli_real_escape_string($connection, $_POST['add_title']);
$author = mysqli_real_escape_string($connection, $_POST['add_author']);
$edition = mysqli_real_escape_string($connection, $_POST['add_edition']);
$released_year = mysqli_real_escape_string($connection, $_POST['add_published_year']);
//$book_picture =  $connection->real_escape_string($_POST['add_book_picture']);

$insert = mysqli_query($connection, "INSERT INTO book_table (book_ISBN, book_title, book_author, book_edition, book_releashed_year) VALUES ('$ISBN','$title','$author','$edition','$released_year')");

header("Location: ../../pages/profile.php");
}

?>
