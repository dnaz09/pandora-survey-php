<?php
    require_once 'api/database/config.php';

    if (isset($_POST['add'])) {
        $email_subject = $_POST['email_subject'];
        $email_body = $_POST['email_body'];

        $sql = "INSERT INTO email (email_subject, email_body) VALUES ('$email_subject', '$email_body')";

        if (mysqli_query($conn, $sql)) {
            echo "
                <script type='text/javascript'>
                    alert('Successfully Added!');
                    window.location.href = 'email.php';
                </script>
            ";
        }
        else {
            echo "Failed";
        }
    }

    

    else if (isset($_POST['update'])){
        $email_subject = $_POST['email_subject'];
        $email_body = $_POST['email_body'];

        $sql = "UPDATE email SET email_subject = '$email_subject', email_body = '$email_body' WHERE id = 1";

        if ($conn->query($sql) === TRUE) {
            echo "
                <script type='text/javascript'>
                    alert('Successfully Updated!');
                    window.location.href = 'email.php';
                </script>
            ";
        }  
    }



?>