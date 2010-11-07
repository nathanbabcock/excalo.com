<?php
$_GET['title'] = "Contact";
$_GET['keywords'] = "contact, email";
$_GET['description'] = "The contact/feedback for Excalo.com.";
include("../header.php");
ob_flush();flush();
?>
<h1>Contact Test Page</h1>
<form name="contact" action="">
<br>
<label for="fname">Name: <small>&nbsp;</small></label><input type="text" name="fname" maxlength="20" class="text" id="fname" onkeyup="validate(this);"><br>
<label for="email">Email: &nbsp;</label><input type="text" name="email" class="text" id="email"><br>
<label for="message">Message:</label>
<div class="textarea">
<textarea rows="9" cols="31" name="message" id="message"></textarea>
</div>
<input type="submit" value="Submit">
</form>

<script type="text/javascript" src="http://www.excalo.com/js/validation.js"></script><script type="text/javascript">validate(document.contact.fname);</script>
<?php include('../footer.html'); ?>
