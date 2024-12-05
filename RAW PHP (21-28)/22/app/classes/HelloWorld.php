<?php

namespace App\classes;

class HelloWorld
{
    public $firstName, $lastName;
    public $x = 10, $y = 20;

//
//    public function __construct()
//    {
//        $this->firstName = 'Hasan';
//        $this->lastName = 'Mahadi';
//    }
//
//    public function getName()
//    {
//        echo $this->lastName;
//        echo $this->firstName;
//
//
//        echo $this->lastName . " " . $this->firstName;
//    }
//
    public function getValue()
    {
        echo 'PLUS_MINUS';
        echo '<br>';
        echo $this->x . ' X';
        echo $this->y . ' Y';
        echo '<br>';
        echo $this->x += $this->y;
        echo '<br>';
        echo $this->x . ' X';
        echo $this->y . ' Y';
        echo '<br>';
        echo $this->x -= $this->y;
        echo '<br>';
        echo $this->x . ' X';
        echo $this->y . ' Y';
        echo '<br>';
        echo $this->x *= $this->y;
        echo '<br>';
        echo $this->x . ' X';
        echo $this->y . ' Y';
        echo '<br>';
        echo $this->x /= $this->y;
        echo '<br>';
        echo '<br>';

        echo 'INCREMENT: ';
        echo $this->x . ' X ';
        echo $this->y . ' Y ';
        echo '<br>';
        echo $this->x++;
        echo '<br>';
        echo ++$this->x;
        echo '<br>';
        echo $this->x--;
        echo '<br>';
        echo --$this->x;


    }


}