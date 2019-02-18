	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="css/style.css" />
		<title>NET_SCAN</title>
	</head>

	<body>
	<header id = "home">
		<div class = "bg-img" style=" background-image: url('./img/network.jpg');">
				<div class = "overlay"><div>
		</div>
	</header>


	                <div style="margin-left:-28%;padding:16px 16px;height:70px;">
        	        <h1 id = "name">NET_SCAN</h1>
			</div>

			<ul>
			<li><a href="index.php"> home </a></li>
			</ul>

                        <div style="margin-left:25%;padding:1px 16px;height:50px;">
                                 <h3 id = "element 0">
                                <?php
                                $file = fopen("/home/pi/net_scan/port_data.txt","r");

				while(! feof($file))
				{
					echo fgets($file).  "<br />";
				}

				fclose($file);
                                ?>
                                </h3>
                        </div>

	</body>

	</html>
