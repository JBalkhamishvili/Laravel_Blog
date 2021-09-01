<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function scopefilter($query, array $filters)
    {
        // $filters['search'] ?? false is something like isset($filters['search'])
        $query->when($filters['search'] ?? false , function ($query, $search){
            $query
                ->where('title', 'like', '%' .$search. '%')
                ->orwhere('short_content', 'like', '%' .$search. '%')
                ->orwhere('content', 'like', '%' .$search. '%');
        });
    }

    protected $guarded = [];
}

