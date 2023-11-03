<?php session_start(); ?>
<p>User: <?php echo isset($_SESSION['user']) ? $_SESSION['user'] : 'Not logged in'; ?></p>
          <?php echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>'; ?>