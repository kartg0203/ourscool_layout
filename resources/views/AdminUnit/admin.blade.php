@extends('layouts.layout')

@section('style')
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            background-color: #FFFFFF;
            overflow: hidden;
            text-shadow: none;
        }

        .ui-icon-myicon {
            background-color: #0099CC;
            background: url({{ asset('images/menu_btnS-2.png') }}) no-repeat;
            width: 32px;
            height: 32px;
            border: none;
        }

        .ui-icon-mySetup {
            background-color: transparent;
            background: url({{ asset('images/setup_iconS.png') }}) no-repeat;
            width: 24px;
            height: 24px;
            border: none;
        }

        .ui-panel-inner {
            position: absolute;
            top: 0px;
            left: 0;
            right: 0;
            bottom: 0px;
            padding: 0px;
            margin: 0px;
            /*overflow-y: scroll;
                                                                                                                -webkit-overflow-scrolling: touch;*/
        }

        ::-webkit-scrollbar {
            width: 4px;
        }

        .Status_bar {
            display: inline-block;
            background-color: #0086B3;
            border: #66CCCC 1px solid;
            border-radius: 3px;
            line-height: 20px;
            text-shadow: none;
            color: #CCCCCC;
            padding-left: 5px;
            padding-right: 5px;

        }

        /*iframe 縮放內容大小，手機固定不可自行變動，不好用*/
        .viewPort {
            -webkit-transform: scale(1);
            -webkit-transform-origin: 0 0;
        }

        @media screen and (max-width: 399px) {
            .MQ_webTitle {
                font-size: 18px;
                font-weight: bold;
            }

            .MQ_sb {
                display: none;
            }
        }

        @media screen and (min-width: 400px) and (max-width: 700px) {
            .MQ_webTitle {
                font-size: 20px;
                font-weight: bold;
            }

            .MQ_sb {
                display: inline-block;
            }
        }

        @media screen and (min-width: 701px) and (max-width: 2000px) {
            .MQ_webTitle {
                font-size: 26px;
                font-weight: bold;
            }

            .MQ_sb {
                display: inline-block;
            }
        }

    </style>
    @yield('style2')
@endsection


@section('header')

    <div id="mhead" data-role="header" data-position="fixed"
        style="display:; background-color:#0099CC; text-align:center; background-image:url({{ asset('images/Head_bg-01.jpg') }}); background-repeat:no-repeat; background-position:right; box-shadow: 0px 3px 5px #888888;">
        <div
            style="color:#FFFFFF;line-height:45px; font-weight:300; height:45px; display:inline-block; text-align:center; margin:0px auto;">
            <a href='javascript:void(0);' target="FUNMAIN" onClick="goIndex();"
                style="text-decoration:none; color:#FFFFFF;text-shadow:none;" class="MQ_webTitle">OurScool<img
                    src="images/home01.png" width="24" border="0" /></a>
        </div>
        <a href="#nav-panel" class="ui-icon-myicon ui-btn ui-nodisc-icon ui-btn-icon-notext"></a>
        <a href="SlogoutX.php" class=" ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-action  ui-btn-icon-notext"
            style="background-color:#FF6633; color:#FFFFFF; font-weight:300; cursor:pointer;" target="_self" title="登出系統"
            id="logoutBtn"></a>
    </div>
@endsection

@section('content')
    <div id="mContent" data-role="content"
        style="width: 100%; height:100%;margin:0px; padding:0px; background-color:#FFFFFF; overflow:auto;-webkit-overflow-scrolling:touch;">
        @yield('main')
        {{-- <iframe id="FUNMAIN" name="FUNMAIN" width="100%" height="100%" marginwidth="0" marginheight="0" border=""
                frameborder="0" scrolling="yes" src="<?= $indexPage ?>" style="height:100%;"></iframe> --}}
    </div>
@endsection

@section('footer')
    <div id="mfoot" data-role="footer" data-position="fixed" data-theme="c"
        style="display:; background-color:#0099CC; height:30px; line-height:30px; white-space: nowrap; vertical-align:middle;">
        <div class="Status_bar MQ_sb">目前位置：<span id="sysPos"></span></div>
        <div class="Status_bar MQ_sb">
            登入時間：
        </div>
        <div class="Status_bar MQ_sb">登入IP：
        </div>
        <div style="float:right; color:#FFFFFF; font-size:13px; margin-right:20px;">Copyright &copy; 2018 ourscool.com
            All Rights Reserved</div>
    </div>
@endsection
