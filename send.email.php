<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "mriyadhi914@gmail.com"; // Ganti dengan alamat email Anda
    $subject = "Pesan dari Form Kontak";
    $email_body = "Anda menerima pesan dari: $name\n\nEmail: $email\n\nPesan:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $email_body, $headers)) {
        echo "Pesan telah terkirim!";
    } else {
        echo "Maaf, pesan gagal terkirim.";
    }
}
?>
