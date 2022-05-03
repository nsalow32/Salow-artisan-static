@extends('_layouts.master')

@section('title', 'Design')

@section('content')
 
@endsection


  <?php <h1>DESIGN PORTFOLIO</h1>

  /**/  <ul>
 /**/      @forelse ($posts->sortBy('title') as $post)
  /**/          <li>
  /**/              <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
   /**/             <small>{{ $post->prettyDate() }}</small>
   /**/         </li>
   /**/     @empty
    /**/        <p>No posts to show.</p>
   /**/     @endforelse
  /**/  </ul>
