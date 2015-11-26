<?php
include '../../db/pdoconnect.php';
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Product Search</title>
        <link rel="stylesheet" href="styles.css" type="text/css">
        <link rel="stylesheet" href="../../bootstrap/dist/css/bootstrap.css" type="text/css">
        <!--<link name="fonturl.com" rel='stylesheet' type='text/css'>-->
    </head>
    <!--bootstrap-->
    <header>
        <h1>Squirrel Pants</h1>

        <h2>Search Facility</h2>
    </header>
<body>
    <!--Use .container for a responsive fixed width container.-->
<div class="container">
    <!--Use .container-fluid for a full width container, spanning the entire width of your viewport.-->
    <!--<div class="container-fluid">-->
    <div class="product">
        <form action="searchProduct.php" method="post">
            <div><label>Product Name:</label><input type="text" name="name"></div>
            <div><label>Product Description:</label><input type="text" name="description"></div>
            <div><label>Product Size:</label><input type="text" name="size"></div>
            <div><label>Product Price:</label><input type="number" name="price" min="0.00" step="0.01"></div>
            <div><label></label><input type="submit" value="Search" name="submit"></div>
        </form>
    </div>

</div>
<!--</div>-->
</body>

<footer>
    ...
</footer>

</html>