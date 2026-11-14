<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Me - Sitonik Portfolio</title>
  <link rel="stylesheet" href="style.css"> <!-- External CSS -->
</head>
<body>
  <header>
    <h1>About Me</h1>
    <nav>
      <a href="index.html">Home</a>
      <a href="about.php">About Me</a>
      
      <a href="skills.php">Skills</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <main>
    <div class="section">
      <h2>Who I Am</h2>
      <p>
        My name is <strong>Sitonik Kibet Rotich</strong>. I am an electrical engineering professional with practical field experience in metering, inspections and postpaid meter replacement. I value safety, accuracy and continuous learning.
      </p>
    </div>

    <div class="section">
      <h2>Education</h2>
      <ul>
        <li>KNEC Craft Certificate in Electrical Studies</li>
        <li>KNEC Diploma in Electrical Studies</li>
      </ul>
    </div>

    <div class="section">
      <h2>Goals</h2>
      <p>
        I aim to deepen my expertise in industrial electrical maintenance, instrumentation, control systems and electrical safety.
      </p>
    </div>

    <div class="section">
      <h2>Interests</h2>
      <p>
        My technical interests include electrical systems, metering, PLCs, instrumentation and industrial control systems. I also follow Kenyan current affairs and value cultural traditions.
      </p>
    </div>
  </main>

  <footer>
    <p>&copy; <?php echo date("Y"); ?> Sitonik Kibet Rotich | My Digital Portfolio</p>
  </footer>
</body>
</html>
