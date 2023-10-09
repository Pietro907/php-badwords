<?php 

$text = $_GET['text'];
$censured = $_GET['censured'];




?>

<!DOCTYPE html>
<html lang="en">

<body>

    <p>Text: <?php echo $text; ?> <?php echo strlen($text); ?></p>
    <p>Text censured: <?php echo $censured ?> <?php echo strlen($censured) ?></p>
    

</body>

</html>