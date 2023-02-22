<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'user_details';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
