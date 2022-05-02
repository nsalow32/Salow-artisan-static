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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <section>
        <header>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
             <meta name="viewport" content="width=device-width, initial-scale=1.0" />   
        </header> 

        <!--------LOGO-------->
        
        <div class = "nav">
            <input type="checkbox" id="nav-check">
                <div class="nav-header">
                    <div class="nav-title">
                         NICOLE SALOW
                    </div>
                </div>
        
        
        <!--------TOGGLE FOR RESPONSIVE DESIGN-------->
        <div class="nav-btn">
            <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
              </label>
        </div>
        
        
            <div class="nav-links">
                <ul>
                    <li><a href="/index">Home</a></li>
                    <li><a href="/design">Design</a></li>
                    <li><a href="/retouching">Retouching</a></li>
                    <li><a href="/photography">Photography</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
        

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
