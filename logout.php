
<head>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['sess_user']);
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location: index.php');

?>
</body>
