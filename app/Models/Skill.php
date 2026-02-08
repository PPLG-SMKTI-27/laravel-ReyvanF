<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model {
    protected $table = 'skill';
    protected $fillable = ['title'];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
