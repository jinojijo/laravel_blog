@extends('layout.theme');

@section('content')
    
    <a href="articles/create">Add new Article</a>
    <div class="table-responsive">
        <table class="table text-center">
            <thead>
            <tr>
                <th style="width: 10%;">Id</th>
                <th style="width: 45%;">Title</th>
                <th style="width: 45%;">Body</th>
                <th style="width: 45%;"></th>
            </tr>
            </thead>
            
            <tbody>
                @foreach ($articles as $item)
                
                    <tr>
                        <td>
                            {{$item->id}}
                        </td>
                        <td>
                            <a href="/articles/{{$item->id}}">
                                {{$item->title}}
                            </a>
                        </td>
                        <td>
                            {{$item->body}}
                        </td>

                        <td>
                            <a 
                                href="/articles/{{$item->id}}/edit"
                                class="btn btn-warning"
                            >
                                Edit
                            </a>
                        </td>
                    </tr>

                @endforeach
            </tbody>

        </table>
    </div>    
@endsection