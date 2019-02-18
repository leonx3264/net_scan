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
			<li><a href="index.php"> Home </a></li>
			<li><a href="index.php"> Refresh </a></li>
			</ul>

                        <div style="margin-left:25%;padding:1px 16px;height:50px;">
                                 <h3 id = "element 0">IP Address:
                                <?php
                                $file = fopen("/home/pi/net_scan/ip_data.txt","r");

                                while(! feof($file))
                                {
                                        echo fgets($file). "";
                                }
                                fclose($file);
                                ?>
                                </h3>
                        </div>

			<div style="margin-left:25%;padding:1px 16px;height:50px;">
 				 <h3 id = "element 1">Gateway:
                                <?php
                                $file = fopen("/home/pi/net_scan/gateway_data.txt","r");

                                while(! feof($file))
                                {
                                        echo fgets($file). "";
                                }
                                fclose($file);
                                ?>
                                </h3>
			</div>
			<div style="margin-left:25%;padding:1px 16px;height:100px;">
 				 <h3 id = "element 2">Subnet Mask:
                                <?php
                                $file = fopen("/home/pi/net_scan/subnet_data.txt","r");

                                while(! feof($file))
                                {
                                        echo fgets($file). "";
                                }
                                fclose($file);
                                ?>
                                </h3>
			</div>
			<div style="margin-left:25%;padding:1px 16px;height:50px;">
 				 <h3 id = "element 3">DHCP Server:
                                <?php
                                $file = fopen("/home/pi/net_scan/dhcp_data.txt","r");

                                while(! feof($file))
                                {
                                        echo fgets($file). "";
                                }
                                fclose($file);
                                ?>
                                </h3>
			</div>
			<div style="margin-left:25%;padding:1px 16px;height:50px;">
 				 <h3  id = "element4">DNS Server:
                                <?php
                                $file = fopen("/home/pi/net_scan/dns_data.txt","r");

                                while(! feof($file))
                                {
                                        echo fgets($file). "";
                                }
                                fclose($file);
                                ?>
                                </h3>
			</div>
			<div style="margin-left:25%;padding:1px 16px;height:50px;">
 				 <h3 id = "element 5">Link:
				<?php
				$file = fopen("/home/pi/net_scan/bandwidth_data.txt","r");

				while(! feof($file))
				{
					echo fgets($file). "";
				}
				fclose($file);
				?>
				</h3>
			</div>
			<div style="margin-left:25%;padding:1px 16px;height:50px;">
 				 <h3  id = "element 6"><a href="open_ports.php">Open Ports</a></h3>
			</div>

			<div style="margin-left:25%;padding:1px 16px;height:50px;">
 				 <h3  id = "element 7"><a href="nodes.php">Devices Connected</a></h3>
			</div>

	</body>

	</html>
