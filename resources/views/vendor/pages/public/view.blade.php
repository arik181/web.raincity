<!DOCTYPE html>
<html>
    <head>
        <title>oeo</title>

        </style>
    </head>

<body>
<a href="/"><div id="logo-interior"></div></a>
<div id="social-container-interior">
    <div class="social" id="twitter"></div>
    <div class="social" id="facebook"></div>
    <div class="social" id="linkedin"></div>
    <div class="social" id="youtube"></div>
    <div class="social" id="googleplus"></div>
</div>
<div id="menu">
    @foreach($pages as $p)
        <h2><a href="{{$p->slug}}">{{$p->title}}</a></h2>
    @endforeach
</div>
<div id="content">

    @if($page->hasSubtabs())
        @include('partials/subtabs')
    @elseif($page->hasTabs())
        @include('partials/tabs')
    @elseif($page->hasPost())

    <h4>{{strtolower(@$page->title)}}</h4>
    <p>{{@$page->post->content}}</p>
    @endif
</div>
</body>
</html>
