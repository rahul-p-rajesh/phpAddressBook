<?php
    include "../config.php";
    global $base_image_uri;
    $contact_deleted = false;

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if (isset( $_GET['deleteId'])){ 

            
            require_once('../db/connection.php');
            $connection = new Connection();
            $con = $connection->get_connection();
            $deleted_id =  $_GET['deleteId'];
            $sql = "DELETE FROM `contacts` WHERE `contacts`.`id` = $deleted_id";
            global $con;
            $profile_name =  $_GET['imgName'];
            $delete_result = mysqli_query($con, $sql);
            if($delete_result){ 
                echo "contact deleted";
                unlink("../uploads/$profile_name");
                $path = base_image_uri.'/contactBook.php';
                $path = './contactBook.php';
                //echo $path;
                $url = $base_image_uri.'contactBook.php';
                //http://localhost/AddressBookN/contactBook/contactBook.php
                header("Location: $url");
                $contact_deleted = true;
            }
            else{
            echo "error". mysqli_error($con);
            }
        }
        
    }

?>