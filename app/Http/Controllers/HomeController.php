<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Article;
use App\Tag;

class HomeController extends Controller
{
    public function index()
    {
        $results = false;
        $tags = Tag::all();

        $categories = Category::withCount('articles')->where('parent_id', null)
            ->with(['articles' => function($query) {
                $query->orderBy('id', 'desc');
            }])
            ->paginate(10);

        $subcategories = Category::where('parent_id', '<>', null)->get();
        return view('index', compact(['categories', 'subcategories', 'tags', 'results']));
    }
    public function search(Request $request) {
        // Get the search value from the request
        $search = $request->search;
        

        // return json_encode($request->category);


        $category = $request->category;
    
        $subcategory = $request->subcategory;

        if ($subcategory != "all") {
            $category = $subcategory;
        }

        $tag = $request->tag;

        $query = Article::query();


        // Search in the title and body columns from the posts table
        if ($search != '') {
            $query->where('title', 'LIKE', "%{$search}%")
            ->orWhere('full_text', 'LIKE', "%{$search}%")
            ->orWhere('short_text', 'LIKE', "%{$search}%");
        }
            
        if ($category != 'all') {
            $query->join('article_category', 'article_category.article_id', 'articles.id')->where('category_id', $category);
        }
        if ($tag != 'all') {
            $query->join('article_tag', 'article_tag.article_id', 'articles.id')->where('tag_id', $tag);

        }
        
        $results = $query->get();

        return view('search', compact('results'));
    }
}
