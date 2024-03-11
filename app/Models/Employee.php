<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'email',
        'telephone',
        'job'
    ];

    public function orders()
    {
        return $this->belongsToMany('App\Order', 'employee_order', 'employee_id', 'order_id');
    }

    public function relatories()
    {
        return $this->hasMany('App\Models\Relatory');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
