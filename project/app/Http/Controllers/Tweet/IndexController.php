<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use App\Services\TweetService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, TweetService $TweetService)
    {
        $tweets = $TweetService->getTweets();
        return view('tweet.index')
        ->with('tweets', $tweets);
        // return view('tweet.index')
        // ->with('name', 'laravel')
        // ->with('version', '8');
    }
}
