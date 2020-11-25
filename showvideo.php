<?php 
require_once('config.php');
?>

<!doctype html>
<html>
  <head>
  </hrad>
  <body>
<?php 
$query="SELECT * FROM videos";
$result = mysqli_query($con,$query);
$i=0;
while($row=mysqli_fetch_row($result))
{
    $arr = explode('.',$row['1']);
?>
<video width="400" controls id="video">
  <source src="<?php echo $row['2']?>" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<br>

<button id="<?php echo $arr[0];?>" onclick="playvid(this)">HD</button><button id="<?php echo $arr[0];?>" onclick="playvid(this)">Regular</button>

<?php 
echo "<br/>";
}
?>
</body>

<script>
var video = document.getElementById("video");
var vidType = "";
if (video.canPlayType) {
    if (video.canPlayType('video/mp4; codecs="avc1.42E01E"') == "probably") {
      vidType = "mp4"
    } else {
      if (video.canPlayType('video/ogg; codecs="theora"') == "probably") {
    vidType = "ogg"
        } else { if (video.canPlayType('video/webm; codecs="vp8, vorbis"') == "probably") {
          vidType = "webm"
        }
      }
    }
  }
 function playvid(vid) {
    
    console.log("videos/" + vid.id + "." + vidType)
    
    video.src = "videos/" + vid.id + "." + vidType
    video.play();
  }
  </script>
</html>