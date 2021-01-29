<?php namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Film extends Model {
    use HasFactory, SoftDeletes;
   // 1:n protected $fillable = ['title', 'year', 'description', 'category_id'];
    protected $fillable = ['title', 'year', 'description'];


    /* relation 1:n
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    */

    public function categories()
    {
        return $this->morphedByMany(Category::class, 'filmable');
    }
    public function actors()
    {
        return $this->morphedByMany(Actor::class, 'filmable');
    }
}
