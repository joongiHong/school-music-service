<?php
$music=$_POST['music'];
$singer=$_POST['singer'];
$album=$_POST['album'];

$con=mysqli_connect("127.0.0.1", "root", "*********", "broadcasting") or die("Error! MySQL Not Connect [code : Mysql-1]");
$sql ="INSERT INTO music (name, singer, album, sf, time) VALUES ('".$music."','".$singer."','".$album."','O', DEFAULT);";
$ret = mysqli_query($con, $sql);

if($ret) {
    session_start();
    session_destroy();
    echo "<script>window.location.href = 'order5.html';</script>";
}
else {
    echo "<script>alert('Error! MySQL Fail [code : Mysql-2]');</script>";
}
?>