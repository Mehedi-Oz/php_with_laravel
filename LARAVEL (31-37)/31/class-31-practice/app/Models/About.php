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
                'name' => 'Hasan'
            ],
             [
                'id' => 2,
                'name' => 'Mahadi'
            ],
             [
                'id' => 3,
                'name' => 'OK'
            ],
        ];
    }


}
