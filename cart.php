
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="./css/style.css" rel="stylesheet">
</head>
<body>
	<?php include_once "nav.php"; 
		include_once "functions.php";
			$total=cart();
		

	?>
	<header class="blog-header mb-3">
   
   <div class="banner"></div>
   <h1 class="banner-title">Cart</h1>
  </header>
<div class="container">


<?php
if (!isset($_SESSION['cart'])) {
	echo "<h2>no products</h2>";
}
else{
$cart=$_SESSION['cart'];

	foreach ($cart as $key => $value) {
 
		echo'<div class="row">';
			echo '<span class="thumbnail"><img width="100"src="./img/'.$value[0]['category'].'/'.$key.'.jpeg"></ span>';
			echo  '<h2> '.$value[0]['name'].'</h2>';
	 		echo '<div class="col-md-6"><p class="text-muted"> '.$value[0]['despcription'].'</p></div>'; 
	 		echo '<div class="col-md-3"><span> '.$value[0]['price'].'</span><span>€  </span>';
	 		echo '<a class="btn btn-success ms-2" href="?p='.$key.'"> + </a>';
	 		echo '<a  class="btn btn-danger ms-2" href="?remove='.$key.'"> - </a>';
	 		echo '<div class="col-md-3"><span> Quantity </span><span> '.$value['quantity'].'</span>';
	 		echo '</div>';
	 		echo'</div><hr>';
		
	}	
 echo '<h2>Total '.$total.'€</h2>';
}
	
?>

</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>