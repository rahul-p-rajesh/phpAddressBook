<?php
    $loginFail = false;    
    require_once('../db/connection.php');
    $connection = new Connection();
    $con = $connection -> get_connection();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset( $_POST['login'])){

                $username = $_POST['user'];
                $password = $_POST['pass'];
                $sql = "select * from users where userName = '$username' and password = MD5('$password')";
                $result = mysqli_query($con, $sql);
                if ($result -> num_rows > 0) {

                    $row = $result -> fetch_assoc();
                    session_start();
                    $_SESSION["id"] = $row["id"];
                    header('Location: ../contactBook/contactBook.php');
                }else{
                    $loginFail = true;
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            login Failed
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                }

            }
            }

?>
