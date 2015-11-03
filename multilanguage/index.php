<!DOCTYPE html>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet'>
		<link href="db_style.css" rel="stylesheet">
		<meta charset="UTF-8">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="description" content="FidoCadJ is a free user-friendly vector graphic editor for MacOSX, Linux, Windows and Android. Available in English, French, Italian, German, Chinese, Spanish, Czech, Japanese and Dutch">
		<link rel="icon" href="images/FidoCadJ_favicon.png" />
		<link rel="canonical" href="http://darwinne.github.io/FidoCadJ/index.html" />
		<title>FidoCadJ Free Graphical Editor for Electronics and more</title>
	</head>

	<body>
		<header>
				<a href="index.html"><h1>FidoCadJ</h1></a>
				<h2>a free graphical editor for (more than) electronics</h2>
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="https://twitter.com/share?via=davbucci" class="twitter-share-button">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				<b class="mainmenu">[Home]</b>
				&nbsp;
				<a href="download.html" class="mainmenu">[Download]</a>
				&nbsp;
				<a href="scrn.html" class="mainmenu">[Screenshots]</a>
				&nbsp;
				<a href="libs.html" class="mainmenu">[Libraries]</a>
				&nbsp;
				<a href="faq.html" class="mainmenu">[FAQ]</a>
				&nbsp;
				<a href="examples.html" class="mainmenu">[Examples]</a>
		</header>

		<div id="content">
			<p><b>FidoCadJ</b> is a free user-friendly vector graphic editor for MacOSX, Linux, Windows and Android:</p>
			<div id="download_button_container">
				<script>
				    if (navigator.appVersion.indexOf("Mac")!=-1) {
				        document.write('<a href="https://github.com/DarwinNE/FidoCadJ/releases/download/v0.24.5/FidoCadJ_MacOSX.dmg" id="download_button"><strong>DOWNLOAD</strong> FidoCadJ for MacOSX now!</a>');
				    } else if(navigator.appVersion.indexOf("Win")!=-1) {
				        document.write('<a href="https://github.com/DarwinNE/FidoCadJ/releases/download/v0.24.5/FidoCadJ_Windows.msi" id="download_button"><strong>DOWNLOAD</strong> FidoCadJ for Windows now!</a>');
						} else if(navigator.appVersion.indexOf("Linux")!=-1) {
								document.write('<a href="https://github.com/DarwinNE/FidoCadJ/releases/download/v0.24.5/fidocadj.jar" id="download_button"><strong>DOWNLOAD</strong> FidoCadJ for Linux now!</a>');
						} else if(navigator.appVersion.indexOf("Android")!=-1) {
								document.write('<a href="http://sourceforge.net/projects/fidocadj/files/public_betas/Android/fidocadj-debug20150227.apk/download" id="download_button"><strong>DOWNLOAD</strong> FidoCadJ for Android now!</a>');
						} else {
				        document.write('<a href="http://darwinne.github.io/FidoCadJ/download.html" id="download_button"><strong>DOWNLOAD</strong> FidoCadJ now!</a>');
				    }
				</script>
				<p id="another_version_download_link"><a href="#">I need another version of FidoCadJ.</a></p>
			</div>
			<ul>
				<li>A simple <b>schematic capture</b> with a built-in set of electrical symbols and footprints;</li>
				<li>A versatile graphical editor with user-defined libraries;</li>
				<li><b>Easy-sharing</b> text format for web forums and blogs;</li>
				<li><b>Export in several graphical formats</b>: PDF, EPS, SVG, PNG, JPG, and PGF/TikZ for LaTeX;</li>
				<li>User interface in English, French, Italian, German, Chinese, Spanish, Czech, Japanese and Dutch.</li>
			</ul>

			<a href="images/creenshots/ecg.png"><img src="images/screenshots/ecg_t.png" alt="FidoCadJ on MacOSX 10.9.4" class="indisplay"></a>

			<h3>Curious about FidoCadJ? Give it a try!</h3>

			<ul>
				<li> <a href="download.html">Download it for free</a>.</li>
				<li><a href="examples.html">Play with some examples</a>.</li>
				<li><a href="scrn.html">Screenshots</a>.</li>
			</ul>

			<h3>Did you like it? Get involved</h3>
			<p>Give us your feedback about FidoCadJ!  <a href="https://sourceforge.net/projects/fidocadj/">Write a review on Sourceforge</a>, or participate to <a href="https://sourceforge.net/p/fidocadj/discussion/997486">the forums</a>.
			<b>If you are happy, tell your friends :-)</b> If you spot a typo in the documentation, you want to improve it, or if you are a Java developer, <a href="https://sourceforge.net/p/fidocadj/discussion/997486">contact us.</a></p>
			<p>Follow the FidoCadJ development on Twitter: <a href="https://twitter.com/davbucci">@davbucci</a></p>
			<p>FidoCadJ is the official drawing tool of <a href="http://www.electroyou.it">ElectroYou</a> and <a href="http://www.matematicamente.it/forum/">Matematicamente</a>, the italian social networks for electronics and maths.
				<a href="http://www.electroyou.it/"><img src="images/electroyou.jpeg" alt="ElectroYou" class="indisplay"></a>
				Watercolor by Carlo Maria Manenti.
			</p>

			<p>August 26, 2015</p><br>
		</div>
<!-- end of content -->
		<footer>
			<h3>License</h3>
			<img id="gplv3_logo" src="images/logos/gplv3-127x51.png" alt="GPL v. 3">
			<p id="license">--------
			Copyright (C) 2007-2015  Davide Bucci davbucci at tiscali dot it and others.<br>
			This program is free software: you can redistribute it and/or modify
			it under the terms of the GNU General Public License as published by
			the Free Software Foundation, version 3 of the License.

			This program is distributed in the hope that it will be useful,
			but WITHOUT ANY WARRANTY; without even the implied warranty of
			MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
			GNU General Public License for more details.

			You should have received a copy of the GNU General Public License
			along with this program.  If not, see <a href="http://www.gnu.org/licenses/">http://www.gnu.org/licenses/</a>.
			</p>
		</footer>
	</body>
</html>
