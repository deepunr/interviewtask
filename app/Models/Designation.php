<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;

    // Define the table associated with the model if it's not the plural form of the model name
    protected $table = 'designations';

    // The attributes that are mass assignable
    protected $fillable = ['name'];

    /**
     * Get the users for the designation.
     */
    public function users()
    {
        return $this->hasMany(User::class, 'fk_designation');
    }
}
