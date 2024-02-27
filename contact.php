<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $phone_number = $_POST['phone'];
    $address = $_POST['address'];
    $message = $_POST['list'];
  
   $email_from ="visitor_email" ;
  $email_subject = "New Form submission";
  $email_body = "You have received a new message from the user $name.\n" .
                "Phone Number: $phone_number\n" .
                "Address: $address\n" .
                "Email: $visitor_email\n" .
                "Message:\n$message";
  
    $to = "sheheryar.ali876@gmail.com";
  
    $headers = "From: $email_from\r\n";
    $headers = "Reply-To:$visitor_email \r\n";

    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "  <h3 style='color: rgb(255, 255, 255); background-color: green;'>Message sent successfully!</h3> ";
     
 
    } else {
        echo "<h3 style='color: rgb(0, 0, 0); background-color: rgb(255, 0, 0);'>Message delivery failed!</h3>";
    }
  }
  ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Online Food Delivery Service in India | MyOnlineMeal.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">

    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>

<body>
    <nav id="navbar">

        <div id="logo">
            <img src="logo1.png" alt="MyOnlineMeal.com">
        </div>
        <ul>
            <li class="item"><a href="index.html">Home</a></li>
            <li class="item"><a href="product.html">Products</a></li>
            <li class="item"><a href="contact.html">Contact Us</a></li>
        </ul>

    </nav>
    <div id="prodheahing">
        <h1>Contact Us</h1>
    </div>

    <section id="contact">


        <div id="contact-box">
            <form  reset(); method="post" name="myemailform" action="">
                <div class="form-group">

                    <input type="text" name="name" id="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">

                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">

                    <input type="phone" name="phone" id="phone" placeholder="Enter your phone" required>
                </div>
                <div class="form-group">

                    <input type="text" name="address" id="Adress" placeholder="Enter your Adress" required>
                </div>
                <div class="form-group">

                    <textarea name="list" id="list" cols="30" rows="5" required
                        placeholder="Enter your List"></textarea>
                </div>
                <br>
                <div> <Button name="send" class="cont">Send Now</Button></div>
                <br>
                <input style="  background-color:  rgb(237, 153, 27);" type="reset">
            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.myOnlineMeal.com. All rights reserved!
        </div>
    </footer>
    </section>

    
    
</body>
</html>











