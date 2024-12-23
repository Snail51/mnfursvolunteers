<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'sector_id'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'primary_dept_id');
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function volunteerHours()
    {
        return $this->hasMany(VolunteerHours::class);
    }

    public function userCount()
    {
        return $this->users()->count();
    }
}
