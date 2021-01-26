<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getStatusLabelAttribute()
    {
        return $this->status == '1' ? 'Premium' : 'Free';
    }
}
