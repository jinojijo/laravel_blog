@extends('layout.theme');

@section('title')
Linux Articles
@endsection('title')


@section('content')
    
    <a href="linux/create">Add new Article</a>
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
                @php($sr_no = 1)
                @foreach ($linux as $item)
                
                    <tr>
                        <td>
                            {{$sr_no;}}
                        </td>
                        <td>
                            <a href="/linux/{{$item->id}}">
                                {{$item->title}}
                            </a>
                        </td>
                        <td>
                            {{$item->body}}
                        </td>

                        <td>
                            <a 
                                href="/linux/{{$item->id}}/edit"
                                class="btn btn-warning"
                            >
                                Edit
                            </a>
                        </td>
                    </tr>
                    @php($sr_no++)
                @endforeach
            </tbody>

        </table>
    </div>    
@endsection