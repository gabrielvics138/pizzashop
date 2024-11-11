<?php 
include_once "functions.php";
if (!session_id()) {
	session_start(); 
	
	}

		 

	


?>



<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid text-white">
    <a class="navbar-brand" href="./">PizzaShop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="cart.php">cart</a>
        </li>
        <li class="nav-item">
         <?php
        	if (isset($_SESSION['logged']) && $_SESSION['logged']) {
				$user=loggedUser($_SESSION['logged']);
		 		echo'<a class="nav-link" href="./logout.php">logout</a>';
		 		echo' </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">'.$user['name'].'</a>';
			}else{
				echo'<a class="nav-link" href="./login.php">login</a>';
			}


        ?>
      
       
        </li>
      </ul>
    </div>
  </div>
</nav>