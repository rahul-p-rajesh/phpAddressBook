
<?php

include "../config.php";
global $base_image_uri;
include "./navBar.php";
include "editContactAction.php";
global $user_id, $first_name, $last_name, $phone_number, $email, $address, $images;

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
            <title>Add Contact</title>
        </head>
        <body>
            <h1 style='margin:10px; text-align: center;'>Edit, Contact!</h1>

            <div class='container' style='width:50%;margin-top:50px;'>
                <form class='row g-3' action='editContact.php' method='POST' enctype='multipart/form-data'>

                        <input type='hidden' class='form-control' id='idEdit' name='id' value='$user_id'>

                    <div class='col-12'>
                        <img src='../uploads/$images' 
                            style='width:100px; height:100px;border-radius: 50%;' alt='img'  >
                    </div>
                    <div class='col-md-6'>
                        <label for='firstName' class='form-label'>First Name</label>
                        <input type='text' class='form-control' id='firstName' name='firstName' value='$first_name' required />
                    </div>
                    <div class='col-md-6'>
                        <label for='lastName' class='form-label'>Last Name</label>
                        <input type='text' class='form-control' id='lastName' name='lastName' value='$last_name'/>
                    </div>
                    <div class='col-6'>
                        <label for='email' class='form-label'>Email</label>
                        <input type='email' class='form-control' id='email' name='email' required value='$email'/>
                    </div>
                    <div class='col-6'>
                        <label for='phoneNo' class='form-label'>Phone No</label>
                        <input type='text' class='form-control' id='phoneNo'  name='phoneNo' required  value='$phone_number'/>
                    </div>
                    <div class='col-12'>
                        <label for='address' class='form-label'>Address</label>
                        <input type='text' class='form-control' id='address' placeholder='Apartment, studio, or floor' name='address'
                        required value='$address'/>
                    </div>
    
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>
                        Close
                        </button>
                        <button type='submit' class='btn btn-primary' name='save-contact'>
                        Save changes
                        </button>
                        </button>
                    </div>
                </form>
            </div>
            <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4' crossorigin='anonymous'></script>

        </body>
        </html>";
?>