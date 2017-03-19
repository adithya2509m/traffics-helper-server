<?php
require_once("dbcontroller.php");
$db_handle=new DBController();
$query="UPDATE at_2po_4pgr SET no_vehicles = $_POST["vehicle"] WHERE osm_name = $_POST["road"]"
$result = $db_handle->runQuery($query);
echo "success"
?>
