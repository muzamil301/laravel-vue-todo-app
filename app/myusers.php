<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myusers extends Model
{
     protected $table='myusers';

//    public static function getMaps()
//    {
//        $maps = maps::where('status', 1)->get();
//        return $maps;
//    }

    // public static function getSelectedMaps($type)
    // {
    //     $selectedMaps = maps::where('status', 1)->where('city', $type)->get();
    //     return $selectedMaps;
    // }
}
