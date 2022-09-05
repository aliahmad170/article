@extends('layouts.app')

@section('admin_content')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: '#mytextarea',
      menubar:false,
    });
  </script>
                <div class="card-header">write  article</div>

                <div class="card-body">
                    <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{url('admin/store')}}">
                      @csrf
                      <div class="form-group">
                        <input class="form-control" type="text" name="title" placeholder="title">
                      </div>
                        <div class="form-group">
                        <textarea id="mytextarea" name="body">Hello, World!</textarea>
                        </div>
                        <div class="form-group">
                          <input class="form-control" type="file" name="thumbnail"accept="image/*" />

                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" value="publish">
                        </div>

                      </form>
                </div>
            
    
    

@endsection
