<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;

    public $table = "skills";
    protected $primaryKey = 'id';

    public function OwnedBy(){
        return $this->hasMany(Skill_set::class,'skill_id');
    }
}
