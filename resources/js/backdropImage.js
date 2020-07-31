import * as Vibrant from 'node-vibrant';

let v = new Vibrant(document.getElementById('fakeImage').src)
v.getPalette((err, palette) => {
    let primaryColors = palette.DarkVibrant.getRgb();
    let secondaryColors = palette.LightVibrant.getRgb();
    document.getElementsByClassName('movieSection__content')[0].style.backgroundImage = `
        linear-gradient(to right, rgba(${primaryColors.join(',')}, 1) 350px, rgba(${secondaryColors.join(',')},0.5) 100%)`
})