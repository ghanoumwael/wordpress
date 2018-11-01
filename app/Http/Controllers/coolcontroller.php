<?php

namespace App\Http\Controllers;

use App\Item;
use App\link;
use App\menuelist;
use Illuminate\Http\Request;
use App\categorymodel;

class coolcontroller extends Controller
{
    //
    public function homeextra(){
        $NA = menuelist::where('isdeleted',0)->get();
        $I=Item::where('isdeleted',0)->get();

        return view('home',compact('NA','I','C'));
    }



}
