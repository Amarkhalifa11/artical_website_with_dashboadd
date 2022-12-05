<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articale;
use App\Models\Comment;

class ArticaleController extends Controller
{

    public function index()
    {
        $articales  = Articale::all();
        $small = Articale::all()->take(6);

        return view('frontend.articals' , compact('articales' , 'small'));
    }

    public function single($id)
    {
        $comments = Comment::all()->where('comment_post_id' , $id);
        $articales  = Articale::find($id);
        $small = Articale::all()->take(6);
        return view('frontend.single' , compact('articales' , 'small' , 'comments'));
    }

    public function auther($auther)
    {
        $small      = Articale::all()->take(6);
        $articales = Articale::all()->where('auther' , $auther);
        return view('frontend.articals' , compact( 'articales' , 'small'));
    }

    public function category($category)
    {
        $small      = Articale::all()->take(6);
        $articales = Articale::all()->where('category' , $category);
        return view('frontend.articals' , compact( 'articales' , 'small'));
    }

    public function search(Request $request)
    {
        $small = Articale::all()->take(6);
        $search = $request->search;
        $articales = Articale::where('title', 'LIKE' , '%'.$search.'%')->get();

        return view('frontend.articals' , compact( 'articales' , 'small'));
    }


    public function all_articals()
    {
        $articales  = Articale::all();

        return view('backend.articals.all_articals' , compact('articales'));
    }

    public function create()
    {
        return view('backend.articals.add_articals');
    }


    public function store(Request $request)
    {
        $title        = $request->title;
        $auther       = $request->auther;
        $category     = $request->category;
        $type         = $request->type;
        $date         = $request->date;
        $description  = $request->description;
        $imagee        = $request->file('image');
        $image_authere = $request->file('image_auther');

        //image
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($imagee->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/images/'; 
        $image = $img_name; 
        $imagee->move($upload_location,$img_name); 


        //auther image
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($image_authere->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/images/'; 
        $image_auther = $img_name; 
        $image_authere->move($upload_location,$img_name); 

        $articales = new Articale();

        $articales->title          = $title;
        $articales->auther         = $auther;
        $articales->category       = $category;
        $articales->type           = $type;
        $articales->date           = $date;
        $articales->description    = $description;
        $articales->image          = $image;
        $articales->image_auther   = $image_auther;

        $articales->save();

        return redirect()->route('all_articals');
    }

    public function edit($id)
    {
        $articales = Articale::find($id);
        return view('backend.articals.edit_artical' , compact('articales'));
    }

    public function update(Request $request, $id)
    {
        $title        = $request->title;
        $auther       = $request->auther;
        $category     = $request->category;
        $type         = $request->type;
        $date         = $request->date;
        $description  = $request->description;
        $imagee        = $request->file('image');
        $image_authere = $request->file('image_auther');

        //image
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($imagee->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/images/'; 
        $image = $img_name; 
        $imagee->move($upload_location,$img_name); 


        //auther image
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($image_authere->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/images/'; 
        $image_auther = $img_name; 
        $image_authere->move($upload_location,$img_name); 

        $articales = Articale::find($id);
        $articales->update([
            'title'         =>$title,
            'auther'        =>$auther,
            'category'      =>$category,
            'type'          =>$type,
            'date'          =>$date,
            'description'   =>$description,
            'image'         =>$image,
            'image_auther'  =>$image_auther,
        ]);

        $articales->save();
        return redirect()->route('all_articals');
    }

    public function destroy($id)
    {
        $articales = Articale::find($id);
        $articales->delete();

        return redirect()->route('all_articals');
    }
}
