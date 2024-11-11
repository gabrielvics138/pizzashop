<?php 
//echo"content<pre>";print_r($_GET);echo "</pre>";
$menu="";
if(isset($_GET['menu'])) $menu= $_GET['menu'];
include_once "data/products.php";
switch ($menu) {
	case 'pizza':
		// code..
	echo"mymenu pizza"; 
	foreach ($products as $key => $value) { 
		if ($value['category']==="pizza") { 
			echo  "<h2> ".$value['name']."</h2>";
			echo '<img width="100"src="img/'.$value['category'].'/'.$key.'.jpeg">';
	 		echo "<p> ".$value['despcription']."</p>"; 
	 		echo "<div><span> ".$value['price']."</span><span>€</span></div>"; 
		} 
	}
	break; case 'drinks':
		// code..
	echo"mymenu drinks";
	foreach ($products as $key => $value) { 
		if ($value['category']==="drinks") { 
			echo  "<h2> ".$value['name']."</h2>";
			echo '<img width="100"src="img/'.$value['category'].'/'.$key.'.jpeg">';
	 		echo "<p> ".$value['despcription']."</p>"; 
	 		echo "<div><span> ".$value['price']."</span><span>€</span></div><hr>"; 
		} 
	}



	
		break;
	
	default:
		foreach ($products as $key => $value) { 
		echo'<div class="row">';
			echo '<span class="thumbnail"><img width="100"src="img/'.$value['category'].'/'.$key.'.jpeg"></ span>';
			echo  '<h2> '.$value['name'].'</h2>';
	 		echo '<div class="col-md-6"><p class="text-muted"> '.$value['despcription'].'</p></div>'; 
	 		echo '<div class="col-md-3"><span> '.$value['price'].'</span><span>€  </span>';
	 		echo '<a class="btn btn-primary" href="cart.php/?menu=all&p='.$key.'"> add to cart</a>';
	 		echo '</div>';
	 		echo'</div><hr>';
		
		}	
		break;
}
?>