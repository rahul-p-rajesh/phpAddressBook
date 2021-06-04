<?php
    require_once('../db/connection.php');
    Global $_SESSION;
    $created_by = $_SESSION["id"];
    $connection = new Connection();
    $con = $connection->get_connection();

    $fetch_sql = "SELECT * FROM `contacts` WHERE created_by = $created_by";
    $fetch_result = "";
    function fetchData()
    {
        global $con,  $fetch_sql, $fetch_result;
        $fetch_result = mysqli_query($con,  $fetch_sql);
    }
    fetchData();
    
    
?>
