import RPi.GPIO as gpio
gpio.setmode(gpio.BOARD)
gpio.setmode(gpio.BCM)
gpio.setmode(gpio.BOARD)
gpio.setup(12, gpio.OUT)
gpio.output(12, True)