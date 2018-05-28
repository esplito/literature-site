<?php
require('connect.php');
session_start();
if (isset($_POST['submit'])) {

//1. Veta vilken användare som är inloggad.
$userID = $_SESSION['userID'];

//2. Veta vilken boksida jag är inne på. (ISBN)
$bookISBN = $_POST['b-isbn'];

//3. Veta vilket betyg boken får.
$bookRating = $_POST['review-rating'];

//4. Veta vilken kommentar som skrivs in.
$review = mysqli_real_escape_string($connection, $_POST['review-comment']);

$insertreview = "INSERT INTO review_table (book_ISBN, user_id, review_comment, rating_by_user) VALUES ('$bookISBN','$userID','$review', $bookRating)";
$reviewresult = $connection->query($insertreview);
$connection ->close();

header('Location: ' . $_SERVER['HTTP_REFERER']);
}

?>
