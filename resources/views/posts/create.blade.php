@extends('layouts.app')

@section('content')

<form action="/store" method="post">

<input class="" type="text" name="title" placeholder="Enter title">
<input class="" type="text" name="content" placeholder="Enter content">

<input type="submit" name="submit">

</form>
@stop