<?php

namespace App\Http\Middleware;

use App\Models\AllSeamoer;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class setActiveSeamoer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $host=$request->getHost();
        $allseamoer=AllSeamoer::where('domain',$host)->firstOrFail();
        app()->instance('allseamoer.active',$allseamoer);
        $db=$allseamoer->database_name;
        Config::set('database.connections.tenant.database',$db);
        return $next($request);
    }
}
