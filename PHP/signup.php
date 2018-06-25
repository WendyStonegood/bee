

<?php
// Include config file
require_once 'config.php';

// Define variables and initialize with empty values
$name = $password = $confirm_password = "";
$name_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["name"]))){
        $name_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE name = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_name);

            // Set parameters
            $param_name = trim($_POST["name"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $name_err = "This username is already taken.";
                } else{
                    $name = trim($_POST["name"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST['password']);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Please confirm password.';
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }

    // Check input errors before inserting in database
    if(empty($name_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (name, password) VALUES (?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_name, $param_password);

            // Set parameters
            $param_name = $name;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="/CSS/bootstrap.min.css">
  <title>SIGN UP</title>
    </head>
       <style>
    h1, h2, h3, h4, p, body {
    font-family: "Proxima Nova", sans-serif;
}
         a:hover {
            color:#F19EE9!important;
        }

           .card {
            background-color: darkorange;
            border: 3px solid #000;

        }

        .card-image-top {
            background-color: darkorange;
        }

        .card-body {
            background-color: white;
            padding: 4px;
            text-align: center;

        }

        #card-deck {
            margin: 10px;
            background-color: lightgrey;
            padding-right: 30px;
            padding-left: 30px;
            padding-bottom: 30px;
        }

        #card-hr {
            border: 2px solid #000;
            margin:1px;
        }

        .card-header {
            background-color:darkorange;
            text-align: center;
            font-weight:600;
            font-size: 1.5em;
            letter-spacing: 0.025em;

        }

           .logo {
  max-width: 100%;
               height: auto;
               margin: 10px;
}

        .center-image {
            text-align: center;
        }

        h3{
           font-size: 2em;
            text-align: center;
        }

        h4 {
        font-size: 1em;
        font-weight: 400;
            text-align: center;
            letter-spacing: 0.025em;
        }


/* Style the header */
        .header-container {
            position: relative;
            color: white;
             max-width:100%;
            height: auto;
            margin-top: 10px;
            margin-bottom: 10px;


        }


        .header-title {
              color: white;
            position: absolute;
            top: 10%;
            left: 25%;
            right: 25%;
            bottom: 10%;
            transform: translate (-50%, -50%);
        }

        .header-image {


        }

.wrapper {
        display: grid;
    grid-gap: 10px;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    }
}

        .container-one {
            display: grid;
         grid-template-columns: auto;
        }

         .container-two {
            display: grid;
         grid-template-columns: auto;

        }

          .container-three {
            display: grid;
         grid-template-columns: auto;

        }

.box {
  background-color: #444;
  color: #fff;
  border-radius: 5px;
  padding: 20px;
  font-size: 150%;
}

        .box:nth-child(odd) {
  background-color: darkorange;
  color: white;
}

.body-background {
    background-color: lightgray;
    height: 100%;
}

@media all and (min-width: 960px) {
    body{
        font-size: 18px;
    }
}

@media all and (max-width: 959px) and (min-width: 600px) {
    body{
        font-size: 14px;
    }
}

@media all and (max-width: 599px) and (min-width: 320px) {
    body{
        font-size: 12px;
    }

}

        .wide {
  width:100%;
  height:100%;
  height:calc(100% - 1px);
  background-image:url('/images/kyle-ellefson-168742.jpg');
  background-size:cover;
}

        .wide img {
            width:100%;
        }


        .my-header {
            color: white;
            font-weight: 600;
            padding: 45px;
            text-align: center;
        }



        .search-text{
	margin-top:50px;
	background-color:#fff;
	padding-top:60px;
	padding-bottom:60px;
}

.search-text .input-search{
	height:45px;
	width:400px;
	padding-left:20px;
    color:#333;
}

.search-text .btn-search{
	background-color:lightgrey;
	border:1px solid #FFF;
	color:#333;
	padding: 8px 22px;
}

.search-text  .btn-search:hover{
	background-color:darkorange;
	color:#000;
}

.copyright{
    background-color:lightgrey;
}

.copyright p{
   margin:15px 0px;
    font-size: 12px;
}

footer{
	background-color:#222222;
	padding: 60px 0px;
}

footer .menu li a{
	color:#b1aca1;
	padding:10px;
	text-decoration:none;
}

footer .menu li a:hover{
	color:#7dabdb;
}

.fa.fa-facebook , .fa.fa-twitter, .fa.fa-linkedin ,.fa.fa-tumblr , .fa.fa-instagram {
	color:lightgrey;
	font-size:30px;

}

.fa.fa-facebook:hover, .fa.fa-twitter:hover, .fa.fa-linkedin:hover  ,.fa.fa-tumblr:hover  ,.fa.fa-instagram:hover  {
	color:darkorange;
}
       .item {
            text-align: center;
            padding: 0 5px;
            width: 150px;
            height: 30px;
        }

        a {
            color:lightgrey;
            text-transform:uppercase;
            letter-spacing: 0.025em;

        }
        a:hover {
            color:darkorange;
            text-decoration: none;
        }

        hr {
            border: 2px solid darkorange;
            margin: 10px;
        }

           #sign-up {
               background-color:lightgrey;
               padding:10px;
           }

           #sign-up-header {
               text-align:center;
               background-color: darkorange;
               padding-top:10px;
               padding-bottom: 5px;

           }
    </style>


<body>
<!--WHOLE SITE DIV --> <div>

           <!-- LOGO -->
        <div class="center-image">
            <img src="https://static1.squarespace.com/static/558c33b1e4b0aeae75bd92db/t/5a7ccbd7652deafb5a71d650/1518128095863/be-evergreen-logo.png?format=750w" href="#" width="300" height="500" class ="logo">
        </div>


         <!-- NAV BAR //////ADD LINKS LATER\\\\\\ -->
    <nav class="navbar navbar-light navbar-toggleable-sm justify-content-center" style="background-color:white; margin-bottom: 10px;">
  <div class="navbarnav">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="./index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="SearchTwo.php">Search</a></li>
        <li class="nav-item"><a class="nav-link" href=".ideas.php">Ideas</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="signup.php">Login</a></li>
      </ul>
    </div>
    </nav>


    <div class="container" id="sign-up">
        <div class="container" id="sign-up-header">
        <h2 style=" font-size: 2em; letter-spacing: 0.09em; font-weight:600;">SIGN UP</h2>
              </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="padding:10px;">
            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="name"class="form-control" value="<?php echo $name; ?>">
                <span class="help-block"><?php echo $name_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn" value="Submit" style="background-color: darkgreen; color:white;">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php" style="color:white;">Login here</a>.</p>
        </form>
    </div>

    <hr>

    <!--FOOTER-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="search-text">
       <div class="container">
         <div class="row text-center justify-content-center">

           <div class="form">
               <h4 style="color:darkorange; margin-bottom:10px;">SIGN UP FOR OUR NEWSLETTER</h4>
                <form id="search-form" class="form-search form-horizontal">
                    <input type="text" class="input-search" placeholder="Email Address">
                    <button type="submit" class="btn-search">SUBMIT</button>
                </form>
            </div>

          </div>
       </div>
	</div>
    <footer>
       <div class="container">
           <div class="container">

               <div class="row justify-content-center">
                    <div class="d-flex justify-content-center" style="padding:20px;">
        <div class="item"><a href="#"><i class="fa fa-facebook fa-2x"></i></a></div>
        <div class="item"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></div>
        <div class="item"><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></div>
        <div class="item"><a href="#"><i class="fa fa-tumblr fa-2x"></i></a></div>
        <div class="item"><a href="#"><i class="fa fa-instagram fa-2x"></i></a></div>
                   </div>
                </div>


           </div>

           <hr>

           <div class="container" style="padding-top:20px;">

          <div class="row justify-content-center">
               <div class="d-flex justify-content-center">
                           <div class="item"><a href="./PHP/home.php">Home</a></div>
                            <div class="item"><a href="./PHP/About.php">About</a></div>
                           <div class="item"><a href="./PHP/FAQ.php">FAQ</a></div>
                            <div class="item"><a href="./PHP/welcome.php">LOGOUT</a></div>
                           <div class="item"><a href="./PHP/contact_form.php">Contact</a></div>

            </div>
      </div>
      </div>
   </div>
   </footer>


   <div class="copyright">
   <div class="container">

    <div class="row justify-content-center">
     <p>Copyright © Be Evergreen 2018 All rights reserved</p>
    </div>

   </div>
   </div>


   <!--WHOLE SITE DIVE--></div>
   <script src="./JS/jquery.slim.min.js"></script>
   <script src="./JS/tether.min.js"></script>
   <script src="./JS/bootstrap.min.js"></script>
   <script src="./JS/scripts.js"></script>
   </body>
   </html>
