<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 * @package App
 * @mixin Builder
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'rubric_id'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getPostDate()
    {
        return Carbon::parse($this->created_at)->diffForHumans();

    }
}
