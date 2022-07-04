<?php $title = "Date Time" ?>

<?php include 'include/header.php'?>

    <h1>Date Time Manipulation</h1>
    <?php
    $datenow = getdate();
    echo $datenow["mday"] . '<br/>';
    echo $datenow["mon"] . '<br/>';
    echo $datenow["year"] . '<br/>';
    ?>
<?php require 'include/footer.php'?>
