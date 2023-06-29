<?php
$bannedEmails = ['eo16bobs@gmail.com', '@wintoncommunityacademy.org']; // List of banned email addresses
$email = $_POST['email']; // Assuming you're using POST method to submit the form

if (in_array($email, $bannedEmails)) {
  // Set a ban cookie to track the banned status
  setcookie('ban_status', 'banned', time() + (86400 * 30), '/'); // Cookie expires in 30 days
  echo 'You are banned from accessing this website.';
  return;
}

// Proceed with registration or login process
// ...
?>
