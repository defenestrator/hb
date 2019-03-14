@extends('layouts._master')

@section('title')

@parent
@stop

@section('page_styles')
    <style>

    </style>
@stop

@section('top')
<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div id="errors">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container">
                <div class="row col-md-4">
                <a href="/admin/strains/create">
                    <button class="btn btn-danger">
                        Add New Strain
                    </button>
                </a>
            </div>
    <div class="row">
        <div class="col-md-4 info">
            <img style="" id="preview" src="{{$strain->image}}" />
        </div>
        <div class="col-md-8">
            <form class="form-horizontal new-content" role="form" enctype="multipart/form-data" method="POST" action="{{route('admin.strains.update', $strain->id)}}">
                @csrf
                <div class="form-group row col-md-12">
                <!-- Header Photo Button -->
                <label class="btn btn-warning btn-file">
                    Change Image <input type="file" style="display: none;" onchange="previewFile()" name="image" value="{{$strain->image}}" >
                </label>
                </div>

                <div class="form-group row">
                    <div class="col-md-12"><p>Name:</p>
                    <input id="name" name="name" class="form-control input" type="text" placeholder="name" value="{{$strain->name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12"><p>Genetics:</p>
                    <input id="genetics" name="genetics" class="form-control input" type="text" placeholder="genetics" value="{{$strain->genetics}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <p>Description:</p>
                        <textarea name="description" class="form-control">{{$strain->description}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                        <div class="col-md-4">
                            <label for="feminized">Feminized?</label>

                            <input type="checkbox" name="feminized" id="feminized" {{$femValue}} />
                        </div>
                        <div class="col-md-4">
                            <label for="published">Published?</label>
                            <input type="checkbox" name="published" id="published" {{$pubValue}} />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="min_flowering_time">Min Weeks</label>
                            <input name="min_flowering_time" type="number" min="6" max="15" default="9" id="min_flowering_time" value="{{$strain->flowering_time_min_weeks}}" />
                        </div>
                        <div class="col-md-6">
                            <label for="max_flowering_time">Max Weeks</label>
                            <input type="number" min="6" max="15" default="9" name="max_flowering_time" id="max_flowering_time" value="{{$strain->flowering_time_max_weeks}}" />
                        </div>
                    </div>
                <div class="form-group row">
                    <div class="col-md-2 col-sm-4">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
            <div class="col-md-2 col-sm-12 row">
                <a href="{{route('admin.strains.delete', $strain->id)}}">
                    <button class="btn btn-danger">
                       Delete
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('bottom')
@stop

@section('page_scripts')
<script>
function previewFile() {
  var preview = document.querySelector('#preview');
  var original = document.querySelector('#original');
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();

  reader.addEventListener("load", function () {
    preview.src = reader.result;
    preview.style =  'width:100%; display:block;';
    preview.classList = 'info';
    original.style = 'display:none;';
  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }

}
</script>

@stop
