<?php
include('config.php');
include(APP_INC_DIR . 'authenicate.inc.php');

if(!is_authenicated(APP_AUTHENICATE_KEY))
{
	// redirect user to sign in
	header('Location:'.APP_SIGNIN_URL);
	exit;
}
else
{
	// home content
	// if signed in, show following content
	echo "welcome to our website's Home Page, Mr." . $_SESSION['username'];
	echo "<form action='" . APP_SIGNOUT_URL . "' method='post'>";
	echo "<input type='submit' name='logout' value='LogOut' />";
	echo "<p>after logged out, you will be redirect to login page.</p>";
	echo "</form>";
	echo "<a href='anotherpage.php'>Go Another Page</a>";
}

?>
