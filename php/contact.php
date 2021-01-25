<?php 

    $array = array("firstname" => "", "name" => "", "email" => "", "message" => "", "firstnameError" => "", "nameError" => "", "emailError" => "", "messageError" => "", "isSuccess" => false);
	
	$emailTo = "obonheurdujour@mailoo.org";

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$array["firstname"] = verifyinput($_POST["firstname"]);
		$array["name"] = verifyinput($_POST["name"]);
		$array["email"] = verifyinput($_POST["email"]);
		$array["message"] = verifyinput($_POST["message"]);
		$array["isSuccess"] = true;
		$emailText = "";

		if(empty($array["firstname"])){
			$array["firstnameError"] = "Ce champ doit être renseigné";
			$array["isSuccess"] = false;
		}
		else{
			$emailText .= "First name: {$array["firstname"]}\n";
        }
        
		if(empty($array["name"])){
			$array["nameError"] = "Ce champ doit être renseigné";
			$array["isSuccess"] = false;
		}
		else{
			$emailText .= "Name: {$array["name"]}\n";
        }
        
		if(empty($array["email"])){
			$array["emailError"] = "Ce champ doit être renseigné";
			$array["isSuccess"] = false;
		}
		else{
			$emailText .= "Email: {$array["email"]}\n";
        }
        
		if(!isEmail($array["email"])){
			$array["emailError"] = "Ce champ doit être renseigné";
			$array["isSuccess"] = false;
		}
		else{
			$emailText .= "Email: {$array["email"]}\n";
        }
        
		if(empty($array["message"])){
			$array["messageError"] = "Ce champ doit être renseigné";
			$array["isSuccess"] = false;
		}
		else{
			$emailText .= "Message: {$array["message"]}\n";
		}

		if($array["isSuccess"]){
			$headers = "From: {$array["firstname"]} {$array["name"]}<{$array["email"]}>\r\nReply-To: {$array["email"]}";
			mail($emailTo, "Un message de votre site", $emailText, $headers);
        }
        
        echo json_encode($array);
	}

	function isEmail($var){
		return filter_var($var, FILTER_VALIDATE_EMAIL);
	}

	function verifyinput($var){
		$var = trim($var);
		$var = stripslashes($var);
		$var = htmlspecialchars($var);
		return $var;
	}
?>