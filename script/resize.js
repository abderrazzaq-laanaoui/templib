
function resize(device) {
    if (device == 'Desktop') {
        document.querySelector('iframe').setAttribute('class', 'Desktop');
    } else if (device == 'Tablet') {
        document.querySelector('iframe').setAttribute('class', 'Tablet');
    } else if (device == 'Mobile') {
        document.querySelector('iframe').setAttribute('class', 'Mobile');
    }
}