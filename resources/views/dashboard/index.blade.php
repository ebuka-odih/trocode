@extends('dashboard.layout.app')
@section('content')

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">

                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h5 class="">Revenue</h5>
                            <div class="task-action">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                        <a class="dropdown-item" href="javascript:void(0);">Weekly</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Yearly</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content" style="position: relative;">
                            <div id="revenueMonthly" style="min-height: 380px;"><div id="apexchartssnav8apd" class="apexcharts-canvas apexchartssnav8apd light" style="width: 711px; height: 365px;"><svg id="SvgjsSvg1370" width="711" height="365" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="711" height="365"><div class="apexcharts-legend right position-top" xmlns="http://www.w3.org/1999/xhtml" style="right: 0px; position: absolute; left: 0px; top: 17px;"><div class="apexcharts-legend-series" rel="1" data:collapsed="false" style="margin: 0px 20px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(27, 85, 226); color: rgb(27, 85, 226); height: 10px; width: 10px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 16px; font-family: Nunito, sans-serif;">Income</span></div><div class="apexcharts-legend-series" rel="2" data:collapsed="false" style="margin: 0px 20px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(231, 81, 90); color: rgb(231, 81, 90); height: 10px; width: 10px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 16px; font-family: Nunito, sans-serif;">Expenses</span></div></div><style type="text/css">

                                                .apexcharts-legend {
                                                    display: flex;
                                                    overflow: auto;
                                                    padding: 0 10px;
                                                }

                                                .apexcharts-legend.position-bottom, .apexcharts-legend.position-top {
                                                    flex-wrap: wrap
                                                }
                                                .apexcharts-legend.position-right, .apexcharts-legend.position-left {
                                                    flex-direction: column;
                                                    bottom: 0;
                                                }

                                                .apexcharts-legend.position-bottom.left, .apexcharts-legend.position-top.left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {
                                                    justify-content: flex-start;
                                                }

                                                .apexcharts-legend.position-bottom.center, .apexcharts-legend.position-top.center {
                                                    justify-content: center;
                                                }

                                                .apexcharts-legend.position-bottom.right, .apexcharts-legend.position-top.right {
                                                    justify-content: flex-end;
                                                }

                                                .apexcharts-legend-series {
                                                    cursor: pointer;
                                                    line-height: normal;
                                                }

                                                .apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series{
                                                    display: flex;
                                                    align-items: center;
                                                }

                                                .apexcharts-legend-text {
                                                    position: relative;
                                                    font-size: 14px;
                                                }

                                                .apexcharts-legend-text *, .apexcharts-legend-marker * {
                                                    pointer-events: none;
                                                }

                                                .apexcharts-legend-marker {
                                                    position: relative;
                                                    display: inline-block;
                                                    cursor: pointer;
                                                    margin-right: 3px;
                                                }

                                                .apexcharts-legend.right .apexcharts-legend-series, .apexcharts-legend.left .apexcharts-legend-series{
                                                    display: inline-block;
                                                }

                                                .apexcharts-legend-series.no-click {
                                                    cursor: auto;
                                                }

                                                .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
                                                    display: none !important;
                                                }

                                                .inactive-legend {
                                                    opacity: 0.45;
                                                }</style></foreignObject><g id="SvgjsG1372" class="apexcharts-inner apexcharts-graphical" transform="translate(37.8515625, 89.5)"><defs id="SvgjsDefs1371"><clipPath id="gridRectMasksnav8apd"><rect id="SvgjsRect1379" width="662.7265625" height="234.848" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMasksnav8apd"><rect id="SvgjsRect1380" width="662.7265625" height="234.848" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1386" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1387" stop-opacity="0.28" stop-color="rgba(27,85,226,0.28)" offset="0.45"></stop><stop id="SvgjsStop1388" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop><stop id="SvgjsStop1389" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop></linearGradient><filter id="SvgjsFilter1392" filterUnits="userSpaceOnUse"><feFlood id="SvgjsFeFlood1393" flood-color="#000000" flood-opacity="0.2" result="SvgjsFeFlood1393Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1394" in="SvgjsFeFlood1393Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1394Out"></feComposite><feOffset id="SvgjsFeOffset1395" dx="-7" dy="22" result="SvgjsFeOffset1395Out" in="SvgjsFeComposite1394Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1396" stdDeviation="10 " result="SvgjsFeGaussianBlur1396Out" in="SvgjsFeOffset1395Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1397" result="SvgjsFeMerge1397Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1398" in="SvgjsFeGaussianBlur1396Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1399" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1400" in="SourceGraphic" in2="SvgjsFeMerge1397Out" mode="normal" result="SvgjsFeBlend1400Out"></feBlend></filter><filter id="SvgjsFilter1403" filterUnits="userSpaceOnUse"><feFlood id="SvgjsFeFlood1404" flood-color="#000000" flood-opacity="0.2" result="SvgjsFeFlood1404Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1405" in="SvgjsFeFlood1404Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1405Out"></feComposite><feOffset id="SvgjsFeOffset1406" dx="-7" dy="22" result="SvgjsFeOffset1406Out" in="SvgjsFeComposite1405Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1407" stdDeviation="10 " result="SvgjsFeGaussianBlur1407Out" in="SvgjsFeOffset1406Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1408" result="SvgjsFeMerge1408Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1409" in="SvgjsFeGaussianBlur1407Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1410" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1411" in="SourceGraphic" in2="SvgjsFeMerge1408Out" mode="normal" result="SvgjsFeBlend1411Out"></feBlend></filter><linearGradient id="SvgjsLinearGradient1415" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1416" stop-opacity="0.28" stop-color="rgba(231,81,90,0.28)" offset="0.45"></stop><stop id="SvgjsStop1417" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop><stop id="SvgjsStop1418" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop></linearGradient><filter id="SvgjsFilter1421" filterUnits="userSpaceOnUse"><feFlood id="SvgjsFeFlood1422" flood-color="#000000" flood-opacity="0.2" result="SvgjsFeFlood1422Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1423" in="SvgjsFeFlood1422Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1423Out"></feComposite><feOffset id="SvgjsFeOffset1424" dx="-7" dy="22" result="SvgjsFeOffset1424Out" in="SvgjsFeComposite1423Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1425" stdDeviation="10 " result="SvgjsFeGaussianBlur1425Out" in="SvgjsFeOffset1424Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1426" result="SvgjsFeMerge1426Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1427" in="SvgjsFeGaussianBlur1425Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1428" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1429" in="SourceGraphic" in2="SvgjsFeMerge1426Out" mode="normal" result="SvgjsFeBlend1429Out"></feBlend></filter><filter id="SvgjsFilter1432" filterUnits="userSpaceOnUse"><feFlood id="SvgjsFeFlood1433" flood-color="#000000" flood-opacity="0.2" result="SvgjsFeFlood1433Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1434" in="SvgjsFeFlood1433Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1434Out"></feComposite><feOffset id="SvgjsFeOffset1435" dx="-7" dy="22" result="SvgjsFeOffset1435Out" in="SvgjsFeComposite1434Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1436" stdDeviation="10 " result="SvgjsFeGaussianBlur1436Out" in="SvgjsFeOffset1435Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1437" result="SvgjsFeMerge1437Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1438" in="SvgjsFeGaussianBlur1436Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1439" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1440" in="SourceGraphic" in2="SvgjsFeMerge1437Out" mode="normal" result="SvgjsFeBlend1440Out"></feBlend></filter></defs><line id="SvgjsLine1378" x1="0" y1="0" x2="0" y2="232.848" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="232.848" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1441" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1442" class="apexcharts-xaxis-texts-g" transform="translate(0, 1)"><text id="SvgjsText1443" font-family="Nunito, sans-serif" x="0" y="266.848" text-anchor="middle" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-xaxis-label apexcharts-xaxis-title" style="font-family: Nunito, sans-serif;"><tspan id="SvgjsTspan1444" style="font-family: Nunito, sans-serif;">Jan</tspan><title>Jan</title></text><text id="SvgjsText1445" font-family="Nunito, sans-serif" x="60.06605113636364" y="266.848" text-anchor="middle" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-xaxis-label apexcharts-xaxis-title" style="font-family: Nunito, sans-serif;"><tspan id="SvgjsTspan1446" style="font-family: Nunito, sans-serif;">Feb</tspan><title>Feb</title></text><text id="SvgjsText1447" font-family="Nunito, sans-serif" x="120.13210227272728" y="266.848" text-anchor="middle" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-xaxis-label apexcharts-xaxis-title" style="font-family: Nunito, sans-serif;"><tspan id="SvgjsTspan1448" style="font-family: Nunito, sans-serif;">Mar</tspan><title>Mar</title></text><text id="SvgjsText1449" font-family="Nunito, sans-serif" x="180.1981534090909" y="266.848" text-anchor="middle" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-xaxis-label apexcharts-xaxis-title" style="font-family: Nunito, sans-serif;"><tspan id="SvgjsTspan1450" style="font-family: Nunito, sans-serif;">Apr</tspan><title>Apr</title></text><text id="SvgjsText1451" font-family="Nunito, sans-serif" x="240.26420454545456" y="266.848" text-anchor="middle" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-xaxis-label apexcharts-xaxis-title" style="font-family: Nunito, sans-serif;"><tspan id="SvgjsTspan1452" style="font-family: Nunito, sans-serif;">May</tspan><title>May</title></text><text id="SvgjsText1453" font-family="Nunito, sans-serif" x="300.3302556818182" y="266.848" text-anchor="middle" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-xaxis-label apexcharts-xaxis-title" style="font-family: Nunito, sans-serif;"><tspan id="SvgjsTspan1454" style="font-family: Nunito, sans-serif;">Jun</tspan><title>Jun</title></text><text id="SvgjsText1455" font-family="Nunito, sans-serif" x="360.3963068181818" y="266.848" text-anchor="middle" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-xaxis-label apexcharts-xaxis-title" style="font-family: Nunito, sans-serif;"><tspan id="SvgjsTspan1456" style="font-family: Nunito, sans-serif;">Jul</tspan><title>Jul</title></text><text id="SvgjsText1457" font-family="Nunito, sans-serif" x="420.46235795454544" y="266.848" text-anchor="middle" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-xaxis-label apexcharts-xaxis-title" style="font-family: Nunito, sans-serif;"><tspan id="SvgjsTspan1458" style="font-family: Nunito, sans-serif;">Aug</tspan><title>Aug</title></text><text id="SvgjsText1459" font-family="Nunito, sans-serif" x="480.52840909090907" y="266.848" text-anchor="middle" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-xaxis-label apexcharts-xaxis-title" style="font-family: Nunito, sans-serif;"><tspan id="SvgjsTspan1460" style="font-family: Nunito, sans-serif;">Sep</tspan><title>Sep</title></text><text id="SvgjsText1461" font-family="Nunito, sans-serif" x="540.5944602272726" y="266.848" text-anchor="middle" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-xaxis-label apexcharts-xaxis-title" style="font-family: Nunito, sans-serif;"><tspan id="SvgjsTspan1462" style="font-family: Nunito, sans-serif;">Oct</tspan><title>Oct</title></text><text id="SvgjsText1463" font-family="Nunito, sans-serif" x="600.6605113636363" y="266.848" text-anchor="middle" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-xaxis-label apexcharts-xaxis-title" style="font-family: Nunito, sans-serif;"><tspan id="SvgjsTspan1464" style="font-family: Nunito, sans-serif;">Nov</tspan><title>Nov</title></text><text id="SvgjsText1465" font-family="Nunito, sans-serif" x="660.7265624999999" y="266.848" text-anchor="middle" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-xaxis-label apexcharts-xaxis-title" style="font-family: Nunito, sans-serif;"><tspan id="SvgjsTspan1466" style="font-family: Nunito, sans-serif;">Dec</tspan><title>Dec</title></text></g></g><g id="SvgjsG1477" class="apexcharts-grid"><g id="SvgjsG1478" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG1479" class="apexcharts-gridlines-vertical"><line id="SvgjsLine1480" x1="60.06605113636363" y1="0" x2="60.06605113636363" y2="232.848" stroke="#e0e6ed" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine1481" x1="120.13210227272727" y1="0" x2="120.13210227272727" y2="232.848" stroke="#e0e6ed" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine1482" x1="180.1981534090909" y1="0" x2="180.1981534090909" y2="232.848" stroke="#e0e6ed" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine1483" x1="240.26420454545453" y1="0" x2="240.26420454545453" y2="232.848" stroke="#e0e6ed" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine1484" x1="300.3302556818182" y1="0" x2="300.3302556818182" y2="232.848" stroke="#e0e6ed" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine1485" x1="360.3963068181818" y1="0" x2="360.3963068181818" y2="232.848" stroke="#e0e6ed" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine1486" x1="420.46235795454544" y1="0" x2="420.46235795454544" y2="232.848" stroke="#e0e6ed" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine1487" x1="480.52840909090907" y1="0" x2="480.52840909090907" y2="232.848" stroke="#e0e6ed" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine1488" x1="540.5944602272727" y1="0" x2="540.5944602272727" y2="232.848" stroke="#e0e6ed" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine1489" x1="600.6605113636364" y1="0" x2="600.6605113636364" y2="232.848" stroke="#e0e6ed" stroke-dasharray="5" class="apexcharts-gridline"></line></g><line id="SvgjsLine1491" x1="0" y1="232.848" x2="660.7265625" y2="232.848" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1490" x1="0" y1="1" x2="0" y2="232.848" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1382" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1412" class="apexcharts-series" seriesName="Expenses" data:longestSeries="true" rel="2" data:realIndex="1"><path id="apexcharts-area-1" d="M 0 232.848L 0 116.42399999999998C 21.02311789772727 116.42399999999998 39.042933238636365 83.15999999999997 60.06605113636364 83.15999999999997C 81.08916903409092 83.15999999999997 99.108984375 126.40319999999997 120.13210227272728 126.40319999999997C 141.15522017045456 126.40319999999997 159.17503551136366 89.81279999999992 180.19815340909093 89.81279999999992C 201.2212713068182 89.81279999999992 219.2410866477273 133.05599999999993 240.26420454545456 133.05599999999993C 261.28732244318184 133.05599999999993 279.3071377840909 16.631999999999948 300.3302556818182 16.631999999999948C 321.35337357954546 16.631999999999948 339.3731889204546 133.05599999999993 360.39630681818187 133.05599999999993C 381.41942471590914 133.05599999999993 399.4392400568182 99.79199999999992 420.4623579545455 99.79199999999992C 441.48547585227277 99.79199999999992 459.50529119318185 133.05599999999993 480.5284090909091 133.05599999999993C 501.5515269886364 133.05599999999993 519.5713423295455 33.26400000000001 540.5944602272727 33.26400000000001C 561.617578125 33.26400000000001 579.6373934659091 66.5279999999999 600.6605113636364 66.5279999999999C 621.6836292613636 66.5279999999999 639.7034446022727 33.26400000000001 660.7265625 33.26400000000001C 660.7265625 33.26400000000001 660.7265625 33.26400000000001 660.7265625 232.848M 660.7265625 33.26400000000001z" fill="url(#SvgjsLinearGradient1415)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMasksnav8apd)" filter="url(#SvgjsFilter1421)" pathTo="M 0 232.848L 0 116.42399999999998C 21.02311789772727 116.42399999999998 39.042933238636365 83.15999999999997 60.06605113636364 83.15999999999997C 81.08916903409092 83.15999999999997 99.108984375 126.40319999999997 120.13210227272728 126.40319999999997C 141.15522017045456 126.40319999999997 159.17503551136366 89.81279999999992 180.19815340909093 89.81279999999992C 201.2212713068182 89.81279999999992 219.2410866477273 133.05599999999993 240.26420454545456 133.05599999999993C 261.28732244318184 133.05599999999993 279.3071377840909 16.631999999999948 300.3302556818182 16.631999999999948C 321.35337357954546 16.631999999999948 339.3731889204546 133.05599999999993 360.39630681818187 133.05599999999993C 381.41942471590914 133.05599999999993 399.4392400568182 99.79199999999992 420.4623579545455 99.79199999999992C 441.48547585227277 99.79199999999992 459.50529119318185 133.05599999999993 480.5284090909091 133.05599999999993C 501.5515269886364 133.05599999999993 519.5713423295455 33.26400000000001 540.5944602272727 33.26400000000001C 561.617578125 33.26400000000001 579.6373934659091 66.5279999999999 600.6605113636364 66.5279999999999C 621.6836292613636 66.5279999999999 639.7034446022727 33.26400000000001 660.7265625 33.26400000000001C 660.7265625 33.26400000000001 660.7265625 33.26400000000001 660.7265625 232.848M 660.7265625 33.26400000000001z" pathFrom="M -1 665.28L -1 665.28L 60.06605113636364 665.28L 120.13210227272728 665.28L 180.19815340909093 665.28L 240.26420454545456 665.28L 300.3302556818182 665.28L 360.39630681818187 665.28L 420.4623579545455 665.28L 480.5284090909091 665.28L 540.5944602272727 665.28L 600.6605113636364 665.28L 660.7265625 665.28"></path><path id="apexcharts-area-1" d="M 0 116.42399999999998C 21.02311789772727 116.42399999999998 39.042933238636365 83.15999999999997 60.06605113636364 83.15999999999997C 81.08916903409092 83.15999999999997 99.108984375 126.40319999999997 120.13210227272728 126.40319999999997C 141.15522017045456 126.40319999999997 159.17503551136366 89.81279999999992 180.19815340909093 89.81279999999992C 201.2212713068182 89.81279999999992 219.2410866477273 133.05599999999993 240.26420454545456 133.05599999999993C 261.28732244318184 133.05599999999993 279.3071377840909 16.631999999999948 300.3302556818182 16.631999999999948C 321.35337357954546 16.631999999999948 339.3731889204546 133.05599999999993 360.39630681818187 133.05599999999993C 381.41942471590914 133.05599999999993 399.4392400568182 99.79199999999992 420.4623579545455 99.79199999999992C 441.48547585227277 99.79199999999992 459.50529119318185 133.05599999999993 480.5284090909091 133.05599999999993C 501.5515269886364 133.05599999999993 519.5713423295455 33.26400000000001 540.5944602272727 33.26400000000001C 561.617578125 33.26400000000001 579.6373934659091 66.5279999999999 600.6605113636364 66.5279999999999C 621.6836292613636 66.5279999999999 639.7034446022727 33.26400000000001 660.7265625 33.26400000000001" fill="none" fill-opacity="1" stroke="#e7515a" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMasksnav8apd)" filter="url(#SvgjsFilter1432)" pathTo="M 0 116.42399999999998C 21.02311789772727 116.42399999999998 39.042933238636365 83.15999999999997 60.06605113636364 83.15999999999997C 81.08916903409092 83.15999999999997 99.108984375 126.40319999999997 120.13210227272728 126.40319999999997C 141.15522017045456 126.40319999999997 159.17503551136366 89.81279999999992 180.19815340909093 89.81279999999992C 201.2212713068182 89.81279999999992 219.2410866477273 133.05599999999993 240.26420454545456 133.05599999999993C 261.28732244318184 133.05599999999993 279.3071377840909 16.631999999999948 300.3302556818182 16.631999999999948C 321.35337357954546 16.631999999999948 339.3731889204546 133.05599999999993 360.39630681818187 133.05599999999993C 381.41942471590914 133.05599999999993 399.4392400568182 99.79199999999992 420.4623579545455 99.79199999999992C 441.48547585227277 99.79199999999992 459.50529119318185 133.05599999999993 480.5284090909091 133.05599999999993C 501.5515269886364 133.05599999999993 519.5713423295455 33.26400000000001 540.5944602272727 33.26400000000001C 561.617578125 33.26400000000001 579.6373934659091 66.5279999999999 600.6605113636364 66.5279999999999C 621.6836292613636 66.5279999999999 639.7034446022727 33.26400000000001 660.7265625 33.26400000000001" pathFrom="M -1 665.28L -1 665.28L 60.06605113636364 665.28L 120.13210227272728 665.28L 180.19815340909093 665.28L 240.26420454545456 665.28L 300.3302556818182 665.28L 360.39630681818187 665.28L 420.4623579545455 665.28L 480.5284090909091 665.28L 540.5944602272727 665.28L 600.6605113636364 665.28L 660.7265625 665.28"></path><g id="SvgjsG1413" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1497" r="0" cx="0" cy="116.42399999999998" class="apexcharts-marker w8i1yv586 no-pointer-events" stroke="#ffffff" fill="#e7515a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1414" class="apexcharts-datalabels"></g></g><g id="SvgjsG1383" class="apexcharts-series" seriesName="Income" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M 0 232.848L 0 106.44479999999999C 21.02311789772727 106.44479999999999 39.042933238636365 106.44479999999999 60.06605113636364 106.44479999999999C 81.08916903409092 106.44479999999999 99.108984375 149.688 120.13210227272728 149.688C 141.15522017045456 149.688 159.17503551136366 73.18079999999998 180.19815340909093 73.18079999999998C 201.2212713068182 73.18079999999998 219.2410866477273 149.688 240.26420454545456 149.688C 261.28732244318184 149.688 279.3071377840909 99.79199999999992 300.3302556818182 99.79199999999992C 321.35337357954546 99.79199999999992 339.3731889204546 33.26400000000001 360.39630681818187 33.26400000000001C 381.41942471590914 33.26400000000001 399.4392400568182 133.05599999999993 420.4623579545455 133.05599999999993C 441.48547585227277 133.05599999999993 459.50529119318185 166.31999999999994 480.5284090909091 166.31999999999994C 501.5515269886364 166.31999999999994 519.5713423295455 99.79199999999992 540.5944602272727 99.79199999999992C 561.617578125 99.79199999999992 579.6373934659091 199.58399999999995 600.6605113636364 199.58399999999995C 621.6836292613636 199.58399999999995 639.7034446022727 99.79199999999992 660.7265625 99.79199999999992C 660.7265625 99.79199999999992 660.7265625 99.79199999999992 660.7265625 232.848M 660.7265625 99.79199999999992z" fill="url(#SvgjsLinearGradient1386)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasksnav8apd)" filter="url(#SvgjsFilter1392)" pathTo="M 0 232.848L 0 106.44479999999999C 21.02311789772727 106.44479999999999 39.042933238636365 106.44479999999999 60.06605113636364 106.44479999999999C 81.08916903409092 106.44479999999999 99.108984375 149.688 120.13210227272728 149.688C 141.15522017045456 149.688 159.17503551136366 73.18079999999998 180.19815340909093 73.18079999999998C 201.2212713068182 73.18079999999998 219.2410866477273 149.688 240.26420454545456 149.688C 261.28732244318184 149.688 279.3071377840909 99.79199999999992 300.3302556818182 99.79199999999992C 321.35337357954546 99.79199999999992 339.3731889204546 33.26400000000001 360.39630681818187 33.26400000000001C 381.41942471590914 33.26400000000001 399.4392400568182 133.05599999999993 420.4623579545455 133.05599999999993C 441.48547585227277 133.05599999999993 459.50529119318185 166.31999999999994 480.5284090909091 166.31999999999994C 501.5515269886364 166.31999999999994 519.5713423295455 99.79199999999992 540.5944602272727 99.79199999999992C 561.617578125 99.79199999999992 579.6373934659091 199.58399999999995 600.6605113636364 199.58399999999995C 621.6836292613636 199.58399999999995 639.7034446022727 99.79199999999992 660.7265625 99.79199999999992C 660.7265625 99.79199999999992 660.7265625 99.79199999999992 660.7265625 232.848M 660.7265625 99.79199999999992z" pathFrom="M -1 665.28L -1 665.28L 60.06605113636364 665.28L 120.13210227272728 665.28L 180.19815340909093 665.28L 240.26420454545456 665.28L 300.3302556818182 665.28L 360.39630681818187 665.28L 420.4623579545455 665.28L 480.5284090909091 665.28L 540.5944602272727 665.28L 600.6605113636364 665.28L 660.7265625 665.28"></path><path id="apexcharts-area-0" d="M 0 106.44479999999999C 21.02311789772727 106.44479999999999 39.042933238636365 106.44479999999999 60.06605113636364 106.44479999999999C 81.08916903409092 106.44479999999999 99.108984375 149.688 120.13210227272728 149.688C 141.15522017045456 149.688 159.17503551136366 73.18079999999998 180.19815340909093 73.18079999999998C 201.2212713068182 73.18079999999998 219.2410866477273 149.688 240.26420454545456 149.688C 261.28732244318184 149.688 279.3071377840909 99.79199999999992 300.3302556818182 99.79199999999992C 321.35337357954546 99.79199999999992 339.3731889204546 33.26400000000001 360.39630681818187 33.26400000000001C 381.41942471590914 33.26400000000001 399.4392400568182 133.05599999999993 420.4623579545455 133.05599999999993C 441.48547585227277 133.05599999999993 459.50529119318185 166.31999999999994 480.5284090909091 166.31999999999994C 501.5515269886364 166.31999999999994 519.5713423295455 99.79199999999992 540.5944602272727 99.79199999999992C 561.617578125 99.79199999999992 579.6373934659091 199.58399999999995 600.6605113636364 199.58399999999995C 621.6836292613636 199.58399999999995 639.7034446022727 99.79199999999992 660.7265625 99.79199999999992" fill="none" fill-opacity="1" stroke="#1b55e2" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasksnav8apd)" filter="url(#SvgjsFilter1403)" pathTo="M 0 106.44479999999999C 21.02311789772727 106.44479999999999 39.042933238636365 106.44479999999999 60.06605113636364 106.44479999999999C 81.08916903409092 106.44479999999999 99.108984375 149.688 120.13210227272728 149.688C 141.15522017045456 149.688 159.17503551136366 73.18079999999998 180.19815340909093 73.18079999999998C 201.2212713068182 73.18079999999998 219.2410866477273 149.688 240.26420454545456 149.688C 261.28732244318184 149.688 279.3071377840909 99.79199999999992 300.3302556818182 99.79199999999992C 321.35337357954546 99.79199999999992 339.3731889204546 33.26400000000001 360.39630681818187 33.26400000000001C 381.41942471590914 33.26400000000001 399.4392400568182 133.05599999999993 420.4623579545455 133.05599999999993C 441.48547585227277 133.05599999999993 459.50529119318185 166.31999999999994 480.5284090909091 166.31999999999994C 501.5515269886364 166.31999999999994 519.5713423295455 99.79199999999992 540.5944602272727 99.79199999999992C 561.617578125 99.79199999999992 579.6373934659091 199.58399999999995 600.6605113636364 199.58399999999995C 621.6836292613636 199.58399999999995 639.7034446022727 99.79199999999992 660.7265625 99.79199999999992" pathFrom="M -1 665.28L -1 665.28L 60.06605113636364 665.28L 120.13210227272728 665.28L 180.19815340909093 665.28L 240.26420454545456 665.28L 300.3302556818182 665.28L 360.39630681818187 665.28L 420.4623579545455 665.28L 480.5284090909091 665.28L 540.5944602272727 665.28L 600.6605113636364 665.28L 660.7265625 665.28"></path><g id="SvgjsG1384" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1498" r="0" cx="0" cy="106.44479999999999" class="apexcharts-marker wq9vlf6vu no-pointer-events" stroke="#ffffff" fill="#1b55e2" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1385" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1492" x1="0" y1="0" x2="660.7265625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1493" x1="0" y1="0" x2="660.7265625" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1494" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1495" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1496" class="apexcharts-point-annotations"><circle id="SvgjsCircle1499" r="0" cx="360.39630681818187" cy="33.26400000000001" class="apexcharts-point-annotation-marker " stroke="#0e1726" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="1"></circle><text id="SvgjsText1500" font-family="Nunito, sans-serif" x="360.39630681818187" y="7.26400000000001" text-anchor="middle" dominant-baseline="auto" font-size="11px" fill="#373d3f" class="apexcharts-point-annotation-label d-none" rel="1" style="font-family: Nunito, sans-serif;"></text><g id="SvgjsG1501" class="apexcharts-point-annotations-custom-svg undefined" transform="translate(352.39630681818187, 27.26400000000001)"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#1b55e2" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></g><circle id="SvgjsCircle1502" r="0" cx="300.3302556818182" cy="16.632000000000005" class="apexcharts-point-annotation-marker " stroke="#0e1726" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="1"></circle><text id="SvgjsText1503" font-family="Nunito, sans-serif" x="300.3302556818182" y="-9.367999999999995" text-anchor="middle" dominant-baseline="auto" font-size="11px" fill="#373d3f" class="apexcharts-point-annotation-label d-none" rel="4" style="font-family: Nunito, sans-serif;"></text><g id="SvgjsG1504" class="apexcharts-point-annotations-custom-svg undefined" transform="translate(292.3302556818182, 10.632000000000005)"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#e7515a" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></g></g></g><text id="SvgjsText1373" font-family="Nunito, sans-serif" x="0" y="20" text-anchor="start" dominant-baseline="auto" font-size="18px" fill="#0e1726" class="apexcharts-title-text" style="font-family: Nunito, sans-serif; opacity: 1;">Total Profit</text><text id="SvgjsText1374" font-family="Nunito, sans-serif" x="105" y="20" text-anchor="start" dominant-baseline="auto" font-size="18px" fill="#4361ee" class="apexcharts-subtitle-text" style="font-family: Nunito, sans-serif; opacity: 1;">$10,840</text><rect id="SvgjsRect1377" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1467" class="apexcharts-yaxis" rel="0" transform="translate(4.8515625, 0)"><g id="SvgjsG1468" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1469" font-family="Nunito, sans-serif" x="20" y="91.2" text-anchor="end" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-yaxis-label apexcharts-yaxis-title" style="font-family: Nunito, sans-serif;">20K</text><text id="SvgjsText1470" font-family="Nunito, sans-serif" x="20" y="124.56400000000001" text-anchor="end" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-yaxis-label apexcharts-yaxis-title" style="font-family: Nunito, sans-serif;">19K</text><text id="SvgjsText1471" font-family="Nunito, sans-serif" x="20" y="157.928" text-anchor="end" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-yaxis-label apexcharts-yaxis-title" style="font-family: Nunito, sans-serif;">18K</text><text id="SvgjsText1472" font-family="Nunito, sans-serif" x="20" y="191.292" text-anchor="end" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-yaxis-label apexcharts-yaxis-title" style="font-family: Nunito, sans-serif;">17K</text><text id="SvgjsText1473" font-family="Nunito, sans-serif" x="20" y="224.656" text-anchor="end" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-yaxis-label apexcharts-yaxis-title" style="font-family: Nunito, sans-serif;">16K</text><text id="SvgjsText1474" font-family="Nunito, sans-serif" x="20" y="258.02000000000004" text-anchor="end" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-yaxis-label apexcharts-yaxis-title" style="font-family: Nunito, sans-serif;">15K</text><text id="SvgjsText1475" font-family="Nunito, sans-serif" x="20" y="291.38400000000007" text-anchor="end" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-yaxis-label apexcharts-yaxis-title" style="font-family: Nunito, sans-serif;">14K</text><text id="SvgjsText1476" font-family="Nunito, sans-serif" x="20" y="324.7480000000001" text-anchor="end" dominant-baseline="auto" font-size="12px" fill="#373d3f" class="apexcharts-yaxis-label apexcharts-yaxis-title" style="font-family: Nunito, sans-serif;">13K</text></g></g></svg><div class="apexcharts-tooltip dark" style="left: 48.8516px; top: 109px;"><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(27, 85, 226);"></span><div class="apexcharts-tooltip-text" style="font-family: Nunito, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Income: </span><span class="apexcharts-tooltip-text-value">16.8K</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(231, 81, 90);"></span><div class="apexcharts-tooltip-text" style="font-family: Nunito, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Expenses: </span><span class="apexcharts-tooltip-text-value">16.5K</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom dark" style="left: 14.8164px; top: 324.348px;"><div class="apexcharts-xaxistooltip-text" style="font-family: Nunito, sans-serif; font-size: 12px; min-width: 24.0703px;">Jan</div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 712px; height: 381px;"></div></div><div class="contract-trigger"></div></div></div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-two">
                        <div class="widget-heading">
                            <h5 class="">Sales by Category</h5>
                        </div>
                        <div class="widget-content" style="position: relative;">
                            <div id="chart-2" class="" style="min-height: 380px;"><div id="apexcharts8go6oql9g" class="apexcharts-canvas apexcharts8go6oql9g light" style="width: 380px; height: 380px;"><svg id="SvgjsSvg1507" width="380" height="380" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="380" height="380"><div class="apexcharts-legend center position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 10px; position: absolute;"><div class="apexcharts-legend-series" rel="1" data:collapsed="false" style="margin: 0px 8px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(92, 26, 195); color: rgb(92, 26, 195); height: 10px; width: 10px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 14px; font-family: Helvetica, Arial, sans-serif;">Apparel</span></div><div class="apexcharts-legend-series" rel="2" data:collapsed="false" style="margin: 0px 8px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(226, 160, 63); color: rgb(226, 160, 63); height: 10px; width: 10px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 14px; font-family: Helvetica, Arial, sans-serif;">Sports</span></div><div class="apexcharts-legend-series" rel="3" data:collapsed="false" style="margin: 0px 8px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(231, 81, 90); color: rgb(231, 81, 90); height: 10px; width: 10px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="3" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 14px; font-family: Helvetica, Arial, sans-serif;">Others</span></div></div><style type="text/css">

                                                .apexcharts-legend {
                                                    display: flex;
                                                    overflow: auto;
                                                    padding: 0 10px;
                                                }

                                                .apexcharts-legend.position-bottom, .apexcharts-legend.position-top {
                                                    flex-wrap: wrap
                                                }
                                                .apexcharts-legend.position-right, .apexcharts-legend.position-left {
                                                    flex-direction: column;
                                                    bottom: 0;
                                                }

                                                .apexcharts-legend.position-bottom.left, .apexcharts-legend.position-top.left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {
                                                    justify-content: flex-start;
                                                }

                                                .apexcharts-legend.position-bottom.center, .apexcharts-legend.position-top.center {
                                                    justify-content: center;
                                                }

                                                .apexcharts-legend.position-bottom.right, .apexcharts-legend.position-top.right {
                                                    justify-content: flex-end;
                                                }

                                                .apexcharts-legend-series {
                                                    cursor: pointer;
                                                    line-height: normal;
                                                }

                                                .apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series{
                                                    display: flex;
                                                    align-items: center;
                                                }

                                                .apexcharts-legend-text {
                                                    position: relative;
                                                    font-size: 14px;
                                                }

                                                .apexcharts-legend-text *, .apexcharts-legend-marker * {
                                                    pointer-events: none;
                                                }

                                                .apexcharts-legend-marker {
                                                    position: relative;
                                                    display: inline-block;
                                                    cursor: pointer;
                                                    margin-right: 3px;
                                                }

                                                .apexcharts-legend.right .apexcharts-legend-series, .apexcharts-legend.left .apexcharts-legend-series{
                                                    display: inline-block;
                                                }

                                                .apexcharts-legend-series.no-click {
                                                    cursor: auto;
                                                }

                                                .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
                                                    display: none !important;
                                                }

                                                .inactive-legend {
                                                    opacity: 0.45;
                                                }</style></foreignObject><g id="SvgjsG1509" class="apexcharts-inner apexcharts-graphical" transform="translate(37.5, 0)"><defs id="SvgjsDefs1508"><clipPath id="gridRectMask8go6oql9g"><rect id="SvgjsRect1510" width="332" height="344" x="-12.5" y="-12.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask8go6oql9g"><rect id="SvgjsRect1511" width="309" height="321" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><g id="SvgjsG1513" class="apexcharts-pie" data:innerTranslateX="0" data:innerTranslateY="-25"><g id="SvgjsG1515" class="apexcharts-datalabels-group" transform="translate(0, 0)"><text id="SvgjsText1516" font-family="Nunito, sans-serif" x="153.5" y="143.5" text-anchor="middle" dominant-baseline="auto" font-size="29px" fill="#888ea8" class="apexcharts-datalabel-label" style="font-family: Nunito, sans-serif;">Total</text><text id="SvgjsText1517" font-family="Nunito, sans-serif" x="153.5" y="185.5" text-anchor="middle" dominant-baseline="auto" font-size="26px" fill="20" class="apexcharts-datalabel-value" style="font-family: Nunito, sans-serif;">1992</text></g><g id="SvgjsG1514" transform="translate(0, -5) scale(1)"><circle id="SvgjsCircle1518" r="78.49146341463417" cx="153.5" cy="153.5" fill="transparent"></circle><g id="SvgjsG1519"><g id="apexcharts-series-0" class="apexcharts-series apexcharts-pie-series" seriesName="Apparel" rel="1"><path id="apexcharts-donut-slice-0" d="M 153.5 32.74390243902437 A 120.75609756097563 120.75609756097563 0 0 1 157.68894973557033 274.18341973224295 L 156.22281732812073 231.94422282595792 A 78.49146341463417 78.49146341463417 0 0 0 153.5 75.00853658536583 L 153.5 32.74390243902437 z" fill="rgba(92,26,195,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="25" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="0" data:angle="178.0120481927711" data:startAngle="0" data:strokeWidth="25" data:value="985" data:pathOrig="M 153.5 32.74390243902437 A 120.75609756097563 120.75609756097563 0 0 1 157.68894973557033 274.18341973224295 L 156.22281732812073 231.94422282595792 A 78.49146341463417 78.49146341463417 0 0 0 153.5 75.00853658536583 L 153.5 32.74390243902437 z"></path></g><g id="apexcharts-series-1" class="apexcharts-series apexcharts-pie-series" seriesName="Sports" rel="2"><path id="apexcharts-donut-slice-1" d="M 157.68894973557033 274.18341973224295 A 120.75609756097563 120.75609756097563 0 0 1 62.64800252972418 73.95158924392732 L 94.44620164432071 101.79353300855274 A 78.49146341463417 78.49146341463417 0 0 0 156.22281732812073 231.94422282595792 L 157.68894973557033 274.18341973224295 z" fill="rgba(226,160,63,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="25" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="1" data:angle="133.19277108433732" data:startAngle="178.0120481927711" data:strokeWidth="25" data:value="737" data:pathOrig="M 157.68894973557033 274.18341973224295 A 120.75609756097563 120.75609756097563 0 0 1 62.64800252972418 73.95158924392732 L 94.44620164432071 101.79353300855274 A 78.49146341463417 78.49146341463417 0 0 0 156.22281732812073 231.94422282595792 L 157.68894973557033 274.18341973224295 z"></path></g><g id="apexcharts-series-2" class="apexcharts-series apexcharts-pie-series" seriesName="Others" rel="3"><path id="apexcharts-donut-slice-2" d="M 62.64800252972418 73.95158924392732 A 120.75609756097563 120.75609756097563 0 0 1 153.47892408516398 32.7439042782449 L 153.4863006553566 75.00853778085917 A 78.49146341463417 78.49146341463417 0 0 0 94.44620164432071 101.79353300855274 L 62.64800252972418 73.95158924392732 z" fill="rgba(231,81,90,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="25" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="2" data:angle="48.79518072289159" data:startAngle="311.2048192771084" data:strokeWidth="25" data:value="270" data:pathOrig="M 62.64800252972418 73.95158924392732 A 120.75609756097563 120.75609756097563 0 0 1 153.47892408516398 32.7439042782449 L 153.4863006553566 75.00853778085917 A 78.49146341463417 78.49146341463417 0 0 0 94.44620164432071 101.79353300855274 L 62.64800252972418 73.95158924392732 z"></path></g></g></g></g><line id="SvgjsLine1526" x1="0" y1="0" x2="307" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1527" x1="0" y1="0" x2="307" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-tooltip dark"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(92, 26, 195);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(226, 160, 63);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(231, 81, 90);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 361px; height: 401px;"></div></div><div class="contract-trigger"></div></div></div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget widget-three">
                        <div class="widget-heading">
                            <h5 class="">Summary</h5>

                            <div class="task-action">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                        <a class="dropdown-item" href="javascript:void(0);">View Report</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit Report</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Mark as Done</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="widget-content">

                            <div class="order-summary">

                                <div class="summary-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                    </div>
                                    <div class="w-summary-details">

                                        <div class="w-summary-info">
                                            <h6>Income</h6>
                                            <p class="summary-count">$92,600</p>
                                        </div>

                                        <div class="w-summary-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="summary-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
                                    </div>
                                    <div class="w-summary-details">

                                        <div class="w-summary-info">
                                            <h6>Profit</h6>
                                            <p class="summary-count">$37,515</p>
                                        </div>

                                        <div class="w-summary-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="summary-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                    </div>
                                    <div class="w-summary-details">

                                        <div class="w-summary-info">
                                            <h6>Expenses</h6>
                                            <p class="summary-count">$55,085</p>
                                        </div>

                                        <div class="w-summary-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget-two">
                        <div class="widget-content">
                            <div class="w-numeric-value">
                                <div class="w-content">
                                    <span class="w-value">Daily sales</span>
                                    <span class="w-numeric-title">Go to columns for details.</span>
                                </div>
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                </div>
                            </div>
                            <div class="w-chart">
                                <div id="daily-sales" style="min-height: 175px;"><div id="apexcharts14i6i6kp" class="apexcharts-canvas apexcharts14i6i6kp light" style="width: 360px; height: 160px;"><svg id="SvgjsSvg1284" width="360" height="160" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1286" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 40)"><defs id="SvgjsDefs1285"><linearGradient id="SvgjsLinearGradient1288" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1289" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1290" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1291" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask14i6i6kp"><rect id="SvgjsRect1293" width="361" height="121" x="-0.5" y="-0.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask14i6i6kp"><rect id="SvgjsRect1294" width="362" height="122" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><rect id="SvgjsRect1292" width="12.857142857142858" height="120" x="0" y="0" rx="0" ry="0" fill="url(#SvgjsLinearGradient1288)" opacity="1" stroke-width="0" stroke-dasharray="3" class="apexcharts-xcrosshairs" y2="120" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1315" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1316" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g><line id="SvgjsLine1317" x1="0" y1="121" x2="360" y2="121" stroke="#78909c" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG1319" class="apexcharts-grid"><line id="SvgjsLine1321" x1="0" y1="120" x2="360" y2="120" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1320" x1="0" y1="1" x2="0" y2="120" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1296" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1297" class="apexcharts-series" seriesName="Sales" rel="1" data:realIndex="0"><path id="apexcharts-bar-area-0" d="M 19.285714285714285 120L 19.285714285714285 27.368421052631575L 31.14285714285714 27.368421052631575L 31.14285714285714 120L 18.785714285714285 120" fill="rgba(226,160,63,1)" fill-opacity="1" stroke="#e2a03f" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask14i6i6kp)" pathTo="M 19.285714285714285 120L 19.285714285714285 27.368421052631575L 31.14285714285714 27.368421052631575L 31.14285714285714 120L 18.785714285714285 120" pathFrom="M 19.285714285714285 120L 19.285714285714285 120L 31.14285714285714 120L 31.14285714285714 120L 31.14285714285714 120L 18.785714285714285 120" cy="27.368421052631575" cx="70.21428571428572" j="0" val="77.19298245614036" barHeight="92.63157894736842" barWidth="12.857142857142858"></path><path id="apexcharts-bar-area-0" d="M 70.71428571428572 120L 70.71428571428572 35.38461538461539L 82.57142857142858 35.38461538461539L 82.57142857142858 120L 70.21428571428572 120" fill="rgba(226,160,63,1)" fill-opacity="1" stroke="#e2a03f" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask14i6i6kp)" pathTo="M 70.71428571428572 120L 70.71428571428572 35.38461538461539L 82.57142857142858 35.38461538461539L 82.57142857142858 120L 70.21428571428572 120" pathFrom="M 70.71428571428572 120L 70.71428571428572 120L 82.57142857142858 120L 82.57142857142858 120L 82.57142857142858 120L 70.21428571428572 120" cy="35.38461538461539" cx="121.64285714285715" j="1" val="70.51282051282051" barHeight="84.61538461538461" barWidth="12.857142857142858"></path><path id="apexcharts-bar-area-0" d="M 122.14285714285715 120L 122.14285714285715 39.344262295081975L 134 39.344262295081975L 134 120L 121.64285714285715 120" fill="rgba(226,160,63,1)" fill-opacity="1" stroke="#e2a03f" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask14i6i6kp)" pathTo="M 122.14285714285715 120L 122.14285714285715 39.344262295081975L 134 39.344262295081975L 134 120L 121.64285714285715 120" pathFrom="M 122.14285714285715 120L 122.14285714285715 120L 134 120L 134 120L 134 120L 121.64285714285715 120" cy="39.344262295081975" cx="173.07142857142858" j="2" val="67.21311475409836" barHeight="80.65573770491802" barWidth="12.857142857142858"></path><path id="apexcharts-bar-area-0" d="M 173.57142857142858 120L 173.57142857142858 12.800000000000011L 185.42857142857144 12.800000000000011L 185.42857142857144 120L 173.07142857142858 120" fill="rgba(226,160,63,1)" fill-opacity="1" stroke="#e2a03f" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask14i6i6kp)" pathTo="M 173.57142857142858 120L 173.57142857142858 12.800000000000011L 185.42857142857144 12.800000000000011L 185.42857142857144 120L 173.07142857142858 120" pathFrom="M 173.57142857142858 120L 173.57142857142858 120L 185.42857142857144 120L 185.42857142857144 120L 185.42857142857144 120L 173.07142857142858 120" cy="12.800000000000011" cx="224.5" j="3" val="89.33333333333333" barHeight="107.19999999999999" barWidth="12.857142857142858"></path><path id="apexcharts-bar-area-0" d="M 225 120L 225 44.571428571428584L 236.85714285714286 44.571428571428584L 236.85714285714286 120L 224.5 120" fill="rgba(226,160,63,1)" fill-opacity="1" stroke="#e2a03f" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask14i6i6kp)" pathTo="M 225 120L 225 44.571428571428584L 236.85714285714286 44.571428571428584L 236.85714285714286 120L 224.5 120" pathFrom="M 225 120L 225 120L 236.85714285714286 120L 236.85714285714286 120L 236.85714285714286 120L 224.5 120" cy="44.571428571428584" cx="275.92857142857144" j="4" val="62.857142857142854" barHeight="75.42857142857142" barWidth="12.857142857142858"></path><path id="apexcharts-bar-area-0" d="M 276.42857142857144 120L 276.42857142857144 46.28571428571429L 288.2857142857143 46.28571428571429L 288.2857142857143 120L 275.92857142857144 120" fill="rgba(226,160,63,1)" fill-opacity="1" stroke="#e2a03f" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask14i6i6kp)" pathTo="M 276.42857142857144 120L 276.42857142857144 46.28571428571429L 288.2857142857143 46.28571428571429L 288.2857142857143 120L 275.92857142857144 120" pathFrom="M 276.42857142857144 120L 276.42857142857144 120L 288.2857142857143 120L 288.2857142857143 120L 288.2857142857143 120L 275.92857142857144 120" cy="46.28571428571429" cx="327.3571428571429" j="5" val="61.42857142857143" barHeight="73.71428571428571" barWidth="12.857142857142858"></path><path id="apexcharts-bar-area-0" d="M 327.8571428571429 120L 327.8571428571429 73.33333333333334L 339.7142857142857 73.33333333333334L 339.7142857142857 120L 327.3571428571429 120" fill="rgba(226,160,63,1)" fill-opacity="1" stroke="#e2a03f" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask14i6i6kp)" pathTo="M 327.8571428571429 120L 327.8571428571429 73.33333333333334L 339.7142857142857 73.33333333333334L 339.7142857142857 120L 327.3571428571429 120" pathFrom="M 327.8571428571429 120L 327.8571428571429 120L 339.7142857142857 120L 339.7142857142857 120L 339.7142857142857 120L 327.3571428571429 120" cy="73.33333333333334" cx="378.78571428571433" j="6" val="38.888888888888886" barHeight="46.666666666666664" barWidth="12.857142857142858"></path><g id="SvgjsG1298" class="apexcharts-datalabels"></g></g><g id="SvgjsG1306" class="apexcharts-series" seriesName="LastxWeek" rel="2" data:realIndex="1"><path id="apexcharts-bar-area-1" d="M 19.285714285714285 27.368421052631575L 19.285714285714285 -3.552713678800501e-15L 31.14285714285714 -3.552713678800501e-15L 31.14285714285714 27.368421052631575L 18.785714285714285 27.368421052631575" fill="rgba(224,230,237,1)" fill-opacity="1" stroke="#e0e6ed" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask14i6i6kp)" pathTo="M 19.285714285714285 27.368421052631575L 19.285714285714285 -3.552713678800501e-15L 31.14285714285714 -3.552713678800501e-15L 31.14285714285714 27.368421052631575L 18.785714285714285 27.368421052631575" pathFrom="M 19.285714285714285 27.368421052631575L 19.285714285714285 27.368421052631575L 31.14285714285714 27.368421052631575L 31.14285714285714 27.368421052631575L 31.14285714285714 27.368421052631575L 18.785714285714285 27.368421052631575" cy="-3.552713678800501e-15" cx="70.21428571428572" j="0" val="22.80701754385965" barHeight="27.36842105263158" barWidth="12.857142857142858"></path><path id="apexcharts-bar-area-1" d="M 70.71428571428572 35.38461538461539L 70.71428571428572 7.105427357601002e-15L 82.57142857142858 7.105427357601002e-15L 82.57142857142858 35.38461538461539L 70.21428571428572 35.38461538461539" fill="rgba(224,230,237,1)" fill-opacity="1" stroke="#e0e6ed" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask14i6i6kp)" pathTo="M 70.71428571428572 35.38461538461539L 70.71428571428572 7.105427357601002e-15L 82.57142857142858 7.105427357601002e-15L 82.57142857142858 35.38461538461539L 70.21428571428572 35.38461538461539" pathFrom="M 70.71428571428572 35.38461538461539L 70.71428571428572 35.38461538461539L 82.57142857142858 35.38461538461539L 82.57142857142858 35.38461538461539L 82.57142857142858 35.38461538461539L 70.21428571428572 35.38461538461539" cy="7.105427357601002e-15" cx="121.64285714285715" j="1" val="29.487179487179485" barHeight="35.38461538461538" barWidth="12.857142857142858"></path><path id="apexcharts-bar-area-1" d="M 122.14285714285715 39.344262295081975L 122.14285714285715 1.4210854715202004e-14L 134 1.4210854715202004e-14L 134 39.344262295081975L 121.64285714285715 39.344262295081975" fill="rgba(224,230,237,1)" fill-opacity="1" stroke="#e0e6ed" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask14i6i6kp)" pathTo="M 122.14285714285715 39.344262295081975L 122.14285714285715 1.4210854715202004e-14L 134 1.4210854715202004e-14L 134 39.344262295081975L 121.64285714285715 39.344262295081975" pathFrom="M 122.14285714285715 39.344262295081975L 122.14285714285715 39.344262295081975L 134 39.344262295081975L 134 39.344262295081975L 134 39.344262295081975L 121.64285714285715 39.344262295081975" cy="1.4210854715202004e-14" cx="173.07142857142858" j="2" val="32.78688524590164" barHeight="39.34426229508196" barWidth="12.857142857142858"></path><path id="apexcharts-bar-area-1" d="M 173.57142857142858 12.800000000000011L 173.57142857142858 1.2434497875801753e-14L 185.42857142857144 1.2434497875801753e-14L 185.42857142857144 12.800000000000011L 173.07142857142858 12.800000000000011" fill="rgba(224,230,237,1)" fill-opacity="1" stroke="#e0e6ed" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask14i6i6kp)" pathTo="M 173.57142857142858 12.800000000000011L 173.57142857142858 1.2434497875801753e-14L 185.42857142857144 1.2434497875801753e-14L 185.42857142857144 12.800000000000011L 173.07142857142858 12.800000000000011" pathFrom="M 173.57142857142858 12.800000000000011L 173.57142857142858 12.800000000000011L 185.42857142857144 12.800000000000011L 185.42857142857144 12.800000000000011L 185.42857142857144 12.800000000000011L 173.07142857142858 12.800000000000011" cy="1.2434497875801753e-14" cx="224.5" j="3" val="10.666666666666666" barHeight="12.799999999999999" barWidth="12.857142857142858"></path><path id="apexcharts-bar-area-1" d="M 225 44.571428571428584L 225 7.105427357601002e-15L 236.85714285714286 7.105427357601002e-15L 236.85714285714286 44.571428571428584L 224.5 44.571428571428584" fill="rgba(224,230,237,1)" fill-opacity="1" stroke="#e0e6ed" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask14i6i6kp)" pathTo="M 225 44.571428571428584L 225 7.105427357601002e-15L 236.85714285714286 7.105427357601002e-15L 236.85714285714286 44.571428571428584L 224.5 44.571428571428584" pathFrom="M 225 44.571428571428584L 225 44.571428571428584L 236.85714285714286 44.571428571428584L 236.85714285714286 44.571428571428584L 236.85714285714286 44.571428571428584L 224.5 44.571428571428584" cy="7.105427357601002e-15" cx="275.92857142857144" j="4" val="37.142857142857146" barHeight="44.57142857142858" barWidth="12.857142857142858"></path><path id="apexcharts-bar-area-1" d="M 276.42857142857144 46.28571428571429L 276.42857142857144 7.105427357601002e-15L 288.2857142857143 7.105427357601002e-15L 288.2857142857143 46.28571428571429L 275.92857142857144 46.28571428571429" fill="rgba(224,230,237,1)" fill-opacity="1" stroke="#e0e6ed" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask14i6i6kp)" pathTo="M 276.42857142857144 46.28571428571429L 276.42857142857144 7.105427357601002e-15L 288.2857142857143 7.105427357601002e-15L 288.2857142857143 46.28571428571429L 275.92857142857144 46.28571428571429" pathFrom="M 276.42857142857144 46.28571428571429L 276.42857142857144 46.28571428571429L 288.2857142857143 46.28571428571429L 288.2857142857143 46.28571428571429L 288.2857142857143 46.28571428571429L 275.92857142857144 46.28571428571429" cy="7.105427357601002e-15" cx="327.3571428571429" j="5" val="38.57142857142857" barHeight="46.285714285714285" barWidth="12.857142857142858"></path><path id="apexcharts-bar-area-1" d="M 327.8571428571429 73.33333333333334L 327.8571428571429 1.4210854715202004e-14L 339.7142857142857 1.4210854715202004e-14L 339.7142857142857 73.33333333333334L 327.3571428571429 73.33333333333334" fill="rgba(224,230,237,1)" fill-opacity="1" stroke="#e0e6ed" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask14i6i6kp)" pathTo="M 327.8571428571429 73.33333333333334L 327.8571428571429 1.4210854715202004e-14L 339.7142857142857 1.4210854715202004e-14L 339.7142857142857 73.33333333333334L 327.3571428571429 73.33333333333334" pathFrom="M 327.8571428571429 73.33333333333334L 327.8571428571429 73.33333333333334L 339.7142857142857 73.33333333333334L 339.7142857142857 73.33333333333334L 339.7142857142857 73.33333333333334L 327.3571428571429 73.33333333333334" cy="1.4210854715202004e-14" cx="378.78571428571433" j="6" val="61.111111111111114" barHeight="73.33333333333333" barWidth="12.857142857142858"></path><g id="SvgjsG1307" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1322" x1="0" y1="0" x2="360" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1323" x1="0" y1="0" x2="360" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1324" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1325" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1326" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1318" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(226, 160, 63);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(224, 230, 237);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 361px; height: 176px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget-one widget">
                        <div class="widget-content">
                            <div class="w-numeric-value">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                </div>
                                <div class="w-content">
                                    <span class="w-value">3,192</span>
                                    <span class="w-numeric-title">Total Orders</span>
                                </div>
                            </div>
                            <div class="w-chart" style="position: relative;">
                                <div id="total-orders" style="min-height: 290px;"><div id="apexchartshszzgb95" class="apexcharts-canvas apexchartshszzgb95 light" style="width: 360px; height: 290px;"><svg id="SvgjsSvg1330" width="360" height="290" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1332" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 125)"><defs id="SvgjsDefs1331"><clipPath id="gridRectMaskhszzgb95"><rect id="SvgjsRect1336" width="362" height="167" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskhszzgb95"><rect id="SvgjsRect1337" width="362" height="167" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1343" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1344" stop-opacity="0.65" stop-color="rgba(26,188,156,0.65)" offset="0"></stop><stop id="SvgjsStop1345" stop-opacity="0.5" stop-color="rgba(141,222,206,0.5)" offset="1"></stop><stop id="SvgjsStop1346" stop-opacity="0.5" stop-color="rgba(141,222,206,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1335" x1="0" y1="0" x2="0" y2="165" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="165" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1349" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1350" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1353" class="apexcharts-grid"><line id="SvgjsLine1355" x1="0" y1="165" x2="360" y2="165" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1354" x1="0" y1="1" x2="0" y2="165" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1339" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1340" class="apexcharts-series" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M 0 165L 0 89.99999999999999C 14 89.99999999999999 26 57.85714285714285 40 57.85714285714285C 54 57.85714285714285 66 68.57142857142856 80 68.57142857142856C 94 68.57142857142856 106 25.714285714285694 120 25.714285714285694C 134 25.714285714285694 146 63.21428571428571 160 63.21428571428571C 174 63.21428571428571 186 4.285714285714278 200 4.285714285714278C 214 4.285714285714278 226 63.21428571428571 240 63.21428571428571C 254 63.21428571428571 266 25.714285714285694 280 25.714285714285694C 294 25.714285714285694 306 68.57142857142856 320 68.57142857142856C 334 68.57142857142856 346 57.85714285714285 360 57.85714285714285C 360 57.85714285714285 360 57.85714285714285 360 165M 360 57.85714285714285z" fill="url(#SvgjsLinearGradient1343)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskhszzgb95)" pathTo="M 0 165L 0 89.99999999999999C 14 89.99999999999999 26 57.85714285714285 40 57.85714285714285C 54 57.85714285714285 66 68.57142857142856 80 68.57142857142856C 94 68.57142857142856 106 25.714285714285694 120 25.714285714285694C 134 25.714285714285694 146 63.21428571428571 160 63.21428571428571C 174 63.21428571428571 186 4.285714285714278 200 4.285714285714278C 214 4.285714285714278 226 63.21428571428571 240 63.21428571428571C 254 63.21428571428571 266 25.714285714285694 280 25.714285714285694C 294 25.714285714285694 306 68.57142857142856 320 68.57142857142856C 334 68.57142857142856 346 57.85714285714285 360 57.85714285714285C 360 57.85714285714285 360 57.85714285714285 360 165M 360 57.85714285714285z" pathFrom="M -1 165L -1 165L 40 165L 80 165L 120 165L 160 165L 200 165L 240 165L 280 165L 320 165L 360 165"></path><path id="apexcharts-area-0" d="M 0 89.99999999999999C 14 89.99999999999999 26 57.85714285714285 40 57.85714285714285C 54 57.85714285714285 66 68.57142857142856 80 68.57142857142856C 94 68.57142857142856 106 25.714285714285694 120 25.714285714285694C 134 25.714285714285694 146 63.21428571428571 160 63.21428571428571C 174 63.21428571428571 186 4.285714285714278 200 4.285714285714278C 214 4.285714285714278 226 63.21428571428571 240 63.21428571428571C 254 63.21428571428571 266 25.714285714285694 280 25.714285714285694C 294 25.714285714285694 306 68.57142857142856 320 68.57142857142856C 334 68.57142857142856 346 57.85714285714285 360 57.85714285714285" fill="none" fill-opacity="1" stroke="#1abc9c" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskhszzgb95)" pathTo="M 0 89.99999999999999C 14 89.99999999999999 26 57.85714285714285 40 57.85714285714285C 54 57.85714285714285 66 68.57142857142856 80 68.57142857142856C 94 68.57142857142856 106 25.714285714285694 120 25.714285714285694C 134 25.714285714285694 146 63.21428571428571 160 63.21428571428571C 174 63.21428571428571 186 4.285714285714278 200 4.285714285714278C 214 4.285714285714278 226 63.21428571428571 240 63.21428571428571C 254 63.21428571428571 266 25.714285714285694 280 25.714285714285694C 294 25.714285714285694 306 68.57142857142856 320 68.57142857142856C 334 68.57142857142856 346 57.85714285714285 360 57.85714285714285" pathFrom="M -1 165L -1 165L 40 165L 80 165L 120 165L 160 165L 200 165L 240 165L 280 165L 320 165L 360 165"></path><g id="SvgjsG1341" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1361" r="0" cx="0" cy="0" class="apexcharts-marker w9kfd39jh no-pointer-events" stroke="#ffffff" fill="#1abc9c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1342" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1356" x1="0" y1="0" x2="360" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1357" x1="0" y1="0" x2="360" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1358" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1359" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1360" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1334" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1351" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1352" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(26, 188, 156);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 361px; height: 291px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">

                    <div class="widget widget-activity-four">

                        <div class="widget-heading">
                            <h5 class="">Recent Activities</h5>
                        </div>

                        <div class="widget-content">

                            <div class="mt-container mx-auto ps ps--active-y">
                                <div class="timeline-line">

                                    <div class="item-timeline timeline-primary">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p><span>Updated</span> Server Logs</p>
                                            <span class="badge">Pending</span>
                                            <p class="t-time">Just Now</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-success">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></p>
                                            <span class="badge">Completed</span>
                                            <p class="t-time">2 min ago</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-danger">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Backup <span>Files EOD</span></p>
                                            <span class="badge">Pending</span>
                                            <p class="t-time">14:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-dark">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>
                                            <span class="badge">Completed</span>
                                            <p class="t-time">16:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-warning">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.</p>
                                            <span class="badge">In progress</span>
                                            <p class="t-time">17:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-secondary">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Rebooted Server</p>
                                            <span class="badge">Completed</span>
                                            <p class="t-time">17:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-warning">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Send contract details to Freelancer</p>
                                            <span class="badge">Pending</span>
                                            <p class="t-time">18:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-dark">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Kelly want to increase the time of the project.</p>
                                            <span class="badge">In Progress</span>
                                            <p class="t-time">19:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-success">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Server down for maintanence</p>
                                            <span class="badge">Completed</span>
                                            <p class="t-time">19:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-secondary">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Malicious link detected</p>
                                            <span class="badge">Block</span>
                                            <p class="t-time">20:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-warning">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Rebooted Server</p>
                                            <span class="badge">Completed</span>
                                            <p class="t-time">23:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-primary">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p><span>Updated</span> Server Logs</p>
                                            <span class="badge">Pending</span>
                                            <p class="t-time">Just Now</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-success">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></p>
                                            <span class="badge">Completed</span>
                                            <p class="t-time">2 min ago</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-danger">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Backup <span>Files EOD</span></p>
                                            <span class="badge">Pending</span>
                                            <p class="t-time">14:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-dark">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>
                                            <span class="badge">Completed</span>
                                            <p class="t-time">16:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-warning">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.</p>
                                            <span class="badge">In progress</span>
                                            <p class="t-time">17:00</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 326px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 169px;"></div></div></div>

                            <div class="tm-action-btn">
                                <button class="btn"><span>View All</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget widget-table-one">
                        <div class="widget-heading">
                            <h5 class="">Transactions</h5>
                            <div class="task-action">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                        <a class="dropdown-item" href="javascript:void(0);">View Report</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit Report</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Mark as Done</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content">
                            <div class="transactions-list">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Electricity Bill</h4>
                                            <p class="meta-date">04 Jan 1:00PM</p>
                                        </div>

                                    </div>
                                    <div class="t-rate rate-dec">
                                        <p><span>-$16.44</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="transactions-list t-info">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title">SP</span>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Shaun Park</h4>
                                            <p class="meta-date">10 Jan 1:00PM</p>
                                        </div>
                                    </div>
                                    <div class="t-rate rate-inc">
                                        <p><span>+$36.11</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="transactions-list">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title">AD</span>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Amy Diaz</h4>
                                            <p class="meta-date">31 Jan 1:00PM</p>
                                        </div>

                                    </div>
                                    <div class="t-rate rate-inc">
                                        <p><span>+$66.44</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="transactions-list t-secondary">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Netflix</h4>
                                            <p class="meta-date">02 Feb 1:00PM</p>
                                        </div>

                                    </div>
                                    <div class="t-rate rate-dec">
                                        <p><span>-$32.00</span></p>
                                    </div>
                                </div>
                            </div>


                            <div class="transactions-list t-info">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title">DA</span>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Daisy Anderson</h4>
                                            <p class="meta-date">15 Feb 1:00PM</p>
                                        </div>
                                    </div>
                                    <div class="t-rate rate-inc">
                                        <p><span>+$10.08</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="transactions-list">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title">OG</span>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Oscar Garner</h4>
                                            <p class="meta-date">20 Feb 1:00PM</p>
                                        </div>

                                    </div>
                                    <div class="t-rate rate-dec">
                                        <p><span>-$22.00</span></p>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12 layout-spacing">

                    <div class="widget widget-account-invoice-three">

                        <div class="widget-heading">
                            <div class="wallet-usr-info">
                                <div class="usr-name">
                                    <span><img src="assets/img/profile-32.jpg" alt="admin-profile" class="img-fluid"> Alan Green</span>
                                </div>
                                <div class="add">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
                                </div>
                            </div>
                            <div class="wallet-balance">
                                <p>Wallet Balance</p>
                                <h5 class=""><span class="w-currency">$</span>2953</h5>
                            </div>
                        </div>

                        <div class="widget-amount">

                            <div class="w-a-info funds-received">
                                <span>Received <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></span>
                                <p>$97.99</p>
                            </div>

                            <div class="w-a-info funds-spent">
                                <span>Spent <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
                                <p>$53.00</p>
                            </div>
                        </div>

                        <div class="widget-content">

                            <div class="bills-stats">
                                <span>Pending</span>
                            </div>

                            <div class="invoice-list">

                                <div class="inv-detail">
                                    <div class="info-detail-1">
                                        <p>Netflix</p>
                                        <p><span class="w-currency">$</span> <span class="bill-amount">13.85</span></p>
                                    </div>
                                    <div class="info-detail-2">
                                        <p>BlueHost VPN</p>
                                        <p><span class="w-currency">$</span> <span class="bill-amount">15.66</span></p>
                                    </div>
                                </div>

                                <div class="inv-action">
                                    <a href="javascript:void(0);" class="btn btn-outline-primary view-details">View Details</a>
                                    <a href="javascript:void(0);" class="btn btn-outline-primary pay-now">Pay Now $29.51</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-table-two">

                        <div class="widget-heading">
                            <h5 class="">Recent Orders</h5>
                        </div>

                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th><div class="th-content">Customer</div></th>
                                        <th><div class="th-content">Product</div></th>
                                        <th><div class="th-content">Invoice</div></th>
                                        <th><div class="th-content th-heading">Price</div></th>
                                        <th><div class="th-content">Status</div></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="assets/img/profile-13.jpg" alt="avatar"><span>Luke Ivory</span></div></td>
                                        <td><div class="td-content product-brand text-primary">Headphone</div></td>
                                        <td><div class="td-content product-invoice">#46894</div></td>
                                        <td><div class="td-content pricing"><span class="">$56.07</span></div></td>
                                        <td><div class="td-content"><span class="badge badge-success">Paid</span></div></td>
                                    </tr>

                                    <tr>
                                        <td><div class="td-content customer-name"><img src="assets/img/profile-7.jpg" alt="avatar"><span>Andy King</span></div></td>
                                        <td><div class="td-content product-brand text-warning">Nike Sport</div></td>
                                        <td><div class="td-content product-invoice">#76894</div></td>
                                        <td><div class="td-content pricing"><span class="">$88.00</span></div></td>
                                        <td><div class="td-content"><span class="badge badge-primary">Shipped</span></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="assets/img/profile-10.jpg" alt="avatar"><span>Laurie Fox</span></div></td>
                                        <td><div class="td-content product-brand text-danger">Sunglasses</div></td>
                                        <td><div class="td-content product-invoice">#66894</div></td>
                                        <td><div class="td-content pricing"><span class="">$126.04</span></div></td>
                                        <td><div class="td-content"><span class="badge badge-success">Paid</span></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="assets/img/profile-5.jpg" alt="avatar"><span>Ryan Collins</span></div></td>
                                        <td><div class="td-content product-brand text-warning">Sport</div></td>
                                        <td><div class="td-content product-invoice">#89891</div></td>
                                        <td><div class="td-content pricing"><span class="">$108.09</span></div></td>
                                        <td><div class="td-content"><span class="badge badge-primary">Shipped</span></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="assets/img/profile-4.jpg" alt="avatar"><span>Irene Collins</span></div></td>
                                        <td><div class="td-content product-brand text-primary">Speakers</div></td>
                                        <td><div class="td-content product-invoice">#75844</div></td>
                                        <td><div class="td-content pricing"><span class="">$84.00</span></div></td>
                                        <td><div class="td-content"><span class="badge badge-danger">Pending</span></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="assets/img/profile-11.jpg" alt="avatar"><span>Sonia Shaw</span></div></td>
                                        <td><div class="td-content product-brand text-danger">Watch</div></td>
                                        <td><div class="td-content product-invoice">#76844</div></td>
                                        <td><div class="td-content pricing"><span class="">$110.00</span></div></td>
                                        <td><div class="td-content"><span class="badge badge-success">Paid</span></div></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-table-three">

                        <div class="widget-heading">
                            <h5 class="">Top Selling Product</h5>
                        </div>

                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table table-scroll">
                                    <thead>
                                    <tr>
                                        <th><div class="th-content">Product</div></th>
                                        <th><div class="th-content th-heading">Price</div></th>
                                        <th><div class="th-content th-heading">Discount</div></th>
                                        <th><div class="th-content">Sold</div></th>
                                        <th><div class="th-content">Source</div></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="assets/img/product-headphones.jpg" alt="product"><div class="align-self-center"><p class="prd-name">Headphone</p><p class="prd-category text-primary">Digital</p></div></div></td>
                                        <td><div class="td-content"><span class="pricing">$168.09</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">$60.09</span></div></td>
                                        <td><div class="td-content">170</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Direct</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="assets/img/product-shoes.jpg" alt="product"><div class="align-self-center"><p class="prd-name">Shoes</p><p class="prd-category text-warning">Faishon</p></div></div></td>
                                        <td><div class="td-content"><span class="pricing">$108.09</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">$47.09</span></div></td>
                                        <td><div class="td-content">130</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Google</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="assets/img/product-watch.jpg" alt="product"><div class="align-self-center"><p class="prd-name">Watch</p><p class="prd-category text-danger">Accessories</p></div></div></td>
                                        <td><div class="td-content"><span class="pricing">$88.00</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">$20.00</span></div></td>
                                        <td><div class="td-content">66</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Ads</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="assets/img/product-laptop.jpg" alt="product"><div class="align-self-center"><p class="prd-name">Laptop</p><p class="prd-category text-primary">Digital</p></div></div></td>
                                        <td><div class="td-content"><span class="pricing">$110.00</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">$33.00</span></div></td>
                                        <td><div class="td-content">35</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="text-info"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Email</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="assets/img/product-camera.jpg" alt="product"><div class="align-self-center"><p class="prd-name">Camera</p><p class="prd-category text-primary">Digital</p></div></div></td>
                                        <td><div class="td-content"><span class="pricing">$126.04</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">$26.04</span></div></td>
                                        <td><div class="td-content">30</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="text-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Referral</a></div></td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com/">DesignReset</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
            </div>
        </div>
    </div>

@endsection
