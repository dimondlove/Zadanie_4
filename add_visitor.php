<?php

	if (isset($_POST['first_name'])) $first_name = $_POST['first_name'];
	if (isset($_POST['last_name'])) $last_name = $_POST['last_name'];
	if (isset($_POST['email'])) $email = $_POST['email'];
	if (isset($_POST['age'])) $age = $_POST['age'];

	$link = mysqli_connect('localhost', 'root', '', 'conference');

	if ($link == false){
    	print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
	}
	else {
		//print("Соединение установлено успешно");
		mysqli_set_charset($link, "utf8");

		 $sql = "INSERT INTO visitors (first_name, last_name, email, age) VALUES ('".$first_name."', '".$last_name."', '".$email."', '".$age."')";
		 $result = mysqli_query($link, $sql);

		if ($result == false) {
        	print("Произошла ошибка при выполнении запроса");
    	}
    	else {
    		print("Вы зарегистрированы!");
    	}
	}

?>