<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $guarded = [];

    public function getStudentGroup()
    {
        return $this->hasOne(Group::class, 'id', 'group_id');
    }
}
