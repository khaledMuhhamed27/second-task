<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Faker\Factory as faker;

class ArticleController extends Controller
{
    // index function
    public function index()
    {
        $articles = Article::all();
        return response()->json($articles);
    }
    // getArticle function
    public function getArticle($id)
    {
        $faker = Faker::create();
        $articles = [];
        for (
            $i = 0;
            $i < 10;
            $i++
        ) {
            # code...
            $articles[] = [
                'id' => $i + 1,
                'article content' => $faker->paragraph(10),
            ];
        }
        return response()->json($articles[$id - 1]);
    }
}
