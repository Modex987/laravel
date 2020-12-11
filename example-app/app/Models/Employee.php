<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'active', 'company_id'];

    // protected $guarded = []; # use this when you have filtered data and specific fields (sure of them). here nothing is guarded
                                # if you make the name to be guarded the the name field will not be assigned (filters it)


    public $activeOptions = [1 => 'Active', 0 => 'Inactive', 2 => 'In-progress'];

    # Accessors & Mutators
    public function getActiveAttribute($attribute)
    {
        return is_null($attribute) ? null : $this->activeOptions[$attribute];
        // return $this->activeOptions[$attribute];
    }

    # scope
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('active', 0);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
