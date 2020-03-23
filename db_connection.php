<?php

function dbConn(){

    $serverName = "[serverName]";
    $connectionInfo = array( "Database"=>"[DatabaseName]", "UID"=>"[UserName]", "PWD"=>"[Password]" );
    
    //create connection to database (need it to be in mysql?)
    $dbConnection = sqlsrv_connect( $serverName, $connectionInfo);

    //help from https://www.php.net/manual/en/function.sqlsrv-connect.php
    if( $dbConnection ) {
        return $dbConnection;
    }else{
        echo "Connection could not be established.<br />";
        die( print_r( sqlsrv_errors(), true));
    }

    //more sources here: 
    //https://stackoverflow.com/questions/22526832/cant-connect-to-microsoft-sql-server-management-studio-through-php
    //https://webrewrite.com/accessconnect-mysql-database-using-php/
}
?>