@extends('nuclues::backend.layouts.app')
@section('title','page')
@push('css')
  <style>

.form-group {
    margin-bottom: 1rem;
    margin-top: 48px;
}
label.label-ctegory {
    position: absolute;
    top: 16px;
}
  </style>
  <link rel="stylesheet" href="{{ asset('backend/css/flatweather.css') }}">

  <link rel="stylesheet" href="{{ asset('backend/css/nice-select.css') }}">

@endpush

@section('content')
    <div class="panel-body">
              
      <div class="content-area">
        <div class="sub-bar">
          <div class="sub-title">
            <h4>Dashboard:</h4>
            <span>Welcome To page</span>
          </div>
          <ul class="bread-crumb">
            <li><a href="{{ route('admin.dashboard') }}" title="">Dashboard</a></li>
            <li>page</li>
          </ul>
        </div>
        <div class="gap no-gap">
            <div class="inner-bg">
              <div class="element-title">
                <h4>about page</h4>
                <span>Please fill the form bellow.</span> </div>
      
              <div class="add-prod-from">

                <form action="{{ route('page.update',$page->id) }}" method="POST"  enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  
                     <div class="row">
                    
                    <div class="col-md-6">
                <label>Page Title</label>
                <input type="text" placeholder="page Title" name="title" value="{{ $page->title }}">
              </div>
              <div class="col-md-6">
                <label>Page Subtitle</label>
                <input type="text" placeholder="Page subtitle" name="slug" value="{{ $page->slug }}">
              </div>
            
              <div class="col-md-12">
                <br>
                <label>page Description</label>
                <textarea cols="30" id="description" rows="10" placeholder="Enter Description" name="description">{{ $page->description }}</textarea>
              </div>
              
              <br>
              <div class="col-md-12">
                <div class="buttonz">
                  <br>
                <button type="submit">save</button>
             
                </div>
              </div>
                </form>
                </div>
              </div>      
            </div>
        </div>
      </div>
      <div class="bottombar"> 
            <span>© 2019. Laramaster. All Rights Reserved.</span>
        </div>
      <!-- bottombar --> 
    </div>
@endsection

@push('js')
<script src="{{ asset('backend/js/echart.min.js') }}"></script> 

  <script src="{{ asset('backend/js/nice-select.js') }}"></script> 
  <script src="{{ asset('backend/js/flatweather.min.js') }}"></script> 
<script src="{{ asset('backend/js/html5lightbox.js') }}"></script> 

<script src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>

  <script>
    CKEDITOR.replace('description');
  </script>
@endpush