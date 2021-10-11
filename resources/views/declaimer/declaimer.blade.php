@extends('layouts.mainLayout')
@section('content')
    @include('components.header.client-header')
    {{-- All class names for cdivent profile begins with "cp" meaning 'cdivent-profile' --}}
    <div class="declaimer-wrapper">
       <div class="declaimer-container">
           <h2 class="declaimer-title">DECLAIMER</h2>
           {{-- <iframe width="890" height="500" src="https://www.youtube-nocookie.com/embed/b2xmKQTLL9E?rel=0&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}

           <style>
            .hytPlayerWrap {
                display: inline-block;
                position: relative;
            }
        
            .hytPlayerWrap.ended::after {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                cursor: pointer;
                background-color: black;
                background-repeat: no-repeat;
                background-position: center;
                background-size: 64px 64px;
                background-image: url(data:image/svg+xml;utf8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjgiIGhlaWdodD0iMTI4IiB2aWV3Qm94PSIwIDAgNTEwIDUxMCI+PHBhdGggZD0iTTI1NSAxMDJWMEwxMjcuNSAxMjcuNSAyNTUgMjU1VjE1M2M4NC4xNSAwIDE1MyA2OC44NSAxNTMgMTUzcy02OC44NSAxNTMtMTUzIDE1My0xNTMtNjguODUtMTUzLTE1M0g1MWMwIDExMi4yIDkxLjggMjA0IDIwNCAyMDRzMjA0LTkxLjggMjA0LTIwNC05MS44LTIwNC0yMDQtMjA0eiIgZmlsbD0iI0ZGRiIvPjwvc3ZnPg==);
            }
        
            .hytPlayerWrap.paused::after {
                content: "";
                position: absolute;
                top: 70px;
                left: 0;
                bottom: 50px;
                right: 0;
                cursor: pointer;
                background-color: black;
                background-repeat: no-repeat;
                background-position: center;
                background-size: 40px 40px;
                background-image: url(data:image/svg+xml;utf8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEiIHdpZHRoPSIxNzA2LjY2NyIgaGVpZ2h0PSIxNzA2LjY2NyIgdmlld0JveD0iMCAwIDEyODAgMTI4MCI+PHBhdGggZD0iTTE1Ny42MzUgMi45ODRMMTI2MC45NzkgNjQwIDE1Ny42MzUgMTI3Ny4wMTZ6IiBmaWxsPSIjZmZmIi8+PC9zdmc+);
            }
        </style>
        <div class="hytPlayerWrapOuter">
            <div class="hytPlayerWrap">
                <iframe width="740" height="415" src="https://www.youtube.com/embed/b2xmKQTLL9E?rel=0&enablejsapi=1" frameborder="0"></iframe>
            </div>
        </div>
        <script>
            "use strict";
            document.addEventListener('DOMContentLoaded', function () {
                if (window.hideYTActivated) return;
                let onYouTubeIframeAPIReadyCallbacks = [];
                for (let playerWrap of document.querySelectorAll(".hytPlayerWrap")) {
                    let playerFrame = playerWrap.querySelector("iframe");
                    let tag = document.createElement('script');
                    tag.src = "https://www.youtube.com/iframe_api";
                    let firstScriptTag = document.getElementsByTagName('script')[0];
                    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                    let onPlayerStateChange = function (event) {
                        if (event.data == YT.PlayerState.ENDED) {
                            playerWrap.classList.add("ended");
                        } else if (event.data == YT.PlayerState.PAUSED) {
                            playerWrap.classList.add("paused");
                        } else if (event.data == YT.PlayerState.PLAYING) {
                            playerWrap.classList.remove("ended");
                            playerWrap.classList.remove("paused");
                        }
                    };
                    let player;
                    onYouTubeIframeAPIReadyCallbacks.push(function () {
                        player = new YT.Player(playerFrame, {events: {'onStateChange': onPlayerStateChange}});
                    });
                    playerWrap.addEventListener("click", function () {
                        let playerState = player.getPlayerState();
                        if (playerState == YT.PlayerState.ENDED) {
                            player.seekTo(0);
                        } else if (playerState == YT.PlayerState.PAUSED) {
                            player.playVideo();
                        }
                    });
                }
                window.onYouTubeIframeAPIReady = function () {
                    for (let callback of onYouTubeIframeAPIReadyCallbacks) {
                        callback();
                    }
                };
                window.hideYTActivated = true;
            });
        </script>
           <a href="/client">skip</a>
       </div>
    </div>
@endsection
