
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $metaDescription; ?>">
<meta name="device_id" content="<?php echo getDeviceID(); ?>">
<meta name="keywords" content="<?php echo str_replace('"', "", strip_tags($advancedCustom->keywords)); ?>">
<link rel="manifest" href="<?php echo $global['webSiteRootURL']; ?>manifest.json">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $config->getFavicon(true); ?>">
<link rel="icon" type="image/png" href="<?php echo $config->getFavicon(true); ?>">
<link rel="shortcut icon" href="<?php echo $config->getFavicon(); ?>" sizes="16x16,24x24,32x32,48x48,144x144">
<meta name="msapplication-TileImage" content="<?php echo $config->getFavicon(true); ?>">
<!--
<meta name="newCache" content="<?php echo ObjectYPT::checkSessionCacheBasedOnLastDeleteALLCacheTime()?"yes":"No" ?>">
<meta name="sessionCache" content="<?php echo humanTimingAgo(@$_SESSION['user']['sessionCache']['time']), " " ,@$_SESSION['user']['sessionCache']['time']; ?>">
<meta name="systemCache" content="<?php echo humanTimingAgo(ObjectYPT::getLastDeleteALLCacheTime()), " " ,ObjectYPT::getLastDeleteALLCacheTime(); ?>">
<meta name="sessionCache-systemCache" content="<?php $dif = @$_SESSION['user']['sessionCache']['time']-ObjectYPT::getLastDeleteALLCacheTime();
echo $dif, " Seconds "; ?>">
-->
<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 768px)" href="view/css/mobile.css" /> 
 <link href="<?php echo getCDN(); ?>view/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/> 
 
<!-- <link href="<?php echo getCDN(); ?>view/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/> --> 
<link href="<?php echo getCDN(); ?>view/js/webui-popover/jquery.webui-popover.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo getCDN(); ?>view/css/fontawesome-free-5.5.0-web/css/all.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo getCDN(); ?>view/css/font-awesome-animation.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo getCDN(); ?>view/css/flagstrap/css/flags.css" rel="stylesheet" type="text/css"/>


<!DOCTYPE html>
<html>


<head>
  <link rel="shortcut icon" href="caminhodoarquivo/favicon.ico" />
	<title>E-COMMERCE YOUTUBE</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="css/style.css" />

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
</head>


<body>
       


	<nav class="navbar navbar-expand-lg" style="background-color: #090b0c"  > 
    <a class="navbar-brand" href="http://video-dev.us-east-1.elasticbeanstalk.com/AVideo-master/">
      <img src="img/logo 101-01.png" alt="" width="72" height="72">
    </a>

		<h3 class="text-white">E-COMMERCE</h3>
		<div class="mr-auto"></div>
    <ul class="text-white navbar-nav">
    	
      <li class="nav-item">
      
       <a class="nav-link text-white"  href="http://video-dev.us-east-1.elasticbeanstalk.com/AVideo-master/"><span class="glyphicon glyphicon-home"></span> HOME
        
    
         </a> 
        
      </li>

      <li class="nav-item" class="btn btn-success btn-block">
        <a class="nav-link text-white"  href="index.php"><span class="glyphicon glyphicon-th-list"></span> STORE</a>

      </li>

         <li class="nav-item">
        <a class="nav-link text-white" href="cart.php"><span class="glyphicon glyphicon glyphicon-shopping-cart "></span> CART <span id="cart" class="badge badge-warning mx-2"></span></a>
      </li>

         <li class="nav-item">
        <a class="nav-link text-white " href="add_new_product.php"> ADD NEW PRODUCT <span class="glyphicon glyphicon-save"></span> </a>  
        
    </ul>
		
	</nav>

  
  

   <script type="text/javascript">
    $(document).ready(function(){
            
            show_mycart();
           function show_mycart(){
              $.ajax({
              url: "ajax/show_mycart.php",
              method:"POST",
              dataType:"JSON",
              success:function(data){
                $(".get_cart").html(data.out);
                $("#cart").text(data.da);
              }
           });
           }

           setInterval(show_mycart,1000);

    });
   </script>

</body>
</html>