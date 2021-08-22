<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;


    protected $fillable = ['title', 'body', 'type', 'status'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function scopeActive($query)
    {
        return $query->where('status', 1);
        
    }

    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }



}
