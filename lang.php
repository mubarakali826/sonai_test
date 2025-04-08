<?php
// 启动会话
session_start();

if (isset($_POST['lang'])) {
    // 如果用户选择了语言并提交表单，将所选语言存储在会话中
    $_SESSION['lang'] = $_POST['lang'];
    $lang = $_SESSION['lang'];
} else {
    // 如果会话中没有语言设置，将默认语言设置为英语
    if (!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = 'en';
    }
    $lang = $_SESSION['lang'];
}

// 根据语言选择设置对应的标识
if ($lang == 'en') {
    $checkLang = '_en';
} else {
    $checkLang = '';
}
?>