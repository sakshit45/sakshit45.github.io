<html>
	<body>
		<?php
			$akshusMailId="saxenaakshit45@gmail.com";
			
			$messageToSend="Hello Sir Sexy,\n\n".$_POST["message"]."\n\n".$_POST["senderName"]."\n".$_POST["email"];

			$headers="From:contactus@akshukiwebsite.com";
				
			$retFromMail = mail($akshusMailId, "Message by ".$_POST["senderName"], $messageToSend, $headers);

			if($retFromMail){
				echo "Mail Succesful";
			}
			else{
				echo "Mail Fail";
			}
		?>
	</body>
</html>