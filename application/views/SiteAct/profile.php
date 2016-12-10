<html>
<body>
<?php
foreach($user as $users) {
echo 'Hello '. $users['username'].' '. $users["password"];
}
?>
</body>
</html>