var d = document.getElementById("dibujito");
var lienzo = d.getContext("2d");

dibujarlinea("red", 10, 300, 220, 10);
dibujarlinea("blue", 300, 10, 10, 220);

function dibujarlinea(color, xinicial, yinicial, xfinal, yfinal)
{
    lienzo.beginPath();
    lienzo.strokeStyle = color;
    lienzo.moveTo(xinicial, yinicial);
    lienzo.lineTo(xfinal, yfinal);
    lienzo.stroke();
    lienzo.closePath();
}