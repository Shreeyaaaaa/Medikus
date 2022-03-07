<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;
    protected $fillable = [
        'speciality', 'image',
    ];

    public function specAvatar($request){
        $image = $request->file('image');
        $name = $image->hashName();
        $destination = public_path('/specialities');
        $image->move($destination,$name);
        return $name;

    }
}
