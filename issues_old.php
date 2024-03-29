<?php
$title = "Issues (even older)";
$desc = "Troubleshooting 2 (deprecated)";
include "header.php";
?>
<?php
include "nav.php";
?>
        <div class="container">
        <div class="content">
            <center><h1>Issues</h1></center>
            <hr>
        <ol>
            <li>If you have been directed here, it is because you were having issues with something.</li>
            <li>Start by clicking the method or tool you were trying to use.</li>
            <li>Then, select what best matches the issue you were having.</li>
            <li>This will open a solution. Scroll down to see it, if it does not jump there automatically.</li>
            <li>Follow the steps as they are written.</li>
            <li>If you still have issues, go back to the person who was helping you, explain what you did, and what you are still having an issue with.</li>
        </ol>
        <br><i>Issue toggle code generously "donated" by Jisagi. Everyone say "thanks Jisagi".
			   High resolution Frogtool screenshots donated by validusername16. Everyone say "thanks Valid".
			   Parts of this page created in collaboration with the crc gang. Everyone say "thanks crc".</i>
        <p>
            <center>
            <table>
                <tr>
                    <th><button class="btn-toggle-visibility" onclick="toggleIssueDivs('steel')">Steelminer/Steelhax</button></th>
                    <th><button class="btn-toggle-visibility" onclick="toggleIssueDivs('frog')">Frogtool</button></th>
				</tr>
				<tr>
					<th><button class="btn-toggle-visibility" onclick="toggleIssueDivs('fred')">Fredtool</button></th>
					<th><button class="btn-toggle-visibility" onclick="toggleIssueDivs('flip')">Flipnote</button></th>
                    <!-- <th><button class="btn-toggle-visibility" onclick="toggleIssueDivs('ntr')">NTRboot</button></th> NTRBOOT BUTTON COMMENTED OUT -->
                </tr>
				<tr>
                    <th><button class="btn-toggle-visibility" onclick="toggleIssueDivs('pic')">Pichaxx</button></th>
                    <th><button class="btn-toggle-visibility" onclick="toggleIssueDivs('bannerbomb')">BannerBomb3</button></th>
				</tr>
				<tr>
                    <th><button class="btn-toggle-visibility" onclick="toggleIssueDivs('usm')">USM</button></th>
                    <th><button class="btn-toggle-visibility" onclick="toggleIssueDivs('nbhax')">Browserhax 2020</button></th>
				</tr>
            </table>
			</center>
            <p>Clicking a solution or tool will overwrite the previous one with the one most recently clicked.
	        <br>Once you have clicked an issue, scroll down to see its solution. Once you have done the steps, try what you were doing again.
	    <!-- STEELMINER LEADING DIV -->
	<div class="box hidden" id="steel">
            <!-- ERROR TABLE -->
            <p><center>
                <table>
                <tr>
                    <td><button class="btn-toggle-visibility" onclick="singleIssueDivsSteel('steel1')"><a href="#steel1"><img src="img/steel1.png"></a></button></td>
                    <td><button class="btn-toggle-visibility" onclick="singleIssueDivsSteel('steel2')"><a href="#steel2"><img src="img/steel2.png"></a></button></td>
                </tr>
                <tr>
                    <td><button class="btn-toggle-visibility" onclick="singleIssueDivsSteel('steel3')"><a href="#steel3"><img src="img/steel3.png"></a></button></td>
                    <td><button class="btn-toggle-visibility" onclick="singleIssueDivsSteel('steel4')"><a href="#steel4"><img src="img/steel4.png"></a></button></td>
                </tr>
                <tr>
                    <td><button class="btn-toggle-visibility" onclick="singleIssueDivsSteel('steel5')"><a href="#steel5"><img src="img/steel5.png"></a></button></td>
                    <td><button class="btn-toggle-visibility" onclick="singleIssueDivsSteel('steel6')"><a href="#steel6"><img src="img/steel6.png"></a></button></td>
                </tr>
                <tr>
                    <td><button class="btn-toggle-visibility" onclick="singleIssueDivsSteel('steel7')"><a href="#steel7"><img src="img/steel7.png"></a></button></td>
                    <td><button class="btn-toggle-visibility" onclick="singleIssueDivsSteel('steel8')"><a href="#steel8">The game loads normally.</a></button></td>
                </tr>
                <tr>
                    <td><button class="btn-toggle-visibility" onclick="singleIssueDivsSteel('steel9')"><a href="#steel9"><img src="img/steel8.png"></a></button></td>
					<td><button class="btn-toggle-visibility" onclick="singleIssueDivsSteel('steel10')"><a href="#steel10">The game doesn't load at all/crashes.</button></td>
                </tr>
            </table>
			</center>
    </div>
            <p>
        <!-- BEGIN STEELMINER ITEMS -->
    <div class="box hidden" id="steel1"> <!-- steel1 div open -->
        <p><h3>An Error Has Occurred (1)</h3>Your otherapp (payload.bin) cannot be found or is for the wrong software version.
        <br>
        <ol>
            <li>Try <a href="http://deadphoenix8091.github.io/3ds/#otherapp">redownloading your otherapp file</a>, ensuring it is for your correct software version and console region. In most cases, this will be 11.10.0-42X (where X indicates console region), but you should double check in System Settings.</li>
            <li>Second, ensure that the files are named correctly. See the below screenshots:
            <br><img src="img/bin1.png">
            <br><img src="img/bin2.png">
            <br>If your rop and code both have the .bin extension, so must the payload. If your rop and code do not have the .bin extension displayed, the payload must not either. (In the first situation, file extensions are turned on. In the second, they are hidden. Either way, the files still have the .bin extension, it's just that in one it's not shown and in the other it is.)</li>
            <li>Where is your steelhax folder? It should be in your root directory, <b>NOT inside "Nintendo 3DS" or any other folder</b>. It must also be named "steelhax". The folder path should look like this:
            <br><img src="img/bin4.png"></li>
        </ol>
    </div> <!-- div end -->
    <div class="box hidden" id="steel2"> <!-- div open -->
        <p><h3>An Error Has Occurred (2)</h3>Your modified save file is invalid or cannot be found.
        <br>
            <ol>
            <li>To start, check that you have the save file <b>named correctly</b> and <b>in the right directory</b>. If you need a reminder, see here.
            <p><img src="img/bin3.png">
            <br><u>Note: the circled directories in this image will likely be different for you. Directory 1 is your id0, directory 2 is your id1, and directory 3 is your region folder. This is just to show you the directory structure.</u></li>
            <li>The save file must be named 00000001.sav, exactly. If the .sav extension does not appear, it is possible you may have file extensions turned off.</li>
            </ol>
    </div> <!-- div end -->
    <div class="box hidden" id="steel3"> <!-- div open -->
        <p><h3>Blank Screen</h3>Your payload is for the wrong system type. Identify your system below.
        <p><img src="img/newold.png">
        <p>If you have selected the wrong system type, go back <a href="http://deadphoenix8091.github.io/3ds/#otherapp">here</a> and get the right one.
    </div> <!-- div end -->
    <div class="box hidden" id="steel4"> <!-- div open -->
        <p><h3>An Exception Occurred</h3>You already have Custom Firmware. You should not be launching Homebrew through Steel Diver. Ask here for more support: <a href="https://discord.gg/dQgV6ZG">Nintendo Homebrew</a>
    </div> <!-- div end -->
    <div class="box hidden" id="steel5"> <!-- div open -->
        <p><h3>Red Screen</h3>You are missing boot.3dsx in your root directory, or it is named wrong, or it is not being read. Get it <a href="https://github.com/fincs/new-hbmenu/releases/latest">here</a>, and if that still fails, check your SD card for <a href="sderrors">errors.</a>
    </div> <!-- div end -->
    <div class="box hidden" id="steel6"> <!-- div open -->
        <p><h3>Yellow Screen</h3>This is a crash. Sometimes Steel Diver will crash a few tries before working. If you get 10 or more crashes, try redownloading the payload (otherapp).
    </div> <!-- div end -->
    <div class="box hidden" id="steel7"> <!-- div open -->
        <p><h3>Corrupted Save Data</h3>You have the Steel Diver update installed.
            <ol>
                <li>Go to System Settings > Data Management > Add Ons/Downloadable Content (varies by region). Find Steel Diver in that list and delete it from there.</li>
                <li>You will need to copy your 00000001.sav again. Try again, and do <b>not</b> update the software when asked.</li>
                <li>It is also possible that you selected the wrong region when making your save. Make your save again in the way your guide instructs you and replace it in the relevant directory..</li>
            </ol>
    </div> <!-- div end -->
    <div class="box hidden" id="steel8"> <!-- div open -->
        <p><h3>Normal Game</h3>You have the Steel Diver update installed.
            <ol>
                <li>Go to System Settings > Data Management > Add Ons/Downloadable Content (varies by region). Find Steel Diver in that list and delete it from there.</li>
                <li>You will need to copy your 00000001.sav again. Try again, and do <b>not</b> update the software when asked.</li>
                <li>It is also possible that you selected the wrong region when making your save. Make your save again in the way your guide instructs you and replace it in the relevant directory.</li>
            </ol>
    </div> <!--div end -->
    <div class="box hidden" id="steel9">
        <p><h3>Looking for Software</h3>The inject process did not complete successfully.
            <ol>
                <li>Exit this screen and go back into the Homebrew Menu.</li>
                <li>Load Frogtool.</li>
                <li>Press Inject again.</li>
                <li>Read the top screen with the white text.</li>
                <li>If it says a file is missing, corrupted or could not be read, turn off your console, replace that file and try again.</li>
            </ol>
    </div>
	<div class="box hidden" id="steel10">
		<p><h3>Crash</h3>This indicates a problem with your files, usually your payload or your modified save file.
		<br>You should remake these files using the resources given in the guide, making sure that the payload is for the correct type ("new"/"old"), and system version and region, and your save file is created using the correct movable.sed and region.
	</div>
	    <!-- STEELMINER END BLOCK DIV no longer required? -->	    
		
	    <!-- FROGMINER LEADING DIV -->
		<center>
		<div class="box hidden" id="frog">
	        <p>First of all, what does your Frogtool look like? Take particular note of the version.
	        <p><button class="btn-toggle-visibility" onclick="singleIssueDivsFrog('update')"><a href="#update"><img src="img/frog1.png"></a></button>
	        <p><button class="btn-toggle-visibility" onclick="singleIssueDivsFrog('update')"><a href="#update"><img src="img/frog2.png"></a></button>
		    <p><button class="btn-toggle-visibility" onclick="singleIssueDivsFrog('update')"><a href="#update"><img src="img/frog3.png"></a></button>
			<p><button class="btn-toggle-visibility" onclick="singleIssueDivsFrog('update')"><a href="#update"><img src="img/frog4.png"></a></button>
		    <p><button class="btn-toggle-visibility" onclick="singleIssueDivsFrog('frogtable')"><a href="#frogtable"><img src="img/frog5.png"></a></button>
		</div>
	<div class="box hidden" id="update">
		      <p><h3>Your Frogtool is out of date.</h3>Go back to your guide and get it again.
		      <br>"But my Frogtool isn't out of date!" Yes it is. Trust me. Go back and do the steps again. Or, maybe the guide is out of date. Try <a href="./frogminer">my one.</a>
	</div>
	<div class="box hidden" id="frogtable">
		      <table>
		          <tr>
		              <td><button class="btn-toggle-visibility" onclick="singleIssueDivsFrogTable('frog1')"><a href="#frog1">Failed to open sdmc:/frogcert.bin</a></button></td>
		              <td><button class="btn-toggle-visibility" onclick="singleIssueDivsFrogTable('frog2')"><a href="#frog2">Failed to open sdmc:/movable.sed</a></button></td>
		          </tr>
		          <tr>
		              <td><button class="btn-toggle-visibility" onclick="singleIssueDivsFrogTable('frog3')"><a href="#frog3">Looking for available software to download...</a></button></td>
		              <td><button class="btn-toggle-visibility" onclick="singleIssueDivsFrogTable('frog4')"><a href="#frog4">Red screen when launching Frogtool</a></button></td>
		          </tr>
				  <tr>
					  <td><button class="btn-toggle-visibility" onClick="singleIssueDivsFrogTable('frog5')"><a href="#frog5">Green screen after JPN Flipnote</a></button></td>
				  </tr>
		      </table>
			  
	</div>
	</center>
		      <!-- BEGIN FROGMINER ITEMS -->
	<div class="box2 hidden" id="frog1">
        <br><h3>Frogcert Missing</h3>You are missing frogcert.bin. It must be in your root directory. Reread the guide you were using to find how to get it. If your guide does not mention frogcert.bin, find an updated guide (I have one if you need it <a href="frogminer">here</a>)
	</div>
	<div class="box2 hidden" id="frog2">
        <br><h3>Missing Movable</h3>You are missing movable.sed. It must be in your root directory. Reread the guide you were using to find how to get it. If your guide does not mention movable.sed, find an updated guide (I have one if you need it <a href="frogminer">here</a>)
    </div>
    <div class="box2 hidden" id="frog3">
        <br><h3>Looking for Software</h3>The inject process did not complete successfully.
            <ol>
                <li>Exit this screen and go back into the Homebrew Menu.</li>
                <li>Load Frogtool.</li>
                <li>Press Inject again.</li>
                <li>Read the top screen with the white text.</li>
                <li>If it says a file is missing, corrupted or could not be read, turn off your console, replace that file and try again.</li>
            </ol>
	</div>
	<div class="box2 hidden" id="frog4">
        <br><h3>Mismatch</h3>You may have launched "._Frogtool.3dsx", a ghost file made by MacOS. Double check this.<br>You may also already have CFW. Ask here for more support: <a href="https://discord.gg/dQgV6ZG">Nintendo Homebrew</a>
	</div>
	<div class="box2 hidden" id="frog5">
		<br><h3>Green Screen</h3>Likely, you are missing b9stool in the root, or "boot.nds". You should refer back to your guide and get the latest release of this tool.<br>If you are sure that it is there, your SD card may also be bad. Try testing it <a href="sderrors">here.</a>
	</div>
		  <!-- Tentatively fixed div issues by using an actual editor rather than my hosting provider's shitty one. -->
		  
		  <!-- FROGMINER END DIV no longer required?-->
		  
		  <!-- fredminer leading div -->
	<div class="box hidden" id="fred">
	<p><center>
                <table>
                <tr>
                    <td><button class="btn-toggle-visibility" onclick="singleIssueDivsFred('fred1')"><a href="#fred1">Green screen after using JPN Flipnote</a></button></td>
                    <td><button class="btn-toggle-visibility" onclick="singleIssueDivsFred('fred2')"><a href="#fred2">"Haxxxxxxxx!" file not found in list on console</a></button></td>
                </tr>
                <tr>
                    <td><button class="btn-toggle-visibility" onclick="singleIssueDivsFred('fred3')"><a href="#fred3">DS Connection Settings is black after inject</a></button></td>
                    <td><button class="btn-toggle-visibility" onclick="singleIssueDivsFred('fred4')"><a href="#fred4">Fredtool unable to complete request</a></button></td>
                </tr>
				<tr>
					<!-- <td><button class="btn-toggle-visibility" onclick="singleIssueDivsFred('fred5')"><a href="#fred5">Lenny face missing in JPN Flipnote</a></button></td> -->
					<td><button class="btn-toggle-visibility" onclick="singleIssueDivsFred('fred6')"><a href="#fred6">I see blue and orange boxes</a></button></td>
				</tr>
				</table>
				</center>
	</div>
	<!-- fredminer issue div -->
	<div class="box2 hidden" id="fred1">
		<br><h3>Green Screen</h3>Likely, you are missing b9stool in the root, or "boot.nds". You should refer back to your guide and get the latest release of this tool.<br>If you are sure that it is there, your SD card may also be bad. Try testing it <a href="sderrors">here.</a>
	</div>
	<div class="box2 hidden" id="fred2">
		<p><h3>Missing Hax</h3>There could be several reasons for this.
		<ol>
			<li>You did not copy the patched DSiWare bin back to your SD card.</li>
			<li>You did not copy it back to the "Nintendo DSiWare" folder on your SD card.</li>
			<li>You mistakenly copied back the clean version.</li>
			<li>The file is not named correctly.</li>
			<li>The file is corrupted.</li>
		</ol>
		<br>In any case, the fix for this issue is simple: go back and make sure you copy over the <b>patched</b> DSiWare from fredtool_output/hax to the correct place on your SD card.
	</div>
	<div class="box2 hidden" id="fred3">
		<br><h3>Black Screen</h3>This may indicate that your TWLfirm is unusable. Ordinarily, this would have been ruled out at the beginning of the guide with a TWLfirm test. You should try to copy over the patched DSiWare again, in case it was a bad copy. Failing that, ask for help on the <a href="https://discord.gg/dQgV6ZG">Nintendo Homebrew</a> Discord.
	</div>
	<div class="box2 hidden" id="fred4">
		<br><h3>Fredtool</h3>Generally, the only reason Fredtool will fail is if the movable is incorrect for the DSiWare provided, or if the DSiWare is incorrect for the movable provided. Check your inputs and be sure you are not getting the wrong movable matched up with the wrong DSiWare.<br>Another common cause is that you downloaded "movable_part1.sed" and renamed it "movable.sed". This will not work. Go back to bruteforcemovable and click the green "Continue" button, then download the movable.sed and try again. Failing that, ask for help on the <a href="https://discord.gg/dQgV6ZG">Nintendo Homebrew</a> Discord.
	</div>
	<!-- <div class="box2 hidden" id="fred5">
		<p><h3>Missing Lenny</h3>You're missing the "private" folder from your root directory. Allow me to explain.
		<p><img src="img/priv.png"> <i>This IS correct.</i>
		<p>This folder path is correct, and how your folder path should look when you open it. The "private" folder goes on your SD root, by itself.
		<br>Here are some common mistakes. These are <b>NOT</b> correct.
		<p><img src="img/priv2.png"> <i>This is NOT correct.</i>
		<p><img src="img/priv3.png"> <i>This is NOT correct.</i>
		<p>These are examples only. There are many ways to screw this up. The first image is the only correct folder path. Make sure yours matches it.
	</div> -->
	<div class="box2 hidden" id="fred6">
		<br><h3>Normal Launch</h3>If you see a blue box and an orange box, you have launched the regular DS Connection Settings.
		<ol>
			<li>Power off your console and put the SD card in a computer.</li>
			<li>Find your "fredtool_output" folder that you got from the Fredtool website.</li>
			<li>Open the "hax" folder.</li>
			<li>Right click the .bin file and Copy it.</li>
			<li>On your SD card, go to Nintendo 3DS > [your id0] > [your id1] > Nintendo DSiWare.</li>
			<li>Right click inside Nintendo DSiWare and Paste your .bin file.</li>
			<li>Safely eject your SD card and put it back in your console.</li>
			<li>Open System Settings > Data Management > DSiWare.</li>
			<li>In the SD card section, select the "Haxxxxxxxx!" title.</li>
			<li>Select Copy, then OK.</li>
			<li>Attempt launching DS Connection Settings again.</li>
			<li>If you see JPN Flipnote, go back to your guide and continue where you left off.</li>
		</ol>
		If you still have issues, ask for help on the <a href="https://discord.gg/dQgV6ZG">Nintendo Homebrew</a> Discord.
	</div>
		<!-- begin flipnote section -->
	<div class="box hidden" id="flip">
            <!-- ERROR TABLE -->
            <p><center>
                <table>
                <tr>
                    <td><button class="btn-toggle-visibility" onclick="singleIssueDivsFlip('flip1')"><a href="#flip1">Missing Lenny face</a></button></td>
                    <td><button class="btn-toggle-visibility" onclick="singleIssueDivsFlip('flip2')"><a href="#flip2">App seems to be frozen</a></button></td>
				</tr>
				<tr>
					<td><button class="btn-toggle-visibility" onclick="singleIssueDivsFlip('flip3')"><a href="#flip3">White screen when merging frames</a></button></td>
					<td><button class="btn-toggle-visibility" onclick="singleIssueDivsFlip('flip4')"><a href="#flip4">Green screen when merging frames</a></button></td>
				</tr>
				<tr>
					<td><button class="btn-toggle-visibility" onclick="singleIssueDivsFlip('flip5')"><a href="#flip5">I have two 'private' folders</a></button></td>
                </tr>
				</table>
				</center>
	</div>
		<!-- flip issue divs -->
	<div class="box2 hidden" id="flip1">
		<br><h3>Lenny on Vacation</h3>You're missing the "T00031_1038C2A757B77_000.ppm" file from a specific place on your SD card. Allow me to explain.
		<p><img src="img/priv.png"> <i>This IS correct.</i>
		<p>This folder and file path is correct, and how your folder should look when you open it. The "private" folder goes on your SD root, by itself.
		<br>Here are some common mistakes. These are <b>NOT</b> correct.
		<p><img src="img/priv2.png"> <i>This is NOT correct.</i>
		<p><img src="img/priv3.png"> <i>This is NOT correct.</i>
		<p>These are examples only. There are many ways to screw this up. The first image is the only correct folder and file path. Make sure yours matches it.
		<br><a href="https://github.com/zoogie/Frogminer/releases/tag/v1.0">Here's where you can get the .ppm file.</a>
	</div>
	<div class="box2 hidden" id="flip2">
		<br><h3>Frozen!</h3>There's a pretty good chance you've accidentally drawn on the notes before merging the two glitched notes together.
		<p><ol>
			<li>Close the application. You might be able to press Home, and close it normally. If you can't, hold the Power button until the console dies.</li>
			<li>Power back on.</li>
			<li>If you are using Frogtool, launch Download Play.<br>If you are using Fredtool, go to System Settings > Internet Settings > DS Connection Settings.</li>
			<li>You should now see Japanese Flipnote again. Follow the steps again and be careful not to draw on the notes before merging them.</li>
			</ol>
	</div>
	<div class="box2 hidden" id="flip3">
		<br><h3>Whiteout</h3>Something's up with your files. You should replace b9stool (boot.nds) on your SD card root, as it may be corrupted.<br>If that doesn't fix it, have a look at <a href="./sderrors">this</a>.<br>If that still doesn't fix it, or the test returns problems, you should switch SD cards.
	</div>
	<div class="box2 hidden" id="flip4">
		<br><h3>Green Screen</h3>Likely, you are missing b9stool in the root, or "boot.nds". You should refer back to your guide and get the latest release of this tool.<br>If you are sure that it is there, your SD card may also be bad. Try testing it <a href="sderrors">here.</a>
	</div>
	<div class="box2 hidden" id="flip5">
		<br><h3>Missing Lenny 2</h3>The most common cause of this problem is that you are using a Chromebook or a Macbook/MacOS device. Let me explain a bit here.
		<br>Every operating system handles merging folders of the same name differently. On Windows, merging two folders will cause Windows to compare the contents and ask you which set you want to keep if any conflict.
		<br>On MacOS and Chromebooks, trying to move a "private" folder to a place where there is already a "private" folder will rename the new folder "private-2".
		<br>Here is an illustration of what this might look like.
		<p><img src="./img/flip1.png">
		<p>In this image, <div class="code">Set 1</div> is the already-existing "private" folder. <div class="code">Set 2</div> is the new "private" folder that you are trying to use for the Flipnote exploit.
		<br>What you need to do is to delete the files in <div class="code">Set 1</div> (dirmemo.lst, mark0.pls, etc) so that the "001" folder is empty.
		<br>Then, take the "T00031[...].ppm" file from <div class="code">Set 2</div> and put it in the "001" folder in <div class="code">Set 1</div>. Here is how it might look.
		<p><img src="./img/flip2.png">
		<p>Once you have put the .ppm file in the right place, you can try launching the Flipnote exploit again.
	</div>
	
		<!-- PIC LEADING DIV -->
	<div class="box hidden" id="pic"><center>
	    <table>
	        <tr>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsPic('pic1')"><a href="#pic1">Yellow screen</a></button></td>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsPic('pic2')"><a href="#pic2">Red screen</a></button></td>
	        </tr>
	        <tr>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsPic('pic3')"><a href="#pic3">Game launches normally</a></button></td>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsPic('pic4')"><a href="#pic4">Game crashes</a></button></td>
	        </tr>
	        <tr>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsPic('pic5')"><a href="#pic5">Error screen: white background</a></button></td>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsPic('pic6')"><a href="#pic6">Error screen: black background</a></button></td>
		</tr>
		<tr>
		    <td><button class="btn-toggle-visibility" onclick="singleIssueDivsPic('pic7')"><a href="#pic7">Error Failed to locate takeover object</a></button></td>
		</tr>
		</table>
		</center>
		</div>
		<!-- PIC ISSUE DIVS -->
	<div class="box hidden" id="pic1">
	<h3>Crash</h3>
	<br>A simple crash. Close out to the home menu and try again. If you get more than 10 of these in a row, replace your otherapp and sav file.
		</div>
	<div class="box hidden" id="pic2">
	<h3>Missing boot.3dsx</h3>
	<br>You're missing boot.3dsx (the Homebrew launcher) from the root of your SD card, or you have misplaced it somewhere other than the root. Put boot.3dsx on the SD root.
		</div>
	<div class="box hidden" id="pic3">
	<h3>Normal launch</h3>
	<br>You either misplaced the sav file, or it's not correct. Try generating it again using your movable from Seedminer, and then put it on your SD card in Nintendo 3DS > ID0 > ID1 > title > 00040000 > 0017c100 > data
		</div>
	<div class="box hidden" id="pic4">
	<h3>Crash</h3>
	<br>Your otherapp or sav file is incorrect, misplaced or misnamed. The otherapp.bin goes on the root of the SD card and should be named "otherapp.bin". Make sure you got the otherapp for your correct version and region.
	<br>The sav file from the Pichaxx injector goes on the SD card in Nintendo 3DS > ID0 > ID1 > title > 00040000 > 0017c100 > data
		</div>
	<div class="box hidden" id="pic5">
	<h3>Missing Payload</h3>
	<br>Your otherapp is incorrect, misplaced or misnamed. The otherapp.bin goes on the root of the SD card and should be named "otherapp.bin", or if it is just called "payload", then just "otherapp". Make sure you got the otherapp for your correct version and region.
		</div>
	<div class="box hidden" id="pic6">
	<h3>Missing .sav</h3>
	<br>Your sav file is incorrect, misplaced or misnamed. The sav file should be on the SD card in Nintendo 3DS > ID0 > ID1 > title > 00040000 > 0017c100 > data
		</div>
	<div class="box hidden" id="pic7">
	<h3>Wrong Otherapp</h3>
	<br>Your otherapp is for the wrong type of console, Make sure you have the otherapp for your console type (NEW or OLD)
		</div>
		<!-- BB3 LEADING DIV -->
	<div class="box hidden" id="bannerbomb"><center>
	    <table>
	        <tr>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsBannerbomb('bb1')"><a href="#bb1">App doesn't crash</a></button></td>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsBannerbomb('bb2')"><a href="#bb2">App crashes, but not magenta</a></button></td>
	        </tr>
	        <!-- <tr>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsBannerbomb('bb3')"><a href="#bb3">Game launches normally</a></button></td>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsBannerbomb('bb4')"><a href="#bb4">Game crashes</a></button></td>
	        </tr> -->
		</table>
		</center>
		</div>
		<!-- bb3 ISSUE DIVS -->
	<div class="box hidden" id="bb1">
	<h3>No crash</h3>
	<br>Usually, this error is caused by the exploit DSiWare (F00D43D5.bin) being misplaced.
	<p><img src="img/bb1.png">
	<p>This is an example of an <b>incorrect</b> placement. In this example, the 30ff... folder, outlined in blue, is the ID0. The c7aa... folder, outlined in red, is the ID1. The Nintendo DSiWare folder must be INSIDE the ID1.
	<p><img src="img/bb2.png">
	<p>This is another example of <b>incorrect</b> placement. Here, the exploit DSiWare (F00D43D5.bin) exists, but is not placed in the DSiWare folder.
	<p><img src="img/bb3.png">
	<p>This example is <b>correct</b> placement. The exploit DSiWare exists, is in the right folder, and the folder is inside the ID0 and ID1.
		</div>
	<div class="box hidden" id="bb2">
	<h3>General crash</h3>
	<br>Usually, this is caused by trying to use the exploit DSiWare (F00D43D5.bin) with Fredtool. You have to use the exploit DSiWare to get a proper DSiWare dump, and the dump you get from that process is the dump you use with Fredtool.
	<br>Have another read of the <a href="./bb3">BannerBomb3</a> guide and do the process properly.
	<br>Also, ensure that the exploit DSiWare (F00D43D5.bin) is the only .bin file in your Nintendo DSiWare folder. Having more than one DSiWare in there can sometimes mess up the exploit.
		</div>
	<!-- <div class="box hidden" id="bb3">
		</div>
	<div class="box hidden" id="bb4">
		</div> -->
		<!-- USM LEADING DIV -->
	<div class="box hidden" id="usm"><center>
	    <table>
	        <tr>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsUSM('usm1')"><a href="#usm1">Data Management does nothing/is empty</a></button></td>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsUSM('usm2')"><a href="#usm2">Safe Mode doesn't do what it's meant to</a></button></td>
	        </tr>
	        <tr>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsUSM('usm3')"><a href="#usm3">Data Management crashes, but without flashing</a></button></td>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsUSM('usm4')"><a href="#usm4">Can't boot Safe Mode</a></button></td>
	        </tr>
		</table>
		</center>
		</div>
		<!-- USM ISSUE DIVS -->
	<div class="box hidden" id="usm1">
	<h3>No crash</h3>
	<br>Usually, this error is caused by the exploit DSiWare (F00D43D5.bin) being misplaced.
	<p><img src="img/bb1.png">
	<p>This is an example of an <b>incorrect</b> placement. In this example, the 30ff... folder, outlined in blue, is the ID0. The c7aa... folder, outlined in red, is the ID1. The Nintendo DSiWare folder must be INSIDE the ID1.
	<p><img src="img/bb2.png">
	<p>This is another example of <b>incorrect</b> placement. Here, the exploit DSiWare (F00D43D5.bin) exists, but is not placed in the DSiWare folder.
	<p><img src="img/bb3.png">
	<p>This example is <b>correct</b> placement. The exploit DSiWare exists, is in the right folder, and the folder is inside the ID0 and ID1.
		</div>
	<div class="box hidden" id="usm2">
	<h3>Safe Mode too safe</h3>
	<br>Usually, the only way to cause this is by not having followed the guide correctly. Ensure that DSiWare Data Management crashes into a RED screen and that 'usm.bin' is on the root directory of your SD card when you boot Safe Mode.
		</div>
	<div class="box hidden" id="usm3">
	<h3>Crash</h3>
	<br>Have you ever uninstalled CFW before? If so, try <a href="./twlfix">TWLfix</a>, then try USM again.
		</div>
	<div class="box hidden" id="usm4">
	<h3>Won't boot</h3>
	<br>If you can't boot to Safe Mode, either one or more of your buttons are broken, or you're not holding them right. Safe Mode is a function of all 3DS family consoles and cannot be overridden or deleted.
		</div>
		<!-- BROWSERHAX LEADING DIV -->
	<div class="box hidden" id="nbhax"><center>
	    <table>
	        <tr>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsBrowserhax('nbhax1')"><a href="#nbhax1">Freezing on a yellow screen</a></button></td>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsBrowserhax('nbhax2')"><a href="#nbhax2">Freezing on a red screen</a></button></td>
	        </tr>
	        <tr>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsBrowserhax('nbhax3')"><a href="#nbhax3">Freezing on a dark orange screen</a></button></td>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsBrowserhax('nbhax4')"><a href="#nbhax4">Crashes after a yellow screen</a></button></td>
	        </tr>
	        <tr>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsBrowserhax('nbhax5')"><a href="#nbhax5">Crashes after a grey screen</a></button></td>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsBrowserhax('nbhax6')"><a href="#nbhax6">Freezing on a hot pink screen/"An exception occured"</a></button></td>
	        </tr>
	        <tr>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsBrowserhax('nbhax7')"><a href="#nbhax7">Crashes after a dark orange screen</a></button></td>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsBrowserhax('nbhax8')"><a href="#nbhax8">Crashes with no colored screen</a></button></td>
	        </tr>
	        <tr>
	            <td><button class="btn-toggle-visibility" onclick="singleIssueDivsBrowserhax('nbhax9')"><a href="#nbhax9">"Duplicate removed without crash"</a></button></td>
	        </tr>
		</table>
		</center>
		</div>
		<!-- BOWSERHAX (browser but its like bowser get it?) ISSUE DIVS -->
	<div class="box hidden" id="nbhax1">
	<h3>Crash</h3>
	<br>A common, simple crash. Just try again.
		</div>
	<div class="box hidden" id="nbhax2">
	<h3>Missing boot.3dsx</h3>
	<br>You're missing boot.3dsx (the Homebrew launcher) from the root of your SD card, or you have misplaced it somewhere other than the root. Put boot.3dsx on the SD root.
		</div>
	<div class="box hidden" id="nbhax3">
	<h3>A new/old oopsie</h3>
	<br>You've got the wrong browserhax files for your system. Go back to the guide and get the correct ones. NEW/OLD consoles can be differentiated by the small c-stick next to the ABYX buttons. 
	<p><img src="img/newold.png">
		</div>
	<div class="box hidden" id="nbhax4">
	<h3>Browserhax files not on root</h3>
	<br>Your browserhax files are in the wrong place. They should be alongside your Nintendo 3DS folder on the root of your SD card. 
	<p><img src="https://i.imgur.com/N5AwZta.jpeg"> 
		</div>
	<div class="box hidden" id="nbhax5">
	<h3>Messed up extraction</h3>
	<br>You are missing the browserhax payload file. Delete the arm11code.bin from your SD cards root and replace it with the files for your region from the browserhax archive.
		</div>
	<div class="box hidden" id="nbhax6">
	<h3>CFW? Already?</h3>
	<br>You already have CFW. You should not be doing another guide for CFW. Confused? <a href="https://discord.gg/dQgV6ZG">Join the Nintendo Homebrew Discord server. We'll help you out.</a> 
		</div>
	<div class="box hidden" id="nbhax7">
	<h3>Wrong region</h3>
	<br>You have the wrong files for your consoles region. Go back to your browserhax archive and get the right ones. Remember the letter at the end of your system firmware version. U = USA, E = EUROPE, J = JAPAN.
		</div>
	<div class="box hidden" id="nbhax8">
	<h3>Clear your history and cookies</h3>
	<br>Sometimes Browserhax 2020 can be stupid. Open your 3DS' console's browser settings, clear the browser history, and delete the cookies. Afterwards, scan the qr code again.
		</div>
	<div class="box hidden" id="nbhax9">
	<h3>Removed without crash</h3>
	<br>Exploit failed. Just try again!
		</div>
		<!-- NTRBOOT LEADING DIV -->
	<div class="box hidden" id="ntr">
        <p><center>You got me! There's nothing here yet.</center>
        
        <!-- NTRBOOT END DIV -->
	</div>
	<br>
	<br>
	<br>
<?php
include "footer.php";
?>