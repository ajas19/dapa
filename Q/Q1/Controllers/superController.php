<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;


class superController extends Controller
{
    public function viewhome()
    {
        $order = Order::get();
        return view('home',compact('order'));
    }


    public function viewiteam()
    {
        return view('Order');
    }



    public function regiteam(Request $req)
    {
        $id = Auth::id();

        $req->validate([

            'name'=>'required|max:50',
            'quty'=>'required|max:150',
            'date'=>'required',
        ]);

        $data['User_ID']=$id;
        $data['name']=$req->name;
        $data['quty']=$req->quty;
        $data['date']=$req->date;



        $newOrder=Order::create($data);


        if($newOrder)
        {
            return redirect('home')->with('status',"Iteam Sucessfully added");
         }else
         {
           return redirect('iteam')->with('status',"Iteam Insertion Failed");
         }



    }

}
