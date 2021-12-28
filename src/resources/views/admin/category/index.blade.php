@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
              <nav class="navbarnavbar-toggleable-md navbar-light bg-faded">
                  <a href="{{route('categories.create')}}" class="btn btn-primary">Add</a>
              </nav>
                <div class="card">
                    <ul class="list-group">
                        @foreach($paginator as $item)
                        <li class="list-group-item">{{$item->id}} {{$item->slug}}
                            <div class="float-right">
                            <a href="{{route('categories.edit', ['category' => $item->id])}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('categories.destroy', ['category' => $item->id])}}" class="btn btn-primary">Delete</a>
                            </div>
                        </li>
                        @endforeach
                      </ul>
                </div>
            </div>
        </div>
        @if($paginator->total() > $paginator->count())
            <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{$paginator->links()}}
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
@endsection
