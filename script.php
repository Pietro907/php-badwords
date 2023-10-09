<?php

$text = $_GET['text'];
$censured = $_GET['censured'];





?>

<!DOCTYPE html>
<html lang="en">

<style>

.container{
    width: 500px;
    margin: 8rem auto 0;
    text-align: start;
}

</style>

<body>
    <div class="container">

        <p>Text: <?php echo $text; ?> <?php echo strlen($text); ?></p>

        <p>Text censured:

            <?php

            if (strlen($censured)) {
                echo $censured;
            } else {
                echo "***";
            }; 
            
            ?>

        </p>


    </div>



</body>

</html>