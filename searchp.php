

<?php

$conn=mysqli_connect("localhost","root","keroroot","Library");
if(!$conn)
{
    die("Connection Failed".mysqli_connect_error());
}


    $cat=$_POST["name1"];
    $code = "SELECT kind_code from book_kind where category='$cat'";
    $query="SELECT num_of_pages,puplish_date,quantity,cost, author_name,nam from books where book_kind_code='$cat'";
    $qr = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($qr))
        {
            ?>
            <table>
        <tr>
            <th>Name</th>
            <th>pages</th>
            <th>Puplish Date</th>
            
            <th>Quantity</th>
            <th>Cost</th>
            <th>Author Name</th>
        </tr><br>

            <tr>
                    <td> <?php echo $row['nam'];?> </td>
                    <td> <?php echo $row['num_of_pages'];?> </td>
                    <td> <?php echo $row['puplish_date'];?> </td>
                    <td> <?php echo $row['quantity'];?> </td>
                    <td> <?php echo $row['cost'];?> </td>
                    <td> <?php echo $row['author_name'];?> </td>

            </tr>
            </table>
            <?php
        }
    

mysqli_close($conn);

?>
