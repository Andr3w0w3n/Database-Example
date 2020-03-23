<?php

include "db_connection.php";

function getSurveyData(){
	$sql = "select * from SurveyData";
	$conn = dbConn();
	$stmt = sqlsrv_query($conn, $sql);
	
	while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
		echo $row['iFormID']." "/*.$row['SurveyDate']." "*/.$row['SurveyorLogOn']."<br>";
	}
}

?>