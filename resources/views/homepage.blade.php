@extends('AdminUnit.admin')


@section('style2')
    <style>
        @media screen and (max-width: 699px) {
            .main {
                width: 100%;
                margin-right: auto;
                margin-left: auto;
                height: 100%;
                background-color: #ECEEF4;
            }

            .MQ_list_pc {
                display: none;
            }

            table[class*="mTable"] tr {
                line-height: 20px;
                margin: 0px;
            }

            #show_data {
                border: 0px;
            }

            .sBlock {
                display: inline-block;
                position: relative;
                width: 23%;
                max-width: 120px;
            }
        }

        @media screen and (min-width: 700px) {
            .main {
                width: 700px;
                margin-right: auto;
                margin-left: auto;
                height: 100%;
            }

            .MQ_list_pc {
                display: none;
            }

            .sBlock {
                display: inline-block;
                position: relative;
                width: 110px;
                cursor: pointer;
            }
        }

        .sReadTag {
            display: inline-block;
            position: absolute;
            top: -5px;
            right: -2px;
            min-width: 20px;
            min-height: 22px;
            background-color: #FF6633;
            color: #FFFFFF;
            border: 1px solid #FFFFFF;
            text-align: center;
            line-height: 22px;
            vertical-align: middle;
            padding-left: 1px;
            padding-right: 1px;
        }

        .pB {
            display: block;
        }

        .initCss {
            display: block;
            overflow: hidden;
            position: relative;

        }

        .sBar {
            background-color: #62afc2;
            text-align: center;
            border-radius: 5px 5px 0px 0px;
        }

    </style>
@endsection

@section('main')
    <div class="main">
        <div id="panelBlock" style="text-align:center; padding-top:15px;">
            <div class="sBlock" id="block_cs_ann">
                <a href="javascript:void(0);" onClick="parent.set_SubMenu_status('F29','./AdminUnit/M_ann/ann_admin.php');">
                    <div class="sReadTag BDRD15 W18 WD BXSD1">
                        <img src="{{ asset('images/msg03.png') }}" style="width:80%;" class="BDRD5 BXSD2">
                    </div>
                </a>
            </div>
            <div class="sBlock">
                <a href="javascript:void(0);"
                    onClick="parent.set_SubMenu_status('F210','./AdminUnit/M_service/service_admin.php');" title="">
                    <div class="sReadTag BDRD15 W18 WD BXSD1">
                        <img src="{{ asset('images/service01.png') }}" style="width:80%;" class="BDRD5 BXSD2">
                    </div>
                </a>
            </div>
            <div class="sBlock">
                <a href="javascript:void(0);"
                    onClick="parent.set_SubMenu_status('F211','./AdminUnit/M_classhelp/classhelp_admin.php');" title="">
                    <div class="sReadTag BDRD15 W18 WD BXSD1">
                        <img src="{{ asset('images/help02.png') }}" style="width:80%;" class="BDRD5 BXSD2">
                    </div>
                </a>
            </div>
            <div class="sBlock">
                <a href="javascript:void(0);"
                    onClick="parent.set_SubMenu_status('F216','./AdminUnit/M_ailearn/ailearn_admin.php');" title="">
                    <div class="sReadTag BDRD15 W18 WD BXSD1">
                        <img src="{{ asset('images/ailearn01.png') }}" style="width:80%;" class="BDRD5 BXSD2">
                    </div>
                </a>
            </div>
        </div>

        <div id="panelBox_00" class="PD3 pB">
            <div class="BDRD5">
                <div id="show_panel_00_Title" class="whiteWord1 WB sBar">系統公告</div>
                <div id="show_panel_00" class="initCss loadMore PD5"
                    style="border:#CCCCCC solid 1px; border-radius:0px 0px 5px 5px;display:block; background-color:#FFFFFF;">
                    <div class="GrayWord1 sUS WB W16" style="line-height:28px;">fdsdf</div>
                    <div class="blueWord1 sUC noselect W14">
                        {{-- <?= nl2br($sD['uContent']) ?>
                        <? if($sD["uLink"]!=""){ ?>
                        <hr>
                        <div><span class="GrayWord1 WB">連結 : </span><a href="<?= $sD['uLink'] ?>"
                                target="viewLink"><?= $sD['uLink'] ?></a></div>
                        <? } ?> --}}
                        {{-- <? if($show_uFile!=""){ ?>
                        <? if($fileInfo!==false){ ?>
                        <? if($show_uContent!=""){?>
                        <hr><? } ?><div style="text-align:center;"><a href="<?= $show_uFile ?>" target="viewPic"><img
                                    src="<?= $show_uFile ?>" style="width:98%; max-width:400px;" class="BDRD5"></a></div>
                        <? }else{ ?>
                        <hr>
                        <div><span class="GrayWord1 WB">附件 : </span><a href="<?= $show_uFile ?>"
                                target="viewFile"><?= $sD['uFile'] ?></a></div>
                        <? } ?>
                        <? } ?> --}}
                    </div>
                    <div class="GrayWord1 W13 TAR RPD5 bottom_dotted" style="margin-bottom:5px;">dddd</div>
                </div>
            </div>
        </div>
        {{-- <? include_once("./AdminUnit/M_stdselct/stdselctFS_msg.php"); ?> --}}
        <div id="panelBox_01" class="PD3 pB">
            <div class="BDRD5">
                <div id="show_panel_01_Title" class="whiteWord1 WB sBar">今日排定課程清單</div>
                <div id="show_panel_01" class="initCss loadMore"
                    style="border:#CCCCCC solid 1px; border-radius:0px 0px 5px 5px;display:block; background-color:#FFFFFF;">
                    課表無任何上課資訊!!!
                </div>
            </div>
        </div>
        <div id="panelBox_03" class="PD3 pB">
            <div class="BDRD5">
                <div id="show_panel_03_Title" class="whiteWord1 WB sBar">日程表</div>
                <div id="show_panel_03"
                    style="border:#CCCCCC solid 1px; border-radius:0px 0px 5px 5px;display:block; padding:1px; background-color:#FFFFFF;">
                </div>
            </div>
        </div>
        <div id="panelBox_04" class="PD3 pB">
            <div class="BDRD5">
                <div id="show_panel_04_Title" class="whiteWord1 WB sBar">日程表</div>
                <div id="show_panel_04"
                    style="border:#CCCCCC solid 1px; border-radius:0px 0px 5px 5px;display:block; padding:1px; background-color:#FFFFFF;">
                </div>
            </div>
        </div>
        <div id="panelBox_02" class="PD3 pB">
            <div id="show_panel_02"></div>
        </div>
        {{-- <? if($_SESSION["Login_Info"]["zoomAccount"]!="" && $_SESSION["Login_Info"]["zoomPWD"]!="" && $_SESSION["zoomLogin"]!="Y" && $X=="1"){ ?>
        <div style="position:absolute; left:0px; bottom:5px; height:30px; width:100%;"><iframe id="ZOOMLOGIN"
                name="ZOOMLOGIN" width="100%" height="100%" marginwidth="0" marginheight="0" border="1" frameborder="0"
                scrolling="yes" src="autologin.php" style="height:100%;"></iframe></div>
        <? }
                        $_SESSION["zoomLogin"]="Y"; //僅執行一次
                        ?> --}}

    </div>
@endsection
