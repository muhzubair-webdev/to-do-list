<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tasks extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'due_date',
        'priority',
        'is_completed',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(categories::class);
    }
}
