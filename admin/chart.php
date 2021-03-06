<!DOCTYPE html>
<html>
<head>
    <link href="css/extension-page-style.css" rel="stylesheet" type="text/css"  />
    <script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
    <script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.widgets.js"></script>

    <style>

        .code-block-holder pre {
            max-height: 188px;
            min-height: 188px;
            overflow: auto;
            border: 1px solid #ccc;
            border-radius: 5px;
        }


        .tab-btn-holder {
            width: 100%;
            margin: 20px 0 0;
            border-bottom: 1px solid #dfe3e4;
            min-height: 30px;
        }

        .tab-btn-holder a {
            background-color: #fff;
            font-size: 14px;
            text-transform: uppercase;
            color: #006bb8;
            text-decoration: none;
            display: inline-block;
            *zoom:1; *display:inline;


        }

        .tab-btn-holder a.active {
            color: #858585;
            padding: 9px 10px 8px;
            border: 1px solid #dfe3e4;
            border-bottom: 1px solid #fff;
            margin-bottom: -1px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            position: relative;
            z-index: 300;
        }

    </style>

</head>
<body>
<?php

/**
 * This example describes the single level linked chart preparation using FusionCharts PHP wrapper
 */

// Including the wrapper file in the page
include("inc/fusioncharts.php");

// Preparing the object of FusionCharts with needed informations
/**
 * The parameters of the constructor are as follows
 * chartType   {String}  The type of chart that you intend to plot. e.g. Column3D, Column2D, Pie2D etc.
 * chartId     {String}  Id for the chart, using which it will be recognized in the HTML page. Each chart on the page should have a unique Id.
 * chartWidth  {String}  Intended width for the chart (in pixels). e.g. 400
 * chartHeight {String}  Intended height for the chart (in pixels). e.g. 300
 * containerId {String}  The id of the chart container. e.g. chart-1
 * dataFormat  {String}  Type of data used to render the chart. e.g. json, jsonurl, xml, xmlurl
 * dataSource  {String}  Actual data for the chart. e.g. {"chart":{},"data":[{"label":"Jan","value":"420000"}]}
 */
$ganttChart = new FusionCharts("line", "ex1" , "100%", "300", "chart-1", "json", '{
      "chart": {
        "caption": "Projected Global IP Traffic, 2016-2019",
        "subcaption": "Click on a column to drill-down into type of traffic",
        "yaxisname": "Total IP traffic (PetaByte per Month)",
        "formatnumberscale": "1",
        "plotgradientcolor": " ",
        "bgcolor": "FFFFFF",
        "showalternatehgridcolor": "0",
        "showplotborder": "0",
        "showvalues": "1",
        "divlinecolor": "CCCCCC",
        "divlinedashed": "1",
        "showcanvasborder": "0",
        "defaultnumberscale": "PB",
        "yAxisMaxValue": "185000",
        "numberscaleunit": "PB,EB",
        "palettecolors": "23aae1 ",
        "captionPadding": "20",
        "showborder": "0",
        "plotToolText": "<div><b>$label</b><br/>IP Traffic : <b>$datavalue</b></div>",
      },
      "data": [{
        "label": "2016",
        "value": "88426",
        "link": "newchart-json-2016-type"
      }, {
        "label": "2017",
        "value": "108988",
        "link": "newchart-json-2017-type"
      }, {
        "label": "2018",
        "value": "135483",
        "link": "newchart-json-2018-type"
      }, {
        "label": "2019",
        "value": "135483",
        "link": "newchart-json-2018-type"
      }, {
        "label": "2020",
        "value": "167978",
        "link": "newchart-json-2019-type"
      }, {
        "label": "2021",
        "value": "135483",
        "link": "newchart-json-2018-type"
      }]
    }');
// Render the chart
$ganttChart->render();
?>
<div class="live-chart-wrapper">
    <span id="chart-1" class="chart" style="height:500px"><!-- Fusion Charts will render here--></span>

</div>

</body>
</html>


