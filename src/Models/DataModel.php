<?php

// src/Models/DataModel.php

namespace Watchtower\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataModel extends Model
{
    use HasFactory;
    protected $table = 'watchtower';
    protected $fillable = ['name', 'data'];
}
