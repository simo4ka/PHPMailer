<meta charset="utf-8"> 
<?php
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы		
if (isset($_POST['email1']))		{$email1		= $_POST['email1'];		if ($email1 == '')	{unset($email1);}}
//стирание треугольных скобок из полей формы
/* комментарий */
if (isset($email1) ) {
$email1=stripslashes($email1);
$email1=htmlspecialchars($email1);
}
// адрес почты куда придет письмо
$address="serafyma.tupitsyna@gmail.com";
// текст письма 
$note_text="Тема : $urok \r\nИмя : $name1 \r\n Email : $email1 \r\n Дополнительная информация : $text";

if (isset($name1)  &&  isset ($sab) ) {
mail($address,$urok,$note_text,"Content-type:text/plain; windows-1251"); 
// сообщение после отправки формы
    
echo "<p style='color:green;'>Уважаемый(ая) <b style='color:red;'>$name1</b> Ваше письмо отправленно успешно. <br> Спасибо. <br>Вам скоро ответят на почту <b style='color:red;'> $email1</b>.</p>";
}

?>
