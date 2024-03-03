<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $primaryKey = 'id';

    public function todos()
    {
        return $this->hasMany(todos::class);
    }
}
