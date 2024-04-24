<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','user_id','userName','Card_Number','Cardholder_Name','total_qty','total_amount','status'];
    

    public function users()
    {
        return $this->hasMany(user::class);
    }
}    



