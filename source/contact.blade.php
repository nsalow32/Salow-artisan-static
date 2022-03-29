@extends('_layouts.master')

@section('title', 'Contact')

    <h1>About</h1>

    <p>My name is {{ $page->owner->name }}</p>


@section('content')
    <h1>Contact</h1>
    
    <ul>
        <li><a href="/linkedin" target="_blank">LinkedIn</a></li>
        <li><a href="/github" target="_blank">GitHub</a></li>
    </ul>


    <form action="https://formcarry.com/s/{{ $page->services->formcarry }}" method="post">
        <div>
            <label for="sender">Name</label><br>
            <input type="text" name="sender" id="sender" required>
        </div>

        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="message">Message</label><br>
            <textarea name="message" id="message" required></textarea>
        </div>

        <input type="text" name="_gotcha" style="display: none;">

        <input type="submit" name="submit" value="Send">
    </form>
@endsection
