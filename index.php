<?php
// Отправляем браузеру правильную кодировку,
// файл index.php должен быть в кодировке UTF-8 без BOM.
header('Content-Type: text/html; charset=UTF-8'); 

// В суперглобальном массиве $_SERVER PHP сохраняет некторые заголовки запроса HTTP
// и другие сведения о клиненте и сервере, например метод текущего запроса $_SERVER['REQUEST_METHOD'].
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // В суперглобальном массиве $_GET PHP хранит все параметры, переданные в текущем запросе через URL.
    if (!empty($_GET['save'])) {
      // Если есть параметр save, то выводим сообщение пользователю.
      print('Спасибо, результаты сохранены.');
    }
    include('form.php'); // Включаем содержимое файла form.php.
    exit(); // Завершаем работу скрипта.
}

$result;
$errors = FALSE;
// Иначе, если запрос был методом POST, т.е. нужно проверить данные и сохранить их в XML-файл.
try{
    // Проверяем ошибки.
    if (empty($_POST['field-name'])) {
        print('Заполните имя.<br/>');
        $errors = TRUE;
    }
    if (empty($_POST['field-email'])) {
        print('Заполните почту.<br/>');
        $errors = TRUE;
    }

    if (empty($_POST['bio1'])) {
        print('Заполните биографию.<br/>');
        $errors = TRUE;
    }
    if (empty($_POST['ch1'])) {
        print('Вы должны быть согласны с условиями.<br/>');
        $errors = TRUE;
    }

    
    if ($errors) {
      // При наличии ошибок завершаем работу скрипта.
        exit();
    }
    //передаем данные в переменные
    $name = $_POST['field-name'];
    $email = $_POST['field-email'];
    $dob = $_POST['field-date'];
    $gender = $_POST['radio-gender'];
    $limb = $_POST['radio-limb'];
    $bioo = $_POST['bio1'];
    $ch = $_POST['ch1'];
    
    //Объединяет элементы массива в строку
    $sup= implode(",",$_POST['superpower']);

    //Представляет собой соединение между PHP и сервером базы данных.
    $conn = new PDO("mysql:host=localhost;dbname=u41810", 'u41810', '3516685', array(PDO::ATTR_PERSISTENT => true));

    //Подготавливает инструкцию к выполнению и возвращает объект инструкции
    $id_user = $conn->lastInsertId();
    $user = $conn->prepare("INSERT INTO form SET id = ?, nameku = ?, email = ?, dob = ?, gender = ?, limb = ?, bioo = ?, ch = ?");

    //Запускает подготовленный запрос на выполнение
    
    $user -> execute([$id_user, $_POST['field-name'], $_POST['field-email'], date('Y-m-d', strtotime($_POST['field-date'])), $_POST['radio-gender'], $_POST['radio-limb'], $_POST['bio1'], $_POST['ch1']]);

    $user1 = $conn->prepare("INSERT INTO super SET id = ?, superpowerr = ?");
    $user1 -> execute([$id_user, $sup]);
    $result = true;
}
    //  user и user1 - это "дескриптор состояния".
catch(PDOException $e){
    print('Error : ' . $e->getMessage());
    exit();
}


if ($result) {
  echo "Информация занесена в базу данных под ID №" . $id_user;
}
//print - выводит строку, а echo - 1 или больше строк
?>