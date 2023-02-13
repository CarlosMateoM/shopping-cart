<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Manga;
use App\Models\User;
use App\Models\Cart;
use App\Models\Person;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


class HomeController extends Controller
{
    
    public function create()
    {
        return Inertia::render('Home/View',
            [
                'canLogin' => Route::has('login'),
                'canRegister' => Route::has('register'),
                'navbarStyle' => $this->navbarStyle(),
                'data'=>  $this->data(),
                'mangas' => Manga::with('categories','author.person')->get(),
            ]
        );
    }

    public  function navbarStyle() : String
    {
        return Auth::check() ?  : 'width:18%';
    }

    public function data()
    {
        
        $data = Auth::check() ? User::with('person', 'cart.mangas.categories','cart.mangas.author.person')->get()->whereIn('id', Auth::user()->id) : null;    
        if($data != null){
            foreach($data as $d){
                return $d;
            }

        }
    }


    public function dataCart(){
        return Auth::check() ? User::with('cart.mangas.categories','cart.mangas.author.person')->get()->whereIn('id', Auth::user()->id) : null;

    }
}
