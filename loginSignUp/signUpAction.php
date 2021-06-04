<?php
    require_once('../db/connection.php');
    $connection = new Connection();
    $con = $connection -> get_connection();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset( $_POST['signUp'])){
            echo "sign up called";

            $username = $_POST['user'];
            $password = $_POST['pass'];
            $confirm_password = $_POST['confirmPass'];

            if($password != $confirm_password){
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            confirm password is not equal to password
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";

            }else{
                $sql = " select * from users where userName = '$username'";
                $user_exit = mysqli_query($con, $sql);
                if ($user_exit-> num_rows > 0 ) {
                     echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            username occupied
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                }else{
                    $sql = "INSERT INTO `users`( `userName`, `password`) VALUES ('$username',MD5('$password'))";
                    $sign_up_res = mysqli_query($con, $sql);
                    if($sign_up_res){ 
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            new User sucessfully created
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                    }
                    else{
                        $error =  'error'. mysqli_error($con); 
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                $error
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                        
                    }
                }
            }
        }
    }
?>