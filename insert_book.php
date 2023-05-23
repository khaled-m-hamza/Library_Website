
<!DOCTYPE html>
<html>
    <head>
        <title>Books</title>
        
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body>

        <form   method="post" action="InsetBox.php">
            <h2>Books System</h2>
            <h1>Add Book</h1>
            
            
            <label>Code</label>
            <input type="number" name="code" required>

            <label>Book Name</label>
            <input type="text" name="name" required ><br>

            <label>Number of Page</label>
            <input type="number" name="num" required>

            <label>Language</label>
            <input type="text" name="lang" required><br>

            <label>Publich Date</label>
            <input type="text" name="date" required>

            <label>Quaintaty</label>
            <input type="number" name="Qin" required ><br>

            <label>Cost</label>
            <input type="number" name="cost" required >

            <label>Auther Name</label>
            <input type="text" name="onam" required ><br>

            <label>Caterory</label>
            <input type="list" name="kcode" required>

            <input type="submit" name="search" >
            <button><a href="home.php">Back</a></button>
            
        </form>
       
   
</body>
</html>


