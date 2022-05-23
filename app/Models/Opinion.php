<?php

namespace App\Models;

use App\Http\Controllers\PropertyController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;
    protected $fillable =[
        'content',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function arrendamiento(){
        return $this->hasMany(arrendamiento::class);
    }
    public function property(){
        return $this->belongsTo(PropertyController::class);
    }
}
