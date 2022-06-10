<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Newsletter;
use App\Http\Controllers\Controller;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptions = Newsletter::all();
        return view('admin.pages.newsletter',compact('subscriptions'));
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
            'email'  => 'email:filter|unique:newsletters'
        ]);

        Newsletter::create([
            'email' => $request->email
        ]);

        return redirect()->route('newsletters.index')->with('msg',[
            'msg' => 'Email added successfully',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        $newsletter->delete();

        return redirect()->route('newsletters.index')->with('msg',[
            'msg' => 'Email deleted successfully',
            'type' => 'error'
        ]);
    }
}
