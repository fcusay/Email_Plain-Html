<html>
<body>
	<?php 
	function spamcheck($field){
		//Sanitize email add
		$field = filter_var($field,FILTER_SANITIZE_EMAIL);
		// validate email add
		if(filter_var($field,FILTER_VALIDATE_EMAIL)){
			return true;
		}else{
			return false;
		}
	}
	 ?>
	<h2>Sending Emails Using PHP</h2>
	<?php 
	//dislay form if the user has not clicked the submit button
	if(!isset($_POST['submit'])){
		?>
		<form method ='post' action ="<?php echo $_SERVER['PHP_SELF']; ?>">
			From : <input type ="text" name ="from"><br>
			Subject : <input type="text" name ="subject"><br>
			Message : <textarea name ="message"></textarea><br>
			<input type="submit" name="submit" value ="Send">
		</form>
		<?php
	}else{
		//user has submitted the form
		//check if the "from" input field is filled out
		if(isset($_POST['from'])){
			//check if the "from" email is valid
			$mailcheck =spamcheck($_POST['from']);
			if($mailcheck === false){
				echo "Invalid Input";
			}else{
				$from =$_POST['from'];
				$subject =$_POST['subject'];
				$message =$_POST['message'];
				$header = "From:" .$from."\n";
				// message lines should not exceed 70 characters,so wrap it
				$message = wordwrap($message,70);

				//send mail
				$retval = mail("rochelletongol@gmail.com",$subject,$message,$header);
				if($retval === true){
					echo "Email Sent.";
				}else{
					echo "Failed to send Email";
				}
			}
		}else{
			echo "Set the sender's email address.";
		}
	}
	?>
</body>
</html>