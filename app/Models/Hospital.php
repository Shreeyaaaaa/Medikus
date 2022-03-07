<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

     protected $fillable = [
        'hospital', 'image','description','location',
    ];

    public function hosAvatar($request){
        $image = $request->file('image');
        $name = $image->hashName();
        $destination = public_path('/hospitals');
        $image->move($destination,$name);
        return $name;

    }
}