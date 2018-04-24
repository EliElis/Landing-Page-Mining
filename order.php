<?php

{
  $dt=date("d F Y, H:i:s"); // дата и время
  $mail="alisa.umnova@gmail.com"; // e-mail куда уйдет письмо
  $title="Заявка с сайта ".$_SERVER["SERVER_NAME"]; // заголовок(тема) письма
 $form_type=$_POST["form_type"];
 $summ=$_POST["summ"]; 
 $valuta1=$_POST["valuta1"];
 $summ2=$_POST["summ2"]; 
 $valuta2=$_POST["valuta2"];
 $phone=$_POST["phone"];
 
  
  $mess="<b>Тип формы:</b> $form_type<br>";
  $mess.="<b>Предлагаю:</b> $summ $valuta1<br>"; 
  $mess.="<b>В обмен на:</b> $summ2 $valuta2<br>";
  $mess.="<b>Телефон:</b> $phone<br>";
  $mess.="<b>Дата и Время:</b> $dt";

  $headers="MIME-Version: 1.0\r\n";
  $headers.="Content-type: text/html; charset=utf-8\r\n"; //кодировка
  $headers.="From: feedback@".$_SERVER["SERVER_NAME"]; // откуда письмо (необязательнакя строка)
  mail($mail, $title, $mess, $headers); // отправляем

  // выводим уведомление и перезагружаем страничку
print"
<script language='Javascript' type='text/javascript'>
<!--

function reload()
{location = \"/thanks.html\"}; 
setTimeout('reload()',0);
-->
</script>";
}
?>

