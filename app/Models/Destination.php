<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = ['destination', 'price', 'departure'];

    use HasFactory;
    public function users()
    {
        return $this->belongsToMany(User::class, 'destination_users');
    }
}
