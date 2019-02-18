import socket
import threading
from queue import Queue

#print lock: lock the variable so only used once per task 
print_lock = threading.Lock()

server = "192.168.1.1"

def portScan(port):
    #socket
    soc = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    try:
        connection = soc.connect((server,port))

        #locks print function
        with print_lock:
            print("\nport:", port, "is open.")

        #closes connection when done
        connection.close()

    except:
        #if port isnt open just pass through 
        pass

def threader():
    while True:
        worker = q.get()
        portScan(worker)
        q.task_done()

q = Queue()

#range(threads)
for i in range(8):
    t = threading.Thread(target = threader)
    t.daemon = True
    t.start()

#range(ports)
for worker in range(1,10000):
    q.put(worker)

q.join()

print("\nPorts 1 to 10,000 scanned.")

exit()

