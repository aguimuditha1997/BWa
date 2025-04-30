<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Development extends Model
{
    use SoftDeletes, UUID;

    protected $fillable = [
        'thumbnail',
        'name',
        'description',
        'person_in_charge',
        'start_data',
        'end_date',
        'amount',
        'status',
    ];

    public function development_Applicants()
    {
        return $this->hasMany(DevelopmentApplicant::class);
    }
}
