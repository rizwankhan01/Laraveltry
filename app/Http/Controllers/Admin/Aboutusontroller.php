<?php

namespace App\Http\Controllers\Admin;

use App\models\Abouts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Aboutusontroller extends Controller
{
    public function about()
    {
      $aboutus=Abouts::all();
      return view ('admin.abouts')->with('abouts',$aboutus); 
    }

    public function saveabout(request $request )
    {
      $aboutus=new Abouts; 
      
      $aboutus->title=$request->input('title');
      $aboutus->subtitle=$request->input('subtitle');
      $aboutus->description=$request->input('description');
      
      $aboutus->save();
      return redirect('abouts')->with('status','data added to about us');
             
    }

    public function aboutedit($id)
    {
      $aboutusvari= Abouts::findOrFail($id); 
      return view ('admin.aboutedit')
      ->with('abouts',$aboutusvari);
    }
}
