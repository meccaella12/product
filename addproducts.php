<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
</head>
<body>
    <form action="process.php" method="POST" enctype="multipart/form-data">

    <label>Picture </label> </br>
    <input type="file" name="pic" required accept=".jpg, .pmg, .gif, .jpeg, .webp, .jfif"></p>

    <label>Product Name </label> </br>
    <input type="text" name="pn" required></p>
    
    <label>Price</label> </br>
    <input type="text" name="price" required></p>

    <input type="submit" name="add_products" value="ADD">
    
</body>
</html>