@extends('layouts.app')

@section('content')
    <div id="home-page">
        <div id="slide-page-1">
            <div id="top-page-section">
                <a id="back-btn" href="{{route('home')}}"><i class="fas fa-times fa-lg close-page-btn"></i></a>              
                <span id="title">Probleem melden</span>
            </div>
            <div id="page-content">
                <div id="problem-device-page-activator" class="row app-block app-block-4 light-blue-block page-slide-activator">
                    <span class="app-block-icon">
                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUyNS4xNTMgNTI1LjE1MyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTI1LjE1MyA1MjUuMTUzOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjEyOHB4IiBoZWlnaHQ9IjEyOHB4Ij4KPGc+Cgk8cGF0aCBkPSJNMTg4LjI3OCwzODkuMzc5YzQwLjk4NCw0MC45ODQsMTA3LjY1Niw0MC45ODQsMTQ4LjY0LDBzNDAuOTg0LTEwNy42NTYsMC0xNDguNTUzTDE4OC4yNzgsMzg5LjM3OXogTTQyMC4xMTEsMC4zMDYgICBMMTA1LjA2MywwQzc1Ljg5NSwwLDUyLjUyNiwyMy40MTMsNTIuNTI2LDUyLjQ3MXY0MjAuMTg4YzAsMjkuMDgsMjMuMzY5LDUyLjQ5Myw1Mi41MzcsNTIuNDkzaDMxNS4wNDggICBjMjkuMTQ2LDAsNTIuNTE1LTIzLjQxMyw1Mi41MTUtNTIuNDcxVjUyLjQ3MUM0NzIuNjQ4LDIzLjQxMyw0NDkuMjU3LDAuMzA2LDQyMC4xMTEsMC4zMDZ6IE0yMTAuMDcyLDUyLjQ3MSAgIGMxNC40NjQsMCwyNi4yOCwxMS44MTYsMjYuMjgsMjYuMzIzYzAsMTQuNDItMTEuODE2LDI2LjIzNi0yNi4yOCwyNi4yMzZjLTE0LjQ0MiwwLjAyMi0yNi4yNTgtMTEuNzk0LTI2LjI1OC0yNi4yMTQgICBDMTgzLjgxNCw2NC4yODcsMTk1LjYzLDUyLjQ3MSwyMTAuMDcyLDUyLjQ3MXogTTEzMS4yOTksNTIuNDcxYzE0LjQyLDAsMjYuMjM2LDExLjgxNiwyNi4yMzYsMjYuMzIzICAgYzAsMTQuNDItMTEuODE2LDI2LjIzNi0yNi4yMzYsMjYuMjM2cy0yNi4yMzYtMTEuODE2LTI2LjIzNi0yNi4yMzZDMTA1LjA2Myw2NC4yODcsMTE2Ljg3OSw1Mi40NzEsMTMxLjI5OSw1Mi40NzF6ICAgIE0yNjIuNTg3LDQ3Mi42ODFjLTg2LjkxMywwLTE1Ny41MjQtNzAuNjU1LTE1Ny41MjQtMTU3LjYxMWMwLTg2Ljg5MSw3MC42MTEtMTU3LjUyNCwxNTcuNTI0LTE1Ny41MjQgICBjODYuOTM1LDAsMTU3LjUyNCw3MC42NTUsMTU3LjUyNCwxNTcuNTI0QzQyMC4xMTEsNDAyLjAyNiwzNDkuNTIyLDQ3Mi42ODEsMjYyLjU4Nyw0NzIuNjgxeiIgZmlsbD0iI0ZGRkZGRiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />   
                    </span>
                    <span class="app-block-text">Toestel</span>
                    <span class="app-block-right"><i class="fas fa-angle-right"></i></span>
                </div>
                <div id="problem-laundry-room-page-activator" class="row app-block app-block-4 light-blue-block-2 block-margin page-slide-activator">
                    <span class="app-block-icon">
                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNjRweCIgaGVpZ2h0PSI2NHB4Ij4KPGc+Cgk8Zz4KCQk8Y2lyY2xlIGN4PSIxMjkuMjk2IiBjeT0iNDUuOTQiIHI9IjQxLjM5NSIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI1Ny4zNzYsMjczLjA2OGMtMC4zMjgtMC44OTYtMzIuOTM4LTkwLjExNS00Ny4zLTEzMS45MDZjLTkuMjY3LTI2Ljk2My0yNC44MDQtNDAuNjM1LTQ2LjE4LTQwLjYzNSAgICBjLTI5Ljk5LDAtMzkuMjM2LDAtNjkuMTk5LDBjLTIxLjM3NiwwLTM2LjkxMywxMy42NzEtNDYuMTc5LDQwLjYzNUMzNC4xNTksMTgyLjk1LDEuNTQ3LDI3Mi4xNzIsMS4yMiwyNzMuMDY4ICAgIGMtMy43ODcsMTAuMzU5LDEuNTM5LDIxLjgyOCwxMS44OTksMjUuNjE2YzEwLjM2MSwzLjc4OCwyMS44MjktMS41NDMsMjUuNjE2LTExLjljMC4yNzgtMC43NiwzOS42OTItMTEwLjExNCwzOS42OTItMTEwLjExNCAgICBTNjMuMjYxLDI1Ny4wNiw1MC4wNiwzMjUuMzk4Yy0xLjMzLDYuODcsMy45NjUsMTMuMjE3LDEwLjg5MiwxMy4yMTdjNC4zMDIsMCw5LjQ2MiwwLDE1LjI0LDB2MTQ0Ljg3MyAgICBjMCwxMy4yMzcsMTAuNzMsMjMuOTY3LDIzLjk2NiwyMy45NjdzMjMuOTY2LTEwLjczLDIzLjk2Ni0yMy45NjdWMzM4LjYxNWMzLjQ0NSwwLDYuOTAzLDAsMTAuMzQ4LDB2MTQ0Ljg3MyAgICBjMCwxMy4yMzcsMTAuNzMsMjMuOTY3LDIzLjk2NiwyMy45NjdzMjMuOTY2LTEwLjczLDIzLjk2Ni0yMy45NjdWMzM4LjYxNWM1Ljc3OSwwLDEwLjkzOSwwLDE1LjI0LDAgICAgYzYuOTY0LDAsMTIuMjIxLTYuMzU1LDEwLjg5Mi0xMy4yMTdjLTEyLjMzLTYzLjgxNS0yOC4zNjctMTQ4LjcyNy0yOC4zNjctMTQ4LjcyN3MzOS40MTMsMTA5LjM1NCwzOS42OTEsMTEwLjExNCAgICBjMy43ODksMTAuMzYxLDE1LjI1OCwxNS42ODcsMjUuNjE2LDExLjg5OUMyNTUuODM2LDI5NC44OTYsMjYxLjE2MywyODMuNDI4LDI1Ny4zNzYsMjczLjA2OHoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MDUuMjkzLDEwMi4xOTVWOTAuMjg2YzAtNi4zOTQtNS4xODMtMTEuNTc2LTExLjU3Ni0xMS41NzZoLTYwLjgzMmMtNi4zOTMsMC0xMS41NzYsNS4xODMtMTEuNTc2LDExLjU3NnYxMS44MTlIMzEwLjY5ICAgIGMtNi4zOTMsMC0xMS41NzYsNS4xODMtMTEuNTc2LDExLjU3NWMwLDcuMTg5LDAsMTEuNzI5LDAsMTguOTc1aDExNi4zNzljMC03LjI0NiwwLTExLjc4NiwwLTE4Ljk3NCAgICBDNDE1LjQ5MiwxMDcuNzU2LDQxMS4wMzYsMTAyLjg3Nyw0MDUuMjkzLDEwMi4xOTV6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzYxLjEwOSwzODcuMDI5Yy0xNC4wMDQsMTUuNDM5LTEzLjU1OCwzOS4zMTcsMS4zNDIsNTQuMjE2YzE0Ljg5OSwxNC45LDM4Ljc3NywxNS4zNDYsNTQuMjE2LDEuMzQyTDM2MS4xMDksMzg3LjAyOXoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00OTguNTU0LDI0Mi44NjNoLTgwLjQxYzEuNjc4LTAuOTgzLDIuOTQyLTIuNjI3LDMuMzgyLTQuNjMybDE3LjU0Ni03OS44NDdjMC45ODMtNC40NzItMi40MjctOC43MS03LjAxLTguNzEgICAgYy0yOC45OTQsMC0xMTguOTksMC0xNDguMDIsMGMtNC41OTMsMC03Ljk4Nyw0LjI2NC03LjAxLDguNzFsMTcuNTQ2LDc5Ljg0N2MwLjQ0MSwyLjAwNywxLjcwMSwzLjY0OSwzLjM3Nyw0LjYzMmgtMTUuOTgyICAgIGMtNy40MjYsMC0xMy40NDUsNi4wMi0xMy40NDUsMTMuNDQ1djQ2LjgyN0g1MTJ2LTQ2LjgyN0M1MTIsMjQ4Ljg4Miw1MDUuOTgsMjQyLjg2Myw0OTguNTU0LDI0Mi44NjN6IE0zNTkuNjUyLDI4Mi40MDEgICAgYzAsMS45MTEtMS41NDksMy40Ni0zLjQ2LDMuNDZoLTYwLjU1MWMtMS45MTEsMC0zLjQ2LTEuNTQ5LTMuNDYtMy40NnYtMTcuNTM2YzAtMS45MTEsMS41NDktMy40NiwzLjQ2LTMuNDZoNjAuNTUxICAgIGMxLjkxMSwwLDMuNDYsMS41NDksMy40NiwzLjQ2VjI4Mi40MDF6IE00NDIuODg3LDI4MC42NjFjLTUuNTI2LDAtMTAuMDA1LTQuNDgtMTAuMDA1LTEwLjAwNXM0LjQ4LTEwLjAwNSwxMC4wMDUtMTAuMDA1ICAgIHMxMC4wMDUsNC40OCwxMC4wMDUsMTAuMDA1UzQ0OC40MTMsMjgwLjY2MSw0NDIuODg3LDI4MC42NjF6IE00ODAuNjg2LDI4Mi44ODVjLTYuNzU0LDAtMTIuMjI5LTUuNDc2LTEyLjIyOS0xMi4yMyAgICBjMC02Ljc1NCw1LjQ3NS0xMi4yMjksMTIuMjI5LTEyLjIyOWM2Ljc1NCwwLDEyLjIyOSw1LjQ3NiwxMi4yMjksMTIuMjI5QzQ5Mi45MTQsMjc3LjQwOSw0ODcuNDQsMjgyLjg4NSw0ODAuNjg2LDI4Mi44ODV6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjY4LjUzLDMyMi45OHYxNzEuMDNjMCw3LjQyNSw2LjAyLDEzLjQ0NSwxMy40NDUsMTMuNDQ1aDIxNi41NzljNy40MjYsMCwxMy40NDUtNi4wMiwxMy40NDUtMTMuNDQ1VjMyMi45OEgyNjguNTN6ICAgICBNNDMxLjA2Nyw0NTQuMjMyYy0yMi41MzUsMjIuNTM0LTU5LjA3LDIyLjUzNC04MS42MDQsMHMtMjIuNTM0LTU5LjA2OSwwLTgxLjYwNHM1OS4wNjktMjIuNTM1LDgxLjYwNCwwICAgIEM0NTMuNiwzOTUuMTYzLDQ1My42LDQzMS42OTgsNDMxLjA2Nyw0NTQuMjMyeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                    </span>
                    <span class="app-block-text">Wasruimte</span>
                    <span class="app-block-right"><i class="fas fa-angle-right"></i></span>
                </div>
                <div id="problem-clothes-page-activator" class="row app-block app-block-4 light-blue-block block-margin page-slide-activator">
                    <span class="app-block-icon">
                        <i class="fas fa-tshirt"></i>
                    </span>           
                    <span class="app-block-text">Kledij</span>
                    <span class="app-block-right"><i class="fas fa-angle-right"></i></span>
                </div>
                <div id="problem-other-page-activator" class="row app-block app-block-4 light-blue-block-2 block-margin page-slide-activator"> 
                    <span class="app-block-icon">
                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjEyOHB4IiBoZWlnaHQ9IjEyOHB4IiB2aWV3Qm94PSIwIDAgNDA0Ljk0MyA0MDQuOTQzIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0MDQuOTQzIDQwNC45NDM7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNMzkxLjY5MSwxOC4yODRIMTMuMjUxQzUuOTMxLDE4LjI4NCwwLDI0LjIxOSwwLDMxLjUzNnYyNDIuNDhjMCw3LjMyLDUuOTMxLDEzLjI1MiwxMy4yNTEsMTMuMjUyaDIwMi42NzN2ODYuMTM3ICAgYzAsNS4zNTksMy4yMjksMTAuMTkzLDguMTgyLDEyLjI0NGMxLjYzOSwwLjY4LDMuMzU5LDEuMDEsNS4wNjYsMS4wMWMzLjQ0NiwwLDYuODM4LTEuMzQ4LDkuMzcyLTMuODgzbDk2LjE3My05NS41MDhoNTYuOTc1ICAgYzcuMzIsMCwxMy4yNTItNS45MzIsMTMuMjUyLTEzLjI1MlYzMS41MzVDNDA0Ljk0MywyNC4yMTgsMzk5LjAxMiwxOC4yODQsMzkxLjY5MSwxOC4yODR6IE0xODMuOTcyLDc3LjAzOSAgIGMwLTEwLjIwMSw4LjI5OS0xOC41LDE4LjUtMTguNWMxMC4yMDIsMCwxOC41LDguMjk5LDE4LjUsMTguNXYxMDFjMCwxMC4yMDEtOC4yOTksMTguNS0xOC41LDE4LjVjLTEwLjIwMSwwLTE4LjUtOC4yOTktMTguNS0xOC41ICAgVjc3LjAzOXogTTIwMi40NzIsMjQ3LjczOWMtMTEuMjI1LDAtMjAuMzU3LTkuMTMyLTIwLjM1Ny0yMC4zNTdzOS4xMzMtMjAuMzU3LDIwLjM1Ny0yMC4zNTdjMTEuMjI2LDAsMjAuMzU3LDkuMTMyLDIwLjM1NywyMC4zNTcgICBDMjIyLjgyOSwyMzguNjA2LDIxMy42OTgsMjQ3LjczOSwyMDIuNDcyLDI0Ny43Mzl6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                    </span>          
                    <span class="app-block-text">Andere</span>
                    <span class="app-block-right"><i class="fas fa-angle-right"></i></span>
                </div>
            </div>
        </div>

        <div id="problem-device-page" class="slide-page">
            <div id="top-page-section">
                <a id="back-btn" href="{{route('problem')}}"><i class="fas fa-angle-left"></i></a>
                <span id="title">Toestel probleem melden</span>
            </div>
            <div id="page-content">
                <div class="row app-block app-block-4 white-block">    
                    <span class="app-block-icon">
                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4MCA0ODAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ4MCA0ODA7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTI4cHgiIGhlaWdodD0iMTI4cHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik04MCw0OEgxNkM3LjE2OCw0OCwwLDU1LjE2OCwwLDY0djY0YzAsOC44MzIsNy4xNjgsMTYsMTYsMTZjOC44MzIsMCwxNi03LjE2OCwxNi0xNlY4MGg0OGM4LjgzMiwwLDE2LTcuMTY4LDE2LTE2ICAgIEM5Niw1NS4xNjgsODguODMyLDQ4LDgwLDQ4eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ2NCwzMzZjLTguODMyLDAtMTYsNy4xNjgtMTYsMTZ2NDhoLTQ4Yy04LjgzMiwwLTE2LDcuMTY4LTE2LDE2YzAsOC44MzIsNy4xNjgsMTYsMTYsMTZoNjRjOC44MzIsMCwxNi03LjE2OCwxNi0xNnYtNjQgICAgQzQ4MCwzNDMuMTY4LDQ3Mi44MzIsMzM2LDQ2NCwzMzZ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDY0LDQ4aC02NGMtOC44MzIsMC0xNiw3LjE2OC0xNiwxNmMwLDguODMyLDcuMTY4LDE2LDE2LDE2aDQ4djQ4YzAsOC44MzIsNy4xNjgsMTYsMTYsMTZjOC44MzIsMCwxNi03LjE2OCwxNi0xNlY2NCAgICBDNDgwLDU1LjE2OCw0NzIuODMyLDQ4LDQ2NCw0OHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik04MCw0MDBIMzJ2LTQ4YzAtOC44MzItNy4xNjgtMTYtMTYtMTZjLTguODMyLDAtMTYsNy4xNjgtMTYsMTZ2NjRjMCw4LjgzMiw3LjE2OCwxNiwxNiwxNmg2NGM4LjgzMiwwLDE2LTcuMTY4LDE2LTE2ICAgIEM5Niw0MDcuMTY4LDg4LjgzMiw0MDAsODAsNDAweiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHJlY3QgeD0iNjQiIHk9IjExMiIgd2lkdGg9IjMyIiBoZWlnaHQ9IjI1NiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHJlY3QgeD0iMTI4IiB5PSIxMTIiIHdpZHRoPSIzMiIgaGVpZ2h0PSIxOTIiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxyZWN0IHg9IjE5MiIgeT0iMTEyIiB3aWR0aD0iMzIiIGhlaWdodD0iMTkyIiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cmVjdCB4PSIyNTYiIHk9IjExMiIgd2lkdGg9IjMyIiBoZWlnaHQ9IjI1NiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHJlY3QgeD0iMzIwIiB5PSIxMTIiIHdpZHRoPSIzMiIgaGVpZ2h0PSIxOTIiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxyZWN0IHg9IjM4NCIgeT0iMTEyIiB3aWR0aD0iMzIiIGhlaWdodD0iMjU2IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cmVjdCB4PSIxMjgiIHk9IjMzNiIgd2lkdGg9IjMyIiBoZWlnaHQ9IjMyIiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cmVjdCB4PSIxOTIiIHk9IjMzNiIgd2lkdGg9IjMyIiBoZWlnaHQ9IjMyIiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cmVjdCB4PSIzMjAiIHk9IjMzNiIgd2lkdGg9IjMyIiBoZWlnaHQ9IjMyIiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                    </span>
                    <span class="app-block-text normal-text">Scan de QR code van het toestel</span>
                    <span class="app-block-right"><i class="fas fa-angle-right"></i></span>
                </div>
                <div class="choose-section">
                    Het toestel is ...
                    <div class="row choose-section-row">
                        <div>
                            <label for="defect-device-input">
                                Defect
                            </label>
                            <br><input id="defect-device-input" class="choose-problem-select" type="radio" name="problem-type">
                        </div>
                        <div>
                            <label for="damaged-device-input">
                                Beschadigd
                            </label>
                            <br><input id="damaged-device-input" class="choose-problem-select" type="radio" name="problem-type">
                        </div>
                        <div>
                            <label for="other-device-input">
                                Ander
                            </label>
                            <br><input id="other-device-input" class="choose-problem-select" type="radio" name="problem-type">
                        </div>
                    </div>
                </div>
                <div class="row app-block app-block-5 white-block block-margin add-image-block">    
                    <span class="app-block-icon">
                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MDQgNTA0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MDQgNTA0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI1NnB4IiBoZWlnaHQ9IjI1NnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzExLjMsMTA4Ljc0Yy0xNS4zMDQsMC0yNy43NTIsMTIuNDQ0LTI3Ljc1MiwyNy43NTJjMC4wMDQsMTUuMywxMi40NTIsMjcuNzQ0LDI3Ljc1MiwyNy43NDRzMjcuNzUyLTEyLjQ0LDI3Ljc1Mi0yNy43NDQgICAgQzMzOS4wNTIsMTIxLjE4OCwzMjYuNjA0LDEwOC43NCwzMTEuMywxMDguNzR6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjUyLjE2NCwyODYuMWMtNDkuOTkyLDAtOTAuNTA4LDQwLjUyLTkwLjUwOCw5MC41YzAsNDkuOTg0LDQwLjUxNiw5MC41MDgsOTAuNTA4LDkwLjUwOHM5MC41MTItNDAuNTI0LDkwLjUxMi05MC41MDggICAgQzM0Mi42NzYsMzI2LjYyLDMwMi4xNTYsMjg2LjEsMjUyLjE2NCwyODYuMXogTTMwMy4xNDgsMzg3LjMyOGgtMzkuMzM2djQwLjM0NGMwLDYuNDc2LTUuMzM2LDExLjc0NC0xMS44MTIsMTEuNzQ0ICAgIHMtMTEuODEyLTUuMjY0LTExLjgxMi0xMS43NDR2LTQwLjM0NGgtMzkuMTcyYy02LjQ3NiwwLTExLjc0OC01LjMzNi0xMS43NDgtMTEuODEyczUuMjY4LTExLjgxMiwxMS43NDgtMTEuODEyaDM5LjE3MnYtMzguMTY4ICAgIGMwLTYuNDcyLDUuMzM2LTExLjc0NCwxMS44MTItMTEuNzQ0czExLjgxMiw1LjI2OCwxMS44MTIsMTEuNzQ0djM4LjE2OGgzOS4zMzZjNi40NzYsMCwxMS43NDgsNS4zMzYsMTEuNzQ4LDExLjgxMiAgICBTMzA5LjYyNCwzODcuMzI4LDMwMy4xNDgsMzg3LjMyOHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00ODQuMzU2LDM2Ljg5MkgxOS45NzZDOS4xMiwzNi44OTIsMCw0Ni41NiwwLDU3LjQxNnYyOTkuNDk2YzAsMTAuODYsOS4xMiwxOC42LDE5Ljk3NiwxOC42aDExOC4wNTYgICAgYzAtNjMsNTEuMi0xMTQuMTI0LDExNC4xMzItMTE0LjEyNGM2Mi45MzYsMCwxMTQuMTM2LDUxLjEyNCwxMTQuMTM2LDExNC4xMjRoMTE4LjA1NmMxMC44NTYsMCwxOS42NDQtNy43NDQsMTkuNjQ0LTE4LjZWNTcuNDE2ICAgIEM1MDQsNDYuNTYsNDk1LjIxMiwzNi44OTIsNDg0LjM1NiwzNi44OTJ6IE0zOTEuNSwxNzIuNTUybC03NC40NTYsNzQuNDcyTDIwMy43MTIsMTMzLjcwOGMtMS41NC0xLjU0LTQuMDI0LTEuNTQtNS41NjQsMCAgICBsLTcxLjg4NCw3MS44OGwtMzIuODE2LTMyLjgxMmMtMS41MzYtMS41NC00LjE3Mi0xLjU0LTUuNzA4LDBsLTUyLjMwNCw1Mi4xNlY3Mi4zMjhINDY4LjU2djE3MS43NDhsLTcxLjUtNzEuNTI0ICAgIEMzOTUuNTIsMTcxLjAxMiwzOTMuMDQsMTcxLjAxMiwzOTEuNSwxNzIuNTUyeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                    </span>
                    <span class="app-block-text normal-text add-image-block-btn">Foto toevoegen (optioneel)</span>
                    <span class="app-block-right add-image-block-btn"><i class="fas fa-angle-right"></i></span>
                </div>
                <div class="app-text-row full">
                    <form id="device-problem-form" method="post" action="{{route('problem.report')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="problem-category" value="device">
                        <input id="device" type="hidden" name="device">
                        <input id="problem-type" type="hidden" name="problem-type">
                        <label for="extra-explanation-input">Extra uitleg (optioneel)</label><br>
                        <textarea id="extra-explanation-input" name="extra_explanation" rows="5"></textarea>
                        <input class="hidden-file-input problem-image" type="file" name="image" accept="image/*" capture> 
                    </form>
                </div>
                <div class="page-primary-button-section">
                    <input type="submit" form="device-problem-form" value="Probleem melden">
                </div>
                
            </div>
        </div>
        <div id="problem-laundry-room-page" class="slide-page">
            <div id="top-page-section">
            <a id="back-btn" href="{{route('problem')}}"><i class="fas fa-angle-left"></i></a>
                <span id="title">Probleem in de wasruimte melden</span>
            </div>
            <div id="page-content">
                <div class="row app-block app-block-4 white-block">    
                    <span class="app-block-icon">
                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4MCA0ODAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ4MCA0ODA7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTI4cHgiIGhlaWdodD0iMTI4cHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik04MCw0OEgxNkM3LjE2OCw0OCwwLDU1LjE2OCwwLDY0djY0YzAsOC44MzIsNy4xNjgsMTYsMTYsMTZjOC44MzIsMCwxNi03LjE2OCwxNi0xNlY4MGg0OGM4LjgzMiwwLDE2LTcuMTY4LDE2LTE2ICAgIEM5Niw1NS4xNjgsODguODMyLDQ4LDgwLDQ4eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ2NCwzMzZjLTguODMyLDAtMTYsNy4xNjgtMTYsMTZ2NDhoLTQ4Yy04LjgzMiwwLTE2LDcuMTY4LTE2LDE2YzAsOC44MzIsNy4xNjgsMTYsMTYsMTZoNjRjOC44MzIsMCwxNi03LjE2OCwxNi0xNnYtNjQgICAgQzQ4MCwzNDMuMTY4LDQ3Mi44MzIsMzM2LDQ2NCwzMzZ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDY0LDQ4aC02NGMtOC44MzIsMC0xNiw3LjE2OC0xNiwxNmMwLDguODMyLDcuMTY4LDE2LDE2LDE2aDQ4djQ4YzAsOC44MzIsNy4xNjgsMTYsMTYsMTZjOC44MzIsMCwxNi03LjE2OCwxNi0xNlY2NCAgICBDNDgwLDU1LjE2OCw0NzIuODMyLDQ4LDQ2NCw0OHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik04MCw0MDBIMzJ2LTQ4YzAtOC44MzItNy4xNjgtMTYtMTYtMTZjLTguODMyLDAtMTYsNy4xNjgtMTYsMTZ2NjRjMCw4LjgzMiw3LjE2OCwxNiwxNiwxNmg2NGM4LjgzMiwwLDE2LTcuMTY4LDE2LTE2ICAgIEM5Niw0MDcuMTY4LDg4LjgzMiw0MDAsODAsNDAweiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHJlY3QgeD0iNjQiIHk9IjExMiIgd2lkdGg9IjMyIiBoZWlnaHQ9IjI1NiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHJlY3QgeD0iMTI4IiB5PSIxMTIiIHdpZHRoPSIzMiIgaGVpZ2h0PSIxOTIiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxyZWN0IHg9IjE5MiIgeT0iMTEyIiB3aWR0aD0iMzIiIGhlaWdodD0iMTkyIiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cmVjdCB4PSIyNTYiIHk9IjExMiIgd2lkdGg9IjMyIiBoZWlnaHQ9IjI1NiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHJlY3QgeD0iMzIwIiB5PSIxMTIiIHdpZHRoPSIzMiIgaGVpZ2h0PSIxOTIiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxyZWN0IHg9IjM4NCIgeT0iMTEyIiB3aWR0aD0iMzIiIGhlaWdodD0iMjU2IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cmVjdCB4PSIxMjgiIHk9IjMzNiIgd2lkdGg9IjMyIiBoZWlnaHQ9IjMyIiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cmVjdCB4PSIxOTIiIHk9IjMzNiIgd2lkdGg9IjMyIiBoZWlnaHQ9IjMyIiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cmVjdCB4PSIzMjAiIHk9IjMzNiIgd2lkdGg9IjMyIiBoZWlnaHQ9IjMyIiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                    </span>
                    <span class="app-block-text normal-text">Scan de QR code van een toestel in de wasruimte</span>
                    <span class="app-block-right"><i class="fas fa-angle-right"></i></span>
                </div>
                <div class="choose-section">
                    Probleem in de wasruimte door:
                    <div class="row choose-section-row">
                        <div>
                            <label for="filthy-room-input">
                                Vuiligheid
                            </label>
                            <br><input id="filthy-room-input" class="choose-problem-select" type="radio" name="problem-type">
                        </div>
                        <div>
                            <label for="intruders-room-input">
                                Ongewensten
                            </label>
                            <br><input id="intruders-room-input" class="choose-problem-select" type="radio" name="problem-type">
                        </div>
                        <div>
                            <label for="other-room-input">
                                Ander
                            </label>
                            <br><input id="other-room-input" class="choose-problem-select" type="radio" name="problem-type">
                        </div>
                    </div>
                </div>
                <div class="row app-block app-block-5 white-block block-margin add-image-block">    
                    <span class="app-block-icon">
                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MDQgNTA0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MDQgNTA0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI1NnB4IiBoZWlnaHQ9IjI1NnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzExLjMsMTA4Ljc0Yy0xNS4zMDQsMC0yNy43NTIsMTIuNDQ0LTI3Ljc1MiwyNy43NTJjMC4wMDQsMTUuMywxMi40NTIsMjcuNzQ0LDI3Ljc1MiwyNy43NDRzMjcuNzUyLTEyLjQ0LDI3Ljc1Mi0yNy43NDQgICAgQzMzOS4wNTIsMTIxLjE4OCwzMjYuNjA0LDEwOC43NCwzMTEuMywxMDguNzR6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjUyLjE2NCwyODYuMWMtNDkuOTkyLDAtOTAuNTA4LDQwLjUyLTkwLjUwOCw5MC41YzAsNDkuOTg0LDQwLjUxNiw5MC41MDgsOTAuNTA4LDkwLjUwOHM5MC41MTItNDAuNTI0LDkwLjUxMi05MC41MDggICAgQzM0Mi42NzYsMzI2LjYyLDMwMi4xNTYsMjg2LjEsMjUyLjE2NCwyODYuMXogTTMwMy4xNDgsMzg3LjMyOGgtMzkuMzM2djQwLjM0NGMwLDYuNDc2LTUuMzM2LDExLjc0NC0xMS44MTIsMTEuNzQ0ICAgIHMtMTEuODEyLTUuMjY0LTExLjgxMi0xMS43NDR2LTQwLjM0NGgtMzkuMTcyYy02LjQ3NiwwLTExLjc0OC01LjMzNi0xMS43NDgtMTEuODEyczUuMjY4LTExLjgxMiwxMS43NDgtMTEuODEyaDM5LjE3MnYtMzguMTY4ICAgIGMwLTYuNDcyLDUuMzM2LTExLjc0NCwxMS44MTItMTEuNzQ0czExLjgxMiw1LjI2OCwxMS44MTIsMTEuNzQ0djM4LjE2OGgzOS4zMzZjNi40NzYsMCwxMS43NDgsNS4zMzYsMTEuNzQ4LDExLjgxMiAgICBTMzA5LjYyNCwzODcuMzI4LDMwMy4xNDgsMzg3LjMyOHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00ODQuMzU2LDM2Ljg5MkgxOS45NzZDOS4xMiwzNi44OTIsMCw0Ni41NiwwLDU3LjQxNnYyOTkuNDk2YzAsMTAuODYsOS4xMiwxOC42LDE5Ljk3NiwxOC42aDExOC4wNTYgICAgYzAtNjMsNTEuMi0xMTQuMTI0LDExNC4xMzItMTE0LjEyNGM2Mi45MzYsMCwxMTQuMTM2LDUxLjEyNCwxMTQuMTM2LDExNC4xMjRoMTE4LjA1NmMxMC44NTYsMCwxOS42NDQtNy43NDQsMTkuNjQ0LTE4LjZWNTcuNDE2ICAgIEM1MDQsNDYuNTYsNDk1LjIxMiwzNi44OTIsNDg0LjM1NiwzNi44OTJ6IE0zOTEuNSwxNzIuNTUybC03NC40NTYsNzQuNDcyTDIwMy43MTIsMTMzLjcwOGMtMS41NC0xLjU0LTQuMDI0LTEuNTQtNS41NjQsMCAgICBsLTcxLjg4NCw3MS44OGwtMzIuODE2LTMyLjgxMmMtMS41MzYtMS41NC00LjE3Mi0xLjU0LTUuNzA4LDBsLTUyLjMwNCw1Mi4xNlY3Mi4zMjhINDY4LjU2djE3MS43NDhsLTcxLjUtNzEuNTI0ICAgIEMzOTUuNTIsMTcxLjAxMiwzOTMuMDQsMTcxLjAxMiwzOTEuNSwxNzIuNTUyeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                    </span>
                    <span class="app-block-text normal-text add-image-block-btn">Foto toevoegen (optioneel)</span>
                    <span class="app-block-right add-image-block-btn"><i class="fas fa-angle-right"></i></span>
                </div>
                <div class="app-text-row full">
                    <form id="room-problem-form" method="post" action="{{route('problem.report')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="problem-category" value="location">
                        <input id="laundry-location" type="hidden" name="laundry-location">
                        <input id="problem-type" type="hidden" name="problem-type">
                        <label for="extra-explanation-input">Extra uitleg (optioneel)</label><br>
                        <textarea id="extra-explanation-input" name="extra_explanation" rows="5"></textarea>
                        <input class="hidden-file-input problem-image" type="file" name="image" accept="image/*" capture> 
                    </form>
                    
                </div>
                <div class="page-primary-button-section">
                    <input type="submit" form="credit-charge-form" value="Probleem melden">
                </div>
                
            </div>
        </div>
        <div id="problem-clothes-page" class="slide-page">
            <div id="top-page-section">
            <a id="back-btn" href="{{route('problem')}}"><i class="fas fa-angle-left"></i></a>
                <span id="title">Kledij probleem melden</span>
            </div>
            <div id="page-content">
                <div class="choose-section">
                    U heeft een kledingstuk...
                    <div class="row choose-section-row">
                        <div class="choose-option-4">
                            <label for="damaged-clothes-input">
                                Beschadigd
                            </label>
                            <br><input id="damaged-clothes-input" class="choose-problem-select" type="radio" name="problem-type">
                        </div>
                        <div class="choose-option-4">
                            <label for="lost-clothes-input">
                                Verloren
                            </label>
                            <br><input id="lost-clothes-input" class="choose-problem-select" type="radio" name="problem-type">
                        </div>
                    </div>
                    <div class="row choose-section-row">
                        <div class="choose-option-4">
                            <label for="found-clothes-input">
                                Gevonden
                            </label>
                            <br><input id="found-clothes-input" class="choose-problem-select" type="radio" name="problem-type">
                        </div>
                        <div class="choose-option-4">
                            <label for="other-clothes-input">
                                Andere
                            </label>
                            <br><input id="other-clothes-input" class="choose-problem-select" type="radio" name="problem-type">
                        </div>
                    </div>
                </div>
                <div class="row app-block app-block-5 white-block block-margin add-image-block">    
                    <span class="app-block-icon">
                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MDQgNTA0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MDQgNTA0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI1NnB4IiBoZWlnaHQ9IjI1NnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzExLjMsMTA4Ljc0Yy0xNS4zMDQsMC0yNy43NTIsMTIuNDQ0LTI3Ljc1MiwyNy43NTJjMC4wMDQsMTUuMywxMi40NTIsMjcuNzQ0LDI3Ljc1MiwyNy43NDRzMjcuNzUyLTEyLjQ0LDI3Ljc1Mi0yNy43NDQgICAgQzMzOS4wNTIsMTIxLjE4OCwzMjYuNjA0LDEwOC43NCwzMTEuMywxMDguNzR6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjUyLjE2NCwyODYuMWMtNDkuOTkyLDAtOTAuNTA4LDQwLjUyLTkwLjUwOCw5MC41YzAsNDkuOTg0LDQwLjUxNiw5MC41MDgsOTAuNTA4LDkwLjUwOHM5MC41MTItNDAuNTI0LDkwLjUxMi05MC41MDggICAgQzM0Mi42NzYsMzI2LjYyLDMwMi4xNTYsMjg2LjEsMjUyLjE2NCwyODYuMXogTTMwMy4xNDgsMzg3LjMyOGgtMzkuMzM2djQwLjM0NGMwLDYuNDc2LTUuMzM2LDExLjc0NC0xMS44MTIsMTEuNzQ0ICAgIHMtMTEuODEyLTUuMjY0LTExLjgxMi0xMS43NDR2LTQwLjM0NGgtMzkuMTcyYy02LjQ3NiwwLTExLjc0OC01LjMzNi0xMS43NDgtMTEuODEyczUuMjY4LTExLjgxMiwxMS43NDgtMTEuODEyaDM5LjE3MnYtMzguMTY4ICAgIGMwLTYuNDcyLDUuMzM2LTExLjc0NCwxMS44MTItMTEuNzQ0czExLjgxMiw1LjI2OCwxMS44MTIsMTEuNzQ0djM4LjE2OGgzOS4zMzZjNi40NzYsMCwxMS43NDgsNS4zMzYsMTEuNzQ4LDExLjgxMiAgICBTMzA5LjYyNCwzODcuMzI4LDMwMy4xNDgsMzg3LjMyOHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00ODQuMzU2LDM2Ljg5MkgxOS45NzZDOS4xMiwzNi44OTIsMCw0Ni41NiwwLDU3LjQxNnYyOTkuNDk2YzAsMTAuODYsOS4xMiwxOC42LDE5Ljk3NiwxOC42aDExOC4wNTYgICAgYzAtNjMsNTEuMi0xMTQuMTI0LDExNC4xMzItMTE0LjEyNGM2Mi45MzYsMCwxMTQuMTM2LDUxLjEyNCwxMTQuMTM2LDExNC4xMjRoMTE4LjA1NmMxMC44NTYsMCwxOS42NDQtNy43NDQsMTkuNjQ0LTE4LjZWNTcuNDE2ICAgIEM1MDQsNDYuNTYsNDk1LjIxMiwzNi44OTIsNDg0LjM1NiwzNi44OTJ6IE0zOTEuNSwxNzIuNTUybC03NC40NTYsNzQuNDcyTDIwMy43MTIsMTMzLjcwOGMtMS41NC0xLjU0LTQuMDI0LTEuNTQtNS41NjQsMCAgICBsLTcxLjg4NCw3MS44OGwtMzIuODE2LTMyLjgxMmMtMS41MzYtMS41NC00LjE3Mi0xLjU0LTUuNzA4LDBsLTUyLjMwNCw1Mi4xNlY3Mi4zMjhINDY4LjU2djE3MS43NDhsLTcxLjUtNzEuNTI0ICAgIEMzOTUuNTIsMTcxLjAxMiwzOTMuMDQsMTcxLjAxMiwzOTEuNSwxNzIuNTUyeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                    </span>
                    <span class="app-block-text normal-text add-image-block-btn">Foto toevoegen</span>
                    <span class="app-block-right add-image-block-btn"><i class="fas fa-angle-right"></i></span>
                </div>
                <div class="app-text-row full">
                    <form id="clothes-problem-form" method="post" action="{{route('problem.report')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="problem-category" value="clothes">
                        <input id="problem-type" type="hidden" name="problem-type">
                        <label for="extra-explanation-input">Extra uitleg (datum van de wasbeurt/locatie van het toestel/nummer van het toestel)</label><br>
                        <textarea id="extra-explanation-input" name="extra_explanation" rows="5"></textarea>
                        <input class="hidden-file-input problem-image" type="file" name="image" accept="image/*" capture> 
                    </form>
                    
                </div>
                <div class="page-primary-button-section">
                    <input type="submit" form="credit-charge-form" value="Probleem melden">
                </div>                
            </div>
        </div>
        <div id="problem-other-page" class="slide-page">
            <div id="top-page-section">
            <a id="back-btn" href="{{route('problem')}}"><i class="fas fa-angle-left"></i></a>
                <span id="title">Ander probleem melden</span>
            </div>
            <div id="page-content">
                <div class="app-text-row full">
                    <form id="other-problem-form" method="post" action="{{route('problem.report')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="problem-category" value="other">
                        <label for="extra-explanation-input">Leg het probleem uit en voeg desnoods een afbeelding toe.</label><br>
                        <textarea id="extra-explanation-input" name="extra_explanation" rows="5"></textarea>
                        <input class="hidden-file-input problem-image" type="file" name="image" accept="image/*" capture>
                    </form>                    
                </div>
                <div class="row app-block app-block-5 white-block block-margin add-image-block">    
                    <span class="app-block-icon">
                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MDQgNTA0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MDQgNTA0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI1NnB4IiBoZWlnaHQ9IjI1NnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzExLjMsMTA4Ljc0Yy0xNS4zMDQsMC0yNy43NTIsMTIuNDQ0LTI3Ljc1MiwyNy43NTJjMC4wMDQsMTUuMywxMi40NTIsMjcuNzQ0LDI3Ljc1MiwyNy43NDRzMjcuNzUyLTEyLjQ0LDI3Ljc1Mi0yNy43NDQgICAgQzMzOS4wNTIsMTIxLjE4OCwzMjYuNjA0LDEwOC43NCwzMTEuMywxMDguNzR6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjUyLjE2NCwyODYuMWMtNDkuOTkyLDAtOTAuNTA4LDQwLjUyLTkwLjUwOCw5MC41YzAsNDkuOTg0LDQwLjUxNiw5MC41MDgsOTAuNTA4LDkwLjUwOHM5MC41MTItNDAuNTI0LDkwLjUxMi05MC41MDggICAgQzM0Mi42NzYsMzI2LjYyLDMwMi4xNTYsMjg2LjEsMjUyLjE2NCwyODYuMXogTTMwMy4xNDgsMzg3LjMyOGgtMzkuMzM2djQwLjM0NGMwLDYuNDc2LTUuMzM2LDExLjc0NC0xMS44MTIsMTEuNzQ0ICAgIHMtMTEuODEyLTUuMjY0LTExLjgxMi0xMS43NDR2LTQwLjM0NGgtMzkuMTcyYy02LjQ3NiwwLTExLjc0OC01LjMzNi0xMS43NDgtMTEuODEyczUuMjY4LTExLjgxMiwxMS43NDgtMTEuODEyaDM5LjE3MnYtMzguMTY4ICAgIGMwLTYuNDcyLDUuMzM2LTExLjc0NCwxMS44MTItMTEuNzQ0czExLjgxMiw1LjI2OCwxMS44MTIsMTEuNzQ0djM4LjE2OGgzOS4zMzZjNi40NzYsMCwxMS43NDgsNS4zMzYsMTEuNzQ4LDExLjgxMiAgICBTMzA5LjYyNCwzODcuMzI4LDMwMy4xNDgsMzg3LjMyOHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00ODQuMzU2LDM2Ljg5MkgxOS45NzZDOS4xMiwzNi44OTIsMCw0Ni41NiwwLDU3LjQxNnYyOTkuNDk2YzAsMTAuODYsOS4xMiwxOC42LDE5Ljk3NiwxOC42aDExOC4wNTYgICAgYzAtNjMsNTEuMi0xMTQuMTI0LDExNC4xMzItMTE0LjEyNGM2Mi45MzYsMCwxMTQuMTM2LDUxLjEyNCwxMTQuMTM2LDExNC4xMjRoMTE4LjA1NmMxMC44NTYsMCwxOS42NDQtNy43NDQsMTkuNjQ0LTE4LjZWNTcuNDE2ICAgIEM1MDQsNDYuNTYsNDk1LjIxMiwzNi44OTIsNDg0LjM1NiwzNi44OTJ6IE0zOTEuNSwxNzIuNTUybC03NC40NTYsNzQuNDcyTDIwMy43MTIsMTMzLjcwOGMtMS41NC0xLjU0LTQuMDI0LTEuNTQtNS41NjQsMCAgICBsLTcxLjg4NCw3MS44OGwtMzIuODE2LTMyLjgxMmMtMS41MzYtMS41NC00LjE3Mi0xLjU0LTUuNzA4LDBsLTUyLjMwNCw1Mi4xNlY3Mi4zMjhINDY4LjU2djE3MS43NDhsLTcxLjUtNzEuNTI0ICAgIEMzOTUuNTIsMTcxLjAxMiwzOTMuMDQsMTcxLjAxMiwzOTEuNSwxNzIuNTUyeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                    </span>
                    <span class="app-block-text normal-text add-image-block-btn">Foto toevoegen (optioneel)</span>
                    <span class="app-block-right add-image-block-btn"><i class="fas fa-angle-right"></i></span>
                </div>
                <div class="page-primary-button-section">
                    <input type="submit" form="credit-charge-form" value="Probleem melden">
                </div>                
            </div>
        </div>
    </div>
@endsection
