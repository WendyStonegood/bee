<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="/CSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/CSS/BeEvergreenCSS.css">
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



    <title>Be Evergreen Template</title>
    <style>
        .form-control {
            margin:10px;
        }


              .form-gradient {
            box-shadow: 10px 10px 5px grey;
        }

.form-gradient .header {
  background-image: linear-gradient(#FE5C00, #F19EE9); }

a.send-btn {
  background-color: #AAEF41;
  background-image: linear-gradient(45deg, #AAEF41 0%, #AAEF41 55%, #78B817 90%);
  background-position: 100% 0;
  background-size: 200% 200%;
  color: white;
  border-radius: 50px;
  padding: 12px 48px;
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  font-weight: 200;
  text-decoration: none;
  box-shadow: 0 8px 22px 0 rgba(0, 40, 120, .35);
  transition: all 0.5s ease;
}

a:hover.send-btn {
  box-shadow: 0 0px 0px 0 rgba(0, 40, 120, 0);
  background-position: 0 0;
    color: #78B817;
}

         a:hover {
            color:#F19EE9!important;
        }
    </style>
    </head>


    <body class="body-background">
 <!--WHOLE SITE DIV--><div>


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


<!--CONTACT FORM-->

<div class="container">




        <!--Section: Contact v.2-->
        <section class="section">

            <!--Section heading-->
            <h2 style="text-align:center; padding:10px;">CONTACT US</h2>


            <div class="row">

                <!--Grid column-->
                <div class="col-sm-12 justify-content-center">
                    <form id ="contact-form" name="contact-form" action="mail.php" method="POST"  onsubmit="return validateForm()">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <div class="md-form">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <div class="md-form">
                                        <input type="text" id="email" name="email" class="form-control" placeholder="Your Email">
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                           <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                             <div class="form-group">
                    <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Enter Message"></textarea>
                           </div>
                                </div>
                        </div>
                        <!--Grid row-->




                    </form>

            <br>

                  <!--SEND BUTTON-->
            <div class="col-sm-12 justify-content-center">
                    <div class="text-center">
                        <a href="#" class="send-btn" onclick="validateForm()">SEND</a> <br> <div class="status" id="status"></div>
                    </div>
                </div>
                <!--Grid column-->



            </div>
            </div>

        </section>
        <!--Section: Contact v.2-->

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






</div>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="./JS/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="./JS/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    <script src="./JS/tether.min.js"></script>
    <!--Custom scripts-->
    <script>

function validateForm() {
    // var x =  document.getElementById('name').value;
    // if (x == "") {
    //     document.getElementById('status').innerHTML = "Name cannot be empty";
    //     return false;
    // }
    // x =  document.getElementById('email').value;
    // if (x == "") {
    //     document.getElementById('status').innerHTML = "Email cannot be empty";
    //     return false;
    // } else {
    //     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    //     if(!re.test(x)){
    //         document.getElementById('status').innerHTML = "Email format invalid";
    //         return false;
    //     }
    // }
    // x =  document.getElementById('subject').value;
    // if (x == "") {
    //     document.getElementById('status').innerHTML = "Subject cannot be empty";
    //     return false;
    // }
    // x =  document.getElementById('message').value;
    // if (x == "") {
    //     document.getElementById('status').innerHTML = "Message cannot be empty";
    //     return false;
    // }
 //get input field values data to be sent to server
    document.getElementById('status').innerHTML = "Sending...";
    formData = {
        'name'     : $('input[name=name]').val(),
        'email'    : $('input[name=email]').val(),
        'subject'  : $('input[name=subject]').val(),
        'message'  : $('textarea[name=message]').val()
    };


   $.ajax({
    url : "mail.php",
    type: "POST",
    data : formData,
    success: function(data, textStatus, jqXHR)
    {

        $('#status').text(data.message);
        if (data.code) //If mail was sent successfully, reset the form.
        $('#contact-form').closest('form').find("input[type=text], textarea").val("");
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        $('#status').text(jqXHR);
    }
});



}
    </script>
</body>

</html>
