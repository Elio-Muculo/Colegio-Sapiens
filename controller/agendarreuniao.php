<?php 
session_start();


if (!isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
}


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


require_once '../config/crud.php';

$professor = readOne("SELECT * FROM professor WHERE userId = :id", ['id' => $_SESSION['user_id']]);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    /**
     * dados da reuniao
    */
    $dadosReuniao = [
        'tipo' => $_POST['tipo'], 
        'assunto' => $_POST['assunto'],
        'data' => $_POST['data'],
        'professor_cod' => $professor['codigo'],
        'encarregado_cod' => $_POST['encarregado_cod']
    ];

    $encarregado = readOne("SELECT * FROM encarregado WHERE codigo = :id", ['id' => $_POST['encarregado_cod']]);
    
    $inserted = insertAll("INSERT INTO reuniao (tipo, assunto, data, professor_cod, encarregado_cod) VALUES (:tipo, :assunto, :data, :professor_cod, :encarregado_cod)", $dadosReuniao);
    if ($inserted == 1) {
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'emuculo25@gmail.com';                     //SMTP username
            $mail->Password   = 'zfnsbwzonjjxkchs';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );
            //Recipients
            $mail->setFrom('emuculo25@gmail.com', $professor['nome']);
            $mail->addAddress($encarregado['email'], $encarregado['nome']);     //Add a recipient

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "Reuniao [". $dadosReuniao['tipo'] ."] " . $dadosReuniao['assunto'];
            $mail->Body    = '<strong>Saudações caro encarregado</strong>, recebeu esse e-mail para que compareça <br> a uma reunião agendada para o dia ' . $dadosReuniao['data'] . ' <br>com o seguinte assunto ' . $dadosReuniao['assunto'] . ' aguardamos a sua presença. <br><br><p> Melhores cumprimentos </p>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo "<script>location.href='../views/admin.php';</script>";
            die("dado inserido com sucesso");
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $error[] = "<p>Os dados não foram inseridos</p>";
        $_SESSION['error'] = $error;
        header('Location: ../views/cadastroEducando.php');
        die();
    }
}
    


