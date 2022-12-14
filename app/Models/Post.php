<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title',
    //     'description',
    //     'user_id',
    //     'cat_id',
    //     'slug'
    // ];

    protected $guarded = [];

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

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function scopeFilter($query, array $filters)
    {
        // if ($filters['search'] ?? false) {
        //     $query
        //         ->where('title', 'like', '%' . request('search') . '%')
        //         ->orWhere('description', 'like', '%' . request('search') . '%');
        // }

        $query->when(
            $filters['search'] ?? false, fn ($query, $search) => 
                $query
                    ->where(function ($query ) use ($search) {
                        $query
                            ->where('title', 'like', '%' . $search . '%')
                            ->orWhere('description', 'like', '%' . $search . '%');
                    })
        );

        $query->when(
            $filters['category'] ?? false, fn ($query, $category) =>
            $query
                ->whereHas('category', fn ($query) =>
                    $query->where('slug', $category)
                )
        );
    }
}
