<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "bockring.scratcher@gmail.com"; // ←あなたのメールアドレス
    $subject = "GitHub Pagesお問い合わせ";
    $name = htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($_POST["message"], ENT_QUOTES, 'UTF-8');

    $body = "==重要通知==\n\nGitHub Pagesで作成されたページの閲覧者から問い合わせが届いています。\n早急に対応してください。\n\n==問い合わせ者概要==\n お名前 : $name\nメールアドレス : $email\n\n==問い合わせ内容==\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "送信が成功しました。";
    } else {
        echo "送信に失敗しました。";
    }
}
?>
