<?php

namespace App\Http\Controllers;

use App\Http\Business\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dashb = new Dashboard();

        $num_categories = $dashb->getNumCategories();
        $num_posts = $dashb->getNumPosts();
        $num_users = $dashb->getNumUsers();

        return view('dashboard.index')
            ->with('num_categories', $num_categories)
            ->with('num_posts', $num_posts)
            ->with('num_users', $num_users);
    }



}
