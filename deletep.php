<?php
$nam1 = $_POST["namee"];

$conn=mysqli_connect("localhost","root","keroroot","Library");
if(!$conn)
{
    die("Connection Failed".mysqli_connect_error());
}
$query="DELETE from books where nam='$nam1'";
$qr = mysqli_query($conn,$query);
if($qr)
{
    echo "Deleted Successfully";
}
else
{
    echo "Deleted failed" . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>