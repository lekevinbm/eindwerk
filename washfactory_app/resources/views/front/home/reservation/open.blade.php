@extends('layouts.app')

@section('content')
    <div id="home-page">
        <div id="top-page-section">
            <a id="back-btn" href="{{route('home')}}"><i class="fas fa-angle-left"></i></a>  
        </div>
        <div id="page-content" class="open-reservation">
            @if($link)
                <input id="link" type="hidden" value="{{$link}}">
            @else
                <input id="link" type="hidden" value="">
            @endif
            <div class="time-status">...</div>
            <div class="time-status-extra">min resterend</div>
            <div class="row program-row">

            </div>
            <div class="row">
                <!--<div class="col device-info-section">
                    <div class="device-info-title">Locatie</div>
                    <div class="device-info-value location">Ellermanstraat&nbsp;20<br>kelder 1</div>
                </div>-->
                <div class="col device-info-section">
                    <div class="device-info-title">TOESTEL</div>
                    <div class="device-info-value">7</div>
                </div>
                <div class="col device-info-section">
                    <div class="device-info-title">TYPE</div>
                    <div class="device-info-value"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ2MyA0NjMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ2MyA0NjM7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTI4cHgiIGhlaWdodD0iMTI4cHgiPgo8Zz4KCTxwYXRoIGQ9Ik0zODMuNSwwaC0zMDRDNjYuNTQyLDAsNTYsMTAuNTQyLDU2LDIzLjV2NDE2YzAsMTIuOTU4LDEwLjU0MiwyMy41LDIzLjUsMjMuNWgzMDRjMTIuOTU4LDAsMjMuNS0xMC41NDIsMjMuNS0yMy41di00MTYgICBDNDA3LDEwLjU0MiwzOTYuNDU4LDAsMzgzLjUsMHogTTcxLDk1aDMyMXYzMjFINzFWOTV6IE0zOTIsMjMuNVY4MEgxODNWMTVoMjAwLjVDMzg4LjE4NywxNSwzOTIsMTguODEzLDM5MiwyMy41eiBNNzkuNSwxNUgxNjh2NjUgICBINzFWMjMuNUM3MSwxOC44MTMsNzQuODEzLDE1LDc5LjUsMTV6IE0zODMuNSw0NDhoLTMwNGMtNC42ODcsMC04LjUtMy44MTMtOC41LTguNVY0MzFoMzIxdjguNUMzOTIsNDQ0LjE4NywzODguMTg3LDQ0OCwzODMuNSw0NDggICB6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMjMxLjUsMTI4QzE3MC4wMTksMTI4LDEyMCwxNzguMDE5LDEyMCwyMzkuNVMxNzAuMDE5LDM1MSwyMzEuNSwzNTFTMzQzLDMwMC45ODEsMzQzLDIzOS41UzI5Mi45ODEsMTI4LDIzMS41LDEyOHogICAgTTIzMS41LDMzNmMtNTMuMjEsMC05Ni41LTQzLjI5LTk2LjUtOTYuNXM0My4yOS05Ni41LDk2LjUtOTYuNXM5Ni41LDQzLjI5LDk2LjUsOTYuNVMyODQuNzEsMzM2LDIzMS41LDMzNnoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik0yMzEuNSw3MWMxMi45NTgsMCwyMy41LTEwLjU0MiwyMy41LTIzLjVTMjQ0LjQ1OCwyNCwyMzEuNSwyNFMyMDgsMzQuNTQyLDIwOCw0Ny41UzIxOC41NDIsNzEsMjMxLjUsNzF6IE0yMzEuNSwzOSAgIGM0LjY4NywwLDguNSwzLjgxMyw4LjUsOC41cy0zLjgxMyw4LjUtOC41LDguNXMtOC41LTMuODEzLTguNS04LjVTMjI2LjgxMywzOSwyMzEuNSwzOXoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik05NS41LDcxaDQ4YzQuMTQyLDAsNy41LTMuMzU4LDcuNS03LjVzLTMuMzU4LTcuNS03LjUtNy41aC00OGMtNC4xNDIsMC03LjUsMy4zNTgtNy41LDcuNVM5MS4zNTgsNzEsOTUuNSw3MXoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik0yNzkuNSw1NWgyNGM0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41cy0zLjM1OC03LjUtNy41LTcuNWgtMjRjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjVTMjc1LjM1OCw1NSwyNzkuNSw1NXoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik0zMzUuNSw1NWgyNGM0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41cy0zLjM1OC03LjUtNy41LTcuNWgtMjRjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjVTMzMxLjM1OCw1NSwzMzUuNSw1NXoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik0yMzEuNSwxNjBjLTQzLjgzNiwwLTc5LjUsMzUuNjY0LTc5LjUsNzkuNXMzNS42NjQsNzkuNSw3OS41LDc5LjVzNzkuNS0zNS42NjQsNzkuNS03OS41UzI3NS4zMzYsMTYwLDIzMS41LDE2MHogICAgTTIzMS41LDMwNGMtMzUuNTY1LDAtNjQuNS0yOC45MzUtNjQuNS02NC41czI4LjkzNS02NC41LDY0LjUtNjQuNXM2NC41LDI4LjkzNSw2NC41LDY0LjVTMjY3LjA2NSwzMDQsMjMxLjUsMzA0eiIgZmlsbD0iI0ZGRkZGRiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" /></div>
                </div>
            </div>
            <div id="play-stop-row" class="row">
                <div class="col play-device-col">
                    <img id="play-device-btn" class="locked" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYwIDYwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA2MCA2MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIxMjhweCIgaGVpZ2h0PSIxMjhweCI+CjxnPgoJPHBhdGggZD0iTTQ1LjU2MywyOS4xNzRsLTIyLTE1Yy0wLjMwNy0wLjIwOC0wLjcwMy0wLjIzMS0xLjAzMS0wLjA1OEMyMi4yMDUsMTQuMjg5LDIyLDE0LjYyOSwyMiwxNXYzMCAgIGMwLDAuMzcxLDAuMjA1LDAuNzExLDAuNTMzLDAuODg0QzIyLjY3OSw0NS45NjIsMjIuODQsNDYsMjMsNDZjMC4xOTcsMCwwLjM5NC0wLjA1OSwwLjU2My0wLjE3NGwyMi0xNSAgIEM0NS44MzYsMzAuNjQsNDYsMzAuMzMxLDQ2LDMwUzQ1LjgzNiwyOS4zNiw0NS41NjMsMjkuMTc0eiBNMjQsNDMuMTA3VjE2Ljg5M0w0My4yMjUsMzBMMjQsNDMuMTA3eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTMwLDBDMTMuNDU4LDAsMCwxMy40NTgsMCwzMHMxMy40NTgsMzAsMzAsMzBzMzAtMTMuNDU4LDMwLTMwUzQ2LjU0MiwwLDMwLDB6IE0zMCw1OEMxNC41NjEsNTgsMiw0NS40MzksMiwzMCAgIFMxNC41NjEsMiwzMCwyczI4LDEyLjU2MSwyOCwyOFM0NS40MzksNTgsMzAsNTh6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                    <img id="stop-device-btn" class="deactivated" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYwIDYwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA2MCA2MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIxMjhweCIgaGVpZ2h0PSIxMjhweCI+CjxnPgoJPHBhdGggZD0iTTE2LDQ0aDI4VjE2SDE2VjQ0eiBNMTgsMThoMjR2MjRIMThWMTh6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMzAsMEMxMy40NTgsMCwwLDEzLjQ1OCwwLDMwczEzLjQ1OCwzMCwzMCwzMHMzMC0xMy40NTgsMzAtMzBTNDYuNTQyLDAsMzAsMHogTTMwLDU4QzE0LjU2MSw1OCwyLDQ1LjQzOSwyLDMwICAgUzE0LjU2MSwyLDMwLDJzMjgsMTIuNTYxLDI4LDI4UzQ1LjQzOSw1OCwzMCw1OHoiIGZpbGw9IiNGRkZGRkYiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                </div>
                
            </div>
            <div class="row open-reservation-bottom">
                <div class="col cancel-reservation-col">
                    <img id="cancel-reservation-btn" class="locked" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUyIDUyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MiA1MjsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIxMjhweCIgaGVpZ2h0PSIxMjhweCI+CjxnPgoJPHBhdGggZD0iTTI2LDBDMTEuNjY0LDAsMCwxMS42NjMsMCwyNnMxMS42NjQsMjYsMjYsMjZzMjYtMTEuNjYzLDI2LTI2UzQwLjMzNiwwLDI2LDB6IE0yNiw1MEMxMi43NjcsNTAsMiwzOS4yMzMsMiwyNiAgIFMxMi43NjcsMiwyNiwyczI0LDEwLjc2NywyNCwyNFMzOS4yMzMsNTAsMjYsNTB6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMzUuNzA3LDE2LjI5M2MtMC4zOTEtMC4zOTEtMS4wMjMtMC4zOTEtMS40MTQsMEwyNiwyNC41ODZsLTguMjkzLTguMjkzYy0wLjM5MS0wLjM5MS0xLjAyMy0wLjM5MS0xLjQxNCwwICAgcy0wLjM5MSwxLjAyMywwLDEuNDE0TDI0LjU4NiwyNmwtOC4yOTMsOC4yOTNjLTAuMzkxLDAuMzkxLTAuMzkxLDEuMDIzLDAsMS40MTRDMTYuNDg4LDM1LjkwMiwxNi43NDQsMzYsMTcsMzYgICBzMC41MTItMC4wOTgsMC43MDctMC4yOTNMMjYsMjcuNDE0bDguMjkzLDguMjkzQzM0LjQ4OCwzNS45MDIsMzQuNzQ0LDM2LDM1LDM2czAuNTEyLTAuMDk4LDAuNzA3LTAuMjkzICAgYzAuMzkxLTAuMzkxLDAuMzkxLTEuMDIzLDAtMS40MTRMMjcuNDE0LDI2bDguMjkzLTguMjkzQzM2LjA5OCwxNy4zMTYsMzYuMDk4LDE2LjY4NCwzNS43MDcsMTYuMjkzeiIgZmlsbD0iI0ZGRkZGRiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                </div>
                <div id="lock-button" class="col open-device-icon active"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDU0IDU0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1NCA1NDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIxMjhweCIgaGVpZ2h0PSIxMjhweCI+CjxnPgoJPHBhdGggZD0iTTQzLDIwLjExM1YxNC41QzQzLDYuNTA1LDM1LjgyMiwwLDI3LDBTMTEsNi41MDUsMTEsMTQuNWMwLDAuNTUzLDAuNDQ3LDEsMSwxczEtMC40NDcsMS0xQzEzLDcuNjA3LDE5LjI4LDIsMjcsMiAgIHMxNCw1LjYwNywxNCwxMi41VjIwSDEyLjIyOUM4LjI0MywyMCw1LDIzLjI0Myw1LDI3LjIyOXYxOS41NDJDNSw1MC43NTcsOC4yNDMsNTQsMTIuMjI5LDU0aDI5LjU0MkM0NS43NTcsNTQsNDksNTAuNzU3LDQ5LDQ2Ljc3MSAgIFYyNy4yMjlDNDksMjMuNjYzLDQ2LjQwMSwyMC42OTksNDMsMjAuMTEzeiBNNDcsNDYuNzcxQzQ3LDQ5LjY1NCw0NC42NTQsNTIsNDEuNzcxLDUySDEyLjIyOUM5LjM0Niw1Miw3LDQ5LjY1NCw3LDQ2Ljc3MVYyNy4yMjkgICBDNywyNC4zNDYsOS4zNDYsMjIsMTIuMjI5LDIyaDI5LjU0MkM0NC42NTQsMjIsNDcsMjQuMzQ2LDQ3LDI3LjIyOVY0Ni43NzF6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMjcsMjhjLTIuMjA2LDAtNCwxLjc5NC00LDR2NmMwLDIuMjA2LDEuNzk0LDQsNCw0czQtMS43OTQsNC00di02QzMxLDI5Ljc5NCwyOS4yMDYsMjgsMjcsMjh6IE0yOSwzOGMwLDEuMTAzLTAuODk3LDItMiwyICAgcy0yLTAuODk3LTItMnYtNmMwLTEuMTAzLDAuODk3LTIsMi0yczIsMC44OTcsMiwyVjM4eiIgZmlsbD0iI0ZGRkZGRiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" /></div>
                
            </div>
            
        </div>
    </div>
@endsection

@section('scripts')
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script type="text/javascript">
    var device_status = "";
        $(function() {
            var link_value = $('input#link').val();
            if(link_value == 'ready'){
                $('.time-status').text('Start het toestel');
                $('.time-status').css('font-size','2em');
                $('.time-status-extra').empty();
                $('#play-device-btn').removeClass('locked');
                $('#play-device-btn').addClass('active');
            }else if(link_value == 'countdown'){
                var timer2 = "14:48";
                $('#play-device-btn').removeClass('active');
                $('#play-device-btn').removeClass('locked');
                $('#play-device-btn').addClass('deactivated');
                $('#stop-device-btn').removeClass('deactivated');
                $('#stop-device-btn').addClass('active');
                $('#lock-button').removeClass('active');
                $('#lock-button').addClass('locked');
                $('.time-status').css('font-size','5em');
                var interval = setInterval(function() {
                var timer = timer2.split(':');
                //by parsing integer, I avoid all extra string processing
                var minutes = parseInt(timer[0], 10);
                var seconds = parseInt(timer[1], 10);
                --seconds;
                minutes = (seconds < 0) ? --minutes : minutes;
                if (minutes < 0) clearInterval(interval);
                seconds = (seconds < 0) ? 59 : seconds;
                seconds = (seconds < 10) ? '0' + seconds : seconds;
                minutes = (minutes < 10) ?  minutes : minutes;
                $('.time-status').html(minutes + ':' + seconds);
                $('.time-status').css('font-size','5em');
                timer2 = minutes + ':' + seconds;
                }, 1000);
            }else{
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
                $.ajax({url: "http://172.20.10.10/status", method:"get",success: function(result){
                    console.log('page loading');
                    console.log(result)
                    if(result.status == 'Ready to run'){
                        device_status = 'Ready to run';
                        $('.time-status').text('RTR');
                        $('#lock-button').removeClass('active');
                        $('#lock-button').addClass('locked');
                        $('#play-device-btn').removeClass('locked');
                        $('#play-device-btn').addClass('active');
                    }

                    if(result.status == 'Running'){
                        //getDeviceRunningInfo();
                        device_status = 'Running';
                        $('#lock-button').removeClass('active');
                        $('#lock-button').addClass('locked');
                        $('#play-device-btn').removeClass('active');
                        $('#play-device-btn').removeClass('locked');
                        $('#play-device-btn').addClass('deactivated');
                        $('#stop-device-btn').removeClass('deactivated');
                        $('#stop-device-btn').addClass('active');
                        $('#cancel-reservation-btn').removeClass('active');
                        $('#cancel-reservation-btn').addClass('locked');
                    }

                    if(result.status == 'Ready to rerun'){
                        //getDeviceRunningInfo();
                        device_status = 'Ready to rerun'
                        $('#play-device-btn').removeClass('deactivated');
                        $('#play-device-btn').removeClass('locked');
                        $('#play-device-btn').addClass('active');
                        $('#stop-device-btn').removeClass('active');
                        $('#stop-device-btn').addClass('deactivated');
                        $('#cancel-reservation-btn').removeClass('active');
                        $('#cancel-reservation-btn').addClass('locked');   
                    }
                    
                }});
            }
        });

        

        //get Device Running Info
        var getDeviceRunningInfo = function(){
            console.log('geting device info');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({url: "http://172.20.10.10/getinfo", method:"get",success: function(result){
               // Set the date we're counting down to
                var countDownDate = new Date(result.end_time).getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                // Get todays date and time
                var now = new Date().getTime();

                // Find the distance between now an the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id="demo"
                $('.time-status').text(hours+":"+ minutes +":"+seconds);

                // If the count down is finished, write some text 
                if (distance < 0) {
                    clearInterval(x);
                    alert('Uw was is gedaan.');
                }
                }, 1000);
            },fail:function(jqXHR, textStatus){
                console.log('failmessage:'+textStatus);
            }
            });
        }

        //open device door
        $(document).on("click", '#lock-button.active', function(){
            console.log('open door button pressed');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({url: "http://172.20.10.10/open", method:"get",success: function(result){
                $('#lock-button').removeClass('active');
                $('#lock-button').addClass('deactivated');
            }});
        });

        //run device
        $(document).on("click", '#play-device-btn.active', function(){
            var link_value = $('input#link').val();
            if(link_value == 'ready'){
                var timer2 = "45:00";
                $('#play-device-btn').removeClass('active');
                $('#play-device-btn').removeClass('locked');
                $('#play-device-btn').addClass('deactivated');
                $('#stop-device-btn').removeClass('deactivated');
                $('#stop-device-btn').addClass('active');
                $('.time-status').html('45:00');
                $('.time-status').css('font-size','5em');
                $('#lock-button').removeClass('active');
                $('#lock-button').addClass('locked');
                var interval = setInterval(function() {
                var timer = timer2.split(':');
                //by parsing integer, I avoid all extra string processing
                var minutes = parseInt(timer[0], 10);
                var seconds = parseInt(timer[1], 10);
                --seconds;
                minutes = (seconds < 0) ? --minutes : minutes;
                if (minutes < 0) clearInterval(interval);
                seconds = (seconds < 0) ? 59 : seconds;
                seconds = (seconds < 10) ? '0' + seconds : seconds;
                minutes = (minutes < 10) ?  minutes : minutes;
                $('.time-status').html(minutes + ':' + seconds);
                $('.time-status').css('font-size','5em');
                timer2 = minutes + ':' + seconds;
                }, 1000);
            }else{           

                console.log('play button pressed');
                var program = "programA";
                if(device_status == 'Ready to run'){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "http://172.20.10.10/run"+program,
                        method:"get",
                        success: function(result){
                            console.log(result);
                            device_status = 'Running';
                            $('#play-device-btn').removeClass('active');
                            $('#play-device-btn').removeClass('locked');
                            $('#play-device-btn').addClass('deactivated');
                            $('#stop-device-btn').removeClass('deactivated');
                            $('#stop-device-btn').addClass('active');
                            $('#cancel-reservation-btn').removeClass('active');
                            $('#cancel-reservation-btn').addClass('locked');  
                        }
                    });
                }

                if(device_status == 'Ready to rerun'){
                    console.log('status is rerun');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({url: "http://172.20.10.10/re-run", method:"get",success: function(result){
                        console.log(result);
                        device_status = 'Running';
                        $('#play-device-btn').removeClass('active');
                        $('#play-device-btn').removeClass('locked');
                        $('#play-device-btn').addClass('deactivated');
                        $('#stop-device-btn').removeClass('deactivated');
                        $('#stop-device-btn').addClass('active');
                        $('#cancel-reservation-btn').removeClass('active');
                        $('#cancel-reservation-btn').addClass('locked');  
                    }
                    });
                }
            }
            
        });
        

        //stop device
        $(document).on("click", '#stop-device-btn.active', function(){
            console.log('stop button pressed');
            if(device_status == 'Running'){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({url: "http://172.20.10.10/stop", method:"get",success: function(result){
                    //var stopped_time = result.stopped_time;
                    console.log(result);
                    device_status = 'Ready to rerun'
                    $('#play-device-btn').removeClass('deactivated');
                    $('#play-device-btn').removeClass('locked');
                    $('#play-device-btn').addClass('active');
                    $('#stop-device-btn').removeClass('active');
                    $('#stop-device-btn').addClass('deactivated');
                    $('#cancel-reservation-btn').removeClass('active');
                    $('#cancel-reservation-btn').addClass('locked');   
                }});
            }
        });
    </script>
@endsection
