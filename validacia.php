<?php
$name = $_POST["log"];
$passwords = $_POST["password"];
$nameHash=hash('md5', $name); 
$passwordHash=hash('md5', $password); 
$host = 'localhost'; // адрес сервера 
$database = 'piz'; // имя базы данных
$user = 'Means_war'; // имя пользователя
$password = 'ifatur23'; // пароль

$db = mysqli_connect($host, $user, $password, $database);
$query = "INSERT INTO `users`(`login`, `password`) VALUES ('$nameHash', '$passwordHash')";
echo "name $name<br>password $passwords<br>hashName $nameHash<br>hashPassword $passwordHash";
$res = mysqli_query($db, $query);
if ($res === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $db->error;
}
?>


Добрый вечер вам,  о миледи,
прекрасная на всем белом свете.
Про встречу с кофе вам напоминаю
за это очень я переживаю.
Надеюсь на скорый ваш ответ,
Ваш компуктерщик - худой атлет :D