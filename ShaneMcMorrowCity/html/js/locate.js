
window.onload = function () {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}

function showPosition(pos) {
    $.post('../data/location.php', {
        'lat': pos.coords.latitude,
        'lng': pos.coords.longitude
    }, function () {
        console.log(showPosition);
    });
}