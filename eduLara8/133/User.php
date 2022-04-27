<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Profile;
use App\Models\User;
use App\Models\Citie;
use App\Models\Position;

class User extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Получить данные, связанные с пользователем.
     */
    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function citie()
    {
        return $this->belongsTo(Citie::class, 'city_id');
    }
}
