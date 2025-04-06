<?php
$name = $_GET['name'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$token = "8052032735:AAG87Af39FQ8_aE0WLUXvPvliLas7683Scg";
$chat_id = "-4600503321";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: ss.html');
} else {
  echo "Error";
}
?>
