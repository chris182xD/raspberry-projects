<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monitoring</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
</head>
<body>
    <h1 class="center-align">Raspberry Monitoring</h1>
    <div class="row">
        <div class="col s4">
            <h5>Switch Led</h5>
            <div class="switch">
                <label>
                    Off
                    <input type="checkbox" id="SwitchLed" onclick="SwitchLed()">
                    <span class="lever"></span>
                    On
                </label>
            </div>
        </div>
    <div class="row">
    </div>
</body>
</html>