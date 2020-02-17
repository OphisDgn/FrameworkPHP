<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Skill;
use App\User;

class SkillsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $skills = Skill::all();
        return view('skillslist', compact('skills'));
    }
    
    public function add(Request $request)
    {
        $skills = Skill::all();
        DB::table('skills')->insert(['nom'=>$request->input('nom'), 'description'=>$request->input('description'), 'src'=>$request->input('source')]);
        return redirect()->route('skillslist');
    }
    
    public function edit(Request $request)
    {
        $skills = Skill::all();
        DB::table('skills')->where('nom', $request->input('nom'))->update(['description'=>$request->input('description'), 'src'=>$request->input('source')]);
        return redirect()->route('skillslist');
    }
    
    public function delet($id)
    {
        $skills = Skill::all();
        DB::table('skills')->where('id', $id)->delete();
        return redirect()->route('skillslist');
    }
    
}