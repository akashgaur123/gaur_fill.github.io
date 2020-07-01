<?php
 
    $name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$texr = $_REQUEST['text'];
	
	if(empty($name) || empty($email) || empty($text))
	{
		echo "Please fill information";
	}
	else
	{
		mail("ag.akash.gaur@gmail.com", "Message" , $text , "Form: $name < $email>");
		
		echo "<script type='text/javascrip'>alert = ('sent successfully'); window.history.log(-1); </script>"
	}
// ?>