<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalRecord extends Model
{
    use HasFactory;

    public function movement()
    {
        return $this->belongsTo(Movement::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
