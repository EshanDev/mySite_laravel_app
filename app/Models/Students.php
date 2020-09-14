<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Students extends Model
{
    use HasFactory;




    protected $fillable = ['st_name', 'st_code', 'st_branch', 'st_faculty', 'st_mail'];



    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
