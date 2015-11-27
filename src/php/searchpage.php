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
    <div class="container">
        <h1 id=".col-md-2">Squirrel Pants</h1>

        <h2 id=".col-md-2">Search Facility</h2>

    </div>

</header>
<body>
<!--Use .container for a responsive fixed width container.-->
<div class="container">
    <!--Use .container-fluid for a full width container, spanning the entire width of your viewport.-->
    <!--<div class="container-fluid">-->
    <div class="product">
        <form class="form-horizontal" action="searchProduct.php" method="post">
            <div class="form-group"><label class="col-md-2 control-label">Product Name:</label>

                <div class="col-sm-10">
                    <input class="form-control" type="text" name="name">
                </div>
            </div>
            <div class="form-group"><label class="col-md-2 control-label">Product Description:</label>

                <div class="col-sm-10">
                    <input class="form-control" type="text" name="description">
                </div>
            </div>
            <div class="form-group"><label class="col-md-2 control-label">Product Size:</label>

                <div class="col-sm-10">
                    <input class="form-control" type="text" name="size">
                </div>
            </div>
            <div class="form-group"><label class="col-md-2 control-label">Max Product Price:</label>

                <div class="col-sm-10">
                    <input class="form-control" type="number" name="price" min="0.00" step="0.01">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Sort By</label>

                <div class="col-sm-10">
                    <select class="col-md-offset-1" name="sort">
                        <option value="orderByName">Name</option>
                        <option value="orderByDescription">Description</option>
                        <option value="orderBySize">Size</option>
                        <option value="price-asc">Price (Low-High)</option>
                        <option value="price-desc">Price (High-Low)</option>
                    </select>
                </div>
            </div>

            <div class="form-group"><label class="col-md-2 control-label"></label><input class="btn btn-primary"
                                                                                         type="submit" value="Search"
                                                                                         name="submit"></div>
        </form>
    </div>

</div>
<!--</div>-->
</body>

<footer>
    ...
</footer>

</html>