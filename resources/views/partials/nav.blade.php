<ul>
    <li><a href="{{ route('home') }}" class="{{ Request::routeIs('home')?'active':'' }}">HOME</a></li>
  <li><a href="{{ route('about_us') }}" class="{{ Request::routeIs('about_us')?'active':'' }}">ABOUT</a></li>
  <li><a href="{{ route('faq') }}" class="{{ Request::routeIs('faq')?'active':'' }}">FAQ</a></li>
  <li><a href="{{ route('getting_started') }}" class="{{ Request::routeIs('getting_started')?'active':'' }}">Get Started</a></li>
  <li><a href="{{ route('refferal_program') }}" class="{{ Request::routeIs('refferal_program')?'active':'' }}">affiliates</a></li>
  <li><a href="{{ route('support') }}" class="{{ Request::routeIs('support')?'active':'' }}">SUPPORT</a></li>


</ul>