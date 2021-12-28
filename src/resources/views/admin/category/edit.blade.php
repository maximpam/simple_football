@extends('layouts.app')

@section('content')
  @php /** @var \App\Models\Category $item */ @endphp

  @if($item->exists)
                 <form method="POST" action="{{route('categories.update', ['category' => $item->id]) }}">
          @method('PATCH')
  @else
              <form method="POST" action="{{route('categories.store') }}">
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
                    @include('admin.category.includes.item_edit_main_col')
                </div>
                <div class="col-md-3">
                    @include('admin.category.includes.item_edit_add_coll')
                </div>
            </div>
        </div>
   </form>

@endsection
