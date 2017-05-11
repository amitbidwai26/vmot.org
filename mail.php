<?php 
if(isset($_POST['submit'])){
    $to =    "vectorshipdesign@gmail.com";
    $from = $_POST['email'];
    $first_name = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $subject = "Form submission on website";
    $subject2 = "Copy of your form submission to website";
    $messagetosend = "Name:". $first_name . "\n\nEmail : ". $email ."\n\nPhone Number: ".$phone." \n\nWrote the following:" . "\n\n" . $message . " \n\nRegards Team\nVOMT";
    $messagetocopy = "Here is a copy of your message \n\nName:". $first_name . "\n\nEmail : " . $email . "\n\nPhone Number: " . $phone . " \n\nWrote the following:" . "\n\n" . $message . "\n\nRegards Team\nVOMT ";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    if(isset($_POST['email'])){
            mail($to,$subject,$messagetosend,$headers);
            mail($from,$subject2,$messagetocopy,$headers2);
// mail($to1,$subject,$messagetosend,$headers); // sends a copy of the message to the sender
            echo "Mail Sent Sucessfully";
    }
    echo "<center><br>Copy of information is sent via Mail. <br><br> Thank you " . $first_name . ", <br><br>we will contact you shortly.</center>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }else{

echo "Did not entered mail module";

    }
?>
<!-- Footer Start-->
<?php include 'thank.php';
?>
<!-- Footer End-->