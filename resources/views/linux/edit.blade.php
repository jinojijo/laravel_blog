@extends("layout.theme");

@section('title')
Edit Linux Article
@endsection('title')

@section('content')
    <form 
        method="post"
        action="/linux/{{$linux->id}}"
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
                value="{{$linux->title}}"
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
            >{{$linux->body}}
            </textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary">
                Save
            </button>
            
        </div>
    </form>

    <div class="form-group">
        <a 
            class="btn btn-primary"
            href="/linux"
        >
            Cancel
        </a>
    </div>
    
@endsection