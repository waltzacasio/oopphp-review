<?php
include "includes/persons.inc.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <?php
        $person1 = new Person("Walter", "Orange", 28);
        echo $person1->getName();


   ?>
    
</body>
</html>