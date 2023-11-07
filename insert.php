<?php
include 'connect.php';

extract($_POST);

if (isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['mobileSend']) && isset($_POST['placeSend'])) {

    $name = $_POST['nameSend'];
    $email = $_POST['emailSend'];
    $mobile = $_POST['mobileSend'];
    $place = $_POST['placeSend'];

    $sql = "INSERT INTO contacts (name, email, mobile, place) VALUES (:name, :email, :mobile, :place)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mobile', $mobile);
    $stmt->bindParam(':place', $place);

    if ($stmt->execute()) {
        echo "Inserção bem-sucedida!";
    } else {
        echo "Erro na inserção: " . $stmt->errorInfo()[2];
    }
} else {
    echo "Faltam parâmetros na requisição POST.";
}
?>
