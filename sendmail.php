<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "your@email.com"; // ←あなたのメールアドレス
    $subject = "お問い合わせフォーム";
    $name = htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($_POST["message"], ENT_QUOTES, 'UTF-8');

    $body = "お名前: $name\nメールアドレス: $email\n\nメッセージ:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "送信が成功しました。";
    } else {
        echo "送信に失敗しました。";
    }
}
?>