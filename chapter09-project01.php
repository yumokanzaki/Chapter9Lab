<!--Ryan Reyes
11/02/2016
CIP 228-->
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Chapter 9</title>
 <!-- Bootstrap core CSS -->
 <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">
 <!-- Custom styles for this template -->
 <link href="chapter09-project01.css" rel="stylesheet">
 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!--[if lt IE 9]>
   <script src="bootstrap3_defaultTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_defaultTheme/assets/js/respond.min.js"></script>
 <![endif]-->
</head>
<body>
<header>
   <div id="topHeaderRow" >
      <div class="container">
         <nav class="navbar navbar-inverse " role="navigation">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <p class="navbar-text">Welcome to <strong>Art Store</strong>, <a href="#" class="navbar-link">Login</a> or <a href="#" class="navbar-link">Create new account</a></p>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse pull-right">
               <ul class="nav navbar-nav">
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-gift"></span> Wish List</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-arrow-right"></span> Checkout</a></li>                  
               </ul>
            </div>
         </nav>
      </div>
   </div>      
   <div id="logoRow" >
      <div class="container">
         <div class="row">
            <div class="col-md-8">
                <h1>Art Store</h1> 
            </div>
            <div class="col-md-4">
               <form class="form-inline" role="search">
               <div class="input-group">
                  <label class="sr-only" for="search">Search</label>
                  <input type="text" class="form-control" placeholder="Search" name="search">
                  <span class="input-group-btn">
                  <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                  </span>
               </div>
               </form> 
            </div>                        
         </div>      
      </div>
   </div>   
   <div id="mainNavigationRow" >
      <div class="container">
         <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
             <ul class="nav navbar-nav">
               <li><a href="#">Home</a></li>
               <li><a href="#">About Us</a></li>
               <li><a href="#">Art Works</a></li>
               <li><a href="#">Artists</a></li>
               <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Specials <b class="caret"></b></a>
                 <ul class="dropdown-menu">
                   <li><a href="#">Special 1</a></li><li><a href="#">Special 2</a></li><li><a href="#">Special 3</a></li><li><a href="#">Special 4</a></li><li><a href="#">Special 5</a></li>                 </ul>
               </li>
             </ul>              
            </div>
         </nav>
      </div>  <!-- end container -->
   </div>  <!-- end mainNavigationRow -->   
</header>
<div class="container">   
   <div class="row">
      <div class="col-md-3">      
<div class="panel panel-default">
  <div class="panel-heading">Account</div>
  <div class="panel-body">
  <ul class="nav nav-pills nav-stacked">
  <li><a href="#">Login</a></li>
  <li class="active"><a href="#">Register</a></li>
</ul>    
  </div>
</div>       
      </div>
      <div class="col-md-9">      
<form role="form" class="form-horizontal" action="art-form-process.php" method="post">
   <div class="page-header">
      <h2>Register Account</h2>
      <p>If you already have an account with us, please login at the login page.</p>   
   </div>
     <div class="form-group">
       <label for="first" class="col-md-3 control-label">First Name</label>
       <div class="col-md-9">
       <input type="text" class="form-control" name="first" >
       </div>
     </div>
     <div class="form-group">
       <label for="last" class="col-md-3 control-label">Last Name</label>
       <div class="col-md-9">
       <input type="text" class="form-control" name="last" >
       </div>
     </div>
     <div class="form-group">
       <label for="email" class="col-md-3 control-label">Email</label>
       <div class="col-md-9">
       <input type="email" class="form-control" name="email">
       </div>
     </div>
     <div class="form-group">
       <label for="password1" class="col-md-3 control-label">Password</label>
       <div class="col-md-9">
       <input type="password" class="form-control" name="password1">
       </div>
     </div>
     <div class="form-group">
       <label for="password2" class="col-md-3 control-label">Password Confirm</label>
       <div class="col-md-9">
       <input type="password" class="form-control" name="password2">
       </div>
     </div>
  <div class="form-group">
    <div class="col-md-offset-3 col-md-9">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="privacy" > I agree to the <a href="#">privacy policy</a>
        </label>
      </div>
    </div>
  </div>   
  <div class="form-group">
    <div class="col-md-offset-3 col-md-9">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </div>    
   </form>  
</div>  
</div> 
</div>  <!-- end container -->
<footer>
   <div class="container">
      <div class="row">
         <div class="col-md-3">
            <h4><span class="glyphicon glyphicon-info-sign"></span> About Us</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
         </div>
         <div class="col-md-3">
            <h4><span class="glyphicon glyphicon-earphone"></span> Customer Service</h4>
            <ul class="nav nav-stacked">
              <li><a href="#">Delivery Information</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Shipping</a></li>
              <li><a href="#">Terms and Conditions</a></li>
            </ul>           
         </div>
         <div class="col-md-3">
            <h4><span class="glyphicon glyphicon-shopping-cart"></span> Just Ordered</h4>           
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="images/art/tiny/113010.jpg" alt="...">
              </a>
              <div class="media-body">
                <p class="media-heading similarTitle"><a href="#">Self-portrait in a Straw Hat</a></p>
                <em>9 minutes ago</em>
              </div>
            </div>                       
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="images/art/tiny/099110.jpg" alt="...">
              </a>
              <div class="media-body">
                <p class="media-heading similarTitle"><a href="#">The Veiled Woman</a></p>
                <em>25 minutes ago</em>
              </div>
            </div>                        
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="images/art/tiny/116010.jpg" alt="...">
              </a>
              <div class="media-body">
                <p class="media-heading similarTitle"><a href="#">Artist Holding a Thistle</a></p>
                <em>41 minutes ago</em>
              </div>
            </div>             
         </div>     
         <div class="col-md-3">
            <h4><span class="glyphicon glyphicon-envelope"></span> Contact us</h4>
            <form role="form">
              <div class="form-group tight-form-group">
                <label class="sr-only" for="name">Name</label>
                <input type="text" class="form-control" name="email" placeholder="Enter name ...">
              </div> 
              <div class="form-group tight-form-group">
                <label class="sr-only" for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email ...">
              </div> 
              <div class="form-group tight-form-group">
                <label class="sr-only" for="email">Email</label>
                <textarea class="form-control" rows="3" placeholder="Enter message ..."></textarea>
              </div>   
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>  
         </div>         
      </div>
   </div>   
   <div id="copyrightRow">
      <div class="container">
         <div class="row">
           <p class="text-muted">All images are copyright to their owners. This is just a hypothetical site
           <span class="pull-right">&copy; 2014 Copyright Art Store</span></p>
         </div>
      </div>
   </div>
</footer>
 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    
</body>
</html>
