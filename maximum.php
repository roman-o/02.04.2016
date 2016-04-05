<meta charset="utf-8"> 
<?php
class ContactForm {
	public $login ;
	public $message ;
	public function validLogin(){
		
		if (preg_match('/[^а-яА-Яa-zA-Z]/',$_POST['login'])) {
        echo "недопустимый логин (допускаются только буквы)";
        exit;
        }
	}
	public function send() {
		echo "Пользователь $this->login пишет: $this->message ";
	}
    public function valideMessage(){
		$this->message = htmlspecialchars ($this->message);
	}
    function addContent (){	
	   $newPost["userName"] = $this->login;
	   $newPost["userMessage"] = $this->message;
	   $messages[]= $newPost;
	   $messagesDB = serialize($messages);
	   file_put_contents("db/messages.db",$messagesDB );
	}
}			
if($_POST){
	$massage = new ContactForm;
	$massage ->login = $_POST['login'];
	$massage ->message = $_POST['message'];
	$massage-> valideMessage();
	$massage-> validLogin();
	echo "<br>";
	$massage-> send();
	$massage-> addContent ();	
}



?>

<form method="post" action="">
логин<input type="text" name="login"><br>
сообщение<textarea name="message"></textarea><br>
<input type="submit" name="submit">

