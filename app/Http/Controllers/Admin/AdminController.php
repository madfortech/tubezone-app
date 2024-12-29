<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    
   
    public function index()
    {
        $chart_options = [
            'chart_title' => 'Users by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'line',
        ];
        
        $chart1 = new LaravelChart($chart_options);
        $users = DB::table('users')->count();
        $posts = DB::table('posts')->count();
        $articles = DB::table('articles')->count();
        return view('admin.home',compact('chart1','users','posts','articles'));
    }

   
}
