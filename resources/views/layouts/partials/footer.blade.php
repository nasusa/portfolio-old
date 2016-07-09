<footer class="container box blueBg whiteText">
    <div class="fourth">
        <ul>
            <li>
                <i class="fa fa-user" aria-hidden="true"></i>&nbsp; My Name is Alan Aasmaa
            </li>
            <li>
                <i class="fa fa-globe" aria-hidden="true"></i>&nbsp; I'm From Estonia
            </li>
            <li>
                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp; I'm <?= date_diff(date_create('1995-07-30'), date_create('today'))->y;?> years old
            </li>
        </ul>
    </div>
    <div class="fourth">
        <ul>
            <li>
                <i class="fa fa-archive" aria-hidden="true"></i>&nbsp; Over 10 projects
            </li>
            <li>
                <i class="fa fa-group" aria-hidden="true"></i>&nbsp; Over 20 clients
            </li>
            <li>
                <i class="fa fa-headphones" aria-hidden="true"></i>&nbsp; I ♥ Rap & Hip-Hop
            </li>
        </ul>
    </div>
    <div class="fourth">
    <ul>
            <li>
                <i class="fa fa-linkedin" aria-hidden="true"></i>&nbsp; Connect with my <a href="https://www.linkedin.com/in/alanaasmaa" target="_blank">LinkedIn</a>
            </li>
            <li>
                <i class="fa fa-github" aria-hidden="true"></i>&nbsp; Codes at <a href="https://github.com/alanaasmaa" target="_blank">Github</a>
            </li>
            <li>
                <i class="fa fa-codepen" aria-hidden="true"></i>&nbsp; Teach me at <a href="http://codepen.io/thasmog/" target="_blank">Codepen</a>
            </li>
        </ul>
    </div>
    <div class="fourth">
    <ul>
            <li>
                <i class="fa fa-steam" aria-hidden="true"></i>&nbsp; I'm at <a href="http://steamcommunity.com/id/thasmog" target="_blank">Steam</a>
            </li>
            <li>
                <i class="fa fa-youtube" aria-hidden="true"></i>&nbsp; Watch me from <a href="https://www.youtube.com/c/thasmog" target="_blank">YouTube</a>
            </li>
            <li>
                <i class="fa fa-facebook" aria-hidden="true"></i>&nbsp; Stalk me at <a href="https://www.facebook.com/alan.aasmaa" target="_blank">Facebook</a>
            </li>
        </ul>
    </div>
    <hr>
    <div class="footerInfo">
        <a href="/terms-and-conditions">Terms of Use</a> . Copyright &copy; <?php echo date("Y") ?> Alan Aasmaa®
        <h5 style="color: #D13F19; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
            Tämä sivust on vasta työn alla
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
        </h5>
    </div>
</footer>