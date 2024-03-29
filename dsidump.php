<?php
$title = "DSiWare Dumper";
$desc = "DSiWare Dumper tutorial (deprecated)";
include "header.php";
?>
<?php
include "nav.php";
?>
        <div class="container">
        <div class="content">
            <center><h1>Pichaxx + DSiWare Dumper</h1></center>
            <hr>
			<p> This method is no longer used on the current firmware, if you are on this page you are attempting to follow outdated instructions. Please follow an <a href="https://3ds.hacks.guide/"> updated guide,</a> and if you have any further questions ask the <a href="https://discord.gg/C29hYvh"> Nintendo Homebrew discord!</a></p>


		<!--<h3>Before You Start</h3>
			<ol>
				<li>First step: test. On your console, navigate to System Settings > Internet Settings > DS Connection Settings.</li>
				<li>If this causes the old DS menu to appear, you can proceed. If it crashes, or hangs on a black screen, go <a href="./twlfix">TWLfix</a> and come back.</li>
			</ol>
		<p><button class="btn-toggle-visibility" data-target="#pichaxx">Pichaxx</button>
        <div class="box hidden" id="pichaxx">
        <h2>What You Need</h2>
        <ol>
            <li>The free eShop game, "Pok&eacute;mon Picross".</li>
			<li>Your console updated to 11.10</li>
        </ol>
        
        <h2>How to Pichaxx</h2>
        <h3>Seedminer: finding your id0</h3>
        <ol>
            <li>Turn your console off and take out the SD card.</li>
            <li>Put the SD card into your computer, navigate to it and open the "Nintendo 3DS" folder.</li>
            <li>Inside this folder, you will see one or more folders with very long, seemingly random names. Do not open any further folders.</li>
            <li><b>If you only have ONE long named folder, skip to step 11. If you have TWO OR MORE, follow these steps in order.</b> <i>The "private" folder, if it exists, does not count.</i></li>
            <li>Back out of your Nintendo 3DS folder to your SD root. You may see folders such as Nintendo 3DS and DCIM. This means you are in the right place.</li>
            <li>Rename your Nintendo 3DS folder to "Nintendo BACKUP" <i>(right click and select "Rename")</i></li>
            <li>Safely eject your SD card, put it back in your console, and power it on.</li>
            <li>Wait for your console to generate some data.</li>
            <li>Once you see the home menu, power off your console, take out the SD card and put it in your computer.</li>
            <li>Navigate back to the "Nintendo 3DS" folder on your SD card. You should now only have one long named folder.</li>
            <li>The 32 character name of this long named folder is referred to as your 'id0'.</li>
            <li>Right click this 'id0' folder and select "Rename".</li>
            <li>The folder name should now be blue. Right click the blue text and select "Copy". DO NOT enter or replace any text. If you accidentally enter or replace any text, press Control+Z to undo this action and restore your 'id0' name.</li>
            <li>Left click away from the folder to deselect it, and paste (Control+V) your id0 somewhere (for example, a Notepad window).</li>
            <li><b>IF YOU NEEDED TO RENAME THE NINTENDO 3DS FOLDER</b>: delete the "Nintendo 3DS" folder, then rename "Nintendo BACKUP" to "Nintendo 3DS". If you did NOT need to rename the "Nintendo 3DS" folder, DO NOT delete or rename anything.</li>
        </ol>
        
        <h3>Seedminer: movable.sed</h3>
        <ol>
            <li>Go to <a href="http://bruteforcemovable.com" target="_blank">bruteforcemovable</a>.</li>
            <li>Input your friend code and id0 into the fields given.</li>
            <li>Complete the "I'm not a robot" CAPTCHA.</li>
            <li>The website will give you a friend code. On your console, open the Friends List (home menu, top row, orange box with smiley face). <i>If, instead, it skips to "Done!" (step 4) and gives you the option to download your movable.sed directly, skip to step eight.</i></li>
			<li>Press "Register Friend", then "Internet", then enter the friend code from the website.</li>
			<li>Give it a random name. The name is not important.</li>
            <li>Back on BruteforceMovable, the website should be on step 2. When presented the option, click "Continue". <i>If it is not on step 2, refresh the page ONCE.</i></li>
            <li>Wait some time. Once the process is finished, you can download your "movable.sed". Put it somewhere you'll remember.</li>
        </ol>
        <p>
        <h3>Generating your save file</h3>
        <ol>
            <li>Go to <a href="https://bruteforcemovable.com/pichaxx/" target="_blank">BFM's injector</a>.</li>
            <li>Upload your "movable.sed" and select the region of your console.</li>
            <li>Download your modified save and put it somewhere you'll remember.</li>
        </ol>
        
        <h3>Booting homebrew</h3>
        <ol>
            <li>Download the latest release of the homebrew menu, <a href="https://github.com/fincs/new-hbmenu/releases/" target="_blank">boot.3dsx</a>.</li>
            <li>Download the otherapp payload for your region and version from <a href="https://deadphoenix8091.github.io/3ds/#otherapp">the otherapp generator</a>
        <li>Copy the otherapp payload you downloaded to the root of your SD card and rename it 'otherapp.bin'. <b>If you cannot see the .bin extension, do not add it.</b></li>
        <li>Copy the "boot.3dsx" you downloaded to the root of your SD card.</li>
        <li>Navigate to: <div class="code">Nintendo 3DS > ID0 > ID1 > title > 00040000 > 0017c100 > data</div> <i>Note: the ID0 is the same one you used/found in Seedminer, the ID1 is the next folder inside the ID0</i></li>
        <li>Replace the save in this folder with the one you received from "Generating your save file".</li>
        <li>Create a folder in your root called "3ds".</li>
        <li>Put your SD card back in your console and start the game.</li>
        </ol>
		You might see a message saying there are no applications. This is normal, and you can proceed to the DSiWare Dumper.
		</div>
		<p>
		<button class="btn-toggle-visibility" data-target="#dsidump">DSiWare Dumper</button>
		<div class="box hidden" id="dsidump">
		<p>
		<h3>DSiWare Dumper</h3>
			<ol>
				<li>You'll need the <a href="https://github.com/MechanicalDragon0687/3DS-DSiWare_Dumper/releases">latest release of the DSiWare Dumper</a></li>
				<li>You'll need your movable.sed from Seedminer.</li>
				<li>Power off your console and put your SD card in your computer.</li>
				<li>Copy your movable.sed to the root of your SD card.</li>
				<li>Copy "DSiWare_Dump.3dsx" to the 3ds folder on your SD card. <i>Note: if the 3ds folder does not exist, make it. Also, the 3ds folder is NOT "Nintendo 3DS".</i></li>
				<li>Put your SD card back in your console.</li>
				<li>Power on and open the Homebrew Menu using your preferred access point.</li>
				<li>Open the DSiWare Dumper from the list.</li>
				<li>You may see several failures, but eventually one should show Success. This one will be your DSiWare dump for <a href="./fredminer">Fredminer.</a></li>
			</ol>
		</div>
		-->
<?php
include "footer-btn.php";
?>