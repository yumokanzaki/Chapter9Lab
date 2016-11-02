<!--Ryan Reyes
11/02/16
CIP 228-->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; 
   charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Travel Template</title>
   <link rel="shortcut icon" href="../../assets/ico/favicon.png">
   <!-- Google fonts used in this theme  -->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,800,600,700,300' rel='stylesheet' type='text/css'>  
   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_travelTheme/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="bootstrap3_travelTheme/theme.css" rel="stylesheet">  
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="bootstrap3_travelTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_travelTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>
<body>
<header>
   <div id="topHeaderRow">
      <div class="container">
         <div class="pull-right">
            <ul class="list-inline">
              <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-star"></span> Favorites</a></li>
            </ul>         
         </div>
      </div>
   </div>  <!-- end topHeaderRow -->
      <div class="navbar navbar-default ">
      <div class="container">
         <nav>
           <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="#">Share Your Travels</a>
           </div>
           <div class="navbar-collapse collapse">
             <ul class="nav navbar-nav">
               <li><a href="#">Home</a></li>
               <li><a href="#about">About</a></li>
               <li><a href="#contact">Contact</a></li>
               <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Browse <b class="caret"></b></a>
                 <ul class="dropdown-menu">
                   <li><a href="#">Posts</a></li>
                   <li><a href="#">Images</a></li>
                   <li class="divider"></li>
                   <li><a href="#">Countries</a></li>
                   <li><a href="#">Users</a></li>                
                 </ul>
               </li>
             </ul>
           </div><!-- end navbar collapse -->
        </nav>
      </div>
    </div>  <!-- end navbar -->
</header>   
<div class="container">  <!-- start main content container -->
   <div class="row">  <!-- start main content row -->
      <div class="col-md-3">  <!-- start left navigation rail column -->
                  <div class="panel panel-default">
           <div class="panel-heading">Search</div>
           <div class="panel-body">
             <form>
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="search ...">
                  <span class="input-group-btn">
                    <button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-search"></span>          
                    </button>
                  </span>
               </div>  
             </form>
           </div>
         </div>  <!-- end search panel -->             
         <div class="panel panel-info">
           <div class="panel-heading">Continents</div>
           <ul class="list-group"> 
                                 <li class="list-group-item"><a href="#">Africa</a></li>
                                 <li class="list-group-item"><a href="#">Asia</a></li>
                                 <li class="list-group-item"><a href="#">Europe</a></li>
                                 <li class="list-group-item"><a href="#">North America</a></li>
                                 <li class="list-group-item"><a href="#">Oceania</a></li>
                                 <li class="list-group-item"><a href="#">South America</a></li>
                          </ul>
         </div>  <!-- end continents panel -->  
         <div class="panel panel-info">
           <div class="panel-heading">Popular Countries</div>
           <ul class="list-group">                          
                  <li class="list-group-item">
                  <a href="country.php?code=CA">Canada</a>
                  </li>                          
                  <li class="list-group-item">
                  <a href="country.php?code=DE">Germany</a>
                  </li>                          
                  <li class="list-group-item">
                  <a href="country.php?code=GH">Ghana</a>
                  </li>                          
                  <li class="list-group-item">
                  <a href="country.php?code=GB">United Kingdom</a>
                  </li>
                  <li class="list-group-item">
                  <a href="country.php?code=US">United States</a>
                  </li>
           </ul>
         </div>  <!-- end countries panel -->          
		 </div>  <!-- end left navigation rail -->      
      <div class="col-md-9">  <!-- start main content column -->
         <ol class="breadcrumb">
           <li><a href="#">Home</a></li>
           <li><a href="#">Browse</a></li>
           <li class="active">Favorites</li>
         </ol>          
           <h1>Favorites</h1>      
         <!-- start post summaries -->
         <div class="well">
            <div class="row">                           
                  <div class="col-md-3">
                     <a href="travel-image.php?id=22" class="thumbnail">
                     <img src="images/travel/square/6114850721.jpg" alt="...">
                     </a>
                  </div>                           
                  <div class="col-md-3">
                     <a href="travel-image.php?id=54" class="thumbnail">
                     <img src="images/travel/square/9495574327.jpg" alt="...">
                     </a>
                  </div>                           
                  <div class="col-md-3">
                     <a href="travel-image.php?id=7" class="thumbnail">
                     <img src="images/travel/square/5856697109.jpg" alt="...">
                     </a>
                  </div>                           
                  <div class="col-md-3">
                     <a href="travel-image.php?id=19" class="thumbnail">
                     <img src="images/travel/square/5855729828.jpg" alt="...">
                     </a>
                  </div>                           
                  <div class="col-md-3">
                     <a href="travel-image.php?id=46" class="thumbnail">
                     <img src="images/travel/square/8711645510.jpg" alt="...">
                     </a>
                  </div>                           
                  <div class="col-md-3">
                     <a href="travel-image.php?id=6" class="thumbnail">
                     <img src="images/travel/square/6114907897.jpg" alt="...">
                     </a>
                  </div>
            </div>
         </div>
      </div>  <!-- end main content column -->
   </div>  <!-- end main content row -->
</div>   <!-- end main content container -->   
<footer>
   <div class="container">
      <div class="row">
        <div class="col-md-4">
            <h4>Destinations</h4>
            <ul class="nav nav-pills nav-stacked">
                 <li><a href="#">Asia</a></li>
                 <li><a href="#">Africa</a></li>
                 <li><a href="#">Europe</a></li>
                 <li><a href="#">North America</a></li>
                 <li><a href="#">South America</a></li>
               </ul>  
        </div>
        <div class="col-md-4">
            <h4>Links</h4>
            <nav>
               <ul class="nav nav-pills nav-stacked">
                 <li><a href="#">Home</a></li>
                 <li><a href="#">About</a></li>
                 <li><a href="#">Browse</a></li>
                 <li><a href="#">Search</a></li>
               </ul>            
            </nav>               
        </div>
        <div class="col-md-4">
            <h4>Connect</h4>
            <hr/>
            <div class="row">
               <div class="col-md-6">
                  <button type="button" class="btn btn-primary">Facebook</button>
               </div>
               <div class="col-md-6">
                  <button type="button" class="btn btn-info">Twitter</button>
               </div>
            </div>
            <hr/>
            Phone: 333-444-5555</br>
            Email: support@shareyourtravels.com
        </div>
      </div>
   </div>
   <div class="container">
      <hr/>
      <div class="row">
         <div class="col-md-6">
            <p><small>&copy; 2014 - Share Your Travels</small></p>
         </div>
         <div class="col-md-6">
            <p class="pull-right"><small>A case study for <a href="http://www.fundwebdev.com">Fundamentals of Web Development</a><small></p>
         </div>            
      </div>
   </div>
</footer>      
 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_travelTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_travelTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_travelTheme/assets/js/holder.js"></script>
</body>
</html>
