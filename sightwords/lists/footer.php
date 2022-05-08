
<? 
$sightword = $sightwords[array_rand($sightwords)];
echo $sightword; 

// if dinosaurs
//https://www.nhm.ac.uk/discover/dino-directory/name/a/gallery.html
if($page == 'dinosaurs') {

$picname = str_replace("saurus","",$sightword);

$dinopic = 'https://www.nhm.ac.uk/resources/nature-online/life/dinosaurs/dinosaur-directory/images/reconstruction/small/'.$picname.'.jpg';

echo '<img src="images/dinosaurs/'.strtolower($sightword).'.jpg" class="img-fluid" style="width:200px;">';

/*
if (@getimagesize($dinopic)) {
echo '<img src="https://www.nhm.ac.uk/resources/nature-online/life/dinosaurs/dinosaur-directory/images/reconstruction/small/'.$picname.'.jpg" class="img-fluid" style="width:200px;">';
}
if (@getimagesize($sightword)) {
echo '<img src="https://www.nhm.ac.uk/resources/nature-online/life/dinosaurs/dinosaur-directory/images/reconstruction/small/'.$sightword.'.jpg" class="img-fluid" style="width:200px;">';
}
*/

echo '<br>
<a href="https://www.nhm.ac.uk/discover/dino-directory/'.strtolower($sightword).'.html" target="_blank" style="font-size:12px;color:black;font-weight:none;text-decoration:underline;">Learn more about '.$sightword.'</a>';
}
// end if dinosaurs

?>
<br>
<!-- play the audio file using a player. Here I'm used a HTML5 player. You can use any player insted-->
<audio controls="controls">
  <source src="sounds/<?=$page?>/<?=$sightword?>.mp3" type="audio/mp3" />
</audio>
<br><form class="" action="<?=$page?>.php" method="POST">
           
            <button class="btn-lg btn-success" type="submit" style="width:200px;height:100px;font-size:40px;">Next</button>
          </form>


</center></main>

 
<script type="text/javascript" src="//counter.websiteout.net/js/36/0/0/0"></script>
</body>
</html>