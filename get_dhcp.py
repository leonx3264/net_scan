import os

os.system("grep dhcp-server-identifier /var/lib/dhcp/dhclient.leases | uniq -d > dhcp_data.txt")

