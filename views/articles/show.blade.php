@extends("layout.theme");

@section('content')

    <a href="/articles">View All Articles</a>
    <h1>
        {{$article->title}}
    </h1>

    <p>
        {{$article->body}}
    </p>

    <form action="/articles/{{$article->id}}" method="post">

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