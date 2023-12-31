<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    use HasFactory;
    public function scopeFilter($query, array $filter){
        if($filter['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
        if($filter['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')->orWhere('description', 'like', '%'.request('search').'%')->orWhere('tags', 'like', '%'.request('search').'%');
        }
    }
}