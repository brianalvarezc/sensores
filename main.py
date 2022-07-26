import network, time as t
import random as r
from machine import Pin, Timer, ADC

def conectar(ssid, key):
    wlan = network.WLAN(network.STA_IF)
    wlan.active(True)
    led = Pin(2, Pin.OUT)
    if not wlan.isconnected():
        print('Conectando a la red ' + ssid)
        wlan.connect(ssid, key)
        while not wlan.isconnected():
            led.value(1)
            t.sleep(0.1)
            led.value(0)
            t.sleep(0.1)
            pass
    print('network config:', wlan.ifconfig())
    led.value(1)

    
conectar('TIGO-7D28', '2D9657309462')
# conectar('PocoX3Brian', '1234567890')

import u_request

while True:
    valor = r.randint(0, 40)
    s= u_request.urlopen("https://panelweb.info/sensores/escribir.php?sensor=" + str(valor))
    u_request.cerrar(s)
    print("Sensor value: " + str(valor))
    t.sleep(0.1)