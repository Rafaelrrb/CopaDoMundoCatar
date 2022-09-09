<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clashes extends Model
{
    use HasFactory;

    protected $fillable = ['name_team_a','name_team_b'];

    public function logs()
    {
        return $this->hasMany(Logs::class);
    }
}
