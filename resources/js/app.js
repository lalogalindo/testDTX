require('./bootstrap');

import $ from 'jquery';
window.$ = window.jQuery = $;

$('.nav-item').mouseenter( () => $(this).next().addClass('show') ).mouseleave( () => $(this).target.next().removeClass('show') )


const degreesToRadians = (deg) => (deg / 180) * Math.PI;
const percentToRadians = (percentage) => degreesToRadians((percentage * 360 / 100) + 270);

const drawPercentageCircle = (canvas) => {
    var context = canvas.getContext('2d');
    var x = (canvas.width) / 2;
    var y = (canvas.height) / 2;
    var radius = (canvas.width) * 0.45;
    var percentage = parseInt(canvas.dataset.percentage.replace(/[,]/g, ''));
    var startAngle = percentToRadians(0);
    var endAngle = percentToRadians(percentage);
    var color = '#52cab5';
    var counterClockwise = true;

    // Draw empty circle
    counterClockwise = false;
    context.clearRect(0, 0, canvas.width, canvas.height);
    context.beginPath();
    context.arc(x, y, radius, startAngle, percentToRadians(100), counterClockwise);
    context.lineWidth = 5;
    context.strokeStyle = '#e6e6e6';
    context.stroke();

    // Draw used circle
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
};


if( $('canvas').length > 0 ) {
    $('canvas').each( (i,canvas) => drawPercentageCircle(canvas) )
}