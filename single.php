<?php
	include "header.php";
?>
<?php
$id=$_REQUEST["id"];
switch($id){
	case 1:
		include "casio.php";
	break;
	case 2:
		include "onix.php";
	break;
}
?>
 