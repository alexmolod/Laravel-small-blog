@extends ('layouts.master')

@section ('content')
	<div class="col-sm-8 blog-main">
	<h1>{{ $post->title }}</h1>

	{{ $post->body }}

	<hr>
				

		@if (Auth::check())
          @if (Auth::user()->id == $post->user_id)
               <form action="{{ url('/posts/'.$post->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> Delete
            </button>
        </form>
        @endif
        @endif
    </div>
 @endsection