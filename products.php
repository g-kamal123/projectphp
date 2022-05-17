<?php 
session_start();
$count =0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php include 'header.php';?>
<?php include 'config.php';?>
	<div id="main">
		<div id="products">
			<?php foreach($products as $val){?>
			<div id = <?php echo $val['name'] ?> class ="product">
			<img src = <?php echo $val['img'] ?> >
			<h3 class="title"><a href="#"><?php echo $val['name']?></a></h3>
			<span><?php echo "Price:"." ".$val['price']?></span>
			<a class="add-to-cart" href="?action=cartadditon&nam=<?php echo $val['name']?>&prc=<?php echo $val['price']?>&image=<?php echo $val['img']?>">Add To Cart</a>
			</div>
			<?php } ?>
		</div>
	</div>
	<?php
	if(isset($_GET['action'])){
	$arr =array(
		'nam' => $_GET['nam'],
		"prc" =>$_GET['prc'],
		"image" => $_GET['image']
	);
	$_SESSION[$_GET['nam']] = $arr;
}
	 ?>
	<div>
		<table>
			<thead>
				<th>Name</th>
				<th>price</th>
				<th>image</th>
				<th>Quantity</th>
			</thead>
			<tbody>	
			<?php foreach($_SESSION as $val) {?>
			<tr>
				<td><?php echo $val['nam'];?></td>
				<td><?php echo $val['prc'];?></td>
				<td><img id="img" src=<?php echo $val['image'];?> alt="" height="30px" width="40px"></td>
				<td><?php echo ++$count; ?></td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
		<a name="cart"  class="add-to-cart" href="?delete=cartdeletion">Empty your Cart</a>
	</div>
	<?php 
		if(isset($_GET['delete'])){
			session_unset();
			session_destroy();
		}	
	?>
	<?php include 'footer.php';?>
</body>
</html>