<!DOCTYPE html>
<html>
    <head>
        <title>Books</title>
        
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body>

        <form method="post" action = "update.php">
            <h2>Update </h2>
            <h1>Update information</h1>
            
            
            <label>Book Name</label>
            <input type="text" name="name" required><br>

            <label>New Cost</label>
            <input type="number" name="ncost" required><br>

            <label>New Quintity</label>
            <input type="number" name="qin" required><br>

            <input type="submit">
            <button><a href="home.php">Back</a></button>
        </form>
   
</body>
</html>
