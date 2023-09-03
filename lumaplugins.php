<?php
$title = "Luma3DS plugins tutorial";
$desc = "How to install and run Luma3DS plugins on the 3DS";
include "header.php";
?>
<?php
include "nav.php";
?>
        <div class="container">
        <div class="content">
            <center><h1 id="luma3ds-plugin-loader-guide">Luma3DS Plugin Loader Guide</h1></center>
            <p>This guide will teach you how to install and different plugin types with Luma3DS</p>
            <p>If you're trying to use the ACNL plugin follow the steps listed in the <a href="https://discord.gg/EZSxqRr">AC Modding Discord Server</a></p>
            <h3 id="requirements">Requirements</h3>
            <ul>
            <li>A console with boot9strap installed</li>
            <li>A plugin file you want to use (<code>.3gx</code> or <code>.plg</code>), if you don't have any you can find them by doing a quick google search, here's a list of some good ones:</li>
            </ul>
            <p>Pokemon Ultra Sun and Ultra Moon: <a href="https://gbatemp.net/threads/release-ultrasumoframework-ntr-plugin-for-ultra-sumo.489098/">ultraSuMoFramework</a></p>
            <p>Pokemon Sun and Moon: <a href="https://github.com/AnalogMan151/sumoCheatMenu/releases">sumoCheatMenu</a></p>
            <p>Mario Kart 7: <a href="https://github.com/DarkFlare69/MK7-Online-NTR-Plugin-v3/raw/master/MarioKart7.3gx">Mario Kart 7 Online NTR Plugin</a></p>
            <p>The Legend of Zelda: Ocarina of Time 3D: <a href="https://github.com/Nanquitas/Zelda-Ocarina-Of-Time-3D-Plugin">Zelda-Ocarina-Of-Time-3D-Plugin</a></p>
            <p>Assorted Games: <a href="https://itspizzatime1501.github.io/files/plugins/CTRPF-Plugins-master.zip">CTRPF Plugins 3.0</a></p>
            <h3 id="installing-plugin-type-plg">Installing plugin type <code>.plg</code></h3>
            <p>Currently there are no up-to-date versions of Luma3DS that have <code>.plg</code> plugin support. Your only option is to use <a href="https://github.com/Nanquitas/BootNTR/releases">BootNTR Selector</a> which requires you to have the latest version of Luma3DS installed. To find out how to install the latest version of Luma3DS you can follow the instructions <a href="https://3ds.hacks.guide/restoring-updating-cfw.html">here</a>. <a href="https://3ds.eiphax.tech/ntrplugins">Here</a> is a guide on using BootNTR Selector.</p>
            <h3 id="installing-plugin-type-3gx">Installing plugin type <code>.3gx</code></h3>
            <ol>
            <li>Download the Luma3DS <code>.zip</code> from <a href="https://github.com/LumaTeam/Luma3DS/releases/latest">here</a>, extract it and place <code>boot.firm</code> on the root of your SD card, make sure you overwrite the current one.</li>
            <li>Create a folder named <code>plugins</code> if it doesn't already exist in the <code>luma</code> folder on your SD card</li>
            <li>Inside of the <code>plugins</code> folder create a folder named the Title ID of the game you want to use the plugin for (If you don't know the games Title ID you can find a list <a href="http://3dsdb.com">here</a> or <a href="https://hax0kartik.github.io/3dsdb/">here</a>)</li>
            <li>Place your <code>.3gx</code> file in the folder you just created, here is an example that could be helpful:
            <br/><br/><img alt="3gx location" src="/img/lumaplugins2.png" /> <br/><br/> (in this example <code>0004000000030800</code> is Mario Kart 7's Title ID)</li>
            <li>Insert your SD card into your console and boot it up, if you get to the Luma3DS configuration screen, screen, press START</li>
            <li>Once you're in the HOME Menu, open the Rosalina Menu (L + D-Pad Down + SELECT by default) and enable the plugin loader if it isn't enabled already</li>
            <li>Press B to exit the Rosalina Menu</li>
            <li>Open the game you installed the plugin for, your screen should flash green or blue during the Nintendo 3DS splash</li>
            <li>The standard for cheat menus is the SELECT button, if pressing SELECT doesn't work consider reading the readme of the plugin you're using</li>
            </ol>
            <h3 id="troubleshooting"><span style="text-decoration: underline">Troubleshooting</span></h3>
            <h4 id="game-crashes-when-using-a-plugin"><strong>Game crashes when using a plugin</strong></h4>
            <p>Fix: Don't use that plugin</p>
            <h4 id="screen-doesnt-flash-and-plugin-doesnt-load"><strong>Screen doesn't flash and plugin doesn't load</strong></h4>
            <p>Fix: Double-check if you got the right Title ID and if the plugin loader is enabled. The Title ID may be different depending on the region of the game. If you are sure it is correct and that the plugin loader is enabled, try a different plugin</p></div><br/><br/><br/><br/>
		
<?php
include "footer.php";
?>
