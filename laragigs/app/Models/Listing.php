<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing 
{
    use HasFactory;
    public static function all(){
        return  [
            [
                'id' => 1,
                'title' => 'Listning One',
                'description' =>'Lorem epsum Lorem 
                                Lorem epsum epsum Lorem epsum
                                Lorem epsum Lorem epsum Lorem epsum '
            ],
            [
                'id' => 2,
                'title' => 'Listning Two',
                'description' =>'Lorem epsum Lorem 
                                Lorem epsum epsum Lorem epsum
                                Lorem epsum Lorem epsum Lorem epsum '
            ],
            [
                'id' => 3,
                'title' => 'Listning Three',
                'description' =>'Lorem epsum Lorem 
                                Lorem epsum epsum Lorem epsum
                                Lorem epsum Lorem epsum Lorem epsum '
            ]
            ];
    }
    public static function find($id){
        $listings = self::all();


        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing; 
            }
        }
    }
}
