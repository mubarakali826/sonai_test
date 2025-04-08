<?php


namespace pdo_con {
    $config = require __DIR__ . '/database.php';

    use PDO;

    // PDO database connection 3 key elements
    // DSN(the Data Source Name)  username password
    extract($config);
    $dsn = sprintf('%s:host=%s;dbname=%s', $type, $host, $dbname);


    try {
        $pdo = new PDO(
            $dsn,
            $username,
            $password,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]
        );
        // var_dump($pdo);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (\Exception $e) {
        die('Connection Error' . $e->getMessage());
    }
    ;

}
namespace {
    function alert($str, $url)
    {
        echo '<script>window.alert("' . $str . '");location.href="' . $url . '";</script>';
    }
}
;