@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>

    <p>My name is {{ $page->owner->name }}</p>

    <h2>Links:</h2>

    <ul>
        <li><a href="/linkedin" target="_blank">LinkedIn</a></li>
        <li><a href="/github" target="_blank">GitHub</a></li>
    </ul>
@endsection
