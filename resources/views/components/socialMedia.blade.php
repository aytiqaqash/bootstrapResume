<nav class="social-links">
    @foreach($items as $item)
    <a href="{{$item->link()}}" class="social-link" target="{{$item->target}}"><i class="fab {{$item->icon_class}}"></i></a>
    @endforeach
</nav>
