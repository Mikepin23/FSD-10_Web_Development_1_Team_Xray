<?php session_start(); ?>
<p>User: <?php echo isset($_SESSION['user']) ? $_SESSION['user'] : 'Not logged in'; ?></p>
<p>User ID: <?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ''; ?></p>
<p>First Name: <?php echo isset($_SESSION['first_name']) ? $_SESSION['first_name'] : ''; ?></p>
<p>Last Name: <?php echo isset($_SESSION['last_name']) ? $_SESSION['last_name'] : ''; ?></p>
<p>Email: <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?></p>
<p>Phone: <?php echo isset($_SESSION['phone']) ? $_SESSION['phone'] : ''; ?></p>
<p>Postal Code: <?php echo isset($_SESSION['postal_code']) ? $_SESSION['postal_code'] : ''; ?></p>
          <?php echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>'; ?>