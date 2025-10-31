<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Team extends Model
{
    //
    use HasFactory;
    protected $fillable=[
        'name',
        'team_id',
        'city',
        'country',
        'manager_name',
        'stadium_name',
        'description'
    ];

     public function players(): HasMany
    {
        return $this->hasMany(Player::class);
    }

}
