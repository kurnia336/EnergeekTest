<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    use HasFactory;

    public $table = "candidates";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','job_id','name','email','phone','year','created_by','updated_by','deleted_by','created_at','updated_at','deleted_at'
    ];

    public function CandidatesSkills(){
        return $this->hasMany(Skills_set::class,'candidate_id');
    }
}
