<!-- <!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Jeremy J Fleming</title><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet"> <script src="https://kit.fontawesome.com/7120b0626a.js" crossorigin="anonymous"></script> <link rel="icon" href="assets/favicon.ico"/> <script>window.onload=function(){C=Math.cos;S=Math.sin;U=0;w=window;j=document;d=j.getElementById("c");c=d.getContext("2d");W=d.width=w.innerWidth;H=d.height=w.innerHeight;c.fillRect(0,0,W,H);c.globalCompositeOperation="lighter";c.lineWidth=0.2;c.lineCap="round";var bool=0,t=0;d.onmousemove=function(e){if(window.T){if(D==9){D=Math.random()*15;f(1);}clearTimeout(T);}X=e.pageX;Y=e.pageY;a=0;b=0;A=X,B=Y;R=(e.pageX/W*999>>0)/999;r=(e.pageY/H*999>>0)/999;U=e.pageX/H*360>>0;D=9;g=360*Math.PI/180;T=setInterval(f=function(e){c.save();c.globalCompositeOperation="source-over";if(e!=1){c.fillStyle="rgba(0,0,0,0.02)";c.fillRect(0,0,W,H);}c.restore();i=25;while(i--){c.beginPath();if(D>450||bool){if(!bool){bool=1;}if(D<0.1){bool=0;}t-=g;D-=0.1;}if(!bool){t+=g;D+=0.1;}q=(R/r-1)*t;x=(R-r)*C(t)+D*C(q)+(A+(X-A)*(i/25))+(r-R);y=(R-r)*S(t)-D*S(q)+(B+(Y-B)*(i/25));if(a){c.moveTo(a,b);c.lineTo(x,y)}c.strokeStyle="hsla("+(U%360)+",100%,50%,0.75)";c.stroke();a=x;b=y;}U-=0.5;A=X;B=Y;},16);}j.onkeydown=function(e){a=b=0;R+=0.05}}</script> <style>.header{}body{margin:0;padding:0;font-family:'Roboto Mono',monospace;position:relative}.header{left:0;right:0;margin-left:auto;margin-right:auto;margin-top:10vh;position:absolute;width:40%;text-align:center;align-items:center;color:white;font-size:5vh}.content{position:absolute;z-index:-1}.icons:hover{color:white !important}.fa-github{color:blue}.fa-envelope:hover{color:white !important}.fa-github:hover{color:white !important}.fa-linkedin:hover{color:white !important}</style></head><body><div class="header"><h1 class="">Jeremy J Fleming</h1><div class="icons"> <a href="https://github.com/jeremyjfleming"><i class="fab fa-github"></i></a> <a href="mailto:me@jeremyjfleming.com"><i class="fas fa-envelope"></i></a> <a href="#"><i class="fab fa-linkedin"></i></a></div></div> <canvas class="content" id="c"></canvas></body></html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeremy J Fleming</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7120b0626a.js" crossorigin="anonymous"></script>
    <link rel="icon" href="assets/favicon.ico"/>
    <script>

    // Breathing Galaxies (1020 bytes)
    // source: https://galactic.ink/labs/JS1k/BreathingGalaxies.html
	// --------------------------------
    window.onload = function () {
	C = Math.cos; // cache Math objects
	S = Math.sin;
	U = 0;
	w = window;
	j = document;
	d = j.getElementById("c");
	c = d.getContext("2d");
	W = d.width = w.innerWidth;
	H = d.height = w.innerHeight;
	c.fillRect(0, 0, W, H); // resize <canvas> and draw black rect (default)
	c.globalCompositeOperation = "lighter"; // switch to additive color application
	c.lineWidth = 0.2;
	c.lineCap = "round";
	var bool = 0, 
		t = 0; // theta
	d.onmousemove = function (e) {
		if(window.T) {
			if(D==9) { D=Math.random()*15; f(1); }
			clearTimeout(T);
		}
		X = e.pageX; // grab mouse pixel coords
		Y = e.pageY;
		a=0; // previous coord.x
		b=0; // previous coord.y 
		A = X, // original coord.x
		B = Y; // original coord.y
		R=(e.pageX/W * 999>>0)/999;
		r=(e.pageY/H * 999>>0)/999;
		U=e.pageX/H * 360 >>0;
		D=9;
		g = 360 * Math.PI / 180;
		T = setInterval(f = function (e) { // start looping spectrum
			c.save();
			c.globalCompositeOperation = "source-over"; // switch to additive color application
			if(e!=1) {
				c.fillStyle = "rgba(0,0,0,0.02)";
				c.fillRect(0, 0, W, H); // resize <canvas> and draw black rect (default)
			}
			c.restore();
			i = 25; while(i --) {
				c.beginPath();
				if(D > 450 || bool) { // decrease diameter
					if(!bool) { // has hit maximum
						bool = 1;
					}
					if(D < 0.1) { // has hit minimum
						bool = 0;
					}
					t -= g; // decrease theta
					D -= 0.1; // decrease size
				}
				if(!bool) {
					t += g; // increase theta
					D += 0.1; // increase size
				}
				q = (R / r - 1) * t; // create hypotrochoid from current mouse position, and setup variables (see: http://en.wikipedia.org/wiki/Hypotrochoid)
				x = (R - r) * C(t) + D * C(q) + (A + (X - A) * (i / 25)) + (r - R); // center on xy coords
				y = (R - r) * S(t) - D * S(q) + (B + (Y - B) * (i / 25));
				if (a) { // draw once two points are set
					c.moveTo(a, b);
					c.lineTo(x, y)
				}
				c.strokeStyle = "hsla(" + (U % 360) + ",100%,50%,0.75)"; // draw rainbow hypotrochoid
				c.stroke();
				a = x; // set previous coord.x
				b = y; // set previous coord.y
			}
			U -= 0.5; // increment hue
			A = X; // set original coord.x
			B = Y; // set original coord.y
		}, 16);
	}
	j.onkeydown = function(e) { a=b=0; R += 0.05 }
}
    </script>
    <style>
        .header {

        }
        body {
            margin:0;
            padding:0;
            font-family: 'Roboto Mono', monospace;
            position: relative;
        }
        .header {
            left:0;
            right:0;

            margin-left: auto;
            margin-right: auto;
            margin-top: 10vh;

            position: absolute;
            width: 40%;
            text-align: center;
            align-items: center;
            color: white;
            font-size: 5vh;
        }
        .content {
            position: absolute;
            z-index: -1;
        }
        .icons:hover {
            color:white !important;
        }
        .fa-github {
            color: blue;
			text-decoration: none;
        }
		.fa-envelope {
            color: blue;
			text-decoration: none;
        }
		.fa-linkedin {
            color: blue;
			text-decoration: none;
        }
        .fa-envelope:hover {
            color: white !important;
        }
        .fa-github:hover {
            color: white !important;
        }
        .fa-linkedin:hover {
            color: white !important;
        }
	
    </style>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-H31PESL0MZ"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-H31PESL0MZ');
	</script>
</head>
<body>
    <div class="header">
        <h1 class="">Jeremy J Fleming</h1>
        <div class="icons">
            <a href="https://github.com/jeremyjfleming"><i class="fab fa-github"></i></a>
            <a href="mailto:me@jeremyjfleming.com"><i class="fas fa-envelope"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
    <canvas class="content" id="c"></canvas>
</body>
</html>

