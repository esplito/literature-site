<?php

    //Kommer hit om man klickar på "Visa Alla" under startsidan.

    if(isset($_POST['show__all-btn']) || isset($_POST['filter-btn'])){

    //Hämtar från databas
    $sql = "SELECT ROUND(AVG(rating_by_user), 0) AS average, highest.book_ISBN,book_title,book_picture, book_releashed_year, review_table.rating_by_user FROM book_table AS highest LEFT JOIN review_table ON review_table.book_ISBN = highest.book_ISBN GROUP BY highest.book_ISBN ORDER BY book_title ASC";

    $result = mysqli_query($connection, $sql);

    while($rows = $result ->fetch_assoc()){
    $titlerow = $rows['book_title'];
    $releaserow = $rows['book_releashed_year'];
    $picturerow = $rows['book_picture'];
    $bookISBN = $rows['book_ISBN'];
    $avg = $rows['average'];


    echo '<div class="section__book">';
    echo '<div class="img__book">';
    echo '<a href="../pages/book.php?b=' . $bookISBN . '">';
    echo '<img src="../uploads/' . $picturerow . '" class="img__book--small">';
    echo '</a>';
    echo '</div>';
    echo '<div class="section__bookinfo">';
    echo '<a href="../pages/book.php?b=' . $bookISBN . '">';
    echo '<h1 class="label--smaller">' . $titlerow . '</h1>';
    echo '</a>';
    echo '<p class="label--tiny">' . $releaserow . '</p>';
    echo '<div class="rating__small">';

    //Kikar vilket betyg boken har, och echoar ut respektive.
    if($avg==5) {
      echo '<span class="stars__star fa fa-star stars__star--checked"></span>
      <span class="stars__star fa fa-star stars__star--checked"></span>
      <span class="stars__star fa fa-star stars__star--checked"></span>
      <span class="stars__star fa fa-star stars__star--checked"></span>
      <span class="stars__star fa fa-star stars__star--checked"></span>';
  }
    elseif($avg==4) {
      echo '<span class="stars__star fa fa-star stars__star--checked"></span>
      <span class="stars__star fa fa-star stars__star--checked"></span>
      <span class="stars__star fa fa-star stars__star--checked"></span>
      <span class="stars__star fa fa-star stars__star--checked"></span>
      <span class="stars__star fa fa-star"></span>';
  }
    elseif($avg==3) {
      echo '<span class="stars__star fa fa-star stars__star--checked"></span>
      <span class="stars__star fa fa-star stars__star--checked"></span>
      <span class="stars__star fa fa-star stars__star--checked"></span>
      <span class="stars__star fa fa-star"></span>
      <span class="stars__star fa fa-star"></span>';
  }
    elseif($avg==2){
      echo '<span class="stars__star fa fa-star stars__star--checked"></span>
      <span class="stars__star fa fa-star stars__star--checked"></span>
      <span class="stars__star fa fa-star"></span>
      <span class="stars__star fa fa-star"></span>
      <span class="stars__star fa fa-star"></span>';
  }
    elseif($avg==1){
      echo '<span class="stars__star fa fa-star stars__star--checked"></span>
      <span class="stars__star fa fa-star"></span>
      <span class="stars__star fa fa-star"></span>
      <span class="stars__star fa fa-star"></span>
      <span class="stars__star fa fa-star"></span>';
  }
    elseif($avg==0){
      echo '<span class="stars__star fa fa-star"></span>
      <span class="stars__star fa fa-star"></span>
      <span class="stars__star fa fa-star"></span>
      <span class="stars__star fa fa-star></span>
      <span class="stars__star fa fa-star"></span>';
  }
    echo '</div>';
    echo '</div>';
    echo '</div>';
    }
  }
  ?>
