<?php
require('connect.php');
session_start();

//Isset så att ingen kan söka till sidan via URL
if(isset($_POST['submit'])){

//1. Spara kommentaren
$message = mysqli_real_escape_string($connection, $_POST['message']);
//2. Spara vilken användare som är inloggad
$user_ID = $_SESSION['userID'];
//3. Spara vilken bok det är användaren kommenterar på.
$book_ISBN = $_POST['m-b-isbn'];

$addComment = "INSERT INTO comment_table (comment_comment, user_id, book_ISBN) VALUES ('$message','$user_ID', '$book_ISBN')";
$newComment = $connection->query($addComment);
$connection->close();

header('Location: ' . $_SERVER['HTTP_REFERER']);
//Se till att kommentarsrutan öppnas automatiskt efter att användaren kommenterat. Eller ajax?
}
else{
  header('Location: ../../index.php');
}
 ?>
