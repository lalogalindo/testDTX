(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./resources/js/canvasPercentage.js":
/*!******************************************!*\
  !*** ./resources/js/canvasPercentage.js ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return drawPercentageCircle; });
var degreesToRadians = function degreesToRadians(deg) {
  return deg / 180 * Math.PI;
};

var percentToRadians = function percentToRadians(percentage) {
  return degreesToRadians(percentage * 360 / 100 + 270);
};

function drawPercentageCircle(canvas) {
  var context = canvas.getContext('2d');
  var x = (canvas.width - offset) / 2;
  var y = (canvas.height - offset) / 2;
  var radius = (canvas.width - offset) * 0.45;
  var percentage = parseInt(canvas.dataset.percentage.replace(/[,]/g, ''));
  var startAngle = percentToRadians(0);
  var endAngle = percentToRadians(percentage);
  var color = '#52cab5';
  var counterClockwise = true; // Draw empty circle

  counterClockwise = false;
  context.clearRect(0, 0, canvas.width, canvas.height);
  context.beginPath();
  context.arc(x, y, radius, startAngle, ACC.amxglobal.percentToRadians(100), counterClockwise);
  context.lineWidth = 5;
  context.strokeStyle = '#e6e6e6';
  context.stroke(); // Draw used circle

  if (percentage && percentage != 0) {
    counterClockwise = false;
    context.beginPath();
    context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
    context.lineWidth = 5;
    context.strokeStyle = color;
    context.stroke();
  }

  var dataPercentage = percentage == 100 ? ">" : "";
  dataPercentage += percentage + "%";
  context.font = '11px SourceSansPro';
  context.fillStyle = "#000000";
  context.textAlign = "center";
  context.fillText(dataPercentage, x, y * 2.5);
}
;

/***/ })

}]);