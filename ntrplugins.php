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
        <p> This is a guide on how to use Boot NTR Selector to use plugins and cheats for games. If you want to use Checkpoint for cheats, you should check out <a href="https://3ds.eiphax.tech/cpcheats.html"> this guide</a> written by yours truly. Guide written by kriegxd on Discord. </p>
		<h3> Required: </h3>
		<p> The latest release of <a href="https://github.com/Nanquitas/BootNTR/releases">Boot NTR Selector.</a> </p>
		<p> A Luma version of 10.2.1 or above. </p>
		<h3> If you already have Boot NTR Selector installed, you do not need to do these steps. </h3>
		<ol>
		<li> Download Boot NTR Selector </li>
		<li> If given a choice, press the "Use default" setting. </li> <img src="https://raw.githubusercontent.com/kriegisrei/kriegisrei.github.io/master/images/ntr/ntr1.png"/>
		<li> Select Version 3.6 </li>
		<li> Your screen should flash blue then Boot NTR Selector should close right after, if you press X+Y and a menu shows up you have installed it correctly! </li>
		</ol>
		<h2> Installing game plugins. </h2>
		<ol>
		<li> Make a folder on SD Root called "plugin". </li>
		<li> The plugin you download should already include the title id's for you, all you need to do is drag them into the plugin folder. </li>
		<p> <img src="https://raw.githubusercontent.com/kriegisrei/kriegisrei.github.io/master/images/ntr/ntr2.png"/> </p>
		<li> If you only have a cheat.plg, you will need to make the title id folder yourself. A list of title ids can be found at <a href="http://www.3dsdb.com/">3dsdb.</a></li>
		<li>Once you are done, your layout should look like this: plugin > "title id for your game" > cheat. </li>
		<img src="https://raw.githubusercontent.com/kriegisrei/kriegisrei.github.io/master/images/ntr/ntr3.png"/>
		<li>Turn on your 3DS and make sure NTR CFW is running, you can check by pressing X+Y and if it is running a menu will pop up on the bottom screen, if it is not running, open Boot NTR Selector, select 3.6 and wait for the blue crash. </li>
		<li> Once NTR CFW is running, open the game you want to use the plugin in. </li>
		<li> While opening the game you should see the top screen flash green, this means the plugin is active. </li>
		<li> Depending on the plugin, the plugin menu can either be accessed by pressing select, or the cheats can be found in the NTR menu by pressing X+Y. </li>
		</ol>
		<p> If you want to find plugins to use, check out <a href="https://github.com/ItsDeidara/MegaNTR">MegaNTR on Github!</a> </p>
		<h2> Troubleshooting </h2>
		<p> Q: I don't see a green flash! <br /> A: Try checking the placement of your plugins</p>
		<p> Q: My placement is correct and I don't get a green flash! <br /> A: Make sure NTR is running beforehand, restart your 3DS before rerunning it. </p>
		<p> Q: This plugin doesn't work! <br /> A: Usually, this is a problem with the plugin. Try using another one. </p>
		<p> Q: BootNTR crashes when I launch it! <br /> A: Luma3DS's official release is  broken with BootNTR. Please use the Nanquitas build linked <a href="https://github.com/Nanquitas/Luma3DS/releases"> here </a/>.</p>
	
<?php
include "footer.php";
?>
