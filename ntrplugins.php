<?php
$title = "NTR Plugins Tutorial";
$desc = "How to install and use NTR Plugins";
include "header.php";
?>
<?php
include "nav.php";
?>
        <div class="container">
        <div class="content">
            <center><h1>NTR Plugin Guide</h1></center>
            <hr>
        <p> This is a guide on how to use BootNTR Selector to use NTR CFW for plugins and cheats in games. If you want to use Checkpoint for cheats, you should check out <a href="https://3ds.eiphax.tech/cpcheats.html"> this guide</a> written by yours truly. Guide written by kriegxd on Discord </p>
		<h3> Requirements </h3>
		<p> boot9strap installed on your console</p>
		<p> The latest release of <a href="https://github.com/Nanquitas/BootNTR/releases/latest">BootNTR Selector</a>  (read the release text to find out which one to download, this guide covers all .cia versions) </p>
		<p> The latest release of <a href="https://github.com/LumaTeam/Luma3DS/releases/latest">Luma3DS</a> (the Luma3DS .zip, not the source code)
		<h3>Setup</h3>
		<ol>
		<li> Copy boot.firm from the Luma3DS .zip archive to the root of your SD card </li>
		<li> Copy the downloaded BootNTR Selector cia to the SD root </li>
		<li> Open FBI, go to SD -> the cia -> Install and delete CIA </li>
		<li> Exit FBI </li>
		</ol>
		<h2> Launching BootNTR </h2>
		<ol>
		<li> Open BootNTR Selector from the HOME Menu </li>
		<li> If given a choice, press the "Use default" setting </li> <img src="https://raw.githubusercontent.com/kriegisrei/kriegisrei.github.io/master/images/ntr/ntr1.png"/>
		<li> Select Version 3.6 </li>
		<li> Your screen should flash blue then BootNTR Selector should close right after, if you press X+Y and a menu shows up you have installed it correctly! </li>
		<ul>If BootNTR Selector complains "firmware unknown, detected firm ...", make sure your 3DS is on the latest system version and you installed the latest version of BootNTR Selector</ul>
		<br />
		<ul>If BootNTR complains about the lack of Luma 3GX, make sure you're using the latest version of Luma3DS </ul>
		</ol>
		<h2> Installing game plugins </h2>
		<ol>
		<li> Make a folder on the root of your SD card called "plugin" </li>
		<li> The plugin you download should already include the Title ID's for you, all you need to do is drag them into the plugin folder </li>
		<p> <img src="https://raw.githubusercontent.com/kriegisrei/kriegisrei.github.io/master/images/ntr/ntr2.png"/> </p>
		<li> If you only have a cheat.plg, you will need to make the Title ID folder yourself. A list of Title IDs can be found at <a href="http://www.3dsdb.com/">3dsdb</a></li>
		<li>Once you are done, your layout should look like this: plugin > "Title ID for your game" > cheat </li>
		<img src="https://raw.githubusercontent.com/kriegisrei/kriegisrei.github.io/master/images/ntr/ntr3.png"/>
		<li>Turn on your 3DS and make sure NTR CFW is running, you can check by pressing X+Y and if it is running a menu will pop up on the bottom screen, if it is not running, open Boot NTR Selector, select 3.6 and wait for the blue crash </li>
		<li> Once NTR CFW is running, open the game you want to use the plugin in </li>
		<li> While opening the game you should see the top screen flash green, this means the plugin is active </li>
		<li> Depending on the plugin, the plugin menu can either be accessed by pressing SELECT, or the cheats can be found in the NTR menu by pressing X+Y </li>
		</ol>
		<p> If you're looking for plugins to use, check out <a href="https://github.com/ItsDeidara/MegaNTR">MegaNTR on GitHub</a> </p>
		<h2> Troubleshooting </h2>
		<p> Q: I don't see a green flash! <br /> A: Check the placement of your plugins</p>
		<p> Q: My placement is correct and I don't get a green flash! <br /> A: Make sure NTR is running beforehand, restart your 3DS before rerunning it. </p>
		<p> Q: This plugin doesn't work! <br /> A: Usually, this is a problem with the plugin. Try using another one. </p>
	
<?php
include "footer.php";
?>
