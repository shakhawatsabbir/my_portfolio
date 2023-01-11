<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    private static $portfolio, $image, $imageNewName,$imgUrl, $drictory;
    use HasFactory;

    public static function savePortfolio($request)
    {
        if ($request->portfolio_id)
        {
            self::$portfolio = Portfolio::find($request->portfolio_id);
        }
        else{
            self::$portfolio = new Portfolio();
        }
        self::$portfolio->portfolio_title = $request->portfolio_title;
        self::$portfolio->portfolio_tools = $request->portfolio_tools;
        self::$portfolio->portfolio_description = $request->portfolio_description;
        self::$portfolio->link = $request->link;
        if ($request->file('image'))
        {
            if (file_exists(self::$portfolio->image))
            {
                unlink(self::$portfolio->image);
            }
            self::$portfolio->image = self::saveImage($request);
        }
        self::$portfolio->save();
    }

    public static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$drictory = 'adminAsset/assets/portfolio-img/';
        self::$imgUrl = self::$drictory . self::$imageNewName;
        self::$image->move(self::$drictory , self::$imageNewName);
        return self::$imgUrl;
    }
}
