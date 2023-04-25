<?php
declare(strict_types =1);
    include "includes/autoloader.inc.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <?php
        $person1 = new Person();

        try {
            $person1->setName(2);
            echo $person1->getName(); 
        }   catch (TypeError $e) {
            echo "Error!: " . $e->getMessage();
        }


        
        


   ?>
    
</body>
</html>