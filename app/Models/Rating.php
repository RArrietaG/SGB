<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = ['book_id', 'applicant_id', 'rating', 'comment'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
}
