import os
import csv
import subprocess
import sys
import time


GREEN = "\033[32m"
YELLOW = "\033[33m"
CYAN = "\033[36m"
RESET = "\033[0m"


os.system("wmctrl -r :ACTIVE: -b remove,fullscreen")
print(f"{RESET}Preparando el ataque...")
with open('finalchoice.csv') as cards:
  csv_reader = csv.reader(cards)
  for index, row in enumerate(csv_reader):
    if index == 0:  # déplacement vertical dans ce cas la ligne 1 Livebox-D380
      print(f"{CYAN}Bssid de la red :")
      print(row[0])  # deplacement horizontal dans la ligne 1, dans ce cas la l'ESSID
      essid1=(row[0])
      f = open("bssid.txt", "w+")
      f.write(row[0])
      f.close()

with open('finalchoice.csv') as cards:
  csv_reader = csv.reader(cards)
  for index, row in enumerate(csv_reader):
    if index == 0:  # déplacement vertical dans ce cas la ligne 1 Livebox-D380
      print(f"{CYAN}Canal de la red :")
      print(row[1])  # deplacement horizontal dans la ligne 1, dans ce cas la l'ESSID
      essid1=(row[1])
      f = open("channel.txt", "w+")
      f.write(row[1])
      f.close()

with open('finalchoice.csv') as cards:
  csv_reader = csv.reader(cards)
  for index, row in enumerate(csv_reader):
    if index == 0:  # déplacement vertical dans ce cas la ligne 1 Livebox-D380
      print(f"{CYAN}Essid de la red :")
      print(row[4])  # deplacement horizontal dans la ligne 1, dans ce cas la l'ESSID
      essid1=(row[4])
      f = open("ssid.txt", "w+")
      f.write(row[4])
      f.close()

if os.path.isfile('cinqgscanfait'):
  print(f"{YELLOW}Verficando los datos de la red en 5GHz... si hay menos trafico que la misma red en 2.4GHz...")
  print("La red del primero escaneo estara guardado...")
  os.system("mv bssid.txt bssidf.txt")
  os.system("mv channel.txt canalf.txt")
  os.system("mv ssid.txt ssidf.txt")
  os.system("cp -R LasTry/*.txt .")
  time.sleep(1)
  os.system("mv bssid2g.txt bssid.txt")
  os.system("mv channel2g.txt channel.txt")
  os.system("mv ssid2g.txt ssid.txt")
  os.system("rm -rf cinqgscanfait")
  print(f"{CYAN}Analyzando el trafic entre las redes en 2.4GHz y 5GHz...")
  os.system("mv finalchoice2g finalchoice2g.csv")
  with open('finalchoice2g.csv') as cards:
      csv_reader = csv.reader(cards)
      for index, row in enumerate(csv_reader):
        if index == 0:  # déplacement vertical dans ce cas la ligne 1 Livebox-D380
          print(f"{CYAN}Trafico en la red en 2.4GHz :")
          print(row[3])  # deplacement horizontal dans la ligne 1, dans ce cas la l'ESSID
          ivdeuxg = (row[3])
          f = open("ivdeuxg.txt", "w+")
          f.write(row[3])
          f.close()
  with open('finalchoice.csv') as cards:
      csv_reader = csv.reader(cards)
      for index, row in enumerate(csv_reader):
        if index == 0:  # déplacement vertical dans ce cas la ligne 1 Livebox-D380
          print(f"{CYAN}Trafico en la red en 5GHz :")
          print(row[3])  # deplacement horizontal dans la ligne 1, dans ce cas la l'ESSID
          ivcinqg = (row[3])
          f = open("ivcinqg.txt", "w+")
          f.write(row[3])
          f.close()
          suite = subprocess.Popen("python new.py", shell=True)
  sys.exit()
else:
  None


if os.path.isfile('cinqgcarte'):
  with open('hostapdcarte') as f:
    scan = f.readline()
  os.system("mv bssid.txt bssid2g.txt")
  os.system("mv channel.txt channel2g.txt")
  os.system("mv ssid.txt ssid2g.txt")
  os.system("cp -R bssid2g.txt LasTry")
  os.system("cp -R channel2g.txt LasTry")
  os.system("cp -R ssid2g.txt LasTry")
  print("Starting scan on 5GHz frequency...")
  print("Starting monitor mode...")
  print("Scan duration : 60s...")
  os.system("ip link set" + " " + scan + " " + "down")
  os.system("iw dev" + " " + scan + " " + "set type monitor")
  time.sleep(4)
  os.system("ip link set" + " " + scan + " " + "up")
  time.sleep(3)
  os.system("wmctrl -r :ACTIVE: -b add,fullscreen")
  os.system("mv finalchoice.csv finalchoice2g")
  os.system("rm -rf *.txt")
  os.system("rm -rf *.csv")
  os.system("touch cinqgscanfait")
  airodump = subprocess.Popen("airodump-ng" + " " + "-b" + " " + "a" + " " + scan + " " + "-w airodumpwpa --output-format csv", shell=True)
  time.sleep(64)
  airodump.terminate()
  airodump.wait()
  airodump.kill()

  print("Vuelta a la configuracion normal de la tarjeta 5GHz...")
  os.system("ip link set" + " " + scan + " " + "down")
  os.system("iw dev" + " " + scan + " " + "set type managed")
  time.sleep(4)
  os.system("ip link set" + " " + scan + " " + "up")
  time.sleep(3)
  # os.system("touch direct.txt")
  suitescan = subprocess.Popen("python scanfiltre5.py", shell=True)
else:
  print('Preparando el ataque...')
  attack = subprocess.Popen("python attack2.py", shell=True)
