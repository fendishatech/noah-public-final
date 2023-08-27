<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function savings()
    {
        return $this->hasMany(SavingsAccount::class);
    }

    public function lot()
    {
        return $this->hasOne(Lot::class);
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function loanRequests()
    {
        return $this->hasMany(Loan::class);
    }
}
