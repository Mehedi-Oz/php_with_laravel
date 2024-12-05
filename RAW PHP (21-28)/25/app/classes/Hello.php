<?php

namespace App\classes;

class Hello
{
    public $x, $y, $arr, $student, $item, $value, $key, $val, $index;

    public function __construct()
    {
        $this->x = 1;
        $this->y = 20;

//        $this->arr = array(
//            0 => 'Apple',
//            1 => 'Mango',
//        );
//        $this->arr = array(
//            'a' => 'Banana',
//            'b' => 'Orange',
//        );
//        $this->arr = array(
//            0 => 'Apple',
//            1 => 'Mango',
//            'a' => 'Banana',
//            'b' => 'Orange'
//        );

        $this->student = [
            0 => ['id' => 1,
                'name' => "Muhammad",
                'seip' => 212131,
                'email' => "muhammad@gmail.com",
            ],
            1 => ['id' => 2,
                'name' => "Mahadi",
                'seip' => 45345,
                'email' => [
                    'email-1' => "mahadi1@gmail.com",
                    'email-2' => "mahadi2@gmail.com",
                ]
            ],
            2 => ['id' => 3,
                'name' => "Hasan",
                'seip' => 678678,
                'email' => "hasan@gmail.com",
            ]
        ];
    }

    public function index()
    {
//        for ($this->x; $this->x <= $this->y; $this->x++) {
//
//            echo $this->x . '<br>';
//        }

//        while($this->x<=$this->y){
//            echo $this->x . '<br>';
//            $this->x++;
//        }

//        print_r($this->arr);
//
//        echo '<br>';
//        echo '<br>';
//        echo '<br>';
//        echo '<br>';
//
//        var_dump($this->arr);

        foreach ($this->student as $this->item) {
            echo '<br>';
            foreach ($this->item as $this->key => $this->value) {
                if (is_array($this->value)) {
                    foreach ($this->value as $this->index=>$this->val) {
                        echo $this->index . '=' . $this->val . '<br>';
                    }
                } else
                    echo $this->key . '=' . $this->value . '<br>';
            }
            echo '<br>';
        }


    }
}





















