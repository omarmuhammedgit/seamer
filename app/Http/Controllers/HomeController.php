<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

$chartjs = app()->chartjs
->name('lineChartTest')
->type('bar')
->size(['width' => 400, 'height' => 200])
->labels(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'March', 'April', 'May', 'June', 'July'])
->datasets([
    [
        "label" => "My First dataset",
        'backgroundColor' => "rgba(38, 185, 154, 0.31)",
        'borderColor' => "rgba(38, 185, 154, 0.7)",
        "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
        "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
        "pointHoverBackgroundColor" => "#fff",
        "pointHoverBorderColor" => "rgba(220,220,220,1)",
        'data' => [65, 59, 80, 81, 56, 55, 40, 80, 81, 56, 55, 40],
    ],
    // [
    //     "label" => "My Second dataset",
    //     'backgroundColor' => "rgba(38, 185, 154, 0.31)",
    //     'borderColor' => "rgba(38, 185, 154, 0.7)",
    //     "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
    //     "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
    //     "pointHoverBackgroundColor" => "#fff",
    //     "pointHoverBorderColor" => "rgba(220,220,220,1)",
    //     'data' => [12, 33, 44, 44, 55, 23, 40],
    // ]
])
->options([]);
$sizes=Size::all();

return view('home', compact('chartjs','sizes'));
        // return view('home');
    }
}
