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
                <div id="problem-laundry-room-page-activator" class="row app-block app-block-4 yellow-block page-slide-activator">
                    <span class="app-block-icon">
                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMS45OSA1MTEuOTkiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMS45OSA1MTEuOTk7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTI4cHgiIGhlaWdodD0iMTI4cHgiPgo8Zz4KCTxnPgoJCTxjaXJjbGUgY3g9Ijc2LjQ0OCIgY3k9IjQyLjExOSIgcj0iNDIuMTE5IiBmaWxsPSIjZmY2YjZiIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjIwLjg2NSwzOC4wNjVjLTAuMTktMC4xOTQtMC4zNjQtMC4zOTgtMC41NjMtMC41ODZjLTguMjM3LTcuNzQ1LTIxLjE5My03LjM0Ny0yOC45MzcsMC44ODlsLTQ4LjA1OSw1MS4xMDQgICAgTDc3LjE5NSw5OS41MWwtMzYuMDA0LDAuMDExYy0xNy4wMjYsMC4wMDUtMzAuODI0LDEzLjgxMi0zMC44MTgsMzAuODM3bDAuMDQ1LDE0NS43MzZjLTAuMDAyLDAuMTM3LTAuMDExLDAuMjc0LTAuMDExLDAuNDEyICAgIGwtMC4wOTksMjExLjQ1NmMtMC4wMDYsMTMuMjY0LDEwLjc0MSwyNC4wMjIsMjQuMDA2LDI0LjAyOGMwLjAwNCwwLDAuMDA3LDAsMC4wMTIsMGMxMy4yNTgsMCwyNC4wMS0xMC43NDUsMjQuMDE3LTI0LjAwNiAgICBsMC4wOTQtMTk5LjQ3MmwxNy40NTMtMC4wMDVsMjkuMTYsNzkuNTA0bC0xNy4wNTgsMTE2LjQ4Yy0xLjkyMSwxMy4xMjQsNy4xNTksMjUuMzIsMjAuMjg0LDI3LjI0MyAgICBjMTMuMTIzLDEuOTIxLDI1LjMyMS03LjE1OSwyNy4yNDMtMjAuMjg0bDE3LjkzOC0xMjIuNTA5YzAuNTc5LTMuOTU3LDAuMTYyLTcuOTk2LTEuMjE1LTExLjc0OWwtMjUuMTk5LTY4LjY5OWgwLjAxICAgIGwtMC4wMTQtNDUuMzc2Yy0xMC41MjYtMi4zOTEtMzYuODgzLTguMzc2LTQ3LjQwMS0xMC43NjRjLTYuMzc0LTEuNDQ4LTExLjM5OS01Ljg2MS0xMy45MzUtMTEuMzc0bC0yNy42NDYtNjEuMDk3bDQwLjg4NSw1MC4zNDcgICAgYzIuODg5LDMuNTU3LDYuODg5LDYuMDQzLDExLjM1OCw3LjA1OGw3NS4zMDksMTcuMTAzYzExLjAyMywyLjUwNCwyMS45OTItNC40MDMsMjQuNDk2LTE1LjQzICAgIGMyLjUwNC0xMS4wMjYtNC40MDQtMjEuOTkzLTE1LjQzLTI0LjQ5N2wtNjguNDEtMTUuNTM2bC0zNi40MjYtNDQuODU0bDMxLjM4MiwyMi45NTdjMzYuMDQ0LTMzLjgxNywyMC4zODUtMTkuMTI1LDQ2LjgwMi00My45MSAgICBjMi4zMzUtMi41NjksNS40NDMtNC40Miw4Ljk1OC01LjE4NmwzMy45MS05LjI5NmwxMC4yMjktMTAuODc5Yy00LjUzNy0zLjY2OS03LjQ0Ni05LjI3My03LjQ0Ni0xNS41NjMgICAgQzE5My42NzUsNTUuNTc2LDIwNS4zMTQsNDEuNjM0LDIyMC44NjUsMzguMDY1eiIgZmlsbD0iI2ZmNmI2YiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTM0MC41NTcsMTY1LjY5NmwtNDMuODQ1LTQxLjE0di0wLjAwMWgtMC4wMDFsLTM2LjU3Ni0xMC4wMDdjLTAuMDEzLDAuMTEzLTAuMDMzLDAuMjIzLTAuMDQ3LDAuMzM2ICAgIGMtMTMuMDM0LTguMjIyLTE3LjU3Mi0xMS4wODUtMjMuNDEtMTQuNzY2YzAuMDEzLTAuMTg5LDAuMDI5LTAuMzc3LDAuMDI5LTAuNTd2LTUuNzcyYzguNzU2LTMuMjU5LDE1LjAxLTExLjcwMywxNS4wMS0yMS41OCAgICBjMC0xMi42OTEtMTAuMzI1LTIzLjAxNi0yMy4wMTYtMjMuMDE2Yy0xMi42OTEsMC0yMy4wMTYsMTAuMzI1LTIzLjAxNiwyMy4wMTZjMCw0LjQyMSwzLjU4NCw4LjAwNSw4LjAwNSw4LjAwNSAgICBjNC40MjEsMCw4LjAwNi0zLjU4NCw4LjAwNi04LjAwNWMwLTMuODYyLDMuMTQyLTcuMDA1LDcuMDA1LTcuMDA1czcuMDA1LDMuMTQzLDcuMDA1LDcuMDA1YzAsMy44NjMtMy4xNDIsNy4wMDUtNy4wMDUsNy4wMDUgICAgYy00LjQyMSwwLTguMDA1LDMuNTg0LTguMDA1LDguMDA2djEyLjM0MWMwLDAuMTkyLDAuMDE1LDAuMzgsMC4wMjksMC41NjljLTExLjUxNCw3LjI2My01Ljc4NSwzLjY0OS0yMy40NzcsMTQuODA5ICAgIGMtMC4wMTYtMC4xMjctMC4wMzgtMC4yNTEtMC4wNTMtMC4zNzhsLTM2LjUwMiwxMC4wMDdoLTAuMDc0djAuMDc0TDExOC40NCwxNjQuMmw2MC4wMTUsMTMuNjI5ICAgIGMyMC4yMSw0LjU4OSwzMi44NzQsMjQuNjk0LDI4LjI4NCw0NC45MDVjLTQuMzA1LDE4Ljk1OC0yMy4wMTEsMzMuMjUzLTQ2LjEyLDI4LjAwOHY1NC45ODhjMCw0LjIwOSwzLjQxMiw3LjYyMSw3LjYyMSw3LjYyMSAgICBoMTIwLjg1MmM0LjIwOS0wLjAwMSw3LjYyMS0zLjQxMyw3LjYyMS03LjYyMlYxODkuMzY3bDE0LjMyOCwxNC4zMjhjMy4zNjMsMy4zNjMsOC45MjksMi44NDksMTEuNjM1LTEuMDIybDE4LjkxNC0yNy4wNTMgICAgQzM0My43NTksMTcyLjUxNSwzNDMuMzIsMTY4LjI4OCwzNDAuNTU3LDE2NS42OTZ6IE0yMjguNjY1LDE0Mi41NjdjLTEwLjMyNSwwLTE5LjQ4OC00Ljk0My0yNS4yNzEtMTIuNTg4ICAgIGMyMy41MzMtMTQuODQ1LDExLjQyOS03LjIwOSwyNS4zMDktMTUuOTY0YzguMzEyLDUuMjQzLDQuNDExLDIuNzgyLDI1LjI1OCwxNS45MzIgICAgQzI0OC4xNzgsMTM3LjYwOSwyMzkuMDA0LDE0Mi41NjcsMjI4LjY2NSwxNDIuNTY3eiIgZmlsbD0iI2ZmNmI2YiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ4OC4xMjMsMjQ1LjE0M2gtMTc0LjR2MTguNjk5aDMwLjgyMmMxLjkyNywwLDMuNDksMS41NjMsMy40OSwzLjQ5djE3LjY4NmMwLDEuOTI3LTEuNTYzLDMuNDktMy40OSwzLjQ5aC0zMC44MjJ2MTcuMjIxICAgIGMwLDAuMDY3LTAuMDA1LDAuMTMzLTAuMDA1LDAuMTk5aDE4Ny45NjR2LTQ3LjIyN0M1MDEuNjgzLDI1MS4yMTMsNDk1LjYxMiwyNDUuMTQzLDQ4OC4xMjMsMjQ1LjE0M3ogTTQzMS45ODEsMjgzLjI2MyAgICBjLTUuNTczLDAtMTAuMDkxLTQuNTE4LTEwLjA5MS0xMC4wOTFjMC01LjU3Myw0LjUxOC0xMC4wOTEsMTAuMDkxLTEwLjA5MWM1LjU3MywwLDEwLjA5MSw0LjUxOCwxMC4wOTEsMTAuMDkxICAgIEM0NDIuMDcyLDI3OC43NDYsNDM3LjU1NCwyODMuMjYzLDQzMS45ODEsMjgzLjI2M3ogTTQ3MC4xMDIsMjg1LjUwNWMtNi44MTIsMC0xMi4zMzQtNS41MjItMTIuMzM0LTEyLjMzMyAgICBjMC02LjgxMiw1LjUyMi0xMi4zMzQsMTIuMzM0LTEyLjMzNHMxMi4zMzQsNS41MjIsMTIuMzM0LDEyLjMzNEM0ODIuNDM1LDI3OS45ODQsNDc2LjkxMywyODUuNTA1LDQ3MC4xMDIsMjg1LjUwNXoiIGZpbGw9IiNmZjZiNmIiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0zMDMuMTQ1LDMyNS45NDJjLTMuOTksMi43ODItOC44MzMsNC40Mi0xNC4wNTUsNC40MmgtMzIuOTUzdjE2OC4wNjhjMCw3LjQ4OSw2LjA3MSwxMy41NTksMTMuNTU5LDEzLjU1OWgyMTguNDI1ICAgIGM3LjQ4OSwwLDEzLjU2LTYuMDcxLDEzLjU2LTEzLjU1OVYzMjUuOTQySDMwMy4xNDV6IE00MjAuMDYsNDU4LjMxNGMtMjIuNzI3LDIyLjcyNy01OS41NzMsMjIuNzI3LTgyLjMsMCAgICBjLTIyLjcyNy0yMi43MjctMjIuNzI3LTU5LjU3MywwLTgyLjNjMjIuNzI3LTIyLjcyNyw1OS41NzMtMjIuNzI3LDgyLjMsMEM0NDIuNzg3LDM5OC43NDEsNDQyLjc4Nyw0MzUuNTg3LDQyMC4wNiw0NTguMzE0eiIgZmlsbD0iI2ZmNmI2YiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTM0OS41MDYsMzkwLjUzN2MtMTQuMTIzLDE1LjU3MS0xMy42NzMsMzkuNjUyLDEuMzUzLDU0LjY3OWMxNS4wMjYsMTUuMDI2LDM5LjEwNywxNS40NzYsNTQuNjc5LDEuMzUzTDM0OS41MDYsMzkwLjUzN3oiIGZpbGw9IiNmZjZiNmIiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                    </span>
                    <span class="app-block-text">Wasruimte</span>
                    <span class="app-block-right"><i class="fas fa-angle-right"></i></span>
                </div>
                <div id="problem-clothes-page-activator" class="row app-block app-block-4 white-block page-slide-activator">
                    <span class="app-block-icon">
                        <i class="fas fa-tshirt"></i>
                    </span>           
                    <span class="app-block-text">kledij</span>
                    <span class="app-block-right"><i class="fas fa-angle-right"></i></span>
                </div>
                <div id="problem-other-page-activator" class="row app-block app-block-4 dark-blue-block page-slide-activator"> 
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
