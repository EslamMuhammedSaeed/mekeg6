<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Support;

class Foundation extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'govern' ,
        'village',
        'state',
        'local',
        'management',
        'recordNumber',
        'recordYear',
        'recordDate',
        'description',
        'firstPersonName',
        'firstPersonRole',
        'firstPersonPhone',
        'secondPersonName',
        'secondPersonRole',
        'secondPersonPhone',
        'thirdPersonName',
        'thirdPersonRole',
        'thirdPersonPhone',
        'landPhone',
        'mobilePhone',
        'fax',
        'email',
        'recordDecision',
        'socialLetter',
        'user_id',
        'documented'

    ];

    public function supports()
    {
        return $this->belongsToMany(Support::class);
    }
}
