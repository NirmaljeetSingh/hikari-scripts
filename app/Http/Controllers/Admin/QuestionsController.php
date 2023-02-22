<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Questions;
use App\Models\QuestionsContributers;
use Auth;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.questions.index',['questions' => Questions::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.questions.create',['edit' => 'no']);
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
        $request->validate([
            'title' => ['required'],
            // 'description' => 'required',
        ],[
            'type.required' => 'Select For blog'
        ]);
        // die(';');
        try {
            //code...
            $blogs = Questions::create([
                'title' => $request->title,
                'type' => $request->type,
                'description' => $request->description,
                'created_user_id' => Auth::guard('admin')->user()->id ?? 0
            ]);
        } catch (\Throwable $th) {
            // die($th->getMessage());
            return redirect()->back()->withError(['fatal' => $th->getMessage()]);
        }
        return redirect()->route('admin.question')->with(['created' => 'Question Saved']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Questions $id)
    {
        //
        return view('admin.questions.create',['question' => $id,'edit' => 'yes']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Questions $id)
    {
        //
        $request->validate([
            'title' => ['required'],
            // 'description' => 'required',
        ],[
            'type.required' => 'Select For blog'
        ]);
        // die(';');
        try {
            //code...
            $id->update([
                'title' => $request->title,
                'type' => $request->type,
                'description' => $request->description,
            ]);
        } catch (\Throwable $th) {
            // die($th->getMessage());
            return redirect()->back()->withError(['fatal' => $th->getMessage()]);
        }
        return redirect()->route('admin.question')->with(['created' => 'Question updated']);
    }
    public function status(Questions $id,Request $r)
    {
        //
        $id->update(['status' => $r->status]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questions $id)
    {
        //
        $id->delete();
        return redirect()->back();
    }
    public function contributers(Questions $id)
    {
        return view('admin.questions.contributers',['question' => $id]);
    }
    public function contributerView(Questions $id,QuestionsContributers $cid)
    {
        // return $cid->toArray();
        return view('admin.questions.contributer-view',['cid' => $cid]);
        // return $cid->comment;
    }
    public function contributerStatus(Questions $id,QuestionsContributers $cid,Request $r)
    {
        $cid->update(['status' => $r->status]);
        return redirect()->back()->with(['message' => 'Updated status']);
    }
}
