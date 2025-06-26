<?php

namespace App\Models;



class Job 
{
    public static function all()
    {
        return [
            ['title' => 'Sowftware Engineer', 'salary' => 100000] ,
            ['title' => 'Graphic Designer', 'salary' => 100000 ],
        ];
    }
}
