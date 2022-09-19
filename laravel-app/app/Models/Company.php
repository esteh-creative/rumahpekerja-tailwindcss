<?php

namespace App\Models;

use Illuminate\Support\carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'company';
    protected $fillable = [
        'id',
        'image',
        'companyName',
        'category',
        'rating',
        'adress',
        'vacancy',
        'date'
    ];

    public function getFromDateAttribute() {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('d-m-Y');
    }
}
