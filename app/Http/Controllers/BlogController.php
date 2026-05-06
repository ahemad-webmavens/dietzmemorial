<?php
namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::where('is_active', true)
            ->latest('published_at')
            ->get();

        return view('blog.index', compact('posts'));
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
