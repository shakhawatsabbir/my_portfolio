<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class WebController extends Controller
{
    private $massage;

    public  function index()
    {
        return view('frontEnd.home.home',[
            'portfolios'=> Portfolio::where('status', 1)->orderBy('id','desc')->get(),
//            'portfolioSecond'=>Portfolio::where('status', 1)->orderBy('id','desc')->skip(1)->first(),
//            'portfolioThird'=>Portfolio::where('status', 1)->orderBy('id','desc')->skip(2)->first(),
        ]);
    }
    public function massage(Request $request)
    {
        $this->massage = new Massage();
        $this->massage->name = $request->name;
        $this->massage->email = $request->email;
        $this->massage->massage = $request->massage;
        $this->massage->save();
        return  redirect(route('home'))->with('massage','Your massage send Success');
    }
}
