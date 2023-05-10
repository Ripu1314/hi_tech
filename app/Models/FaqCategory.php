<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    use HasFactory;

    Protected $fillable = [
        'title','description','status',
    ];

    public function faqs(){
        return $this->hasMany(Faq::class,'category_id');
    }

}