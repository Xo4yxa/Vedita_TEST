<?php 
include("./src/DB/Connection.php");
include("./src/DB/Buildingtable.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr  id="<?php echo $obj->buildTable($rows['ID']);?>">
              <td class="product-id item-style"><?php $obj->buildTable($rows['PRODUCT_ID']);;?></td>
              <td class="product-name item-style"><?php echo $rows['PRODUCT_NAME'];?></td>
              <td class="product-price item-style"><?php echo $rows['PRODUCT_PRICE'];?></td>
              <td class="product-article item-style"><?php echo $rows['PRODUCT_ARTICLE'];?></td>
              <td class="product-quantity item-style"><?php echo $rows['PRODUCT_QUANTITY'];?></td>
              <td class="date-create item-style"><?php echo $rows['DATE_CREATE'];?></td>
              <td><button class="btn-hiding btn-style" id="<?php echo $rows['ID'];?>">Скрыть</button></td>
            </tr>
    </table>
    
</body>
</html>