<?php

namespace App\Http\Controllers;

use App\Item;
use App\Item_Langueg;
use App\Langueg;
use App\link;
use App\Menu_Langueg;
use App\menuelist;
use Illuminate\Http\Request;
use App\categorymodel;



class pub extends Controller
{


    public function calcList($id)
    {   if($id==1)
        {$menunId=menuelist::all()->where('isdeleted',0);
        return view('welcome',compact('menunId'));}
        if($id==2 )
        {$m=menuelist::all()->where('isdeleted',0);
        $lan_m=Langueg::all();

        return view('welcome',compact('m','lan_m'));
        }

        if($id==3)
        {$itemId=categorymodel::all()->where('isdeleted',0);
            return view('welcome',compact('itemId'));}
        if($id==4)
        {   $itemnn=categorymodel::all()->where('isdeleted',0);
            $item=Item::all()->where('isdeleted',0);
        $lan_item=Langueg::all();
            return view('welcome',compact('item','lan_item','itemnn'));}

        if($id==5)
        {$men_catid=menuelist::all()->where('isdeleted',0);
        $cat_cat=categorymodel::all()->where('isdeleted',0);
            return view('welcome',compact('men_catid','cat_cat'));}
        if($id==6)
        {   $men_cat=menuelist::all()->where('isdeleted',0);
            $cat=categorymodel::all()->where('isdeleted',0);
            return view('welcome',compact('cat','men_cat'));}
    }

    public  function additemlan($id,Request $request)
    {     $m=new Item_Langueg();
        $m->langueg_id=$request->input('hasitem');
        $m->item_id=$id;
        $m->title=$request->input('text_translate');
        $m->save();
        return redirect(url(''));

    }

    public  function addmenulan($id,Request $request)
    {   $m=new Menu_Langueg();
        $m->langueg_id=$request->input('hasmenu');
        $m->menu_id=$id;
        $m->save();
        return redirect(url(''));

    }


    public function  remove_cat(Request $request,$id)
    {
     categorymodel::where('id', $id)->update(array(
            'isdeleted' =>  1));
        Item::where('Categorymodels_id', $id)->update(array(
            'isdeleted' =>  1));
       $cat=categorymodel::where('parentid',$id);
       foreach ($cat as $item)
          delete_cat1($item->parentid);


    return redirect(url(''));

    }

    public function delete_cat1($id)
    {
        //

        categorymodel::where('id', $id)->update(array(
            'isdeleted' =>  1));
        Item::where('Categorymodels_id', $id)->update(array(
            'isdeleted' =>  1));
        $cat=categorymodel::where('parent',$id);
        foreach ($cat as $item)
            delete_cat1($item->parentid);

    }
    public function  add_cat(Request $request)
    {
        $m=new categorymodel();
        $m->categname=$request->input('categname');
        $m->isdeleted= 0;
        $m->parentid=$request->input('hasparentc');
        $m->menuelists_id=$request->input('hasmenu');
        $m->save();
        return redirect(url(''));
    }



    public function update_category(Request $request,$id)
    {
        //
        $m=categorymodel::find($id);

        $m->categname=$request->input('categname');
        $m->isdeleted= 0;
        $m->parentid=$request->input('hasparentc');
        $m->menuelists_id=$request->input('hasmenu');
        $m->save();

        return redirect(url(''));
    }

    public function add_menu(Request $request)
    {
        //

        $m=new menuelist();
        $m->name=$request->input('menuename');
        $m->isdeleted=0;
        $m->parentid=$request->input('paraentid');
        $m->save();
        return redirect(url(''));
    }



    public function update_menu(Request $request,$id)
    {
        //

        $m=menuelist::find($id);
        $m->name=$request->input('menuename');
        $m->isdeleted=0;
        $m->parentid=$request->input('paraentid');
        $m->save();
        return redirect(url(''));
    }

    public function delete_menu($id)
    {

       menuelist::where('id', $id)->update(array(
            'isdeleted' =>  1));


     $menulist=menuelist::where('parentid',$id);
         foreach ($menulist as $item)
            delete_menu1($item->parentid);
        $cat=categorymodel::where('menuelists_id',$id);
        foreach ($cat as $item)

          delete_cat1($item->Categorymodels_id);


        return redirect(url(''));
        }





        public function delete_menu1($id)
     {
        //

      menuelist::where('id', $id)->update(array(
             'isdeleted' =>  1));
         link::where('menuelists_id',$id)->update(array(
             'isdeleted' =>  1));
        $menulist=menuelist::where('parentid',$id);
        foreach ($menulist as $item)
            delete_menu1($item->parentid);

    }

    public function add_item(Request $request)
    {
        //

        $m=new Item();
        $m->title=$request->input('itemname');
        $m->isdeleted=0;
        $m->Categorymodels_id=$request->input('hasparenti');
        $m->descreption=$request->input('itemdec');
        $m->itemlink=$request->input('itemlink');
        $m->image="/var/www/html/uu.jpg";

        $m->save();
        return redirect(url(''));
    }


    public function update_item(Request $request,$id)
    {
        //
        $m=Item::find($id);

        $m->title=$request->input('itemname');
        $m->isdeleted=0;
        $m->Categorymodels_id=$request->input('hasparenti');
        $m->descreption=$request->input('itemdec');
        $m->itemlink=$request->input('itemlink');
        $m->save();
        return redirect(url(''));
    }
    public function delete_item(Request $request,$id)
    {


        Item::where('id', $id)->update(array(
            'isdeleted' =>  1));
      //  return redirect(route('mangeitem'));

    return redirect(url(''));
    
    }
    public  function  showview()
    {   $m=menuelist::all()->where('isdeleted',0);
        $c=categorymodel::all()->where('isdeleted',0);
        $item=Item::all()->where('isdeleted',0);
        return view('home',compact('m','c','item'));
    }


}
