<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'description', 
        'user_id',
        'cat_id',
    ];

    protected $hidden = [
        'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query
            ->where('title', 'like', '%'. request('search') .'%')
            ->orWhere('description', 'like', '%'. request('search') .'%');
        }
    }
}
