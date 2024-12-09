<?php
// Укажите токен вашего бота
$token = "7918859004:AAHO7C8Ai_Z5-QV9YclG8LHk3zhJyM5Tzvw";

// Укажите ID чата, куда бот будет отправлять сообщения
$chat_id = "1978279396";

// Получение данных из формы
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

// Получение IP-адреса отправителя
$ip_address = $_SERVER['REMOTE_ADDR'];

// Формирование текста сообщения для Telegram
$txt = "Новое сообщение с сайта:\n";
$txt .= "Имя: $name\n";
$txt .= "Email: $email\n";
$txt .= "Сообщение: $message\n";
$txt .= "IP: $ip_address";

// URL для отправки сообщения в Telegram
$url = "https://api.telegram.org/bot$token/sendMessage";

// Параметры запроса
$data = [
'chat_id' => $chat_id,
'text' => $txt
];

// Инициализация cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Выполнение запроса
$response = curl_exec($ch);
curl_close($ch);

// Проверка успешности отправки
if ($response) {
echo "Сообщение успешно отправлено.";
} else {
echo "Ошибка при отправке сообщения.";
}
?>