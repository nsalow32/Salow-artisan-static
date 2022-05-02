<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}" type= "text/css">
</head>


<body>
    <section>
        <header>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
             <meta name="viewport" content="width=device-width, initial-scale=1.0" />   
        </header> 

        
        
        <nav id="main-menu">
        <!-- LOGO -->
            <div class="logo">NICOLE SALOW</div>

          <ul>
            <li><a href="/index">Home</a></li>
            <li><a href="/design">Design</a></li>
            <li><a href="/retouching">Retouching</a></li>
            <li><a href="/photography">Photography</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </nav>

        <input type="checkbox" id="hamburger-input" class="burger-shower" />
        <label id="hamburger-menu" for="hamburger-input">
             <nav id="sidebar-menu">
                <div class="logo">NICOLE SALOW</div>
                <ul>
                    <li><a href="/index">Home</a></li>
                    <li><a href="/design">Design</a></li>
                    <li><a href="/retouching">Retouching</a></li>
                    <li><a href="/photography">Photography</a></li>
                    <li><a href="/contact">Contact</a></li>
                 </ul>
             </nav>
         </label>

        <div class="overlay"></div>
        

        <article>
            <section>
                @yield('content')
            </section>
        </article>


        <footer>
            <small>
                &copy; <span data-year></span> {{ $page->owner->name }} &nbsp;&bull;&nbsp;
            </small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production && $page->services->analytics, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
