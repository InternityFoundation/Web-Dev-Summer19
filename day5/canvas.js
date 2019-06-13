var ctx = document.getElementById("canvas");
ctx.width=window.innerWidth;
ctx.height=window.innerHeight;

var c = ctx.getContext("2d");
c.fillStyle=" grey";
c.fillRect(100,100,100,100);
c.fillStyle=" cyan";
c.fillRect(100,300,100,100);
c.fillStyle=" grey";
c.fillRect(100,500,100,100);

c.fillStyle=" cyan";
c.fillRect(200,100,100,100);
c.fillStyle=" grey";
c.fillRect(300,100,100,100);
c.fillStyle=" cyan";
c.fillRect(400,100,100,100);
console.log(canvas);

c.beginPath();
c.moveTo(100, 100);
c.lineTo(100, 500);
c.moveTo(200, 500);
c.lineTo(200, 200);
c.strokeStyle="hotpink";
c.stroke();
