<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Skills - Sitonik Portfolio</title>
  <link rel="stylesheet" href="style.css"> <!-- External CSS -->
</head>
<body>
  <header>
    <h1>My Skills</h1>
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
      <h2>Technical Abilities</h2>

      <!-- ✅ HTML -->
      <div class="skill">
        <div class="skill-name">HTML</div>
        <div class="progress-bar">
          <div class="progress" style="width:90%;">90%</div>
        </div>
      </div>

      <!-- ✅ CSS -->
      <div class="skill">
        <div class="skill-name">CSS</div>
        <div class="progress-bar">
          <div class="progress" style="width:85%;">85%</div>
        </div>
      </div>

      <!-- ✅ PHP -->
      <div class="skill">
        <div class="skill-name">PHP</div>
        <div class="progress-bar">
          <div class="progress" style="width:75%;">75%</div>
        </div>
      </div>

      <!-- ✅ MySQL -->
      <div class="skill">
        <div class="skill-name">MySQL</div>
        <div class="progress-bar">
          <div class="progress" style="width:70%;">70%</div>
        </div>
      </div>

      <!-- ✅ Electrical Systems -->
      <div class="skill">
        <div class="skill-name">Electrical Systems</div>
        <div class="progress-bar">
          <div class="progress" style="width:80%;">80%</div>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <p>&copy; <?php echo date("Y"); ?> Sitonik Kibet Rotich | My Digital Portfolio</p>
  </footer>
</body>
</html>
