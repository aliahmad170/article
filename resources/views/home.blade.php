@extends('layouts.app')

@section('admin_content')

                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                    <div class="col-md-12 mb-4">
                        @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session('status')}}
                        </div>
                            @endif
                            you are login
                            <a href="{{url('/admin/create')}}" class=" btn btn-primary">new article</a>
                    </div>
                    <div class="col-md-12 mb-4">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>title</th>
                                    <th>create time</th>
                                    <th>edit</th>
    
    
    
                                    
    
                                </tr>
    
                            <thead>
    
                            <tbody>
                                @foreach($articles as $article)
                                <tr>
                                    <td>{{$article->id}}</td>
                                    <td>{{$article->title}}</td>
                                     <td>{{$article->created_at}}</td>
                                     <td><a class="btn btn-danger" href="{{url('admin/edit/'.$article->id)}}">edit</a></td>

                                
    
                                    
                                </tr>
                                @endforeach
    
                            </tbody>
        
                            </table>
                            {{$articles->links()}}
                       
                           

                    
                </div>



            </div>
                  
                </div>
            
    
    

@endsection
