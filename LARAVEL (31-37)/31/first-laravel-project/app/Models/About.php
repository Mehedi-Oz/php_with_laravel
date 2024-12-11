<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    public $infos = [];

    public function getInfo()
    {
        return $this->infos = [
            [
                'id' => 1,
                'name' => 'Hasan',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dolore doloremque harum in minus molestias, nostrum perferendis possimus quam sed.'
            ],
            [
                'id' => 2,
                'name' => 'Mahadi',
                'description' => 'sit amet, consectetur adipisicing elit. Corporis dolore doloremque harum in minus molestias, nostrum perferendis possimus quam sed.'
            ],
            [
                'id' => 3,
                'name' => 'Kamrul',
                'description' => 'Consectetur adipisicing elit. Corporis dolore doloremque harum in minus molestias, nostrum perferendis possimus quam sed.'
            ],
        ];
    }
}
