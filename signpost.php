<?php
$title = "signpost";
$desc = "where to go and how to get cool stuff for your 3ds";
include "header.php";
?>
<?php
include "nav.php";
?>
        <div class="container">
        <div class="content">
            <center><h1>eip's signpost</h1></center>
            <hr>
        <p><h3>welcome to the signpost.</h3>
        this is a place you can come when you want directions to things.
        <p>"i want to..."
        <p>
            <!-- top level divs hide or show entire section -->
        <button class="btn-toggle-visibility" data-target="#learn">learn about</button>
            <div class="box hidden" id="learn">
                <button class="btn-toggle-visibility" data-target="#L1" style="margin-left: 40px">3ds hacking</button>
                    <div class="box hidden" id="L1" style="margin-left: 60px">
                    <p>try <a href="./what">this</a> for a moderately in depth explanation of hacking and the 3ds hardware and software<br>also try <a href="http://3dbrew.org">3dbrew</a> for more depth
                </div>
                <!-- each question and answer needs an ending div, but only one, because the button is not a div -->
    <p>
                <button class="btn-toggle-visibility" data-target="#L2" style="margin-left: 40px">custom firmware and homebrew development</button>
                    <div class="box hidden" id="L2" style="margin-left: 60px">
                    <p>try joining the nintendo homebrew discord: <a href="https://discord.gg/dQgV6ZG">here</a> and ask in the #hacking-general or #dev channels
                </div>
    <p>
                <button class="btn-toggle-visibility" data-target="#L3" style="margin-left: 40px">what I can do with CFW</button>
                    <div class="box hidden" id="L3" style="margin-left: 60px">
                    <p><a href="./tips" target="_blank">what can I do with CFW?</a>
                </div>
                <!-- each section end requires two close divs, one for the preceding q+a and one for the section div -->
            </div>
    <p>
        
            <button class="btn-toggle-visibility" data-target="#do">do</button>
            <div class="box hidden" id="do">
                <button class="btn-toggle-visibility" data-target="#D1" style="margin-left: 40px">hack my 3ds family console</button>
                    <div class="box hidden" id="D1" style="margin-left: 60px">
                    <p>try <a href="https://3ds.hacks.guide/seedminer" target="_blank">seedminer</a>
                </div>
    <p>
                <button class="btn-toggle-visibility" data-target="#D2" style="margin-left: 40px">hack my pokemon</button>
                    <div class="box hidden" id="D2" style="margin-left: 60px">
                     <p>get custom firmware (try <a href="https://3ds.hacks.guide/seedminer" target="_blank">seedminer</a>), make sure you follow finalising setup, then check <a href="./pkhex">here</a> to learn to dump your save, edit your save, then reinject it
                </div>
	<p>
				<button class="btn-toggle-visibility" data-target="#D3" style="margin-left: 40px">hack my acnl town</button>
					<div class="box hidden" id="D3" style="margin-left: 60px">
					 <p>get custom firmware (try <a href="https://3ds.hacks.guide/seedminer" target="_blank">seedminer</a>), make sure you follow finalising setup, then check <a href="./acnl">here</a> to learn to dump your save, edit your save, then reinject it
				</div>
	<p>         
                <button class="btn-toggle-visibility" data-target="#D4" style="margin-left: 40px">make a safety net backup for my cfw console</button>
                    <div class="box hidden" id="D4" style="margin-left: 60px">
                     <p>
                         <ol>
                            <li>make a full nand backup through the godmode9 scripts (requires 1.1-1.5gb ish)</li>
                            <li>make a copy of essentials.exefs (found in sysnand virtual in godmode9)</li>
                            <li>make a copy of movable.sed (found in sysnand ctrnand/private in godmode9)</li>
                            <li>you can/should also copy boot9.bin and boot11.bin, found in memory virtual in godmode9</li>
                        </ol>
                            all of these should be then copied somewhere you won't lose them, eg your computer, or cloud storage, etc. after copying them to somewhere safe, they can be deleted from your console sd card to regain space
                </div>
	<p>
                <button class="btn-toggle-visibility" data-target="#D5" style="margin-left: 40px">transfer content between consoles WITHOUT a system transfer</button>
                    <div class="box hidden" id="D5" style="margin-left: 60px">
                     <p><b>THIS SHOULD ONLY BE ATTEMPTED BY ADVANCED USERS, AS IT MAY HAVE UNINTENDED CONSEQUENCES.</b> go <a href="https://www.reddit.com/r/3dshacks/comments/70gwgu/everything_you_wanted_to_know_about_the_3ds_but/" target="_blank">here</a>, section 2 F.
                </div>
	<p>
				<button class="btn-toggle-visibility" data-target="#D6" style="margin-left: 40px">play my old DS games off my sd card</button>
                    <div class="box hidden" id="D6" style="margin-left: 60px">
					<p>here's a guide on <a href="twlmenu" target="_blank">TWiLightMenu++</a>.
				</div>
	<p>
				<button class="btn-toggle-visibility" data-target="#D7" style="margin-left: 40px">system transfer from a CFW console</button>
                    <div class="box hidden" id="D7" style="margin-left: 60px">
                    <p><ol>
						<li>make sure both consoles have the latest version of Luma (this means you should hack the new one, try <a href="https://3ds.hacks.guide/seedminer" target="_blank">seedminer</a></li>
						<li>do a system transfer from the previous console to the new one</li>
						<li>when asked, do the PC method</li>
						<li>when complete, use <a href="https://github.com/ihaveamac/faketik" target="_blank">faketik</a> on the new console (put the .3dsx in sd:/3ds then run it from homebrew launcher)</li>
					   </ol>
					this will transfer over your NNID, any eshop games and all of your SD card content. because it is an official system transfer, tickets for your non-eshop content do not transfer (such as homebrew/cfw apps, custom themes and dumped games you've installed). however, running faketik regenerates these tickets so that you can use the content again. you shouldn't lose anything with this process.
                </div>
	<p>
				<button class="btn-toggle-visibility" data-target="#D8" style="margin-left: 40px">make a nand backup, but i don't have enough space</button>
                    <div class="box hidden" id="D8" style="margin-left: 60px">
                     <p><ol>
						<li>turn off your console and put your SD card in your computer</li>
						<li>open the SD card in the file explorer</li>
						<li>select the Nintendo 3DS folder, right click and select Copy</li>
						<li>go to your desktop</li>
						<li>right click and Paste your Nintendo 3DS folder there</li>
						<li>once the folder has copied to the computer, delete the Nintendo 3DS folder from your <b>SD card</b></li>
						<li>put your sd card back in your console</li>
						<li>hold Start and power it on to launch godmode9</li>
						<li>press the Home button</li>
						<li>go to Scripts and make a nand backup (your options for which script to use may vary)</li>
						<li>once the nand backup is done, turn the console off and put the SD card in your computer</li>
						<li>right click the nand backup (in gm9/out) and select Copy</li>
						<li>Paste it somewhere on your computer that you will remember</li>
						<li>delete the nand backup from your <b>SD card</b> once it has copied to the computer</li>
						<li>find your Nintendo 3DS folder <b>on your computer</b></li>
						<li>Copy it back to your <b>SD card root directory</b></li>
						<li>once it has copied, delete it <b>from your computer</b></li>
						</ol>
						you have now successfully made and stored a nand backup
                </div>
	<p>
					<button class="btn-toggle-visibility" data-target="#D9" style="margin-left: 40px">move my stuff from one SD card to another</button>
                    <div class="box hidden" id="D9" style="margin-left: 60px">
                     <p>all you need to do is make the new SD card fat32 format (if it is 32gb or below, it probably already is) and then copy everything over from the old to the new.
                </div>
	<p>
					<button class="btn-toggle-visibility" data-target="#D10" style="margin-left: 40px">"factory reset" my cfw console to sell it</button>
                    <div class="box hidden" id="D10" style="margin-left: 60px">
                     <p><b><u>IMPORTANT:</u></b> if you have an NNID with purchases linked on the console, this process WILL NOT RELEASE IT for use on another console. if you want to keep your NNID and use it on another console, you should follow the instructions in "system transfer from a cfw console" BEFORE doing this process
						<ol>
						<li>in system settings, run a system format</li>
						<li>once it's finished, put the SD card in a computer</li>
						<li>format it (if it is above 32gb, you should NOT use the built in format tool, use guiformat for windows)</li>
						<li>get <a href="https://smealum.github.io/ninjhax2/boot.3dsx" target="_blank">boot.3dsx</a> from here, and put it on the root directory</li>
						<li>get "boot.firm" out of the <b>latest release</b> from <a href="https://github.com/AuroraWright/Luma3DS/releases/latest" target="_blank">this page</a> and put it on the root directory</li>
						<li>follow <b>every instruction</b> on <a href="https://3ds.hacks.guide/finalizing-setup" target="_blank">this page</a></li>
						</ol>
						this will delete all content on your console, including games, their saves, and anything else you put on it.
                </div>
	<p>
				<!-- section end divs -->
            </div>
<?php
include "footer-btn.php";
?>