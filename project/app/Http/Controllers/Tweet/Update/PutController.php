<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use App\Http\Request\Tweet\UpdateRequest;
use App\Models\Tweet;
use Illuminate\Http\Request;

class PutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request)
    {
        $tweet = Tweet::where('id', $request->id())->first();
        if (is_null($tweet)) {
            throw new NotFoundHttpException('存在しないつぶやきです');
        }
        $tweet->content = $request->tweet();
        $tweet->save();
        return redirect()
            ->route('tweet.update.index', ['tweetId' => $tweet->id])
            ->with('feedback.success', "つぶやきを編集しました");
    }
}
