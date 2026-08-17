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
      <a href="index.php">Home</a>
      <a href="about.php">About Me</a>
      <a href="projects.php">Projects</a>
      <a href="skills.php">Skills</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <main>
    <div class="section">
      <h2>Who I Am</h2>
      <p>
        My name is <strong>Sitonik Kibet Rotich</strong>. I am a dynamic business leader, innovator, and electrical technician. 
        I blend technology, community impact, and active learning in web development and coding.
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
        I aim to master professional code presentation and assignment formatting, become an advanced full‑stack developer, 
        and create projects that merge music, coding, and community impact.
      </p>
    </div>

    <div class="section">
      <h2>Interests</h2>
      <p>
        I enjoy assignment beautification, workflow optimization, web development, Kenyan current affairs, cultural traditions, 
        and exploring PLC automation and industrial control systems.
      </p>
    </div>
  </main>

  <footer>
    <p>&copy; <?php echo date("Y"); ?> Sitonik Kibet Rotich | My Digital Portfolio</p>
  </footer>
</body>
</html>
