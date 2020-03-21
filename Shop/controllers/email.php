<?php

// !!!! isijungti i ON :
// https://myaccount.google.com/lesssecureapps


// print_r( $_POST );
$klientoVardas = $_POST['vardas'];
$klientoTema = $_POST['tema'];
$klientoKlausimas = $_POST['klausimas'];
$klientoPastas = $_POST['email'];
// echo "  $klientoVardas  $klientoPavarde  <hr /> ";
// echo "  $klientoAntraste  <hr /> $klientoKlausimas   ";
// echo "  <hr /> $klientoPastas   ";



    // Load Composer's autoloader
    // require 'vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
date_default_timezone_set('Etc/UTC');
    require '../libs/PHPMailer-master/src/Exception.php';
    require '../libs/PHPMailer-master/src/PHPMailer.php';
    require '../libs/PHPMailer-master/src/SMTP.php';
    // Load Composer's autoloader
    // require 'vendor/autoload.php';
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        $mail->IsSMTP();
        $mail->Mailer = "smtp";

        $mail->SMTPDebug  = 0;
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "smtp.gmail.com";
        // $mail->Host       = "ssl://smtp.gmail.com";
        // OLD
        // $mail->Host = 'tls://smtp.gmail.com:587';
        // $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        // $mail->Port = 465;                                      // TCP port to connect to

        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        // $mail->isSMTP();                                               // Set the SMTP server to send through
        // $mail->SMTPAuth   = true;                                   // Enable SMTP authentication

        $mail->Username = 'vytautas5544@gmail.com';                 // SMTP username
        $mail->Password = 'asd123!!!';                          // SMTP username
                      // SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        // $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('vytautas5544g@gmail.com', 'Programuotojai');
        $mail->addAddress('vytautas5544g@gmail.com', 'Programuotojai');     // Add a recipient
         $mail->addReplyTo($klientoPastas , $klientoVardas);
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $klientoTema;
        $mail->Body    = $klientoKlausimas;
        $mail->AltBody = $klientoKlausimas;

        $mail->send();
        echo 'Zinute issiusta';
    } catch (Exception $e) {
        echo "Nepavyko issiusti zinutes: {$mail->ErrorInfo}";
    }
