

<section id="ajax" class="doc-section">
<h2 class="section-title">Binary</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

Binary uses a base of 2 as opposed to a base of 10 for the decimal system.
<br><br>Where:<br>
10<sup>0</sup> = 1<br>
10<sup>1</sup> = 10<br>
10<sup>2</sup> = 100<br>
10<sup>3</sup> = 1000<br>
10<sup>4</sup> = 10000<br>
10<sup>5</sup> = 100000<br>
10<sup>6</sup> = 1000000<br>
10<sup>7</sup> = 10000000<br>
10<sup>8</sup> = 100000000<br>
<br>
The corresponding Binary is:<br>
2<sup>0</sup> = 1<br>
2<sup>1</sup> = 2<br>
2<sup>2</sup> = 4<br>
2<sup>3</sup> = 8<br>
2<sup>4</sup> = 16<br>
2<sup>5</sup> = 32<br>
2<sup>6</sup> = 64<br>
2<sup>7</sup> = 128<br>
2<sup>8</sup> = 256<br>
2<sup>9</sup> = 512<br>
2<sup>10</sup> = 1024<br>
<br>Why does 2<sup>0</sup> = 1?<br><br>
2<sup>5</sup>/2<sup>3</sup> =  2<sup>5 - 3</sup> = 2<sup>2</sup> = 4<br><br>
Formula: <br>
2<sup>x</sup>/2<sup>y</sup> =  2<sup>x - y</sup><br><br>
2<sup>1</sup>/2<sup>1</sup> =  1 can be rewritten using our forumula as  2<sup>1 - 1</sup> = 1 OR 2<sup>0</sup> = 1<br>
<br><br>
<div class="row"><div class="col-md-2">
<table class="table" style="width:10%;">
<tr>
<td style="font-size:10px;">10<sup>2</sup></td>
<td style="font-size:10px;">10<sup>1</sup></td>
<td style="font-size:10px;">10<sup>0</sup></td>
</tr>
<tr>
<td style="font-size:10px;">100</td>
<td style="font-size:10px;">10</td>
<td style="font-size:10px;">1</td>
</tr>
<tr></tr>
<tr>
<td>1</td>
<td>2</td>
<td>3</td>
</tr>
</table>
</div><div class="col-md-2">
<br><br>100 X 1 = 100 
</div><div class="col-md-1">
<br><br>+
</div><div class="col-md-2">
<br><br>10 X 2 = 20
</div><div class="col-md-1">
<br><br>+
</div><div class="col-md-2">
<br><br>1 X 3 = 3
</div></div>

Computers can't have a base of 10 but they can have a base of 2 which represents two states, on and off or 1 and 0 or electricity and no electricity.
<br><br>
<table class="table" style="width:30%;">
<tr>
<td style="font-size:10px;">2<sup>2</sup></td>
<td style="font-size:10px;">2<sup>1</sup></td>
<td style="font-size:10px;">2<sup>0</sup></td>
</tr>
<tr>
<td style="font-size:10px;">4</td>
<td style="font-size:10px;">2</td>
<td style="font-size:10px;">1</td>
</tr>
<tr>
<td>0</td>
<td>0</td>
<td>0 = 000 or 0 + 0 + 0 = 0</td>
</tr>
<tr>
<td>0</td>
<td>1</td>
<td>0 = 010 or 0 + 2 + 0 = 2</td>
</tr>
<tr>
<td>0</td>
<td>1</td>
<td>1 = 011 or 0 + 2 + 1 = 3</td>
</tr>
<tr>
<td>1</td>
<td>1</td>
<td>1 = 111 or  4 + 2 + 1 = 7</td>
</tr>
</table>



</div>
</div>
</section><!--//doc-section-->

<section id="javascript" class="doc-section">
<h2 class="section-title">ASCII vs UTF-8</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

<div class="text-right">
  <button onclick="on()" class="btn btn-info">ASCII Table</button>
  <button onclick="location.href='https://en.wikipedia.org/wiki/List_of_Unicode_characters','_blank';" class="btn btn-info">Unicode (UTF-8)</button>
</div>

<br>1 character = 8 bits = 1 byte<br>
bit is short-hand for <strong style="color:green;">(bi)</strong>nary digi<strong style="color:green;">(t)</strong>
<br>
Computer transistors have millions or billions of switches that represent on (1) or off(0)
<br>
<table class="table table-hover table-striped">
<tr class="info"><th>bit</th><th>bit</th><th>bit</th><th>bit</th><th>bit</th><th>bit</th><th>bit</th><th>bit</th><th> = byte</th></tr>
<tr class="success"><th>128</th><th>64</th><th>32</th><th>16</th><th>8</th><th>4</th><th>2</th><th>1</th><th> = 255</th></tr>
<tr><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>= 65 = A (64 + 1)</td></tr>
<tr><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>= 66 = B</td></tr>
<tr><td>0</td><td>0</td><td>1</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>= 50 = number 2</td></tr>
<tr><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>1</td><td>= 67 = C</td></tr>
<tr><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>= 68 = D</td></tr>
<tr><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>1</td><td>= 69 = E</td></tr>
<tr><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>1</td><td>0</td><td>= 70 = F</td></tr>
<tr><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>1</td><td>1</td><td>= 71 = G</td></tr>
<tr><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>= 72 = H</td></tr>
<tr><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>= 73 = I</td></tr>
<tr><td>0</td><td>1</td><td>0</td><td>1</td><td>1</td><td>0</td><td>1</td><td>0</td><td>= 90 = Z</td></tr>
<tr><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>= 33 = !</td></tr>
</table>
0 1 0 0 1 0 0 0 | 0 1 0 0 1 0 0 1 | 0 0 1 0 0 0 0 1 = HI! = 3 Bytes<br>
On a computer keyboard if you typed HI! those computer keys represent the ASCII Characters 72, 73, and 33
The computer or CPU would turn it into the binary bytes above.
<br>
kilobyte = 2^10 or 1024 Bytes<br>
2	4	8	16	32	64	128	256	512	1024<br>
<br>
1 byte = 8 bits<br>
1 kilobyte = 1024 bytes<br>
1 megabyte = 1024 kilobytes<br>
1 gigabyte = 1024 megabytes<br>
1 terabyte = 1024 gigabytes<br>
1 petabyte = 1024 terabytes<br>
1 exabyte  = 1024 petabytes<br>

<br>

1024 512 256 128 64 32 16 8 4 2 1 = 255 = UTC-8 = unicode<br>
<br>
<img src="lessons/images/asciiemoji.png" class="img-responsive" style="width:50%;"><br>
The binary number for 128514 is 1 1 1 1 1 0 0 1 1 0 0 0 0 0 0 0 1 0



<br>
CREATE ASCII Table<br>
https://www.smashingmagazine.com/2012/06/all-about-unicode-utf8-character-sets/<br>



<style>
#overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.5);
    z-index: 2;
    cursor: pointer;
}

#text{
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 50px;
    color: white;
    transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
}
</style>
</head>
<body>

<div id="overlay" onclick="off()">
  <div id="text"><img src="ascii.gif" class="img-fluid"></div>
</div>



<script>
function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}
</script>



</div>
</div>
</section><!--//doc-section-->







