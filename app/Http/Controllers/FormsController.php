<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
class FormsController extends Controller
{
    public function create(){
    return view('forms.create');
   }
   public function store(Request $request){
       $this->validate($request, [
         'filename' => 'required',
          'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
       ]);

        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
         }

         $form= new Form();
         $form->filename=json_encode($data); //I am using json_encode to insert the multiple-image names in one row.
         //dd($form->filename);
        
        $form->save();
        return back()->with('success', 'Your images has been successfully');
     }
    

     public function index($id){
     	$files = Form::where('id',$id)->get();
       //print_r($filedata);
       foreach ($files as $keys=>$value) {
        $val=json_decode($value->filename);
        //dd($val);
       //print_r($value->filename);die;
      }
        return view('forms.index')->with('val',$val);
       }    
    
}
