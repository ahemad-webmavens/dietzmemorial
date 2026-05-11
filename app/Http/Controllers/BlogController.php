<?php
namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Page;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::where('is_active', true)
            ->latest('published_at')
            ->get();

        $page = Page::where('slug', 'blog')->where('is_active', true)->first();

        return view('blog.index', [
            'posts'          => $posts,
            'seoTitle'       => $page?->meta_title ?: 'Blog | Dietz Memorial',
            'seoDescription' => $page?->meta_description ?: 'Explore our blog.',
            'seoImage'       => $page?->hero_image ?? null,
        ]);
    }

    public function show($slug)
    {
        $post = BlogPost::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('blog.show', [
            'post'           => $post,
            'seoTitle'       => $post->meta_title ?: $post->title,
            'seoDescription' => $post->meta_description,
            'seoImage'       => $post->featured_image,
        ]);
    }
}
