<?php

namespace App\Http\Middleware;

use App\Rules\NoBadWords;
use Closure;
use Illuminate\Http\Request;

class NoBadWordsMiddleware
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle(Request $request, Closure $next)
  {
    $content = $request->get('content', '');
    // $badWords = ['stupid', 'idiot', 'hate'];
    // foreach ($badWords as $badWord) {
    //   if (\Str::contains($content, $badWord)) {
    //     info('return view');
    //     return response()->view('forbidden-comment');
    //   }
    // }
    $rule = new NoBadWords;
    if ($rule->passes('content', $content)) {
      return $next($request);
    }
    return response()->view('forbidden-comment');

  }
}
