<?php
$title = "3DS Fixer's Bible";
$desc = "the holy bible of fixing a 3ds when it's hacked/being hacked";
include "header.php";
?>
	<!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<?php
include "nav.php";
?>
        <div class="container">
        <div class="content">
            <center><h1>eip's Troubleshooting Bible</h1></center>
            <hr>
        <p><div class="blue-inline">This page is intended to collect, collate and maintain a list of solutions to common problems.
		<br>This list is not exhaustive, and will likely be added to on a semi regular basis.
		<br>Parts of this page written and created in collaboration with crc gang.
		<br>See also: <a href="./issues" target="_blank">CFW install issues</a>
		<br>See also: <a href="./sd" target="_blank">SD card issues</a></div>
		<br><div class="info-inline">Please read carefully and ensure you understand the instructions. Any processes marked [ADVANCED] should be performed only under guidance.</div>
		<br><div class="warning-inline">Some of the processes on this page are potentially destructive. Use caution and common sense.
		<br>If you need help or do not understand anything, ask us for help: <a href="https://discord.gg/dQgV6ZG" target="_blank">Nintendo Homebrew</a></div>
		<p>
    <div id="page-content-wrapper">
		<div class="container-fluid fade show active" id="operations">
		<div class="accordion" id="accordionOperations">
			<div class="card">
				<div class="card-header" id="e1">
				<h2 class="mb-0">
				<button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				<b>[1]</b> Console boots to black screen after installing boot9strap (with payload access)
				</button>
				</h2>
				</div>
				<div id="collapseOne" class="collapse" aria-labelledby="e1" data-parent="#accordionOperations">
				<div class="card-body">
				There are four processes below. Follow them starting from the top. If any one fixes your issue, there is no need to proceed to the next one.
				<p><ul>
					<li>The Luma Black Screen Bug</li>
						<ol>
						<li>Power off the console.</li>
						<li>Remove any game cartridge, if one is inserted. Leave the SD card in.</li>
						<li>Power on the console.</li>
						<li>Leave the console powered on, and open, for 15 minutes. Do not touch the console during this time.</li>
						<li>If the console still did not boot, see the next item.</li>
						</ol>
					<li>Deleting Home Menu extdata</li>
						<ol>
						<li>Navigate to the following folder on your SD card: <div class="code">sd:/Nintendo 3DS/(32 Character ID)/(32 Character ID)/extdata/00000000</li>
						<li>Delete the folder relevant to your region.
						<br>USA: 0000008f
						<br>EUR: 00000098
						<br>JPN: 00000082
						<br>KOR: 000000A9</li>
						<li>Try booting again. If the console still did not boot, see the next item.</li>
						</ol>
					<li>Deleting Home Menu theme data</li>
						<ol>
						<li>Navigate to the following folder on your SD card: <div class="code">sd:/Nintendo 3DS/(32 Character ID)/(32 Character ID)/extdata/00000000</li>
						<li>Delete the folder relevant to your region.
						<br>USA: 000002cd
						<br>EUR: 000002ce
						<br>JPN: 000002cc</li>
						<li>Try booting again. If the console still did not boot, see the next item.</li>
						</ol>
					<li>CTRTransfer</li>
						<ol>
						<li>See the 3ds.hacks.guide page <a href="https://3ds.hacks.guide/ctrtransfer.html" target="_blank">here.</a></li>
						<li>Try booting the console again. If this still did not fix your issue, see Manual CTRTransfer in the next cell below this one.</li>
					</ul>
	
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e2">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				<b>[2]</b> Manual CTRTransfer [ADVANCED]
				</button>
				</h2>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="e2" data-parent="#accordionOperations">
				<div class="card-body">
				<div class="warning-inline">This is an advanced process which should only be used after all other options have been exhausted.
				<br>Do not attempt this process by yourself. Ask us for help: <a href="https://discord.gg/dQgV6ZG" target="_blank">Nintendo Homebrew</a></div>
				<p><ol>
					<li>Power off the console and remove the SD card. Connect it to your computer.</li>
					<li>Go to <a href="https://3ds.hacks.guide/ctrtransfer.html#what-you-need" target="_blank">this page</a> and download the CTRTransfer image for your device type and region. You will need a torrent client.</li>
					<li>If you do not already have GodMode9 on your SD card, take the time to get it now.</li>
					<li>Once the CTRTransfer image is downloaded, place the CTRTransfer .bin and .bin.sha files in sd:/gm9/out</li>
					<li>Right click on <a href="./assets/manual_transfer.gm9">this link</a> and select "Save As", "Save Target As", "Save Link As" or similar. It should give you a file called "manual_transfer.gm9".</li>
					<li>Locate this file on your computer, then copy it to your SD card root directory.</li>
					<li>Put your SD card back in your console.</li>
					<li>Power the console on while holding START.</li>
					<li>You should boot into GodMode9. Once you do, locate <div class="code">[S:] SYSNAND VIRTUAL</div> and select it with A.</li>
					<li>Locate <div class="code">essential.exefs</div>. Select it with A, then select <div class="code">Copy to 0:/gm9/out</div></li>
					<li>Once this is done, go back to the GodMode9 main window, then locate <div class="code">[0:] SDCARD</div> and select it with A.</li>
					<li>Locate the "manual_transfer.gm9" file you put on the SD card previously. <i>If you have a lot of files on the card, try scrolling with Left/Right on the D-Pad.</i></li>
					<li>Select this file, then select <div class="code">Execute Script</div>.</li>
					<li>Wait for the script to complete.</li>
					</ol>
					<p>If this does not fix your console, you may be experiencing a hardware issue or a serious software issue which will require further attention. Need a hand? Ask us for help: <a href="https://discord.gg/dQgV6ZG" target="_blank">Nintendo Homebrew</a>
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e3">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				<b>[3]</b> Recovery Mode/Safe Mode Update
				</button>
				</h2>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="e3" data-parent="#accordionOperations">
				<div class="card-body">
				This can be used for most general circumstances and should not be destructive. Use cases: random crashes, broken titles, console not booting after suggested fixes
				<p>
				<ol>
					<li>Turn the console off.</li>
					<li>Hold the following buttons: [Left Shoulder, Right Shoulder, D-Pad Up, A] then power the console on.</li>
					<li>This should boot you into Safe Mode. It should prompt a system update. It will require access to the Internet.</li>
					<li>Accept the update.</li>
				</ol>				
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e4">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				<b>[4]</b> Remove Home Menu Management information from CTRNand
				</button>
				</h2>
				</div>
				<div id="collapseFour" class="collapse" aria-labelledby="e4" data-parent="#accordionOperations">
				<div class="card-body">
				This process may reset your Home Menu data, such as theme orders, folders and notifications. Use cases: console not booting after suggested fixes
				<p><ol>
					<li>Turn the console off.</li>
					<li>Hold the following buttons: [Left Shoulder, Right Shoulder, D-Pad Down, B] then power the console on.</li>
					<li>The console should boot to home menu.</li>
				</ol>
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e5">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
				<b>[5]</b> Delete system save data [ADVANCED]
				</button>
				</h2>
				</div>
				<div id="collapseFive" class="collapse" aria-labelledby="e5" data-parent="#accordionOperations">
				<div class="card-body">
				<div class="warning-inline">This process is destructive and should not be attempted without guidance.</div>
				<p>
				This process will reset your system save data, which will include any Miis you have made and your friend list.
				<br>This should generally not be attempted unless you have been advised to perform this process. Use cases: console not booting after suggested fixes
				<p><ol>
					<li>Boot your system to GodMode9 by holding START during boot.</li>
					<li>Navigate to <div class="code">[1:] SYSNAND CTRNAND > data</div></li>
					<li>In this folder, there should be another folder, the name of which is 32 random characters. You may recognise this as your id0.</li>
					<li>Press Right Shoulder + A to bring up directory options, then select <div class="code">Copy to 0:/gm9/out</div>.</li>
					<li>Once complete, press X on this folder to delete it.</li>
					<li>On the following prompt, press A.</li>
				</ol>
				<p>Your system save data has been reset.				
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e6">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
				<b>[6]</b> Injecting N3DS donor NAND header [ADVANCED]
				</button>
				</h2>
				</div>
				<div id="collapseSix" class="collapse" aria-labelledby="e6" data-parent="#accordionOperations">
				<div class="card-body">
				<div class="warning-inline">This process is destructive and should not be attempted without guidance.</div>
				<p>This process should only be used under explicit circumstances and should not be used for general purposes.
				<br>This process will render your TWLfirm permanently unusable on stock firmware. Your TWLfirm runs original DS games. So long as you never uninstall CFW, this will not be a problem.
				<p><ol>
					<li>Power off your console, eject the SD card and connect it to your computer.</li>
					<li>Download the <a href="./assets/NCSD_header_n3ds.hdr">donor header</a> (right click > Save Target As or similar).</li>
					<li>Place the file you just downloaded on your root directory.</li>
					<li>Boot your console into GodMode9 by holding START during boot.</li>
					<li>Open <div class="code">[0:] SDCARD</div>.</li>
					<li>Locate <div class="code">NCSD_header_n3ds.hdr</div> and press Y to copy it. It should show up under CLIPBOARD in the top right of the bottom screen.</li>
					<li>Back out to the GodMode9 main window and open <div class="code">[S:] SYSNAND VIRTUAL</div>.</li>
					<li>Select <div class="code">nand_hdr.bin > Inject data @offset</div>.</li>
					<li>Press A. You will be met with a write unlock prompt. Press A again.</li>
					<li>You will see a red screen warning you about SysNAND level 3 unlock. Enter the button combination on the screen to proceed.</li>
				</ol>
				<p>You have successfully injected a donor NAND header.
			</div>
			<!-- last card div -->
		</div>
		</div>
    <!-- /#container -->

  </div>
  <!-- /#wrapper -->
		
<?php
include "footer.php";
?>
  <!-- BLANK CARD FOR SUBMITTING ADDITIONAL SOLUTIONS
		Do not forget to replace the relevant elements based on the prior element and ordering.
		These are e1 and collapseOne along with the title card number.
		There are six of them that must be changed. I have left them as a placeholder here.
		Please ensure you coordinate with other contributors that you do not submit a colliding or overwriting ID.
				<div class="card">
				<div class="card-header" id="e1">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				<b>[X]</b> TITLE
				</button>
				</h2>
				</div>
				<div id="collapseOne" class="collapse" aria-labelledby="e1" data-parent="#accordionOperations">
				<div class="card-body">
				CONTENT
				
				</div> -->