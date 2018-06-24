<html>
 <head>
 <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="BeEvergreenCSS.css">
  <title>Search</title>
  
 


     <style>
       
          a:hover {
            color:#F19EE9!important;
        }
         
         h2 {
             font-family:"Proxima Nova", sans-serif;
             font-size: 2em; 
             font-weight: 400; 
             letter-spacing: 0.02em; 
             color:white;
             text-transform: uppercase;
         }
         
           .container {
             margin:0!important;
            width: 100%;
        }
         
                .outer-container {
  background: white;
  position: relative;
  overflow: hidden;
    margin-top:0px;
                     
}
        
        
        .image-container {
  width: 100%;
height:auto;

padding-bottom:10px;
           
}

.skew-container {
  position: absolute;
  display: block;
  width: 100%;
  height: 50vh;
  background-image: linear-gradient(#FE5C00, #F19EE9);
  transform-origin: top left;
  transform: skewY(-10deg);
}
   
     </style>
 </head>
  <body class="body-background">
      
      <!--WHOLE SITE DIV--><div class="container"> 
    
        
<!-- LOGO -->
        
        <div class="center-image">
            <img src="https://static1.squarespace.com/static/558c33b1e4b0aeae75bd92db/t/5a7ccbd7652deafb5a71d650/1518128095863/be-evergreen-logo.png?format=750w" href="#" width="300" height="500" class ="logo">
        </div>
        
        <hr>
<!-- NAV BAR //////ADD LINKS LATER\\\\\\ -->
        
    <nav class="navbar navbar-light navbar-toggleable-sm justify-content-center" style="background-color:white; margin-bottom: 10px;">
        <div class="navbarnav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="SearchTwo.php">Search</a></li>
                <li class="nav-item"><a class="nav-link" href="ideas.php">Ideas</a></li>
                <li class="nav-item"><a class="nav-link" href="contact_form.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="signup.php">Login</a></li>
            </ul>
        </div>
    </nav>
        
       <hr style="margin:0!important;">
      
 <div class="outer-container">
  <div class="image-container">
  <div class="skew-container">
      </div>
      
       <div class="container" style="position:relative; padding:10px;">
      
   <br />
   <h2 align="center">Search For Volunteer Opportunities</h2><br />
   <div class="form-group">
  
     <input type="text" name="search_text" id="search_text" placeholder="SEARCH BY ANY KEYWORD" class="form-control" style="text-align:center; border: 4px solid #EF41C4; padding:20px;"/>
    </div>
   
   <br />
   <div id="result" style="padding:10px;"></div>
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
                                <div class="item" ><a href="home.php">Home</a></div>
                                 <div class="item"><a href="About.php">About</a></div>
                                <div class="item"><a href="FAQ.php">FAQ</a></div>
                                 <div class="item"><a href="welcome.php">LOGOUT</a></div>
                                <div class="item"><a href="contact_form.php">Contact</a></div>
                    
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
      </div>
        
<!--WHOLE SITE DIV--></div>
        <script src="js/jquery.slim.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>

      
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"dbConnTwo.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>

 </body>
</html>


