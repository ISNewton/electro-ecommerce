<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Section;
use App\Http\Controllers\Controller;
use App\Models\Admin\Product;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::all();
        return view('admin.pages.sections',compact('sections'));
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
            'section_name' => 'required|string|unique:sections|max:255'
        ]);

        Section::create([
            'section_name' => $request->section_name
        ]);


        return redirect()->route('sections.index')->with('msg',[
            'msg' => 'Section added successfully',
            'type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        $section = Section::with('products')->find($section->id);
        return view('admin.pages.single_section',compact('section'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        return view('admin.pages.edit_section',compact('section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        
        $request->validate([
            'section_name' => 'required|string|unique:sections,section_name,' . $section->id . '|max:255'
        ]);

        $section->update([
            'section_name' => $request->section_name
        ]);
       
        return redirect()->route('sections.index')->with('msg',[
            'msg' => 'Section updated successfully',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        $section->delete();

        return redirect()->route('sections.index')->with('msg',[
            'msg' => 'Section deleted successfully',
            'type' => 'error'
        ]);
    }


    public function removeProduct(Product $product,Section $section) {

        $product->sections()->detach($section->id);

        return back()->with('msg',[
            'msg' => 'Product removed successfully',
            'type' => 'error'
        ]);
    }


}
