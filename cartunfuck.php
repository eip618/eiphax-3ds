<?php
$title = "GodMode9 Cartridge Unfucker";
$desc = "How to use the GodMode9 cartridge unfuck tool";
include "header.php";
?>
<?php
include "nav.php";
?>
        <div class="container">
        <div class="content">
            <center><h1>cartridge unfuck guide</h1></center>
            <hr>
        <p>your console must be running 'luma' custom firmware, version 10 or later, to use this guide.
		<div class="warning-inline">this tool MIGHT fix your cartridge. it MIGHT also make the issue significantly worse. you should only use this tool if you are CERTAIN the problem is with your cartridge, and that it cannot be fixed by, for example, cleaning the cartridge contacts, cleaning the reader contacts, dumping the cartridge to digital format, etc</div>
		<p>you will need: <a href="https://github.com/skawo/GodMode9-with-Cartridge-Fixer/releases/latest">the cartridge fixer godmode9 fork</a>. download the <div class="code">.firm</div> file.
		<br>copy this <div class="code">.firm</div> file to the <div class="code">payloads</div> folder, which should be in your <div class="code">luma</div> folder, which should be on the root of your sd card.
<ol>
<li>with your console powered off, and the subject cartridge in the console, hold <div class="code">start</div>, then press the power button. this should cause your console to boot to the luma chainloader menu.</li>
<li>select the entry that matches the name of the <div class="code">.firm</div> file you downloaded earlier.</li>
<li>once godmode9 loads, select the <div class="code">GAMECART</div> drive.</li>
<li>there should be a file ending in <div class="code">.3ds</div>. note that i mean <i>just</i> <div class="code">.3ds</div>, not <div class="code">.trim.3ds</div>.</li>
<li>select <div class="code">NCSD image options...</div>.</li>
<li>select <div class="code">Fix cartridge corruption</div>.</li>
</ol>
<div class="info-inline">if the 'current hash' value is changing, the program is doing something.
			<br>there is every chance this program will not fix the cartridge. if it does not, the cartridge is likely unfixable.</div>
<?php
include "footer.php";
?>
