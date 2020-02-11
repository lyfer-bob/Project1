<?php
require('connect.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <link href="{{ asset('/css/barchart.css') }}" rel="stylesheet">
    <style type="text/css">
    svg {
      padding-bottom:25px;
      padding-left:100px;
      padding-top:20px;
    }

    g path,
    g line {
      fill: #C0C0C0;
    }

    text {
      fill:#696969;
      font-size:20px;
    }

      }
    </style>
    <form action="">

  <script span  src="//d3js.org/d3.v3.min.js"></script>
  <span style="padding-left:1400px">
  <SCRIPT LANGUAGE="JavaScript">
<!-- Begin
if (window.print) {
document.write('<form>'
+ '<input type=button name=print value="Print" '
+ 'onClick="javascript:window.print()"></form>');
}
// End -->
</script>
  </form>
  <script type="text/javascript">
  var w = 600;
  var h = 400;
  var dataset = [10,10,12,20,22];
  var barPadding = 20;
  var colors = d3.scale.ordinal().range(['red','orange','yellow','#93C572','green']);

  var dataSetMax = d3.max(dataset);
  var yVariance = 10;
  var yMax = dataSetMax+(yVariance-(dataSetMax%yVariance));

  //scale + axis stuff
  var xScale = d3.scale.ordinal();
  var yScale = d3.scale.linear();
  xScale.domain(["1 Star", "2 Star", "3 Star", "4 Star", "5 Star"])
  	.rangeRoundBands([-26,w],0.15);
  var xAxis = d3.svg.axis()
  .orient("bottom")
  .scale(xScale);
  yScale.domain([yMax,0])
  	.range([0,h]);
  var yAxis = d3.svg.axis()
  	.orient("left")
  	.scale(yScale)
    .ticks(10);


  //svg creation
  var svg = d3.select("body")
  		.append("svg")
    	.attr("width", w)
    	.attr("height", h)

  //bars
  svg.selectAll("rect") //creating rectangles
  	.data(dataset)
    .enter()
    .append("rect")
    .attr("x", function(d,i){ //bar horizontal position
    	return i * (w/dataset.length);
    })
    .attr("y", function(d) { //bar vertical position
    	return yScale(d);
    })
    .attr("width", w / dataset.length - barPadding) //bar width
    .attr("height", function(d) { //bar height
    	return h - yScale(d);
    })
    .attr("fill", function(d,i) { //bar colors
    	return colors(i);
    })

  //bar number
  svg.selectAll("text")
  	.data(dataset)
    .enter()
    .append("text")
    .text(function(d) {
    	return d;
  	})
    	.attr("x", function(d,i) {
      	return i * (w/dataset.length) + (w / dataset.length - barPadding) / 2;
      })
      .attr("y", function(d) {
      	return yScale(d) - 5;
      })
    .attr("text-anchor", "middle");

  //adds the x-axis
  svg.append("g")
  	.attr("transform", "translate(0,"+ h +")")
    .call(xAxis);

  //adds the y-axis
  svg.append("g")
  	.attr("transform", "translate(-20,0)")
    .call(yAxis);

  </script>
  </body>

</html>
