<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Http\Request;

class ListItem extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'category', 'size', 'price'];

  public function scopeFilter($query, array $filters){
    if($filters['search'] ?? false){
        $query->where('name', 'like', '%' . request('search') . '%')

            ->orWhere('category', 'like', '%' . request('search') . '%')
            ->orWhere('type', 'like', '%' . request('search') . '%')
            ->orWhere('price', 'like', '%' . request('search') . '%');
    }
  }
}
