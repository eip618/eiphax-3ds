<?php
$title = "Defining Piracy for Practical Purposes";
$desc = "You got sent here by rule 11, didn't you?";
include "header.php";
?>
<script>
function yarHar() {
    var x = document.getElementById("yarhar");
    var iframe = document.getElementById("yarvid").contentWindow;
    if (x.style.display === "none") {
        x.style.display = "block";
        iframe.postMessage('{"event":"command","func":"playVideo","args":""}','*');
    } else {
        x.style.display = "none";
        iframe.postMessage('{"event":"command","func":"pauseVideo","args":""}','*');
    }
}
</script>
    <div class="nav">
        <ul>
            <li><a href="index">Home</a></li>
            <li><a href="sd">SD Troubleshooter</a></li>
            <li><a href="nav">Site Nav</a></li>
		<li><a href="#?" onclick="yarHar()">Don't click me</a></li>
<!--		    <li><a href="https://tinydb.eiphax.tech/">TinyDB</a></li> -->
		    <li><a href="issues">Troubleshooting</a></li>
        </ul>
    </div>
</div>
</div>
        <div class="container">
        <div class="content">
            <center><h1>How to Determine Whether or Not You Are A Pirate</h1></center>
            <hr>
                <div id="yarhar" style="display: none;">
                <center>  <h2>Here's a hint.</h2>
                    <br>
                    <iframe id="yarvid" width="420" height="315"
                src="https://www.youtube.com/embed/3N2k5gEgE2E?enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                </iframe><p>Click "don't click me" again to make this go away.</center>
                </div>
            <p>The purpose of this page is to assist with a practical definition of piracy as it relates to the end user and specifically games.
    <p>Piracy occurs when someone obtains a copy of software without paying for it, in the most simplistic definition. Most commonly, this is through downloading a game from a game sharing site. Another method of piracy is making a copy of a game that someone else owns, or making a copy of a game you own, and providing that to someone else. 
    <p>These definitions get murky when we consider software in terms of licences. When you buy a piece of software, no matter what the medium or delivery method, what you are really buying is a licence to use that <i>specific</i> copy of that piece of software. This means that if you and a friend both buy the same software, technically speaking, you are only allowed in a legal sense to use the copy that <b>you</b> bought, because that is the copy you bought the licence for. It is for this reason that downloading a copy of the game from the internet is illegal, even if you own a copy of the game.
    <p>While it is true that there may be no actual difference in the code between the different copies of the software, The Law doesn't care. It is also for this reason that making a copy of your game that you own and then losing, selling or breaking the cartridge means you no longer have a legal right to the backup, because you have lost the licence which is considered to be a part of the initial copy of the software you bought. Therefore, the only legal backup you can create is an exact copy of the software you bought, not a copy of someone else's.
    <p>The Digital Millennium Copyright Act (US), which most countries have an equivalent of, contains most of the provisions related to copyright and its uses and exemptions. There exists a provision in most countries called "fair use", which is what making a backup of software is largely considered to fall under, but the DMCA forbids getting around copy protection, which is why it's a grey area: to make a backup, you generally have to circumvent copy protection.
    <p>Technically speaking, hacking your console is also a copyright violation, for two main reasons: it involves unauthorised modification of the intellectual property of someone else, and because in most cases (like the 3DS family) hacking the console allows further copyright infringement which is specifically forbidden under the DMCA. There exist some exemptions and contemporary arguments in favour of consumer rights to their hardware. I cannot be bothered sourcing them for you. Start <a href="https://www.google.com/?q=dmca+console+hacking+exemption">here</a> to learn more.
    <p>In summary, a handy list:
    <ul>
        <li>It is sorta legal-ish to hack your console.</li>
        <li>It is sorta legal-ish to make a backup of a piece of software that you legally purchased and have full ownership of.</li>
        <li>When you buy a piece of software, you are actually buying a unique licence to use that exact copy of the software, and have no rights over the software itself.</li>
        <li>It is <b>not legal</b> to download a copy of a piece of software even if you own, or have owned, that software <b>unless it is downloaded in a permitted manner from the distributor</b> (for example, redownloading software from the eShop).</li>
        <li>Think of a dumped game like an extension of the cartridge. If you lose, lend or sell the cartridge, you can't access the dump. (This also means you can't use the dump and the cart on 2 systems you own at the same time.)</li>
		<li>If your physical media becomes damaged, you must retain it in order to retain your license to the dump. You can't throw it away and still legally own the dump.</li>
        <li>Renting or buying a game in order to make a copy of it and return it to the store is piracy. I shouldn't have to say this.</li>
    </ul>
<?php
include "footer.php";
?>