import $ from 'jquery';
window.$ = window.jQuery = $;

const degreesToRadians = (deg) => (deg / 180) * Math.PI;
const percentToRadians = (percentage) => degreesToRadians((percentage * 360 / 100) + 270);

const drawPercentageCircle = (canvas, opt) => {
    let context = canvas.getContext('2d');
    let x = (canvas.width) / 2;
    let y = (canvas.height) / 2;
    let radius = (canvas.width) * 0.45;
    let percentage = parseInt(canvas.dataset.percentage.replace(/[,]/g, '')*10);
    let startAngle = percentToRadians(0);
    let endAngle = percentToRadians(percentage);
    let color = '#204529';
    let counterClockwise = true;
    let lineWidth = opt.lineWidth;

    // Draw empty circle
    counterClockwise = false;
    context.clearRect(0, 0, canvas.width, canvas.height);
    context.beginPath();
    context.arc(x, y, radius, startAngle, percentToRadians(100), counterClockwise);
    context.fillStyle = '#081c22';
    context.fill();
    context.stroke();

    // Inner circle
    radius = (canvas.width) * 0.39;

    // Draw unused circle
    context.beginPath();
    context.arc(x, y, radius, startAngle, percentToRadians(100), counterClockwise);
    context.lineWidth = lineWidth;
    context.strokeStyle = color;
    context.stroke();

    if(percentage < 50) {
        color = '#b41f54'
    } else if (percentage > 50 && percentage < 70) {
        color = '#d2d531'
    } else if(percentage > 70) {
        color = '#21d07a'
    }

    // Draw used circle
    if (percentage && percentage != 0) {
        counterClockwise = false;
        context.beginPath();
        context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
        context.lineWidth = lineWidth;
        context.strokeStyle = color;
        context.stroke();
    }
    
    // Percentage Number
    context.font = `bold ${opt.fontSize.number} Arial`;
    context.fillStyle = "#FFF";
    context.textAlign = "center";
    context.fillText(percentage, x * opt.number.x, y * opt.number.y);
    
    // Percentage Sign
    context.font = `${opt.fontSize.sign} Arial`;
    context.fillStyle = "#FFF";
    context.textAlign = "center";
    context.fillText("%", x * opt.sign.x, y * opt.sign.y);
};


let $smallCanvas = $('canvas.movieCard__content--vote-average');
if( $smallCanvas.length > 0 ) {
    $smallCanvas.each( (i,canvas) => drawPercentageCircle(canvas,{
        'lineWidth' : 2,
        'fontSize'  : { number: '14px', sign: '8px'},
        'number'    : { x : 0.9,  y : 1.25},
        'sign'      : { x : 1.45, y : 1.1}
    }))
}

let $bigCanvas = $('canvas.movieSection__details--actions-vote');
if( $bigCanvas.length > 0 ) {
    $bigCanvas.each( (i,canvas) => drawPercentageCircle(canvas,{
        'lineWidth' : 4 ,
        'fontSize'  : { number: '22px', sign: '8px'},
        'number'    : { x : 0.9,  y : 1.25},
        'sign'      : { x : 1.45, y : 1.1}
    }))
}