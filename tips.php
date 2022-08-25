<?php
$title = "CFW tips";
$desc = "What can I do with CFW that isn't piracy?";
include "header.php";
?>
<?php
include "nav.php";
?>
        <div class="container">
        <div class="content">
            <center><h1>what can I do with cfw?</h1></center>
            <hr>
        <p>Ever wondered what you can do with CFW?
		<p>This list is NOT exhaustive or complete, new things are always being developed. It is an example only.
		<ol>
			<li>Custom themes, including home menu background splash, custom icons, boot splash and other cool stuff.
				<ol>
					<li>To learn how to install a custom theme, visit the <a href="https://3ds.eiphax.tech/themes">theme guide!</a></li>
					<li>Wanna make a theme? Need theme help? Ask at <a href="https://discord.gg/2hUQwXz" target="_blank">ThemePlaza's discord</a>.</li>
					<li>For splashes: enable splash settings in Luma3DS Config (hold SELECT during boot).</li>
					<li>To make a custom splash check out <a href="https://xem.github.io/3DShomebrew/tools/image-to-bin.html" target="_blank">this splash generator!</a></li>
				</ol></li>
			<li>Dump your physical games to digital copies with <a href="https://3ds.hacks.guide/dumping-titles-and-game-cartridges">GodMode9.</a>
				<ol>
					<li>GodMode9 can dump game ROM itself, as well as install your physical game directly to the SD card. You can even dump game updates, and DLC.</li>
					<li>For CIAs dumped from cartridges: install the CIA with FBI. It will appear on your home menu. <b>Note:</b> You must have enough space on your SD card to MAKE the CIA as well as INSTALL it. That means having twice the space the game takes available on your SD when you install it. After the game is installed, the CIA will be useless, and can be deleted with no issue.
					<br>For NDS games dumped to .nds files: install <a href="https://wiki.ds-homebrew.com/twilightmenu/installing-3ds" target="_blank">TWiLightMenu++</a> and use it to play NDS dumps.
					<br>The other options on that page are for more specific circumstances.</li>
					<li>You can also use <a href="./nsui" target="_blank">New Super Ultimate Injector</a> to create installable CIAs of games from older generations, commonly SNES and GB/GBC/GBA.</li>

				</ol></li>	
			<li>Hack your games.
				<ol>
					<li>Examples: use PKHeX to <a href="./pkhex" target="_blank">modify your Pok&eacute;mon games</a>, or the AC:NL town editor by Marc Robledo to <a href="./acnl" target="_blank">modify your AC:NL town</a>. You are limited only by the games you own and the tools you can find on the Internet. <a href="https://gbatemp.net" target="_blank">GBAtemp</a> is a good place to look for mod tools.</li>
					<li>You can use tools like LayeredFS to patch/modify/edit your games, commonly known as "romhacks". These usually patch, add, change or expand features in games, or add story content to popular games like the Pok&eacute;mon series, and sometimes involve fan translations of non-English games. Usage guide <a href="https://github.com/knight-ryu12/godmode9-layeredfs-usage/wiki/Using-Luma3DS'-layeredfs-(Only-version-8.0-and-higher)" target="_blank">here</a>. <a href="https://gbatemp.net" target="_blank">GBAtemp</a> is a good place to look for romhacks. You can also try GitHub, GameBanana, and Google.</li>
					<li>Also, you can use tools like Rosalina (included in Luma3DS 8+) to <a href="https://github.com/AuroraWright/Luma3DS/wiki/Cheat-Engine" target="_blank">cheat in your games</a>. <a href="https://3ds.eiphax.tech/cpcheats" target="_blank">Checkpoint has a database of cheats. </a> Not all games are supported or have cheats in the database.</li> 
          <li>Similar to that, you can easily manage your game mods with <a href="https://github.com/Swiftloke/ModMoon/releases" target="_blank">Mod-Moon</a>. This includes native SaltySD/Smash 3DS support as well.</li>
				</ol></li>
			<li>Use unofficial tools and applications.
				<ol>
					<li>CFW can be used to access the Homebrew Launcher, which allows access to Homebrew tools (".3dsx" files).</li>
					<li>Install any CIA application or tool via FBI. <a href="https://universal-team.net/projects/universal-updater.html" target="_blank">Universal-Updater</a> has a collection of common useful tools and apps.</li>
					<li>Load any valid payload (*.firm) via Luma.</li>
					<li><a href="https://github.com/AuroraWright/Luma3DS/wiki/Rosalina" target="_blank">Rosalina</a> is a powerful tool included with Luma3DS 8 and above. It can take screenshots, show battery percentage, toggle wireless state and LEDs, change brightness, apply color filters, and various other functions.</li>
					<li>NTR "CFW", despite the name, is not a custom firmware. NTR can be used to <a href="https://github.com/RattletraPM/Snickerstream/wiki/Streaming-with-NTR" target="_blank">stream your console's video to a PC,</a> ("New" editions only) access RAM editing and <a href="https://3ds.eiphax.tech/ntrplugins.html">plugins,</a> as well as other features.</li>
					<li>Checkpoint can be used to manage save files, including backing up current saves and reinjecting edited saves, juggling saves between cartridge/digital versions and cartridge/cartridge. If you did Finalizing Setup on 3ds.hacks.guide, you already have it.</li>
					<li><a href="https://github.com/FlagBrew/PKSM/releases/latest" target="_blank">PKSM</a> is an on-console analogue of PKHeX, which is slightly less user-friendly but almost as versatile as PKHeX.</li>
					<li><a href="https://github.com/AuroraWright/Luma3DS/wiki/Rosalina#inputredirection" target="_blank">Input Redirection</a> can be used to control your console with a game controller.</li>
				</ol></li>
			<li>Use your console to its full potential.
				<ol>
					<li>Use Rosalina to view and edit the loaded game's RAM.</li>
					<li>Play out-of-region games, both digital and cartridge. Enabled by Luma3DS by default.</li>
					<li>Use GodMode9 to view, access and control your internal system files, make and restore system backups and various other important functions. <a href="https://3ds.hacks.guide/godmode9-usage" target="_blank">Regular usage guide</a> and <a href="https://github.com/d0k3/GodMode9/blob/master/README.md" target="_blank">extended usage guide</a>. <b>Note:</b> the advanced usage guide recommends installing fastboot3DS instead of boot9strap. If you already have boot9strap and Luma3DS via 3ds.hacks.guide, you do not need to change to fastboot3DS to use GodMode9.</li>
					<li><a href="https://3ds.hacks.guide/region-changing" target="_blank">Region change</a> your console. This is LIKELY to have unintended consequences and is not recommended under normal circumstances. eShop functionality generally breaks afterwards, and Luma3DS already grants region-free gameplay.</li>
					<li>Use old flashcarts with the extended cartridge whitelist. Enabled by Luma3DS by default.</li>
					<li>Use <a href="https://github.com/mtheall/ftpd/releases/latest" target="_blank">ftpd</a> on your console with a client like <a href="https://winscp.net/eng/download.php" target="_blank">WinSCP</a> to move files between console and PC over Wi-Fi.</li>
					<li><a href="https://axities.github.io/" target="_blank">Edit your Home Menu</a>. <b>ADVANCED USERS ONLY. This is complex.</b></li>
				</ol></li>
			</ol>
<br>
<br>
<br>
<?php
include "footer.php";
?>
