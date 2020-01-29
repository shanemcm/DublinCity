window.onload = function () {
    var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
    ctx.font = "37px Fascinate Inline";
    ctx.strokeStyle = "#ffb2b5";
    ctx.textAlign = "right";
    var gradient = ctx.createLinearGradient(1, 0, 0, 100);
    gradient.addColorStop(0, "rgba(2,0,36,1)");
    gradient.addColorStop(0.4, "rgba(155,195,202,1)");
    gradient.addColorStop(0.8, "rgba(2,74,227,1)");
    ctx.fillStyle = gradient;
    ctx.fillText("WELCOME TO DUBLIN", 400, 80);
    ctx.shadowColor = "rgb(190, 190, 190)";
    ctx.shadowOffsetX = 10;
    ctx.shadowOffsetY = 10;
    ctx.shadowBlur = 10;
}

