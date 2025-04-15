<?php
namespace pdo_con {
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/config.php')) {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
    } else {
        require_once __DIR__ . '/../../config.php';
    }
    if ($isProduction) {
        $config = require $_SERVER['DOCUMENT_ROOT'] . "/admin/controller/database.php";
    } else {
        $config = require __DIR__ . "/../../controller/database.php";
    }
    
    use PDO;
    // PDO database connection 3 key elements
    // DSN(the Data Source Name)  username password
    extract($config);
    $dsn = sprintf('%s:host=%s;dbname=%s', $type, $host, $dbname);

    $isConnected = false;

    try {
        $pdo = new PDO(
            $dsn,
            $username,
            $password,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]
        );
        // var_dump($pdo);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $isConnected = true;
    } catch (\Exception $e) {
        die('Connection Error: ' . $e->getMessage());
    }

    function isDatabaseConnected()
    {
        global $isConnected;
        return $isConnected;
    }
}

// 弹出提示框然后跳转指定的URL
namespace {
    function alert($str, $url)
    {
        echo '<script>window.alert("' . $str . '");location.href="' . $url . '";</script>';
    }
}
?>