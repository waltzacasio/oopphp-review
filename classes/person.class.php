<?php



class Person {
    //Properties
    private $name;
    private $eyeColor;
    private $age;


    //Methods
    public function setName(string $newName) {
        $this->name = $newName;
    }
    
    //referencing a property inside a class
    public function getName() {
        $person = $this->name;
        return $person;
    }

    public static function setDrinkingAge($newDA) {
        self::$drinkingAge = $newDA;
    }


}

