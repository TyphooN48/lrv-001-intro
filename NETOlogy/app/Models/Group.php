<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $table = 'groups';
    protected $guarded = [];

    public function getAllStudents()
    {
        return $this->hasMany(Student::class, 'group_id', 'id');
    }
}
