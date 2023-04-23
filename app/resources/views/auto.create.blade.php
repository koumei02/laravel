
@extends('layouts.layout')
@section('content')
<head>
 <meta charset="UTF-8">
 <title>体重・体脂肪記録サイト</title>
 <style>
  fieldset {
   border: none;
   border-radius: 5px;
   background-color: #F2F2F2;
   padding: 10px;
   margin-bottom: 10px;
  }
  input[type="number"] {
   width: 80px;
   border: none;
   background-color: transparent;
  }
  input[type="text"] {
   width: 80px;
   border: none;
   background-color: transparent;
  }
  button {
   border: none;
   background-color: #008CBA;
   color: white;
   padding: 10px;
   border-radius: 5px;
   cursor: pointer;
  }
  button:hover {
   background-color: #006F8F;
  }
 </style>
</head>
<body>
 <h1>体重・体脂肪記録サイト</h1>
 <form>
  <fieldset>
   <legend>記録日</legend>
   <input type="date" id="date">
  </fieldset>
  <fieldset>
   <legend>体重</legend>
   <input type="number" id="weight" step="0.1" min="0"> 
  </fieldset>
  <fieldset>
   <legend>体脂肪率</legend>
   <input type="number" id="weight" step="0.1" min="0"> 

@endsection