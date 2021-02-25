<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Shop</title>
</head>
<body>
    <header>
        <?php
            include_once "PHP/header.php";
        ?>
    </header>

    <a href="/PHP/shop_stock.php?category=computers&filter=no">
        <div  >tuka e div za koputri</div>
    </a>
    <a href="/PHP/shop_stock.php?category=monitors&filter=no">
        <div>tuka e div za monitori</div>
    </a>
    <a href="PHP/accessories.php">
        <div>tuka e div za aksesoari</div>
    </a>
    <a href="PHP/periphery.php">
        <div>tuka e div za periferiq</div>
    </a>
    <a href="PHP/parts.php">
        <div>tuka e div za 4асти</div>
    </a>
    <a href="PHP/trade.php">
        <div>tuka e div za бартер</div>
    </a>

    <footer>
        <?php
            include_once "PHP/footer.php";
        ?>
    </footer>
</body>
</html>