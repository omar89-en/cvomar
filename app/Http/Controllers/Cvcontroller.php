<?php

namespace App\Http\Controllers;
use App\Cv;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class Cvcontroller extends Controller
{

    public function __construct(){

        $this->middleware('auth');
     
         }
    public function create(){

        return view('cv.create');

    }
    public function index()
    {
        $listcv =Auth::user()->cvs;
        return view('cv.index', ['cvs'=>$listcv ]);

    }
    public function store(Request $request){
        $cv= new Cv();
        $cv->titre = $request->input('titre');
        $cv->presantation = $request->input('presantation');


         $request->validate([
                'titre' => 'required',
                'presantation' => 'required|min:5',
                
            ]);
   
        $input = $request->all();
        $cv->user_id =Auth::user()->id;

        $cv->save();
        session()->flash('message', 'Post successfully .');
        return redirect('index');
    }
    public function edit($id){
        $cv =Cv::find($id);
         return view('cv.edit', ['cv'=>$cv ]);

    }
    public function update( Request $request , $id){
        $cv =Cv::find($id);

     $cv->titre = $request->input('titre');
        
        $cv->presantation = $request->input('presantation');
        
         $request->validate([
                'titre' => 'required',
                'presantation' => 'required|min:5',
                
            ]);
   
        $input = $request->all();

        $cv->save();
        session()->flash('message', 'Post modifie .');
        return redirect('index');
    }
    public function destroy (Request $request ,$id){
        $cv =Cv::find($id);
        $cv->delete();
       return redirect('index');
   }
}
