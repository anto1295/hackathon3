<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'surname',
        'email',
        'phone',
        'password',
    ];
    public function animals(){
        return $this->hasMany(Animal::class, 'owner_id');
    }
}
