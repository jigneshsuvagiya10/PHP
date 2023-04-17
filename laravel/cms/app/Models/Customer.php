<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillabel = [
        'firstname',
        'lastname',
        'company',
        'emali',
        'mobile',
        'logo',
        'tags',
    ];

    public function setDetailAttribute($value)
    {
        return $this->attributes['tags'] = json_encode($value);
    }

    public function getDetailAttribute($value)
    {
        return $this->attributes['tags'] = json_decode($value);
    }
}
