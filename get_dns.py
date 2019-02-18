import os

os.system("grep domain-name-servers /var/lib/dhcp/dhclient.leases | uniq -d > dns_data.txt")


