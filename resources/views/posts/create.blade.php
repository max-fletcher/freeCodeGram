@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/p" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row">
      <div class="col-8 offset-2">
        <h1>Add New Post</h1>
        <div class="form-group row">
            <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                <input id="caption" type="text" name="caption"
                 class="form-control @error('caption') is-invalid @enderror"
                  caption="caption" value="{{ old('caption') }}"
                  required autocomplete="caption" autofocus>

                @error('caption')
                        <strong>{{ $message }}</strong>
                @enderror
        </div>

        <div class="row">
          <label for="caption" class="col-md-4 col-form-label">Post Image</label>
          <input id="image" name="image" type="file" class="form-control-file">
          @error('image')
                  <strong>{{ $message }}</strong>
          @enderror
        </div>

        <div class="row pt-4">
          <button class="btn btn-primary">Add New Post</button>
        </div>

      </div>
    </div>
  </form>
</div>
@endsection
