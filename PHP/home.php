<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="/CSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/CSS/BeEvergreenCSS.css">
  <title>Bootstrap</title>
    <style>



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





        .wide {
  width:100%;
  height:100%;
  height:calc(100% - 1px);
  background-image:url('images/kyle-ellefson-168742.jpg');
  background-size:cover;
}




        #heart-overlay {

  background:
    linear-gradient(
      to bottom,
      rgba(255, 102, 0, 0.3),
      rgba(255, 102, 255, 0.6)
    ),
    url(images/heart-photo.jpg);
   width:100%;
               height:100%;
                 height:calc(100% - 1px);
             background-size:cover;

        }

        .wide img {
            width:100%;
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


         a:hover {
            color:#F19EE9!important;
        }

        .heart-hands {
           height:600px;
        }

    </style>
    </head>
    <body class="body-background">


<div> <!--WHOLE SITE DIV-->


         <!-- LOGO -->
        <div class="center-image">
            <img src="https://static1.squarespace.com/static/558c33b1e4b0aeae75bd92db/t/5a7ccbd7652deafb5a71d650/1518128095863/be-evergreen-logo.png?format=750w" href="#" width="300" height="500" class ="logo">
        </div>

        <hr>
         <!-- NAV BAR //////ADD LINKS LATER\\\\\\ -->
    <nav class="navbar navbar-light navbar-toggleable-sm justify-content-center" style="background-color:white; margin-bottom: 10px;">
  <div class="navbarnav">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="./PHP/About.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="./PHP/SearchTwo.php">Search</a></li>
        <li class="nav-item"><a class="nav-link" href="./PHP/ideas.php">Ideas</a></li>
        <li class="nav-item"><a class="nav-link" href="./PHP/contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="./PHP/signup.php">Login</a></li>
      </ul>
    </div>
    </nav>

<hr>
         <!-- RESPONSIVE HEADER WITH TEXT OVERLAY -->


 <div class="wide">
  	<div class="col-xs-4 my-header">


        <h3>SHARE YOUR CAUSE<br>+<br>FIND WAYS TO HELP</h3>
        <br>
        <h4>Be Evergreen's mission is to be a hub<br>
        for people to connect and help each other.<br>
        <br>
        We want organizations to share their cause and for <br>
        volunteers to easily be able to join in and help them.</h4>

        </div>
     </div>








   <!-- /////////   ADD BREAK POINTS FOR CARD DECK AND FOR FOOTER!!! \\\\\\\\\ -->









    <!--INFO CARDS-->
              <div class="row" id="card-deck">

<div class="card-deck">

        <div class="card">
            <div class="card-header border-0">
            VOLUNTEER
            </div>
        <img class="card-img-top align-self-center" src="images/volunteer-icon.png" alt="Card image cap" style="padding-top: 0px; padding-bottom: 20px; height: 150px;">
            <div class="card-body">
                <p class="card-text">
                The Force is strong with this one. I have you now. As you wish. The plans you refer to will
                    soon be back in our hands. No! Alderaan is peaceful. We have no weapons. You can't
                    possibly... Don't act so surprised, Your Highness.
                </p>
            </div>
        </div>



        <div class="card">
            <div class="card-header border-0">
            SHARE
            </div>
        <img class="card-img-top align-self-center" src="images/share-icon.png" alt="Card image cap" style="padding-top: 0px; padding-bottom: 20px; height: 150px;">
            <div class="card-body">
                <p class="card-text">
                *Insistently* Bow ties are cool! Come on Amy, I'm a normal bloke, tell me what normal blokes
                    do! I'm the Doctor. Well, they call me the Doctor. I don't know why. I call me the Doctor
                    too. We're all stories in the end. Just make
                    it a good one.
                </p>
            </div>
        </div>



      <div class="card">
            <div class="card-header border-0">
            GET INSPIRED
            </div>
        <img class="card-img-top align-self-center" src="images/discover-icon.png" alt="Card image cap" style="padding-top: 0px; padding-bottom: 20px; height: 150px;">
            <div class="card-body">
                <p class="card-text">
                And wow! Hey! What's this thing suddenly coming towards me very fast? Very, very fast. So big
                    and flat and round, it needs a big wide sounding name like...ow...ound...round...
                    ground! That's it! That's a good name-ground!
                </p>
            </div>
        </div>


    </div>

    </div>


    <!--VOLUNTEER IMAGE-->

   <div class="heart-photo" id="heart-overlay">
       <div class="col-xs-4 heart-hands"></div>
    </div>





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
