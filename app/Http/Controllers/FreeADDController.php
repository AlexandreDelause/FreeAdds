<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\FreeADD;

class FreeADDController extends Controller
{
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */


    public function index()
    {
        $freeadd = FreeADD::latest()->paginate(10);
        return view('freeadds.index',compact('freeadd'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function destroy($id)
    {
        FreeADD::destroy($id);
        return redirect()->route('home');
    }

   public function freeADD()
   {
       return view('freeadds.form');
   }

  public function show(Request $request)
  {
    $freeadd = FreeADD::latest()->paginate(10);
    return view('freeadds.show',compact('freeadd'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
  }

  public function edit(FreeADD $free)
  {
    return view('freeadds.edit');
  }


   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function freeADDPost(Request $request)
   {
       $this->validate($request, [
        'titre' => 'required',
        'prix' => 'required',
        'message' => 'required',
        'user_id' => 'required',
        ]);

       FreeADD::create($request->all());

       return back()->with('success', 'Add successfully posted');
   }
}
