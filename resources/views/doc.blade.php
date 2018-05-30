@extends('backend.base')
@section('content')
<div class="content-wrapper">
<section class="content">
<table class="table">
<tr>
<th>Name</th>
<th>Email</th>
</tr>
@foreach($sub as $s)
<tr>
<td>{{$s->name}}</td>
<td>{{$s->email}}</td>
</tr>
@endforeach
{{$sub->links()}}
</table>
</section>
</div>
@stop