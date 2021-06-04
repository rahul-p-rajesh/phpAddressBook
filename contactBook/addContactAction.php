<?php
    session_start();
    $created_by = $_SESSION["id"];
    //echo $created_by;
    require_once('../db/connection.php');
    $connection = new Connection();
    $con = $connection->get_connection();
    //echo "add contact action";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if (isset( $_POST['save-contact'])){ 
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['emailInput'];
            $phoneNo = $_POST['phoneNo'];
            $address = $_POST['address'];
            $profile_image = $_FILES["image"]['name'];
            //echo $profile_image;
            
            if(file_exists("../uploads/" . $_FILES["image"]['name'])){  
                echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                image already taken
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
            }else{
                $sql = ("INSERT INTO `contacts` ( first_name, last_name, phone_number, email, address, created_by,images)
                    VALUES ('$firstName', '$lastName', '$phoneNo', '$email', '$address', '$created_by', '$profile_image')") or die($con->error);

                $save_contact_qry = mysqli_query($con, $sql);
              // echo $add_result;

                if($save_contact_qry){ 
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/".$_FILES["image"]["name"])) {
                        
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                New Contact added
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                } else {
                    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                image not uploaded
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                }
                }
                else{
                    $error = mysqli_error($con);
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                $error
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                } 

            }
        }
    }
?>