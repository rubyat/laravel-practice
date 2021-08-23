<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Story extends Model
{
    use HasFactory;
    use SoftDeletes;


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

    public function getFootNoteAttribute()
    {
        return $this->type . ' Type, created at '. date('d-m-Y', strtotime( $this->created_at ));
    }


    public function setTitleAttribute( $value )
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }



}
