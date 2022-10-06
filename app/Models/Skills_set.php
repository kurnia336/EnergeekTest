<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills_set extends Model
{
    use HasFactory;

    public $table = "skills_sets";
    protected $fillable = [
        'candidate_id','skill_id'
    ];
    public $timestamps = false;

    public function SkillOwnedBy()
    {
    	return $this->belongsTo(Candidates::class,'id');
    }

    public function CandidateHave()
    {
    	return $this->belongsTo(Skills::class,'id');
    }
}
