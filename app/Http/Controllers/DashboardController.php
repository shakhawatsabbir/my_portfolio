<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use App\Models\Portfolio;
use Illuminate\Http\Request;


class DashboardController extends Controller
{

    public function index()
    {

        return view('admin.home.home',[
            'massages'=>Massage::all(),
            'portfolio'=>Portfolio::all(),
            'portfolios'=> Portfolio::where('status', 1)->orderBy('id','desc')->take(3)->get(),
            'recentMassages'=>Massage::orderBy('id','desc')->take(3)->get(),
        ]);
    }

    public function addPortfolio()
    {
        return view('admin.portfolio.add-portfolio');
    }
    public function savePortfolio(Request $request)
    {
        Portfolio::savePortfolio($request);
        return back()->with('massage','New portfolio add Success');
    }
    public function updatePortfolio(Request $request)
    {
        Portfolio::savePortfolio($request);
        return redirect('/manage-portfolio')->with('massage','New portfolio add Success');
    }

    public function managePortfolio()
    {
        return view('admin.portfolio.manage',[
            'portfolios' => Portfolio::all(),
        ]);
    }
    public function manageMassage()
    {

        return view('admin.massage.manage',[
            'massages'=>Massage::all(),
        ]);
    }

    public function edit($id)
    {
        return view('admin.portfolio.edit',[
            'portfolio'=> Portfolio::find($id),
        ]);
    }

    public function delete(Request $request)
    {
        $this->portfolio = Portfolio::find($request->portfolio_id);
        if ($this->portfolio->image)
        {
            if (file_exists($this->portfolio->image ))
            {
                unlink($this->portfolio->image );
            }
        }
        $this->portfolio->delete();
        return back()->with('massage','Delete Success');
    }
}
