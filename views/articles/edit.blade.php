@extends("layout.theme");

@section('content')
    <form 
        method="post"
        action="/articles/{{$article->id}}"
    >
        {{-- cross-site request forgery --}}
        @csrf
        @method("PUT")
        
        <div class="form-group">
            <label for="title">Article Title</label>
            <input 
                type="text" 
                class="form-control" 
                name="title"
                value="{{$article->title}}"
            >
        </div>

        <div class="form-group">
            <label for="body">Article body</label>
            <textarea 
                name="body" 
                id="text-area" 
                cols="30"
                rows="3"
                class="form-control"
            >{{$article->body}}
            </textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary">
                Save
            </button>
            
        </div>
    </form>
    
@endsection