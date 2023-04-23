@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class='text-center'>体重・体脂肪記録</h1>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <label for='date' class='mt-2'>日付</label>
                                <input type='date' class='form-control' name='date' id='date' value=""/>
                            <label for='comment' class='mt-2'>料理名</label>
                                <textarea class='form-control' name='comment' ></textarea>
                            <label for='amount' >カロリー</label>
                                <input type='text' class='form-control' name='amount' value=""/>
                            <label for='comment' class='mt-2'>レシピ</label>
                                <textarea class='form-control' name='comment' ></textarea>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection