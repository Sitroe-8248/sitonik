<?php
session_start();
include 'db_connect.php'; // central DB connection file

// Initialize variables
$name = $email = $message = "";
$errors = [];
$success = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if ($name === "") $errors['name'] = "Name is required";
    if ($email === "") {
        $errors['email'] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format";
    }
    if ($message === "") $errors['message'] = "Message is required";

    // If no errors, process
    if (empty($errors)) {
        // ✅ Save to database
        $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);
        $stmt->execute();
        $stmt->close();

        // ✅ Send email
        $to = "sitonikrotich7@gmail.com";
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";
        $headers = "From: noreply@yourdomain.com";

        mail($to, $subject, $body, $headers);

        $success = "Thank you, $name! Your message has been sent.";
        $name = $email = $message = ""; // clear form
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Me - Sitonik Portfolio</title>
  <link rel="stylesheet" href="style.css"> <!-- External CSS -->
</head>
<body>
  <header>
    <h1>Contact Me</h1>
    <nav>
      <a href="index.html">Home</a>
      <a href="about.php">About Me</a>
      <a href="projects.php">Projects</a>
      <a href="skills.php">Skills</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <main>
    <div class="form-container">
      <h2>Get in Touch</h2>
      <?php if ($success) echo "<p class='success'>$success</p>"; ?>
      <form method="post" action="">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
        <span class="error"><?php echo $errors['name'] ?? ""; ?></span><br>

        <label>Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <span class="error"><?php echo $errors['email'] ?? ""; ?></span><br>

        <label>Message:</label>
        <textarea name="message" rows="5"><?php echo htmlspecialchars($message); ?></textarea>
        <span class="error"><?php echo $errors['message'] ?? ""; ?></span><br>

        <button type="submit">Send Message</button>
      </form><br>
    </div>
  </main>

  <footer>
    <p>&copy; <?php echo date("Y"); ?> Sitonik Kibet Rotich | My Digital Portfolio</p>
  </footer>
</body>
</html>
