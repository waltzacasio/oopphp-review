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
        $person1 = new Person();
        $person1->setName("Daniel");
        echo $person1->name;

        $person2 = new Person();
        $person2->setName("Timmy");
        echo $person2->name;
    ?>
    
</body>
</html>