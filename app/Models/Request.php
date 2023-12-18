<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'plugin_id'];

     // Define the relationship with User
     public function user()
     {
         return $this->belongsTo(User::class);
     }

     // Define the relationship with Plugin
     public function plugin()
     {
         return $this->belongsTo(Plugin::class);
     }
}
