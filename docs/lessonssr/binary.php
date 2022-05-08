

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
<table class="table table-hover table-striped">
<td>0</td><td>64</td><td>32</td><td>16</td><td>8</td><td>4</td><td>2</td><td>1</td><td> = 127</td></tr>
<td>0</td></td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>= 65 = A</td></tr>
<td>0</td></td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>= 66 = B</td></tr>
<td>0</td></td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>1</td><td>= 67 = C</td></tr>
<td>0</td></td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>= 68 = D</td></tr>
<td>0</td></td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>1</td><td>= 69 = E</td></tr>
<td>0</td></td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>1</td><td>0</td><td>= 70 = F</td></tr>
<td>0</td></td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>1</td><td>1</td><td>= 71 = G</td></tr>
<td>0</td></td><td>1</td><td>0</td><td>1</td><td>1</td><td>0</td><td>1</td><td>0</td><td>= 90 = Z</td></tr>
<td>0</td></td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>= 127 = DEL</td></tr>
</table>
1 0 0 0 0 1 0 | 1 0 0 0 1 0 1 | 1 0 0 0 1 0 0 = BED = 3 Bytes<br>
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


128 64 32 16 8 4 2 1 = 255 = UTC-8 = unicode<br>
1 	1   1  1 1 1 1 1<br>
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







