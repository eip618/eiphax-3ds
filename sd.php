<?php
$title = "Common SD operations and information";
$desc = "Various information about how to troubleshoot SD issues.";
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
            <center><h1>Common SD operations and information</h1></center>
            <hr>
	<div class="blue"><p>Click a heading to open its cell. Click a different heading to close the previous cell and open the new one.
	<p>Confused? Ask us for help: <a href="https://discord.gg/dQgV6ZG" target="_blank">Nintendo Homebrew</a></div>
    <!-- Page Content -->
    <div id="page-content-wrapper">
		<div class="container-fluid fade show active" id="operations">
		<div class="accordion" id="accordionOperations">
			<div class="card">
				<div class="card-header" id="e1">
				<h2 class="mb-0">
					<button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					<b>[1]</b> Verifying the integrity of an SD card
					</button>
				</h2>
				</div>
				<div id="collapseOne" class="collapse" aria-labelledby="e1" data-parent="#accordionOperations">
					<div class="card-body">
	This short guide will walk you through the process of ensuring your SD/microSD card is free of errors. It is intended for situations in which an illegitimate or failing SD/microSD card may be causing issues with booting, running or otherwise using your system.
    <p>Please ensure you follow all steps and understand the instructions.
    <p>This guide is written with Windows users in mind. The process and steps will be similar for Mac users, and I assume anyone smart enough to use Linux knows how to copy and paste.
    <hr class="short"><br>
	Note: if someone has directed you here to diagnose a problem, please <b><u>take a screenshot of the h2testw results window and send that to them when it is finished.</b></u>
    <p><ol><li>Create a new folder on your desktop named "SD". </li>
    <li>Open a file explorer window and navigate to the root of your SD/microSD card. The root is the first thing you see when you open your SD card, but do not open any folders.</li>
    <li>Select all files and folders in the window. If on Windows: click inside the open window and hold <div class="code">Control/CTRL</div> <i>(Mac users Command)</i> and, while holding <div class="code">Control</div>, press A. All items in the window should now have a transparent blue highlight.</li>
    <li>Right click any highlighted item on the list and select <div class="code">Copy</div>. (You may also hold <div class="code">Control</div> and press C.)</li>
    <li>Without closing the current window, open the folder on your desktop named "SD".</li>
    <li>Click inside the open window and then either hold <div class="code">Control</div> and press V, or right click and select <div class="code">Paste</div>.</li>
    <li>Once this operation has finished, deselect these items and switch back to your open SD/microSD card root window.</li>
    <li>Select all items on your SD card again, and delete them with the <div class="code">Del/Delete</div> key, or by right clicking any item and selecting <div class="code">Delete</div> to delete all selected items. In order to achieve reliable results using this test, the card in question should be empty at this point.</li>
    <li>Format your SD/microSD card using one of the suggested tools (see blue box), making sure it is a full format, NOT quick format (or equivalent), FAT32 format type and 32kb/32768 allocation size. It will take a while.</li>
	<div class="warning-inline">WARNING: The format tools provided can and will format whatever drive you tell them to. DOUBLE CHECK WHAT DRIVE YOU ARE FORMATTING before starting. If you are unsure in ANY WAY, ask for help.</div>
    <li>Follow instructions <a href="https://3ds.hacks.guide/h2testw-(windows)">here</a>. This will take a while too. <i>Linux users should instead follow <a href="https://3ds.hacks.guide/f3-(linux)">this</a>. Mac users <a href="https://3ds.hacks.guide/f3x-(mac)">here</a>.</i></li>
    <li>If it passes, delete all the h2test files and move your own files back from the "SD" folder on your desktop, then try what you were doing again. If there is any failure whatsoever, you will probably need a new SD card.</li>
	</ol>
    <p><div class="info">Note: This test is intended to rule out the possibility of a bad card. While a format + test <b>may</b> fix some corruption or hardware failure issues <b>temporarily</b>, if you have had issues with corrupted files, Windows asking to format the drive etc, you should buy a new SD card at your earliest convenience. Flash storage (ie SD cards) are not meant as a long term storage solution and are prone to failure for absolutely no reason.</div>
    <div class="blue">Suggested format tool for <a href="http://www.ridgecrop.co.uk/index.htm?guiformat.htm">Windows</a>
    <br>Suggested format tool for <a href="https://gparted.org/download.php">Linux</a>
    <br>Suggested format tool for <a href="https://support.apple.com/guide/disk-utility/format-a-disk-for-windows-computers-dskutl1010">MacOS</a>
	</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e2">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				<b>[2]</b> Format an SD card to FAT32
				</button>
				</h2>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="e2" data-parent="#accordionOperations">
				<div class="card-body">
				If your SD card has a capacity larger than 32GB, you will need to format it to FAT32. This applies to both "full size" and microSD cards.
				<br><ol>
					<li>Connect your SD card to a computer. You will need a reader of some sort. These are usually inexpensive.</li>
					<li>If your SD card has any files or folders on it, copy them all to somewhere on your computer.</li>
					<li>Once you have made a backup of your data, navigate to "This PC" (may vary by operating system, also known as My Computer, This Computer, Local Computer, etc)</li>
					<li>Check which drive letter your SD card has been assigned. Look for "Removable Drive", "SDHC/SDXC Card", "SD Card", etc.</li>
					<li>Download and open one of the suggested SD format tools (see blue box) and run/execute it.</li>
					<li>Close the File Explorer windows you have been using.</li>
					<li>In your SD format tool, select the drive which represents your SD card.</li>
					<li>Select FAT32 (for Mac, "MS-DOS (FAT)") with a 32768/32kb allocation size.</li>
					<li>Confirm the format if you are sure all the selections are correct.</li>
					<div class="warning-inline">WARNING: The format tools provided can and will format whatever drive you tell them to. DOUBLE CHECK WHAT DRIVE YOU ARE FORMATTING before starting. If you are unsure in ANY WAY, ask for help.</div>
				    <div class="blue">Suggested format tool for <a href="http://ridgecrop.co.uk/index.htm?guiformat.htm">Windows</a>
					<br>Suggested format tool for <a href="https://gparted.org/download.php">Linux</a>
					<br>Suggested format tool for <a href="https://support.apple.com/guide/disk-utility/format-a-disk-for-windows-computers-dskutl1010">MacOS</a>
					</div>
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e3">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				<b>[3]</b> Move your data between two SD cards
				</button>
				</h2>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="e3" data-parent="#accordionOperations">
				<div class="card-body">
				Do not put your new SD card in the console until you are instructed to.
				<br>Is your SD card in the FAT32 format? If not, see the cell above this one. If your SD card is any size below and including 32GB, it should already be FAT32.
				<br>Once your SD card is in the FAT32 format, all you need to do is copy all of the data from your prior SD card to the new SD card.
				<br>You can accomplish this by copying all of the data from your old SD card to a folder on your computer, swapping cards, then copying the data from your computer to the new card.
				<br>Or, if you have multiple adapters, you can copy directly from old SD card to new SD card.
				<br>Once all the data is on the new card, you can insert it into the console and begin using it.
				<br>If you accidentally put the card in the console before copying your data to it, your data may have 'disappeared'. Do not panic. Your data can be restored. Ask us for help: <a href="https://discord.gg/dQgV6ZG" target="_blank">Nintendo Homebrew</a>
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e4">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				<b>[4]</b> Troubleshoot an SD card not being detected
				</button>
				</h2>
				</div>
				<div id="collapseFour" class="collapse" aria-labelledby="e4" data-parent="#accordionOperations">
				<div class="card-body">
				<h3>Is your SD card detected by the console, but not the computer?</h3>Try using a different or new adapter to read the card. If this fails, try using a new SD.
				<h3>Is your SD card detected by the computer, but not the console?</h3>

				<p>If you're using a 3DS, are you using an adapter sleeve (microSD with a sleeve adapter)? Try using a new adapter in the console. If this fails, try formatting the card with GodMode9. If this also fails, test with another (preferably new) SD card.

				<p>If you're using a Nintendo Switch, try ejecting and re-seating the microSD card in the console. If this fails, try formatting the card with one of the tools suggested in the "Format an SD card to FAT32" cell above.
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e5">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
				<b>[5]</b> Formatting an SD card with GodMode9 (3DS Specific)
				</button>
				</h2>
				</div>
				<div id="collapseFive" class="collapse" aria-labelledby="e5" data-parent="#accordionOperations">
				<div class="card-body">
				If you've exhausted other options, you can try formatting the SD card with godmode9.
				<br><ol>
					<li>Connect your SD card to a computer. You will need a reader of some sort. These are usually inexpensive.</li>
					<li>If your SD card has any files or folders on it, copy them all to somewhere on your computer.</li>
					<li>Check if you have "godmode9.firm" on your SD card, inside <div class="code">SD:/luma/payloads</div>, and a "gm9" folder on the root directory. If you do, proceed. If you do not, get them from the <a href="https://github.com/d0k3/GodMode9/releases/latest" target="_blank">latest release</a> and put them where indicated in this step.</li>
					<li>Once you have made a backup of your data, put the SD card back in the console.</li>
					<li>Hold the START button, and while holding, press the Power button.</li>
					<li>This should bring you to the GodMode9 main window. Press HOME, then navigate to more... > SD format menu</li>
					<li>Select "No EmuNAND" > Auto.</li>
					<li>Input a label. You can label it whatever you wish, except for "3ds".</li>
					<li>Input the button combination displayed on the screen, then wait for the card to format.</li>
					<li>Once it has finished, press A to continue.</li>
					<li>Hold the right shoulder button and press B to unmount the SD card. Do not power off the console.</li>
					<li>Take the SD card out of the console.</li>
					<li>Connect the SD card to a computer.</li>
					<li>Restore your data from the backup you made in step 2.</li>
					<li>Safely eject the card and put it back in the console.</li>
					<li>GodMode9 will still be running. Hold the right shoulder button and press B to remount the SD card.</li>
					<li>The SD card should now appear in the drives list on the top screen. Press START to reboot the console.</li>
				</ol><p>If this process was unsuccessful, you may want to look at replacing your SD card/the SD adapter (if applicable).
				</div>
				</div>
			</div>
		</div>
		</div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
			
<?php
include "footer.php";
?>