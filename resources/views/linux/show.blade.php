@extends("layout.theme");

@section('title')
Linux Article
@endsection('title')

@section('content')

    <a href="/linux">View All Articles</a>
    <h1>
        {{$linux->title}}
    </h1>

    <p>
        {{$linux->body}}
    </p>

    <form action="/linux/{{$linux->id}}" method="post">

        @csrf
        @method("DELETE")
        <button 
            class="btn btn-danger"
            onclick="return confirm('are you sure to delete the article')"
        >
            Delete Article
        </button>
    </form>
    
@endsection