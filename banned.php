<?php
// When banning a user
setcookie('ban_status', 'banned', time() + (86400 * 30), '/'); // Cookie expires in 30 days
?>
