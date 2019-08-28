<?php
if($_POST["message"]) {
  $to="samueljohnbarr@gmail.com";
  $subject="Message from website!";
  $message=$_POST["message"];
  $headers='From: ' . $_POST["email"] . "\r\n" .
	  'Reply-To: ' . $_POST["email"] . "\r\n" .
	  'X-Mailer: PHP/' . phpversion();

  if(mail($to, $subject, $message, $headers)) {
    echo "Mail sent!";
  }
  else {
    echo "Mail failed to send";
  }
}
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Samuel John Barr</title>

  <meta name="author" content="Samuel Barr">
  <link href="https://fonts.googleapis.com/css?family=Scope+One" rel="stylesheet">   
  <link rel="stylesheet" href="../css/style.css?v=1.0">
  <link rel="stylesheet" href="../css/contactstyle.css?v=1.0">

</head>

<body>
<div class=all>
  <div class=heading>
    <h1>Samuel Barr</h1>
    <h2><i>Software Engineer</i></h2>
  </div>
  <div class="topnav">
    <a href="../index.html">Home</a>
    <a href="education.html">Education</a>
    <a href="experience.html">Experience</a>
    <a href="projects.html">Projects</a>
    <a class="active" href="">Contact</a>
  </div>
  <hr>
    <div class=container>
      <div class=info>
        <h1 class=contact>contact</h1>
        <img id=home src=../pics/home.jpg> 
	<p><img id=ico src=../pics/phone.png>
          <span id=con> phone:</span> (704)-929-2170
        </p>
	<p><img id=ico src=../pics/mail.png>
	  <span id=con> email:</span> mail@samueljohnbarr.com
        </p>
	<p><img id=ico src=../pics/github.png>
	  <span id=con> github:</span> samueljohnbarr
        </p>
	<p><img id=ico src=../pics/linkedin.png>
	  <span id=con> linkedin:</span> samuel-john-barr
        </p>      
      </div>
      <div id=form>
	<h1>email me</h1>
	<form method="post" action="contact.php"
              enctype="text/plain">
	  <input type="text" name="name" 
		placeholder="enter your name..">
	  <br>
	  <input type="text" name="email"
		placeholder="enter your email..">
	  <br>
	  <textarea name="message"
                    placeholder="write something.."></textarea>
          <input id="submit" type="submit" value="Send Message">
	</form>
      </div>
    </div>
    <br>
  <hr>
  <p class=footer>March 1st, 2019</p>
</div>
</body>
</html>
