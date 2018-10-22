<?php
require_once( 'util.php' );
SKheader();
SKnavigator( 'cont' );
?>

<!-- Scripts for Google map -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAHce-dC78JpQ3MwCu1hGt2Jpria9Ky0mU&sensor=false"></script>
<script>
var myCenter= new google.maps.LatLng(22.379234,114.200563);

var myAddr = "Rm503, Li Ka Shing Institute of Health Sciences,<br />Prince of Wales Hospital, The Chinese University of Hong Kong<br />CityOne, Shatin, Hong Kong";

function initialize()
{
	var mapProp = {
	  center:myCenter,
	  zoom:16,
	  mapTypeId:google.maps.MapTypeId.ROADMAP
	  };
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	var marker=new google.maps.Marker({
	  position:myCenter,
	  });
	marker.setMap(map);
	var infowindow = new google.maps.InfoWindow({
	  content:myAddr
	  });
	google.maps.event.addListener(marker, 'click', function() {
	  infowindow.open(map,marker);
	  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>


<div id="location">Sun Kun >> Contact</div>
<h2>Keep in touch</h2>
<div id="maintxt">
<p><img src="images/mail.png" class="right" style="margin-top:11px;" alt="contactme" /></p>

<blockquote>

<span>Address:</span>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;Room 503,<br />
&nbsp;&nbsp;&nbsp;&nbsp;Li Ka Shing Institute of Health Sciences,<br />
&nbsp;&nbsp;&nbsp;&nbsp;Prince of Wales Hospital,<br />
&nbsp;&nbsp;&nbsp;&nbsp;CityOne, Shatin, Hong Kong
</p>

<span>Email:</span>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;sunkun (AT) cuhk.edu.hk</a><br />
&nbsp;&nbsp;&nbsp;&nbsp;hellosunking (AT) gmail.com</a><br />
</p>

<span>Phone:</span>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;+852-3763-6015<br />
</p>
</blockquote>
<br /><br />
<!-- Google map -->
<div id="googleMap" style="width:640px;height:480px;"></div>


</div>

<?php
SKfooter();
?>
