<?php
    include "../config.php";
    require_once('../db/connection.php');
    global $base_image_uri;
    $connection = new Connection();
    $con = $connection->get_connection();

    $user_id = "";
    $first_name = "";
    $last_name = "";
    $phone_number = "";
    $email = "";
    $address = "";
    $images = "";

    //fetch data for edit form
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if (isset( $_GET['editId'])){ 
            $user_id = $_GET['editId'];

            $sql = "SELECT * FROM `contacts` WHERE `contacts`.`id` = $user_id";
            $intial_user_data = mysqli_query($con, $sql);
            
            if( $intial_user_data -> num_rows > 0){
                $row = mysqli_fetch_assoc($intial_user_data);
                if($row > 0){
                    //print_r($row);
                    $user_id = $row["id"];
                    $first_name = $row["first_name"];
                    $last_name = $row["last_name"];
                    $phone_number = $row["phone_number"];
                    $email = $row["email"];
                    $address = $row["address"];
                    $images = $row["images"];
                }
            
            }
        }
    }

    //send edit data form
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $user_id = $_POST["id"];
        $first_name = $_POST["firstName"];
        $last_name = $_POST["lastName"];
        $phone_number = $_POST["phoneNo"];
        $email = $_POST["email"];
        $address = $_POST["address"];

        $sql = ("UPDATE `contacts` SET `first_name` = '$first_name', `last_name` = '$last_name', `phone_number` = '$phone_number', `email` = '$email', `address` = '$address' 
                    WHERE `id` = $user_id;") or die($con->error);
        $edit_result = mysqli_query($con, $sql);
        if($edit_result){ 
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                Contact Editted
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
            }else{
              $error = mysqli_error($con);
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                $error
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
        }
    }
?>