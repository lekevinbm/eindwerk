<div class="settings-menu">
    <div class="settings-menu-content">
        <img id="logo" src="{{ asset('img/logo-white.png') }}" alt="Logo of washfactory in white">
        <div class="menu-link-block"><a href="{{route('user.edit')}}">Accountgegevens</a></div>
        <div class="menu-link-block"><a href="{{route('user.charge.history')}}">Oplaadgeschiedenis</a></div>
        <div class="menu-link-block"><a href="#">Vorige wasbeurten</a></div>
        <div class="menu-link-block"><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Uitloggen</a></div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        <div id="menu-footer" class="row">
            <div class="col"><a href="{{route('faq')}}"><i class="fas fa-question-circle fa-2x"></i><br><span class="menu-footer-text">FAQ</span></a></div>
            <div class="col"><a href="{{route('problem')}}"><i class="fas fa-exclamation-circle fa-2x"></i><br><span class="menu-footer-text">Probleem melden</span></a></div>
            <div class="col">
                <a href="{{route('contact')}}">
                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAyOTkuOTk3IDI5OS45OTciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDI5OS45OTcgMjk5Ljk5NzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIxMjhweCIgaGVpZ2h0PSIxMjhweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTE0OS45OTYsMEM2Ny4xNTcsMCwwLjAwMSw2Ny4xNTgsMC4wMDEsMTQ5Ljk5N2MwLDgyLjgzNyw2Ny4xNTYsMTUwLDE0OS45OTUsMTUwczE1MC02Ny4xNjMsMTUwLTE1MCAgICBDMjk5Ljk5Niw2Ny4xNTgsMjMyLjgzNSwwLDE0OS45OTYsMHogTTE0OS45OTksNTIuNjg2bDg4Ljc2Myw1NS4zNUg2MS4yMzZMMTQ5Ljk5OSw1Mi42ODZ6IE0yMzkuODY4LDE5Ni40MjNoLTAuMDA5ICAgIGMwLDguODc4LTcuMTk1LDE2LjA3Mi0xNi4wNzIsMTYuMDcySDc2LjIxMWMtOC44NzgsMC0xNi4wNzItNy4xOTUtMTYuMDcyLTE2LjA3MnYtODQuODY1YzAtMC45MzksMC4wOTYtMS44NTIsMC4yNTItMi43NDkgICAgbDg0LjgwOCw1Mi44ODNjMC4xMDQsMC4wNjUsMC4yMTUsMC4xMDksMC4zMjIsMC4xNjljMC4xMTIsMC4wNjIsMC4yMjYsMC4xMjIsMC4zNCwwLjE3OWMwLjU5OSwwLjMwOSwxLjIxNiwwLjU1OCwxLjg0NywwLjcyMSAgICBjMC4wNjUsMC4wMTgsMC4xMywwLjAyNiwwLjE5NSwwLjA0MWMwLjY5MiwwLjE2MywxLjM5MywwLjI2NSwyLjA5MywwLjI2NWgwLjAwNWMwLjAwNSwwLDAuMDEsMCwwLjAxLDAgICAgYzAuNywwLDEuNDAxLTAuMDk5LDIuMDkzLTAuMjY1YzAuMDY1LTAuMDE2LDAuMTMtMC4wMjMsMC4xOTUtMC4wNDFjMC42My0wLjE2MywxLjI0NS0wLjQxMiwxLjg0Ny0wLjcyMSAgICBjMC4xMTQtMC4wNTcsMC4yMjgtMC4xMTcsMC4zNC0wLjE3OWMwLjEwNi0wLjA2LDAuMjE4LTAuMTA0LDAuMzIyLTAuMTY5bDg0LjgwOC01Mi44ODNjMC4xNTYsMC44OTcsMC4yNTIsMS44MDgsMC4yNTIsMi43NDkgICAgVjE5Ni40MjN6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                    <br><span class="menu-footer-text">Contacteer ons</span>
                </a>
            </div>
        </div>
    </div>
</div>