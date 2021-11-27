<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    // protected $table = 'member';

    protected $fillable = [
        'nama', 'description'
    ];

    public $timestamps=true;

    public function todo()
    {
        return $this->belongsTo(Todo::class, 'id'); 
    }

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}
