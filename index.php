<?php 
include("./src/DB/Connection.php");
include("./src/DB/Buildingtable.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link type="text/css" rel="stylesheet" href="/assets/style/main.css" media="all" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="/assets/script/app.js"></script>
	<title>Document</title>
</head>

<body>
	<div class="layout">
		<div class="product-table">
			<div class="table">
				<table>
					<tr>
						<th class="product-id item-style">Id</th>
						<th class="product-name item-style">Name</th>
						<th class="product-price item-style">Price</th>
						<th class="product-article item-style">Article</th>
						<th class="product-quantity item-style">Quantity</th>
						<th class="date-create item-style">Date</th>
					</tr>
					<?php 
              while($rows=$result->fetch_assoc())
            {
            ?>
					<tr id="<?php echo $rows['ID'];?>">
						<td class="product-id item-style"><?php echo $rows['PRODUCT_ID'];?></td>
						<td class="product-name item-style"><?php echo $rows['PRODUCT_NAME'];?></td>
						<td class="product-price item-style"><?php echo $rows['PRODUCT_PRICE'];?></td>
						<td class="product-article item-style"><?php echo $rows['PRODUCT_ARTICLE'];?></td>
						<td class="product-quantity item-style"><?php echo $rows['PRODUCT_QUANTITY'];?></td>
						<td class="date-create item-style"><?php echo $rows['DATE_CREATE'];?></td>
						<td><button class="btn-hiding btn-style" id="<?php echo $rows['ID'];?>">Скрыть</button></td>
					</tr>
					<?php } ?>
				</table>
			</div>
			<div class="create-product">
				<button class="btn-add btn-style" id="btnAdd">
					Добавить продукт
				</button>
				<!-- <button class="btn-remove btn-style" id="btnRemove">
            Удалить продукт
          </button> -->
			</div>
		</div>
	</div>
</body>

</html>