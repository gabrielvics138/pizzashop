<?php echo"logout";
include_once "functions.php";
//if (session_id()) {
	session_start();
	session_destroy();
//}
redirect("./");
 exit();
?>