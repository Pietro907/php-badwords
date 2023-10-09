<?php

$text = $_GET['text'];
$censured = $_GET['censured'];
$countCensured = strlen($censured);
$outputCensured = substr_replace(' ', str_repeat('*', $countCensured), $countCensured);




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
                echo $outputCensured
          /*   if ($censured == $arrayCensured) {
                echo $censured;
            } else {
                echo "***";
            };  */
            
            ?>

        </p>


    </div>



</body>

</html>