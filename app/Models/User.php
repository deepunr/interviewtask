<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'fk_department', 'fk_designation', 'phone_number'];

    /**
     * Get the designation associated with the user.
     */
    public function designation()
    {
        return $this->belongsTo(Designation::class, 'fk_designation');
    }

    /**
     * Get the department associated with the user.
     */
    public function department()
    {
        return $this->belongsTo(Department::class, 'fk_department');
    }
}
