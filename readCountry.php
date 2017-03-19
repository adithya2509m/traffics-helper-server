<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(isset($_POST["keyword"])) {
$query ="SELECT * FROM at_2po_4pgr WHERE osm_name like '" . $_POST["keyword"] . "%' ORDER BY osm_name LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $country) {
?>
<li onClick="selectCountry('<?php echo $country["osm_name"]; ?>');"><?php echo $country["osm_name"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>
