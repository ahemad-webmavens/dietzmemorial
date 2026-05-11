<?php
namespace App\Observers;

use App\Models\BlogPost;
use Illuminate\Support\Facades\Cache;

class BlogPostObserver
{
    public function created(BlogPost $post): void
    {
        Cache::forget('blog.index');
    }

    public function updated(BlogPost $post): void
    {
        Cache::forget('blog.index');
        Cache::forget("blog.show.{$post->slug}");
    }

    public function deleted(BlogPost $post): void
    {
        Cache::forget('blog.index');
        Cache::forget("blog.show.{$post->slug}");
    }

    public function restored(BlogPost $post): void
    {
        Cache::forget('blog.index');
        Cache::forget("blog.show.{$post->slug}");
    }

    public function forceDeleted(BlogPost $post): void
    {
        Cache::forget('blog.index');
        Cache::forget("blog.show.{$post->slug}");
    }
}
