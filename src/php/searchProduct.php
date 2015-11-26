<?php

include '../../db/pdoconnect.php';

$name = '%' . $_POST['name'] . '%';
$description = '%' . $_POST['description'] . '%';
$size = '%' . $_POST['size'] . '%';
$price = '%' . $_POST['price'] . '%';

$sql = "SELECT `name`, `description`, `size`, `retail_price` FROM product WHERE `name` LIKE :name AND `description` LIKE :description AND `size` LIKE :size AND `retail_price` LIKE :price;";
$statement = $pdo->prepare($sql);
$statement->bindParam(':name', $name);
$statement->bindParam(':description', $description);
$statement->bindParam(':size', $size);
$statement->bindParam(':price', $price);

$feedback_message2 = 'error running request - please try again';
?>
<html>
<head>
    <title>Results</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
    <link rel="stylesheet" href="../../bootstrap/dist/css/bootstrap.css" type="text/css">
    <!--<link name="fonturl.com" rel='stylesheet' type='text/css'>-->
</head>
<body>
<a href="searchpage.php">Go Back</a>
<?php
if (!$statement->execute()) {
    $arr = $statement->errorInfo();
    print_r($arr);
    ?>


    <div class="feedback - message"><?php echo $feedback_message2; ?></div>
    <?php
} else {
    ?>
    <div class="result">
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Size</th>
            <th>Price</th>
        </tr>
        <?php
        while ($row = $statement->fetchObject()) {
            echo '<tr><td>' . $row->name . '</td><td>' . $row->description . '</td><td>' . $row->size . '</td><td>' . $row->retail_price . '</td></tr>';
        }
        }
        ?>
    </table>
    </div>
</body>
    </html>