<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'correo_electronico'];

    public function booksLoans()
    {
        return $this->belongsToMany(Book::class, 'loans', 'applicant_id', 'book_id')
            ->withPivot('loan_date', 'return_date')
            ->withTimestamps();
    }
}
