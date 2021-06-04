<?php
    //nav bar
    include "./navBar.php";
    include "./deleteAction.php";
    global $contact_deleted;

    if($contact_deleted){
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    Contact Deleted
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
    }

    session_start();
    $created_by = $_SESSION["id"];
    echo "<!doctype html>
        <html lang='en'>
        <head>
            <!-- Required meta tags -->
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>

            <!-- Bootstrap CSS -->
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
            
            <!--Font Awesome-->
            <link
            rel='stylesheet'
            href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'
            integrity='sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=='
            crossorigin='anonymous'
            referrerpolicy='no-referrer'
            />
            
            <title>Contact Book</title>
        </head>
        <body>
            <h1 style='margin:20px 7%; '>Address, Book!</h1>";
?>

<?php
    include './listContact.php'
?>

<?php 
    echo "<!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4' crossorigin='anonymous'></script>

        </body>
        </html>"

?>