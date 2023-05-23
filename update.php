
<?php
$nam = $_POST['name'];
$cos = $_POST['ncost'];
$quan = $_POST['qin'];
$conn=mysqli_connect("localhost","root","keroroot","Library");
if(!$conn)
{
    die("Connection Failed".mysqli_connect_error());
}
$query="UPDATE books set cost='$cos', quantity='$quan' where nam='$nam' ";
$qr = mysqli_query($conn,$query);
if ($qr)
{
    echo "Updated Successfully";
}
else
{
    echo "Updated failed" . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>