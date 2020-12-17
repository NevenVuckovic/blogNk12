<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;

  protected $fillable = [ 'title', 'content', 'is_published' ];

  protected $casts = [ 'is_published' => 'boolean' ];

  public static function published() {
    return self::where('is_published', true);
  }

  public static function unpublished() {
    return self::where('is_published', false);
  }

  public function getSomePostData() {
    return $this->title . ' ovo je iz metode';
  }

  public function comments() {
    return $this->hasMany(Comment::class);
  }

  public function createComment($content) {
    return $this->comments()->create([
      'content' => $content
    ]);
  }
}
