<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_book',
        'author',
        'publisher',
        'category'
    ];


    public function category()
{
    return $this->belongsTo(Category::class, 'category', 'name');
}
}