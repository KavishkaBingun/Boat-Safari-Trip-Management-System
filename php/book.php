<html><body>
<?php
$name=$_POST["noOfParticipants"];
$tel=$_POST["location"];
$dm=$_POST["date"];
$opt=$_POST["package"];
$link=mysqli_connect("localhost","root","","book");
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);
}
echo "Connection OK <br><br>";

$query="insert into subscription(No of Participants,Location,Date,Package) values ('$noOfParticipants','$location','$date','$package')";

if (mysqli_query($link, $query)) {
  echo "Submitted Successfully";
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($link);
}
mysqli_close($link);
?>
</body>
</html>
