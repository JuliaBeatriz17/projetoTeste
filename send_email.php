<!-- <?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : '';

  
    if (empty($email)) {
        $errors[] = 'Email está vazio';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email é inválido';
    }

    if (empty($message)) {
        $errors[] = 'Mensagem está vazia';
    }

    if (empty($errors)) {
        $recipient = "juliabeatriz.a.carvalho@gmail.com";


        if (mail($recipient, $message, $headers)) {
            echo "Email enviado com sucesso";
        } else {
            echo "Envio de email falhou. Por favor tente novamente mais tarde";
        }

    } else {
        echo "O formulário possui os seguintes erros:<br>";
        foreach ($errors as $error) {
            echo "-$error<br>";
        }
    }
} else {
    header(("HTTP/1.1 403 Forbidden"));
    echo "Não tem permissões para aceder a está página";
}
?> -->