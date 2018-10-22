<?php
require_once( 'util.php' );
SKheader();
SKnavigator( 'int' );
?>

<div id="location">Sun Kun >> Interests</div>
<h2>Cozy life</h2>
<div id="maintxt">
<!--
The free dewplayer is obtained from: http://www.alsacreations.fr/dewplayer-en
Here QingHuaCi (playered using GuZheng) is present.

Now a HTML5 audio player is used to replace this one for better compatibility
-->
<!--
<object type="application/x-shockwave-flash" data="images/dewplayer-vol.swf" width="240" height="20" id="dewplayer" name="dewplayer">
<param name="movie" value="images/dewplayer-vol.swf" />
<param name="flashvars" value="mp3=images/QingHuaCi_GuZheng.mp3&autoplay=false&autoreplay=true" />
<param name="wmode" value="transparent" />
</object><br /><br />
-->

<audio controls loop style="width: 75%;">
  <source src="images/QingHuaCi_GuZheng.mp3" type="audio/mpeg">
	Your browser does not support the HTML5 audio element.
</audio><br /><br />


<span>After work</span>

<table id="interestTable">

<tr><td><p><img src="images/life.with.wife.png" class="left" alt="life.with.wife" />
&nbsp;&nbsp;&nbsp;I always hangout with my wife after work ("life with wife").
To me, no one could be more important than her and time could be boring and unreal without her.
The happiness of my life is to spend time with my wife and makes days be dates.
I know that we will be together forever and I wish she could be happy forever.</p>
</td></tr>

<tr><td><p><img src="images/mountain.png" class="right" alt="mountain" />
&nbsp;&nbsp;&nbsp;When I am free, I like to hike in the mountains with my favourite music.
I believe that the mountains are the biggest gift from mother nature,
they always attract me to feel the wind at the peak.</p>
</td></tr>

<tr><td><p><img src="images/bayern.png" class="left" alt="bayern" >
&nbsp;&nbsp;&nbsp;I am a big fan of football and my heart belongs to Bayern Munich.
I have being following Bayern for ten years, during which we lost many times,
but we never give up our dream, and so does our dream. Finally in Wembley this year,
we defeated the old enemy who have beated us five times before and won the Champions League. 
Later on in Prague, we vanquished the opponent that we failed last year, using just the
same drama. In this immortal, epic season 2012-2013, we are the King of Europe.</p>
</td></tr>

<tr><td><p><img src="images/poem.png" class="right" alt="poem" />
&nbsp;&nbsp;&nbsp;Another love of me is the Chinese Literature, especially the poems,
they are the real art that will last forever. Most poems are short, however,
they are long enough to illustrate a whole world. You can not only see what the poets see
but also feel what they feel, which is the weakness of the photos and pictures since
nothing can be more beautiful and vivid than imagination.</p>
</td></tr>

<tr><td><p><img src="images/origami.png" class="left" alt="Origami" />
&nbsp;&nbsp;&nbsp;Origami is very interesting. I am now trying very hard to become
an amateur from a beginner.</p></td></tr>

</table>

</div>

<?php
SKfooter();
?>