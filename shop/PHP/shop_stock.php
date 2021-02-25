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
            include_once "header.php";
        ?>
    </header>

    <?php
        include_once "sql_connection.php"; 
        $filter = $_GET["filter"];
        $category = $_GET["category"];

        echo '<nav>';
        switch ($category){
            case "computers":
                echo '<ul>
                        <li class="header_nav"><a class="underline_remove" href="?category=computers&filter=pc">Компютри</a></li>    
                        <li class="header_nav"><a class="underline_remove" href="?category=computers&filter=lap">laptopi</a></li>    
                     </ul>';
                break;
            case "monitors":
                echo '<ul>
                        <li class="header_nav"><a class="underline_remove" href="?category=monitors&filter=full_HD">Full_HD</a></li>  
                        <li class="header_nav"><a class="underline_remove" href="?category=monitors&filter=4k">4k</a></li>  
                     </ul>';
                break;
            }
        echo '</nav>';
        
        //SQL query for shop
        if($filter === "no"){

            $sql_computers = "SELECT `name_product`, `quantity`, `price`, `tag`, `category`, `picture` FROM `shop_stock` WHERE `category` = '$category' ";

        } else {
            $sql_computers = "SELECT `name_product`, `quantity`, `price`, `tag`, `category`, `picture` FROM `shop_stock` WHERE `category` = '$category' AND `tag` = '$filter' ";
        }
        
        if(!mysqli_stmt_prepare($stmt, $sql_computers)){
            echo "Problem with loadig computers";
        } else {
            mysqli_stmt_execute($stmt);
            $result_computers = mysqli_stmt_get_result($stmt);

            echo '<table>';

            while($row_computers = mysqli_fetch_assoc($result_computers)){
                $nameOnComputer = $row_computers["name_product"];
                $price = $row_computers["price"];
                $quantity = $row_computers["quantity"];
                $tag = $row_computers["tag"];
                $picture = $row_computers["picture"];

                echo '<tr>
                        <td>' .$nameOnComputer . '</td>
                        <td>' .$price . ' lv</td>
                    </tr>';
            }
        }
        echo '</table>';
    ?>
</body>
</html>