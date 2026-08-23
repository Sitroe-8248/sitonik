<?php
session_start();
include 'db_connect.php'; // Make sure this file connects to portfolio_db

$sql = "SELECT title, description, created_at FROM projects ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Projects - Sitonik Portfolio</title>
  <link rel="stylesheet" href="style.css"> <!-- External CSS -->
</head>
<body>
  <header>
    <h1>My Projects</h1>
    <nav>
      <a href="index.html">Home</a>
      <a href="about.php">About Me</a>
      <a href="projects.php">Projects</a>
      <a href="skills.php">Skills</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <main>
    <div class="section">
      <h2>Project Showcase</h2>
      <?php if ($result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
          <div class="card">
            <h3><?php echo htmlspecialchars($row['title']); ?></h3>
            <p><?php echo htmlspecialchars($row['description']); ?></p>
            <small>Added on: <?php echo $row['created_at']; ?></small>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p>No projects found. Add some using <a href="add_project.php">Add Project</a>.</p>
      <?php endif; ?>
    </div>
  </main>

  <footer>
    <p>&copy; <?php echo date("Y"); ?> Sitonik Kibet Rotich | My Digital Portfolio</p>
  </footer>
</body>
</html>
