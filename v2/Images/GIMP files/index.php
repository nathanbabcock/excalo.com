<?php
$_GET['title'] = "Redesign";
$_GET['keywords'] = "excalo, web design, graphics design, beta, web 2.0, test";
$_GET['description'] = "The redesign test for Excalo.com, not yet released to the public (so why are you looking at it!?";
include("header.php");
flush();ob_flush();
?>
<h1>Welcome to Excalo!</h1>
<p>This is the test page for the new design of Excalo. Hand-crafted with the best web technologies, <abbr title="Hypertext Markup Language">HTML</abbr> 4.01, <abbr title="Cascading Style Sheets">CSS</abbr>, JavaScript, and <abbr title="Hypertext Pre-Processing">PHP</abbr>. Every single line of code is 100% valid with the <a href="http://validator.w3.org/">w3 validator</a>.
<blockquote>This is a test of a blockquote. I have to add a bunch of random stuff so that it will fill a line.
<div class="author">~ Nathan<div class="details">Website Designer/Programmer</div></div></blockquote>
<?php
include("footer.html");
?>
