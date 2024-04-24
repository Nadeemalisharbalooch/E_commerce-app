<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable=['title','user_id','brand','price','quantity','Description','category','image'];
    public $timestamps=false;
    public function tags(){
     return $this->belongsToMany(cart::class);
    
    }
}
