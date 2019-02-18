import socket

def get_ip():
	s = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)
	try:
		s.connect(("10.255.255.255", 1))
		local_ip = s.getsockname()[0]
	except:
		local_ip = "127.0.1.1"
	finally:
		s.close()
	return local_ip

local = get_ip()

print(local)

file = open("ip_data.txt", "w")
file.write(local)
file.close() 

