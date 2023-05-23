<?php 

$conn=mysqli_connect("localhost","root","keroroot","Library");

$querye ="INSERT into `books` VALUES('".$_POST['code']."','".$_POST['num']."','".$_POST['lang']."','".$_POST['date']."','".$_POST['Qin']."','".$_POST['cost']."','".$_POST['onam']."','".$_POST['kcode']."','".$_POST['name']."')";

if(!$conn)
{
    die("Connection Failed".mysqli_connect_error());
}
$qr = mysqli_query($conn,$querye);
if($qr)
{
    echo "Inserted Successfully";
}
else
{
    echo "Inseted failed" . $querye . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>