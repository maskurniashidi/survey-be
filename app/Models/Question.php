<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'question',
        'category_id'
    ];
    public function questioncategory()
    {
        return $this->belongsTo(QuestionCategory::class);
    }
}
