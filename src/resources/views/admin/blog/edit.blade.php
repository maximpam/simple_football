@extends('admin.main.index')

@section('scripts')
    <script src="https://cdn.tiny.cloud/1/5qwhsor2o1okcrt284b7685hkef732ahi0ryph4hq0gfmtpp/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection


@section ('admin_panel')

@if($item->exists)
<form method="POST" action="{{route('blog.posts.update', ['post' => $item->id]) }}">
@method('PATCH')
@else
<form method="POST" action="{{route('blog.posts.store') }}">
@endif
@csrf
<div class="container">

@if($errors->any())
<div class="row justify-content-center">
   <div class="col-md-11">
       <div class="alert alert-danger" role="alert">
           <button class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">X</span>
           </button>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </div>
   </div>
</div>
@endif

@if(session('success'))
   <div class="row justify-content-center">
       <div class="col-md-11">
           <div class="alert alert-success" role="alert">
               <button class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">X</span>
               </button>
               {{session()->get('success')}}
           </div>
       </div>
   </div>
@endif

<div class="row justify-content-center">
<div class="col-md-8">
   @include('admin.blog.includes.item_edit_main_col')
</div>
<div class="col-md-3">
   @include('admin.blog.includes.item_edit_add_coll')
</div>
</div>
</div>
</form>

<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar_mode: 'floating',
    });
</script>
@endsection
