import os

os.system("ifconfig eth0 | grep netmask > subnet_data.txt") 
