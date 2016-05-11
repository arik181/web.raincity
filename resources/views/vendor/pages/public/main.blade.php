<!DOCTYPE html>
<html>
<head>

</head>

<body>
<div id="logo">
<div id="menu">
    @foreach($pages as $page)
        <h4><a href="{{$page->slug}}">{{$page->title}}</a></h4>
    @endforeach
</div>
<div id="social-container">
    <div class="social" id="twitter"></div>
    <div class="social" id="facebook"></div>
    <div class="social" id="linkedin"></div>
    <div class="social" id="youtube"></div>
    <div class="social" id="googleplus"></div>
</div>
</div>

</body>

</html>
