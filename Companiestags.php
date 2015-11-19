<?php
	session_start();
	
	$tag="";
	if (isset($_GET['tag']))
	$tag=$_GET['tag'];
?>

<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title></title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery-1.11.0.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css"/>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="css/home.css" />
</head>-->

<body>                       
                        <div class="dropdownmenu_container">
                            <?php        
                            /*include '/index.html';*/
                            ?>
                        </div>
		
		<div class="container_middle">		
			
			<div class="container_show_post">
				<?php
				if($tag == "VIC")
					include("ViscarIndustrialCapacity.html");
				else if($tag == "UXT")
					include("UserExperienceTechnologies.html");
				?>
			</div>
			<div class="container_show_post">
				<?php
				 if($tag=="MASABA")
					include("MasabaServices.html");
				 else if($tag == "CAMCRAFT")
					include("Camcraft.html");
				else if($tag == "HORIZON")
					include("Horizon.html");
				else if($tag == "GEP")
					include("GlobalElectivesPort.html");
				else if($tag == "BARAKA")
					include("BarakaHardware.html");
				?>
            </div>
		</div> 
        
        
        <div class="bottom_pos">
            <a href="#" style="text-decoration: none;">About System</a>
        </div>
</body>
</html>