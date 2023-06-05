@extends("layout.theme");

@section('content')
    <form 
        method="post"
        action="/articles"
    >
        @csrf
        <div class="form-group">
            <label for="title">Article Title</label>
            <input type="text" class="form-control" name="title" value="{{old("title")}}">

            
            {{-- @if ( $errors->has("title"))
                <p style="color:red">
                    {{$errors->first("title")}}
                </p>    
            @endif --}}

            @error("title")
                <p style="color:red">
                    {{$errors->first("title")}}
                </p> 
            @enderror

        </div>

        <div class="form-group">
            <label for="body">Article body</label>
            <textarea 
                name="body" 
                id="text-area" 
                cols="30"
                rows="3"
                class="form-control"
            >
                {{old("body")}}
            </textarea>

            @if ( $errors->has("body"))
                <p style="color:red">
                    {{$errors->first("body")}}
                </p>    
            @endif

        </div>

        <div class="form-group">
            <button class="btn btn-primary">
                Save
            </button>
            
        </div>
    </form>
    
@endsection