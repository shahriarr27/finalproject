<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nausers = User::get();
        return view('backend.pages.dashboard')->with('nausers', $nausers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $info = User::where('id', $id)->get();
        // return view('backend.back_layouts.approve')->with('info', $info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id_info = User::find($id);
        $title = $id_info->name;
        return view('backend.back_layouts.approve')->with(['id_info'=> $id_info,'title'=>$title]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->approval = $request->approval;
        if($user->approval ==1){
            $user->update();
            return redirect('/dashboard')->with('success', $user->name.'\'s registration has been approved!');
        }
        elseif($user->approval ==0){
            $destination = storage_path('app/public/profile_pictures/'.$user->profile_picture);

            if(File::exists($destination)){
                File::delete($destination);
            };
            $user->delete();
            return redirect('/dashboard')->with('success', $user->name.'\'s registration has been Canceled!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
