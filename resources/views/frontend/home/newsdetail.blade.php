@extends('frontend.master.index')
@section('title','News Details')
@section('update')
@endsection
@section('body')
<body>

<div class="container">
<h1>{{$data->title}}</h1>
{!!$data->content!!}
</div>


</body>
@endsection
