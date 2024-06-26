<?php
$title = "3DS Config Generator";
$desc = "Custom generator for Rosalina configs";
include "header.php";
?>
<?php
include "nav.php";
?>
<style>
#downloader { display: none }
label, span { color: white }
</style>
        <div class="container">
        <div class="content">
            <center><h1>Config Generator</h1></center>
	<hr>
	<p>Generously ideated and provided by Mr. Burguers on Discord.
	<p><label><input type="checkbox" id="singleOption0"> Autoboot EmuNAND</label><br>
<label><input type="checkbox" id="singleOption1"> Use EmuNAND FIRM if booting with R</label><br>
<label><input type="checkbox" id="singleOption2"> Enable loading external FIRMs and modules</label><br>
<label><input type="checkbox" id="singleOption3"> Enable game patching</label><br>
<label><input type="checkbox" id="singleOption4"> Show NAND or user string in System Settings</label><br>
<label><input type="checkbox" id="singleOption5"> Show GBA boot screen in patched AGB_FIRM</label><br>
<label><input type="checkbox" id="singleOption6"> Set developer UNITINFO</label><br>
<label><input type="checkbox" id="singleOption7"> Disable ARM11 exception handlers</label><br>
<label><input type="checkbox" id="singleOption8"> Enable Rosalina on SAFE_FIRM</label><br>
<br>
<label>Default EmuNAND <select id="multiOption0">
	<option value="0">1</option>
	<option value="1">2</option>
	<option value="2">3</option>
	<option value="3">4</option>
</select></label><br>
<label>Screen brightness <select id="multiOption1">
	<option value="0">4</option>
	<option value="1">3</option>
	<option value="2">2</option>
	<option value="3">1</option>
</select></label><br>
<label>Splash <select id="multiOption2">
	<option value="0">Off</option>
	<option value="1">Before</option>
	<option value="2">After</option>
</select> payloads</label><br>
<label>Splash duration <select id="multiOption3">
	<option value="0">1</option>
	<option value="1">3</option>
	<option value="2">5</option>
	<option value="3">7</option>
</select> seconds</label><br>
<span><i>Setting a PIN is not supported as it uses console-unique keys.</i></span><br>
<label>New 3DS CPU <select id="multiOption5">
	<option value="0">Off</option>
	<option value="1">Clock</option>
	<option value="2">L2</option>
	<option value="3">Clock+L2</option>
</select></label><br>
<br>
<label><input type="text" id="hbldr3dsxTitleId" value="000400000d921e00"> Homebrew Loader Title ID</label><br>
<br>
<span>Rosalina Menu</span><br>
<label><input type="checkbox" id="rosalinaComboBit0"> A</label>
<label><input type="checkbox" id="rosalinaComboBit1"> B</label>
<label><input type="checkbox" id="rosalinaComboBit2" checked> Select</label>
<label><input type="checkbox" id="rosalinaComboBit3"> Start</label>
<label><input type="checkbox" id="rosalinaComboBit4"> Right</label>
<label><input type="checkbox" id="rosalinaComboBit5"> Left</label>
<label><input type="checkbox" id="rosalinaComboBit6"> Up</label>
<label><input type="checkbox" id="rosalinaComboBit7" checked> Down</label>
<label><input type="checkbox" id="rosalinaComboBit8"> R</label>
<label><input type="checkbox" id="rosalinaComboBit9" checked> L</label>
<label><input type="checkbox" id="rosalinaComboBit10"> X</label>
<label><input type="checkbox" id="rosalinaComboBit11"> Y</label><br>
<br>
<button onclick="WriteConfig();">Generate</button>
<a id="downloader"><!-- This is a hidden link that triggers the file download when clicked --></a>



<script>
// According to Luma 10.2
const CONFIG_VERSIONMAJOR = 2;
const CONFIG_VERSIONMINOR = 4;
const singleOptionsAmount = 9;
const multiOptionsAmount = 6;
const configData = {
	magic: 1179537219,
	formatVersionMajor: CONFIG_VERSIONMAJOR, formatVersionMinor: CONFIG_VERSIONMINOR,
	config: 0, multiConfig: 0, bootConfig: 0,
	hbldr3dsxTitleId: 0x000400000d921e00n, // This has to be a BigInt so we can use setBigUint64
	rosalinaMenuCombo: 644
}
function GetEnableSingleOption(i) {
	return document.getElementById(`singleOption${i}`).checked;
}
function GetEnableMultiOption(i) {
	// Skip the PIN selection and always return "Off" since we don't support it
	return 4 == i ? 0 : document.getElementById(`multiOption${i}`).value;
}
function WriteConfig() {
	const hblTitle = document.getElementById('hbldr3dsxTitleId').value;
	if (!(/0004[0-9a-f]{12}/i).test(hblTitle)) {
		alert('The Homebrew Loader Title ID is invalid.\nCheck it starts with 0004 and contains only hexadecimal characters.');
		return;
	}

	configData.config = 0;
	for (let i = 0; i < singleOptionsAmount; i++) {
		configData.config |= (GetEnableSingleOption(i) ? 1 : 0) << i;
	}

	configData.multiConfig = 0;
	for (let i = 0; i < multiOptionsAmount; i++) {
		configData.multiConfig |= GetEnableMultiOption(i) << (i * 2);
	}

	// This has to be a BigInt so we can use setBigUint64
	configData.hbldr3dsxTitleId = BigInt(parseInt(hblTitle, 16));

	configData.rosalinaMenuCombo = 0;
	for (let i = 0; i < 12; i++) {
		const element = document.getElementById(`rosalinaComboBit${i}`).checked;
		configData.rosalinaMenuCombo |= (element << i); // "boolean << i" behaves like you'd expect
	}

	console.log(`magic: ${configData.magic}`);
	console.log(`config: ${configData.config}`);
	console.log(`multiConfig: ${configData.multiConfig}`);
	console.log(`bootConfig: ${configData.bootConfig}`);
	console.log(`hbldr3dsxTitleId: ${configData.hbldr3dsxTitleId}`);
	console.log(`rosalinaMenuCombo: ${configData.rosalinaMenuCombo}`);

	const fp = new DataView(new ArrayBuffer(0x20));
	/*
	+---+---+---+---+---+---+---+---+---+---+---+---+---+---+---+---+---+
	|   | 0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | A | B | C | D | E | F |
	+---+---+---+---+---+---+---+---+---+---+---+---+---+---+---+---+---+
	| 0 |     MAGIC     | MINOR | MAJOR |  CONFIG DATA  |  MULTICONFIG  |
	+---+---------------+-------+-------+---------------+---------------+
	| 1 |  BOOT CONFIG  | HOMEBREW LOADER 3DSX TITLE ID | ROSALINA MENU |
	+---+---------------+-------------------------------+---------------+
	*/
	fp.setUint32(0x00, configData.magic, true);
	fp.setUint16(0x04, configData.formatVersionMajor, true);
	fp.setUint16(0x06, configData.formatVersionMinor, true);
	fp.setUint32(0x08, configData.config, true);
	fp.setUint32(0x0C, configData.multiConfig, true);
	fp.setUint32(0x10, configData.bootConfig, true);
	fp.setBigUint64(0x14, configData.hbldr3dsxTitleId, true);
	fp.setUint32(0x1C, configData.rosalinaMenuCombo, true);

	const blob = new Blob([fp.buffer], { type: 'application/octet-stream' });
	const downloader = document.getElementById('downloader');
	downloader.href = URL.createObjectURL(blob);
	downloader.download = 'config.bin';
	downloader.click();
}
</script>
<?php
include "footer.php";
?>
