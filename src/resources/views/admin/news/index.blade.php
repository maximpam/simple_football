@extends('admin.main.index')

@section ('admin_panel')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <nav class="navbarnavbar-toggleable-md navbar-light bg-faded">
              <a href="{{route('news.posts.create')}}" class="btn btn-primary">Add</a>
          </nav>
          <div class="card">
            <ul class="list-group">
                @foreach($paginator as $item)
                <li class="list-group-item">{{$item->id}} {{$item->slug}}
                    <div class="float-right">
                    <a href="{{route('news.posts.edit', ['post' => $item->id])}}" class="btn btn-primary">Edit</a>
                    <form method="POST" action="{{route('news.posts.destroy', ['post' => $item->id])}}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-primary" type="submit">Delete</button>
                    </form>
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
</div>

@endsection
