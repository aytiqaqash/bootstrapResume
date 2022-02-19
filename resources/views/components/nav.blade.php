<nav class="collapsible-nav" id="collapsible-nav">
    @foreach($items as $menu_item)
        <a href="{{$menu_item->route}}" class="nav-link {{request()->routeIs($menu_item->route)?"active":""}}">{{$menu_item->title}}</a>
    @endforeach
</nav>
