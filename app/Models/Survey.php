<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'appsName',
        'appsDescription',
        'appsLink',
        'maxTotalRespondent',
        'maxDate',
        'totalRespondent',
        'user_id'
    ];
    public function result()
    {
        return $this->hasMany(Result::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
