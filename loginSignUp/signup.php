<?php
  include './signUpAction.php';
  include './loginSignUpNav.php';
    echo "<!DOCTYPE html>
      <html lang='en'>

      <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'
          integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
        <link rel='stylesheet' href='./index.css'>
        <title>Welcome To The Form</title>
      </head>

      <body>
      <!--Content-->
          <h3 style='margin-top:20px'>Sign Up</h3>
          <div class='container border bg-light' style='width: 50%; margin-top:30px '>
            <div class='row justify-content-md-center'>
              
              <div class='col d-flex justify-content-center'>
                <form  action = 'signup.php' onsubmit = 'return validation()' method = 'POST'>
                  <div class='form-group'>
                    <label for='user'> New User Name</label>
                    <input type='text' class='form-control' name='user' aria-describedby='userName'>
                  </div>
                  <div class='form-group '>
                    <label for='pass'>New Password</label>
                    <input type='password' class='form-control' name='pass'>
                  </div>
                  <div class='form-group '>
                    <label for='pass'>Confirm Password</label>
                    <input type='password' class='form-control ' name='confirmPass'>
                  </div>
                  <button type='submit' class='btn btn-primary' name='signUp'>Create Account</button>
                </form>
              </div>
          </div>
        </div>
        </div>
      </div>
      <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js' integrity='sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p' crossorigin='anonymous'></script>
      <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js' integrity='sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT' crossorigin='anonymous'></script>
      </script>
      </body>
      </html>";
?>
