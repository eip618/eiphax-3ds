<?php
$title = "Custom Themes Guide";
$desc = "How to get custom themes on your 3DS using Anemone";
include "header.php";
?>
<?php
include "nav.php";
?>
        <div class="container">
        <div class="content">
            <center><h1>Custom Themes Guide</h1></center>
            <h2 id="what-you-need">What you need</h2>
            <ul>
            <li>A console with Luma3ds installed</li>
            <li>Anemone3ds (note: you should already have anemone if you followed a good guide, if you somehow don't you can get it <a href="https://github.com/astronautlevel2/Anemone3DS/releases/latest">here</a>)</li>
            </ul>
            <h2 id="finding-a-theme">Finding a theme</h2>
            <ol>
            <li>Open <a href="https://themeplaza.art">Themeplaza</a> on your computer</li>
            <li>Find a theme you like</li>
            <li>Click on it</li>
            <li>Use one of the following 2 methods to install the theme</li>
            </ol>
            <h2 id="method-1-adding-themes-via-qr-code">Method 1: Adding Themes via QR code</h2>
            <ol>
            <li>Hover over the theme's picture with your cursor, a QR code should pop up<br><br>
            <img alt="Theme QR" src="./img/theme1.png"></li>
            <li>In Anemone, press the right bumper to open the camera</li>
            <li>Scan the QR code</li>
            <li>The theme should be added to the list</li>
            </ol>
            <h2 id="method-2-adding-themes-manually">Method 2: Adding Themes Manually</h2>
            <ol>
            <li>Press the download button on the theme's page<br><br>
            <img alt="Theme Manual Download" src="./img/theme2.png"></li>
            <li>Save the zip somewhere on your pc</li>
            <li>Insert your 3ds's sd card into your pc</li>
            <li>Make a <code>Themes</code> folder on your sd root if it doesn't already exist</li>
            <li>Copy the downloaded zip file to the themes folder
            <br/><br/><img alt="Theme Location" src="./img/theme3.png"></li>
            </ol>
            <h2 id="installing-the-obtained-themes">Installing the obtained themes</h2>
            <ol>
            <li>Open Anemone on your 3ds if it isn't already open</li>
            <li>Select the theme<br>
            <br/><img alt="Theme List" src="./img/theme4.png"></li>
            <li>Hold A + Dpad up and then release A to install the theme</li>
            <li>Press Start to exit Anemone and return to your home menu</li>
            <li>Congratulations, you now have a custom theme  </li>
            </ol>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img alt="Custom Theme" src="./img/theme5.png"></p>
            <h3 id="troubleshooting"><span style="text-decoration: underline">Troubleshooting</span></h3>
            <h4 id="anemone-says-theme-extdata-does-not-exist"><strong>Anemone says "Theme extdata does not exist!"</strong></h4>
            <ul>
            <li>Fix: Set a default theme in the home menu settings</li>
            </ul>
            <h4 id="i-get-a-crash-after-installing-a-theme"><strong>I get a crash after installing a theme</strong></h4>
            <ol>
            <li>
            Navigate to the following folder on your SD card:  <code>/Nintendo 3DS/(32 Character ID)/(32 Character ID)/extdata/00000000/</code>
            </li>
            <li>
            Delete the corresponding folder for your region:<br />
            USA: <code>000002cd</code><br />
            EUR: <code>000002ce</code><br />
            JPN: <code>000002cc</code> 
            </li>
            </ol>
            <h4 id="anemone-crashes"><strong>Anemone Crashes</strong></h4>
            <ul>
            <li>Fix: Try deleting <code>/3ds/Anemone3ds/Cache</code> on your SD</li>
            </ul></div><br /><br /><br /><br /><br /><br /><br /><br />
            
<?php
include "footer.php";
?>
