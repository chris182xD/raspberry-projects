import RPi.GPIO as gpio
gpio.setmode(gpio.BOARD)

gpio.setup(3, gpio.OUT)
gpio.output(3, True)