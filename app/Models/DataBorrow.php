<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBorrow extends Model
{
    use HasFactory;

    protected $table = 'databorrows';

    protected $fillable = [
        'name_borrower',
        'class',
        'no_hp',
        'gender',
    ];

    public function borrows()
    {
        return $this->hasMany(Borrow::class, 'data_borrow_id');
    }

    // Accessor to get formatted phone number with +62 prefix and proper formatting
    public function getFormattedPhoneNumberAttribute()
    {
        $number = $this->no_hp;

        // Remove leading zero if present
        if (substr($number, 0, 1) === '0') {
            $number = substr($number, 1);
        }

        // Format as xxx-xxxx-xxxx (assuming number length 10-13)
        $len = strlen($number);
        if ($len < 10) {
            // If too short, return as is with +62 prefix
            return '+62 ' . $number;
        }

        // Split number into parts
        $part1 = substr($number, 0, 3);
        $part2 = substr($number, 3, 4);
        $part3 = substr($number, 7);

        return '+62 ' . $part1 . '-' . $part2 . '-' . $part3;
    }
}
