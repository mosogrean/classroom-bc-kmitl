<?php

namespace App\Http\Middleware;

use App\BlockChainConnection;
use Closure;
use function foo\func;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Type;

class IsStudent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        if (!$this->isNotStudent() && !$this->isExistBC()) {
            return redirect('/');
        }
        return $next($request);
    }

    /**
     * @return bool
     */
    protected function isNotStudent(): bool {
        try{
            if ( Auth::user()->is_student ){
                $check = true;
            } else {
                $check = false;
            }
        } catch (\Exception $e){
            $check = false;
        }
        return $check;
    }

    protected function isExistBC(): bool {
        try {
            $id = Auth::user()->personal_id;
            BlockChainConnection::getMethod('STUDENTS', '/api/', "Students/$id");
            $check = true;
        } catch (\Exception $e){
            $check = false;
        }
        return $check;
    }
}
