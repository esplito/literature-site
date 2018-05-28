<?php

    //Kommer hit om man klickar på "Visa Alla" under startsidan.

    if(isset($_POST['show__all-btn'])){
    $showbooks = "SELECT book_title, book_releashed_year, book_picture FROM book_table";
    $allbooks = $connection->query($showbooks);
    while($rows = $allbooks->fetch_assoc()){
    $titlerow = $rows['book_title'];
    $releaserow = $rows['book_releashed_year'];
    $picturerow = $rows['book_picture'];

    /*<a href='#'>
      <img src='../assets/images/systems-analysis.jpg' class='img__book--small'>
    </a>*/

    echo "<div class='section__book'>
      <div class='img__book'>

      </div>
      <div class='section__bookinfo'>
        <h1 class='label--smaller'>$titlerow</h1>
        <p class='label--tiny'>$releaserow</p>
        <div class='rating__small'>
          <span class='stars__star fa fa-star stars__star--checked'></span>
          <span class='stars__star fa fa-star stars__star--checked'></span>
          <span class='stars__star fa fa-star stars__star--checked'></span>
          <span class='stars__star fa fa-star stars__star--checked'></span>
          <span class='stars__star fa fa-star'></span>
        </div>
      </div>
    </div>";
  }
}
