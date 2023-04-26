<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Weight;
use App\Plofile;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('timeline');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('weight_fat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //登録作業を書く箇所。
        $weighting = new Weight;
        //左側が入力したテーブル。右側がコントローラに入力する。 
        $weighting->date = $request ->date;
        $weighting->weight = $request ->weight;
        $weighting->fat = $request ->fat;
        $weighting->comment = $request ->comment;
        $weighting->user_id = Auth::id();
        $weighting->save();

        return redirect('auto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //詳細画面の表示。
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //編集のフォームを表示させる。プロフィール画面

        return view('profile_edit');


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
        //編集処理を行う。保存について
        $profiling = new Plofile;
        $profile = $profiling->find($id);
        // if(empty($profile)){
            $file_name = $request->file('icon')->getClientOriginalName();
            $request->file('icon')->storeAs('public/icons', $file_name);
    
    
            $profiling->icon = $file_name;
            $profiling->comment = $request->comment;
            $profiling->gender = $request->gender;
            $profiling->age = $request->age;
            $profiling->target_weight = $request->target_weight;
            $profiling->target_fat = $request->target_fat;
            $profiling->user_id = Auth::id();

            $profiling->save();
        // }

    
        return redirect('auto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //削除処理。投稿内容の削除。
    }
}
