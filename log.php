<?php
header('Content-Type: text/html; charset=utf-8');
$token = isset($_GET['token']) ? htmlspecialchars($_GET['token']) : 'No token received';
?>
<!DOCTYPE html>
<html>
<head><title>Token Logger</title></head>
<body>
<script>alert('收到 Token:\n\n<?php echo $token; ?>');</script>
<p>Token: <b><?php echo $token; ?></b></p>
</body>
</html>
