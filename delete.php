<?php
include_once ('connexion.php');
$sql="DELETE from contact where idc=?";
$re=$db->prepare($sql);
$re->execute(array($_GET['id']));
header("location:dashboard.php");
?>