<?php
function redirect($url) {
    header('Location: '.$url);
    die();


}


function loggedUser($i){ global $users;
    require_once "data/users.php";
    if (!isset($users[$i])) return false; 
        // code...
      return $users[$i];
}


function cart(){
    
    

    if (isset($_GET['p'])) {
        include_once "data/products.php";
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart']= array($_GET['p']=>array($products[$_GET['p']] ,'quantity'=>1 ));
        }else{
                if (isset($_SESSION['cart'][$_GET['p']])){
                    ++$_SESSION['cart'][$_GET['p']]['quantity'];
                }else{
                    $_SESSION['cart'][$_GET['p']]=array($products[$_GET['p']] ,'quantity'=>1 );
                }
            

        }
        
        
    }

    if (isset($_GET['remove']) && isset($_SESSION['cart'])) {
        if ($_SESSION['cart'][$_GET['remove']]['quantity']===1) {
            unset($_SESSION['cart'][$_GET['remove']]);
            unset($_SESSION['cart']['remove']);
        }else{

            --$_SESSION['cart'][$_GET['remove']]['quantity'];
        }
        
        
    }
    
        $total=0;
    if(isset($_SESSION['cart']) && empty($_SESSION['cart'])) unset($_SESSION['cart']);
    if(isset($_SESSION['cart'])){
    
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['quantity']>1) {
            $total=($value[0]['price']*$value['quantity'])+$total;
        }
    }
    }
    

    if (isset($_GET['menu'])) {
       header("Location:../");
exit();
    }
  return $total; 
}
?>