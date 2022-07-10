<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fertilizer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where(function($query) use ($search) {
                    $query->where('fertilizer_name', 'like', '%' . $search . '%');
            })->orWhereHas('category', function($query) use ($search){
                $query->where('slug', $search);
            })->orWhereHas('user', function($query) use ($search){
                $query->where('name', 'like', '%' . $search . '%');
            });
        });
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function month(){
        return $this->belongsTo(Month::class);
    }
}
