<?php session_start();

?>

<header>
  <div class="header wrapper">
    <div class="header__logo-holder">
      <a class="header__logo" href="#">
        <h1 class="header__title">kursbok.se</h1>
      </a>
    </div>
    <div class="header__search">
      <form class="header__search__form">
        <input type="text" placeholder="Sök bland omdömen på massor av kursböcker!" class="header__search-box">
        <div class="header__search-btn">
          <button type="submit"><i class="fa fa-search"></i></button>
        </div>
      </form>
    </div>
    <div class="header__user">
    <?php
      if(!isset($_SESSION['user'])):
    ?>
      <div class="header__login">
        <a href="#" id="login-btn">Logga in</a>
      </div>

    <?php
      else:
    ?>
      <div class="header__profile-btn">
        <button><i class="fa fa-user-circle"></i></button>
      </div>
    <?php endif;
    ?>
    </div>
  </div>
</header>
