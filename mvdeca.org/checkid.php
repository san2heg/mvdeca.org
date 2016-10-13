<?php
$connect = mysql_connect('98.130.0.80','mvdeca_sannie','imSannie27');
$database = mysql_select_db('mvdeca_wtvr');
// Make a MySQL Connection
$query = "SELECT * FROM sank"; 

$result = mysql_query($query) or die(mysql_error());


while($row = mysql_fetch_array($result)){
	if ($row['studentid']==)
    echo $row['name']. " - ". $row['age'];
    echo "<br />";
}
?>