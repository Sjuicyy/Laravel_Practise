@extends ('layouts.app')

@section('content')

<ul>

@foreach ($posts as $posts)
    <li> <a href="retrun">{{$posts->title}}</a> </li>
@endforeach


</ul>





@stop
