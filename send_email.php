<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "paja5913@gmail.com";
    $subject = "Nová zpráva z kontaktního formuláře - Grant Pneu";
    
    $email_content = "Jméno: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Zpráva:\n$message\n";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    if (mail($to, $subject, $email_content, $headers)) {
        echo "<script>
            alert('Děkujeme za vaši zprávu. Budeme vás kontaktovat co nejdříve.');
            window.location.href = 'index.php#kontakt';
        </script>";
    } else {
        echo "<script>
            alert('Omlouváme se, při odesílání zprávy došlo k chybě. Prosím zkuste to znovu později.');
            window.location.href = 'index.php#kontakt';
        </script>";
    }
}
?> 