<?php
require('connect.php');
session_start();
if (isset($_POST['submit'])) {

//1. Veta vilken användare som är inloggad.
$userID = $_SESSION['user'];
//2. Veta vilken boksida jag är inne på. (ISBN)
$bookISBN = $_SESSION['???'];
//3. Veta vilket betyg boken får.
$bookRating = //Läs in hur många stjärnor som är ifyllda.
//4. Veta vilken kommentar som skrivs in.
$review= mysqli_real_escape_string($connection, $_POST['review-title']);

$insertreview = "INSERT INTO review_table (book_ISBN, user_id, review_comment, rating_by_user) VALUES ('$bookISBN','$userID','$author','$review','$released_year')";
$reviewresult = $connection->query($insertreview);
$connection ->close();

header("Location: ../../pages/profile.php");
}

?>
