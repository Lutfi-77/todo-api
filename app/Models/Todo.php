<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    // protected $table = 'member';

    protected $fillable = [
        'todo', 'category'
    ];

    public $timestamps=true;

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id'); 
    }

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}
