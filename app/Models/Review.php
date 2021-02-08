<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Review extends Model
{
    use HasFactory;
    /**
    *@var array
    */
    protected $fillable = [
      'product_id',
      'user_id',
      'IP',
      'subject',
      'review',
      'rate',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);

    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
