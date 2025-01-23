<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory; 
    protected $fillable = ['title', 'description', 'long_description'];
    // its opposite of $fillable is $gaurded
    // secret information like password should be gaurded
    // protected $gaurded = [];

    public function toggelComplete(){
        $this->completed = !$this->completed;
        $this->save();
    }
}
