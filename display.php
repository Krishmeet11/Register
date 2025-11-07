<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Success</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Registration Successful 🎉</h1>
    <div class="output">
      <p><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></p>
      <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
      <p><strong>Phone:</strong> <?php echo htmlspecialchars($_POST['phone']); ?></p>
      <p><strong>Course:</strong> <?php echo htmlspecialchars($_POST['course']); ?></p>
      <p><strong>Message:</strong> <?php echo nl2br(htmlspecialchars($_POST['message'])); ?></p>
    </div>
    <a href="index.html"><button>Go Back</button></a>
  </div>
</body>
</html>
