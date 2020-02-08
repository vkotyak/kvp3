<?php 

// настройки подключения
$host = '127.0.0.1';
$dbname = 'mydb';
$username = 'root';
$password = '321';
$charset = 'utf8';

//подготовка и создание объекта подключения
$dns = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false,
    ];
$pdo = new PDO($dns, $username, $password, $options);

//получение или создание самого запроса
$sql = 'SELECT * FROM articles';

//получение PDOStatement-объекта (объекта с запросом к БД)
$query = $pdo->query($sql);

//Вариант1 - получение всей информации
$result = $query->fetchAll();
var_dump($result);

//Вариант2 - вывод только нужной информации
/*while ($row = $query->fetch()) {
	echo $row['title'] . "\n";
}*/
?>