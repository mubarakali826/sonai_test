<?php
namespace pdo_con {
    $configPath = __DIR__ .'/database.php';

    if (file_exists($configPath)) {
        $config = include $configPath;
    
        if (!is_array($config)) {
            die('Error: database.php must return an array.');
        }
        
        extract($config);
    } else {
        die("Error: Configuration file not found.");
    }
    
    use PDO;
    // PDO database connection 3 key elements
    // DSN(the Data Source Name)  username password
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