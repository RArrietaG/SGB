<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $fillable = ['book_id', 'applicant_id', 'loan_date', 'return_date'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
}
