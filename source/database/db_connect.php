<?php
function db()
{
    try {
        $user = "root";
        $pwd = "";
        $dbname = "student_db";
        $dsn = "mysql:host=localhost:3306;dbname=" . $dbname . ";charset=utf8";
        $db = new PDO($dsn, $user, $pwd, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        // dans le new PDO on peut ajouter ce parametre : [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC] pour ne plus mettre de fetchALL partout
        return $db;
    } catch (PDOException $error) {
        var_dump($error);
        die;
    }
}
