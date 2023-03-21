<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NewsView extends Model
{
    use HasFactory;

    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
   protected $fillable = [
       'ip_address'
   ];

    /**
     * Get the news that owns the view
     */
    public function news(): BelongsTo
    {
        return $this->belongsTo(News::class);
    }

    // function hasViewedArticle($article_id, $ip_address) {
    //     $view = DB::table('article_views')->where([
    //         ['article_id', '=', $article_id],
    //         ['ip_address', '=', $ip_address]
    //     ])->first();

    //     return $view !== null;
    // }


    //     $article = Article::find($article_id);
    // $ip_address = request()->ip();

    // if (!hasViewedArticle($article_id, $ip_address)) {
    //     $article->increment('views');
    //     DB::table('article_views')->insert([
    //         'article_id' => $article_id,
    //         'ip_address' => $ip_address
    //     ]);
    // }
}
