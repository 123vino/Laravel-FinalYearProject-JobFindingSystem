<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    
    public function index()
    {
        $skills = auth()->user()->skills;

        return view('skills.index', compact('skills'));
    }
    
    public function index1()
    {
       return view('skills.index1');
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skills.create');
    }

    public function create2(){
        return view('skills.skillEngineer');
    }
    
    public function create3(){
        return view('skills.skillBusiness');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            //'name'=>'required',
            //'rating'=>'required',
            //'hardskills' => 'required',
            //'hardskillslevel' => 'required',
           
        ]);

        auth()->user()->skills()->create($request->all());
       // return redirect()->route('overallindex');

       return redirect()->route('skill.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return view('skills.edit', compact('skill'));
    }
    public function edit1(Skill $skill)
    {
        return view('skills.edit1',compact('skill'));
    }
    public function edit2(Skill $skill)
    {
        return view('skills.edit2',compact('skill'));
    }
    public function edit3(Skill $skill)
    {
        return view('skills.edit3',compact('skill'));
    }
   //public function edit1(Skill $skill)
   // {
   //     return view('skills.edit1', compact('skill'));
   //}

   // public function edit2(Skill $skill)
   // {
   //     return view('skills.edit2', compact('skill'));
   // }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            //'name' => 'required',
           //'rating' => 'required',
           // 'hardskills' => 'required',
           // 'hardskillslevel' => 'required',
        ]);

        $skill->update($request->all());

        return redirect()->route('skill.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return back()->with('success',' Skill successfully deleted');
    }

}
