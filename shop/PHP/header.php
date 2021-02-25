
<?php
    session_start();
?>

<a href="/index.php"><img src="" alt="LOGO IMA TUKA wodi kam na4alnata stranica"></a>

<nav>
    <ul>
        <li class="header_nav"><a class="underline_remove" href="/PHP/shop_stock.php?category=computers&filter=no">Компютри</a></li>    
        <li class="header_nav"><a class="underline_remove" href="/PHP/shop_stock.php?category=monitors&filter=no">Монитори</a></li>
        <li class="header_nav"><a class="underline_remove" href="/PHP/shop_stock.php?category=accessories&filter=no">Аксесоари</a></li>
        <li class="header_nav"><a class="underline_remove" href="/PHP/shop_stock.php?category=periphery&filter=no">Периферия</a></li>
        <li class="header_nav"><a class="underline_remove" href="/PHP/shop_stock.php?category=parts&filter=no">Части</a></li>
        <li class="header_nav"><a class="underline_remove" href="/PHP/trade.php">Бартер</a></li>     
        <?php
        // if($_SESSION){
        //    echo '<li class="logo_nav"><a class="underline_remove" id="exit" href="/PHP/logOut.php">Изход</a></li>';
        // } else {
        //     echo '<li class="logo_nav"><a class="underline_remove" id="loginОrRegister" href="/PHP/logInOrRegister.php?wrong_user_pass=1&wrong_email=1">Вход/Регистрация</a></li>';
        // }
        ?>
    </ul>
</nav>
