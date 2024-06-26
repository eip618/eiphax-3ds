<?php
$title = "AC:NL";
$desc = "How to edit your AC:NL town";
include "header.php";
?>
<?php
include "nav.php";
?>
        <div class="container">
        <div class="content">
            <center><h1>AC:NL Save Editor</h1></center>
            <hr>
        <p>This page contains some (basic) instructions on using <a href="https://www.marcrobledo.com/acnl-editor/" target="_blank">Marc Robledo's ac:nl save editor</a> to edit your AC:NL town and data.
        <p>The AC:NL editor can do much more than what this simple tutorial shows, and if you want guidance on other nifty things it can do like villager edits, character injection, furniture and building editing and other rad things, ask the internet or the <a href="https://discord.gg/EZSxqRr" target="_blank">AC:NL discord</a>. You will also find useful information there, such as an ntr plugin for ac:nl and the #faq channel that has things like building sizes and etc.
        <p>
            <ol>
                <li>First of all, you'll need an AC:NL game with a save. It doesn't matter if you've only played up to the point where you plant the sapling, or you've paid off your home loan. You can't generate a save to edit, you need to pull one you already have.</li>
                <li>Second, you (likely) need a hacked console, and a save data manager. For this, I'll be using Checkpoint which is recommended for the 3DS and the Switch.</li>
                <li>Here is a listing of Checkpoint's controls (on the 3DS), for your reference.<p><img src="img/check1.png"></li>
                <li>On the top screen, you will see a list of your games. Scroll to select the game you intend to modify. You will see it show up on the bottom screen, like so:<p><img src="img/acnl1.png"></li>
                <li>Select the game by pressing A. It will show up blue:<p><img src="img/acnl2.png"></li>
                <li>Press the left shoulder button, or tap the "Backup" button on the screen, with "New" selected, then press A at the following screen:<p><img src="img/check4.png"><p>This will copy the save file from the game to your SD card, decrypted so that you can use it.</li>
                <li>Give it a memorable name:<p><img src="img/check5.png"></li>
                <li>Now, put your SD card into your computer (or activate a wireless file transfer solution).</li>
                <li>Find your save on your SD card. Here is an <b>example</b> directory structure. Yours will probably be very similar.<p><img src="img/acnl3.png"></li>
                <li>Inside that folder is your save, in this case called "garden.dat". Note specifically that it is 511KB and <b>does</b> have a file extension of ".dat". Copy "garden.dat" to somewhere on your computer.<p><img src="img/acnl4.png"></li>
                <li>Make another copy of "garden.dat" so that you have one you are going to edit, and one that is going to remain clean. If you edit the save again, keep one copy of the last known working save, and edit another separate copy.</li>
                <li>Open <a href="https://www.marcrobledo.com/acnl-editor/" target="_blank">Marc Robledo's ACNL save editor</a>, and upload your "garden.dat":<p><img src="img/acnl51.png"></li>
                <li>Now you can edit your town. Various things are possible. However, <b><u>please carefully read the <a href="https://www.marcrobledo.com/acnl-editor/help#FAQ" target="_blank">editor FAQ</a>, specifically the "How do I ensure my savegame doesn't get glitched?" section.</u></b></li>
                <li>Buildings are marked on the map (left of screen) by a corner arrow.<p><img src="img/acnl6.png"></li>
                <li>In the building list (right of screen), click the hand next to a building to move it.<p><img src="img/acnl5.png"></li>
                <li>Click a new spot on the map after clicking the hand to pick a spot to move it to.<p><img src="img/acnl7.png"></li>
                <li>You can edit various other things such as your player details, island layout, villagers details, shop details and prices, furniture, etc, etc. Check the tabs and read at your leisure.<p><img src="img/acnl8.png"></li>
                <li>Again, it must be stressed: <b><u>please carefully read the <a href="https://www.marcrobledo.com/acnl-editor/help#FAQ" target="_blank">editor FAQ</a>, specifically the "How do I ensure my savegame doesn't get glitched?" section.</u></b></li>
                <li>Once you have finished your edits, Save Changes:<p><img src="img/acnl9.png"></li>
                <li>You will receive a "garden.dat" file in your downloads:<p><img src="img/acnl10.png"></li>
                <li>Locate this file, then copy it back to your SD card <b>to the same directory it came from in the first place.</b> Here is my example directory, if that helps you remember. Overwrite the existing save with the edited save.<p><img src="img/acnl3.png"></li>
                <li>Put your SD card back in your console.</li>
                <li>Load Checkpoint, select your game, select the memorable name you chose earlier, and select Restore:<p><img src="img/check6.png"><p>This will inject your save file back into the game, encrypted so the game can use it.</li>
                <li>Once this succeeds, close Checkpoint, open your game, load your save and check your modifications succeeded.</li>
            </ol>
<?php
include "footer.php";
?>