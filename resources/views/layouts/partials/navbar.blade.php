<header class="navbar">
    <section class="container">
        <div>
            <span>
                <a href="{{url('/')}}" title="l" id="logo"><span class="pacifico">Portfolio</span></a>
            </span>
        </div>
        <div>
            <ul>
                <li><a href="{{url('/')}}" class="{!! set_active('/')">ETUSIVU</a></li>
                <li><a href="{{url('PORTBLOG')}}" class="{!! set_active('PORTBLOG')">PORTFOLIO/BLOG</a></li>
                <li><a href="{{url('CV')}}" class="{!! set_active('CV')">CV</a></li>
                <li><a href="{{url('CONTACT')}}" class="{!! set_active('CONTACT')">CONTACT ME</a></li>
            </ul>
        </div>
    </section>
</header>