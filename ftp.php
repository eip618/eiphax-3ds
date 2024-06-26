<?php
$title = "FTP Tutorial";
$desc = "How to use FTP with your 3DS without getting viruses";
include "header.php";
?>
<?php
include "nav.php";
?>
        <div class="container">
        <div class="content">
            <center><h1></h1></center>
<center><h1>A guide to using FTP for the 3DS</h1></center>
</center><hr />
<p>This guide will teach you how to use FTP or file transfer protocol. The benefits of FTP being that you can move files wirelessly between your PC and 3DS. FTP is much safer than microsd management and is not all too difficult to set up. Guide written by kriegxd on Discord.</p>
<p>Requirements: A FTP server on your 3DS, and an FTP client on your computer.</p>
<p>For PC I use and recommend <a href="https://winscp.net/eng/downloads.php">WinSCP</a>. While this guide does use WinSCP, it will also work for other FTP clients such as Filezilla. For 3DS we are going to use <a href="https://github.com/mtheall/ftpd/releases/latest">FTPD</a>. There are two versions of FTPD, classic and latest. Classic uses a console while the new release has a GUI. For this guide, we will use classic. If you need a QR code, <a href="https://github.com/mtheall/ftpd">there is one here, just scroll down.</a> The QR code will install the classic version.
<h3>Setting up FTPD.</h3>
<ol>
<li>Install FTPD on your 3ds.</li>
<li>Open it</li>
<li>Look at the top screen, next to your FTPD version. What you see highlighted in blue is your IP address, highlighted in red is your port.</li>
<img src="https://raw.githubusercontent.com/kriegisrei/whatever/master/ftpdnew.png" alt="" width="388" height="28" />
<li>Keep FTPD open for the next steps.</li>
</ol>
<h3>Setting up WinSCP</h3>
<ol>
<li>Run the WinSCP installer and wait till it is done downloading.</li>
<li>Once done, open WinSCP. It should automatically provide you a login window.
<p><img src="https://raw.githubusercontent.com/kriegisrei/kriegisrei.github.io/master/images/FTP/ftp2.png" alt="" width="353" height="248" /></p>
</li>
<li>Set file protocol from SFTP to FTP and enter your host name and port number.</li>
<li>Make sure "Anonymous login" is checked.</li>
<li>Your setup should now look like this.
<p><img src="https://raw.githubusercontent.com/kriegisrei/whatever/master/gocrazyaaaaaa.png" alt="" width="341" height="210" /></p>
</li>
<li>Press Login</li>
<li>If you do not want to input your IP address and port every time, you can save the config by pressing the save button.</li>
<li>If successful, you will be able to move files wirelessly between your 3DS and computer!</li>
</ol>
<p><img src="https://raw.githubusercontent.com/kriegisrei/kriegisrei.github.io/master/images/FTP/ftp3.png" alt="" width="500" height="268" /></p>

<h2> Troubleshooting </h2>
<p>Troubleshooting FTPD should be fairly simple. If you have trouble connecting, first check for mistakes entering your port/ip address. </p>
<p>Your 3DS and PC should be on the same network. FTPD sometimes refuses to work if your PC is on ethernet, while your 3DS is connected wirelessly.</p>
<p>If you are having trouble staying connected, make sure your internet connection is stable. If for some reason WinSCP doesn't work for you, you can try another FTP client such as FileZilla.</p>
		
<?php
include "footer.php";
?>
