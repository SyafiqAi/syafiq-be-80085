<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performer extends Model
{
    use HasFactory;
    
    protected $hidden = ['pivot'];

    protected $fillable = ['name'];
    
    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
}
