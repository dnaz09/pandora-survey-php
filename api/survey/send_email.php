<?php 

require_once '../database/config.php';
require '../../vendor/autoload.php';
require "../../vendor1/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;

header("Content-Type: image/png");

use Endroid\QrCode\QrCode;

$id = $_POST['cust_id'];

$query = "SELECT * FROM customers WHERE id = '$id'";
$results = $conn->query($query);

if($row = $results->fetch_assoc()) {
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];

    $fulldetails = "Name: ".$firstname.' '.$lastname."\r\n Email:".$email;

    $qrcode = new QrCode($fulldetails);

    $mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'pandorasurvey2019@gmail.com';          // SMTP username
    $mail->Password   = 'test@1234';                            // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('pandorasurvey2019@gmail.com', 'Pandora');
    $mail->addAddress($email, $firstname.' '.$lastname);     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('pandorasurvey2019@gmail.com', 'Pandora');
    $mail->addEmbeddedImage($qrcode->writeString(), 'qr', PHPMailer::ENCODING_BASE64, 'image/png');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Greetings!';
    $mail->Body    = 
    "
    <p>Thank you for your participation! Hope to see you soon!</p>
    <div id ='qrbox' style='text-align: center;'>            
        <img src='cid:qr'>
    </div>
    ";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if ($mail->send()) {
        $json['message'] = 'success';
    }
    else {
        $json['message'] = 'error';
    } 
}
echo json_encode($json);
?>