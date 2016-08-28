<nav>
    <section class="container">
        <div>
            <span>
                <a href="{{url('/')}}" title="l" id="logo"><span class="pacifico">Portfolio</span></a>
            </span>
        </div>
        <div>
            <ul>
                <li><a href="{{url('/')}}" class="{!! set_active('/')">FRONTPAGE</a></li>
                <li><a href="{{url('PORTBLOG')}}" class="{!! set_active('PORTBLOG')">PORTFOLIO/BLOG</a></li>
                <li><a href="{{url('CV')}}" class="{!! set_active('CV')">ABOUT ME</a></li>
            </ul>
        </div>
        <div>
            <ul>
                <li><i class="fa fa-map-marker" aria-hidden="true"> Finland</i></li>
                <li><i class="fa fa-mobile" aria-hidden="true"> +35800 000 0000</i></li>
            </ul>
        </div>
    </section>
</nav>