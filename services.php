

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="v.css">
  <link rel="stylesheet" href="reg.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
  

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hotel Booking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
    
    <style>
        .well
        {
            background: rgba(0,0,0,0.7);
            border: none;
    
        }
        .wellfix
        {
            background: rgba(0,0,0,0.7);
            border: none;
            height: 150px;
        }
		body
		{
			background-image: url('images/home_bg.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
		p
		{
			font-size: 13px;
		}
        .pro_pic
        {
            border-radius: 50%;
            height: 50px;
            width: 50px;
            margin-bottom: 15px;
            margin-right: 15px;
        }
		
    </style>
  

</head>
<body>

<div class="container">
      
      
      <img class="img-responsive" src="images/logo2.jpg" style="width:100%; height:180px;">      
       <nav class="navbar navbar-inverse">
           <div class="container-fluid">
               <ul class="nav navbar-nav">
                   <li class="active"><a href="home.php">Home</a></li>
                   <li><a href="vin.php">Services</a></li>
                <!--   <li><a href="registratio.php">Online Reservation</a></li>-->
                   <li><a href="bookingPage.php">Online Reservation</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                   <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                   <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>                    
               </ul>
           </div>
       </nav>


</body>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center"><b><font color="white">Our Services</font></b></h2>
  </div>
</section>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <div class="card" >
  <img class="card-img-top" src="mum.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Mumbai</h4>
    <p class="card-text">City of Dreams</p>
    <a href="mumbai.php" class="btn btn-primary"> More Information</a>
     
  </div>
</div>
</div>

 <div class="col-lg-4 col-md-4 col-12">
      <div class="card" >
  <img class="card-img-top" src="pune.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Pune</h4>
    <p class="card-text">City of Nature</p>
    <a href="pune.php" class="btn btn-primary"> More Information</a>
  </div>
</div>
</div>
 <div class="col-lg-4 col-md-4 col-12">
      <div class="card" >
  <img class="card-img-top" src="nag.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Nagpur</h4>
    <p class="card-text">City of Orange.</p>
    <a href="nagpur.php" class="btn btn-primary">More Information</a>
  </div>
</div>
</div>
</div>
</div>
</html>
