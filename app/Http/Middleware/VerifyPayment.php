<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class VerifyPayment
{
    public function handle($request, Closure $next)
    {
        $articleId = $request->route('article_id'); // Assuming you are using article_id as the route parameter
        $article = Article::findOrFail($articleId);

        if (!$article->paid && !Auth::check()) {
            return redirect()->route('paymentPage'); // Replace 'paymentPage' with the route name of your payment page
        }

        return $next($request);
    }
}

