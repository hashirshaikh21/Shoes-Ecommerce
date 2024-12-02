<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function admin(){
        $product = Product::orderBy('created_at','DESC')->get();              
        return view('web.admin',[
            'product'=> $product
        ]);
    }

    public function create(){
      return view('web.create');
    }
    
    public function store(Request $request){
        

        $rules=[
            'title'=> 'required|min:5',
            'price'=> 'required|numeric',
            'image'=> 'required',
        ];

        if($request->image != ""){    
          $rules["image"]= "  image";
        }

        $validator =  Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->route('web.create')->withInput()->withErrors($validator);
        }

    $product = new Product();
    $product->title =$request->title;
    $product->price =$request->price;
    $product->description =$request->description;
    $product->image =$request->image;
    $product->save();

    if($request->image != ""){
    $image =$request ->image;
     $ext = $image->getClientOriginalExtension();
     $imageName = time().'.'.$ext;
     
     $image->move(public_path('uploads\products'), $imageName);

     $product->image =$imageName;
     $product->save();
    }

    return redirect()->route('web.admin')->with('success','Product added successfully');
   

        
    }
    
    public function edit($id){
        $product = Product::findOrFail($id);              
        return view('web.edit',[
            'product'=> $product
        ]);


    }

    
    public function update($id ,Request $request){
        $product = Product::findOrFail($id); 
        $rules=[
            'title'=> 'required|min:5',
            'price'=> 'required|numeric',
            'image'=> 'required',
        ];

        if($request->image != ""){    
          $rules["image"]= "  image";
        }

        $validator =  Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->route('web.edit',$product->$id)->withInput()->withErrors($validator);
        }

    $product->title =$request->title;
    $product->price =$request->price;
    $product->description =$request->description;
    $product->image =$request->image;
    $product->save();

   

    if($request->image != ""){
        $product = Product::findOrFail($id); 
    File::delete(public_path('uploads/products/'.$product->image));


    $image =$request ->image;
     $ext = $image->getClientOriginalExtension();
     $imageName = time().'.'.$ext;
     
     $image->move(public_path('uploads\products'), $imageName);

     $product->image =$imageName;
     $product->save();
    }

    return redirect()->route('web.admin')->with('success','Product updated successfully');
   

    }

    
    public function destroy($id){
        $product = Product::findOrFail($id); 

        File::delete(public_path('uploads/products/'.$product->image));

        $product->delete();

        return redirect()->route('web.admin')->with('success','Product deleted successfully');
   
    }
}
