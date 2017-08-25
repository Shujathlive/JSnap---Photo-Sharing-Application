<?php
$db = mysqli_connect("localhost","root","root","jsnap");
$sql = "SELECT * FROM test_image WHERE id=$id";
$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);
echo '<img src="data:image/jpeg;base64,'.base64_encode($result['image']).'"/>';
?> 