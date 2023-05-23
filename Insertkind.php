$kind_code = $_POST["code"];
$category = $_POST["name"];

<?php

$conn=mysqli_connect=("localhost","root","keroroot","Library");
if(!$conn)
{
    die("Connection Failed".mysqli_connect_error())
}
$query="INSERT into `book_kind` values ('$kind_code','$category')";
$qr = mysqli_query($conn,$query);
if($qr)
{
    echo "Inserted Successfully";
}
else
{
    echo "Inseted failed" . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>