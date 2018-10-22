<?php

//require_once( 'mysql.login.php' );

function SKheader()
{
	print '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Template-Author" content="Caleb Pierce - ridgehkr.com" />
<meta name="Author" content="Sun Kun" />
<link rel="shortcut icon" href="/favicon.ico" />
<title>Kun Sun -- Bioinformatician@CUHK</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script>
(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');

ga(\'create\', \'UA-49666252-2\', \'auto\');
ga(\'send\', \'pageview\');

</script>

</head>
';
}

function SKnavigator( $here )
{
	$prefix = array( '&gt;&nbsp;&nbsp;', '&gt;&nbsp;&nbsp;', '&gt;&nbsp;&nbsp;', '&gt;&nbsp;&nbsp;',
					 '&gt;&nbsp;&nbsp;', '&gt;&nbsp;&nbsp;', '&gt;&nbsp;&nbsp;' );
	$links  = array( 'index.php', 'briefcv.php', 'research.php', 'software.php',
					 'publication.php', 'interests.php', 'contact.php' );
	$i = -1;
	switch( $here )
	{
		case 'home': $i=0; break;
		case 'cv'  : $i=1; break;
		case 'res' : $i=2; break;
		case 'soft': $i=3; break;
		case 'pub' : $i=4; break;
		case 'int' : $i=5; break;
		case 'cont': $i=6; break;
		default : break;
	}
	if( $i >= 0 )
	{
		$prefix[$i] = '&gt;&gt;';
		$links[$i] = '#';
	}
//	print "<!-- $here, $i\n";
//	print $links;
//	print "\n-->\n";

	print '<body>
	<div id="container">
	<table id="c_container" border="0" cellpadding="0" cellspacing="0">
	<tbody>
		<tr id="top">
			<td colspan="2">
				<div id="header">
					<div id="header_text">';
	print SKgetMotto();
	print '</div>
				</div>
			</td>
		</tr>	
		<tr>	
		<td id="nav_container" align="left" valign="top">
		<h3></h3>
		<ul>';
	print "	<li><span>$prefix[0]</span> <a href=\"$links[0]\">Home</a></li>
			<li><span>$prefix[1]</span> <a href=\"$links[1]\">Brief CV</a></li>
			<li><span>$prefix[2]</span> <a href=\"$links[2]\">Research</a></li>
			<li><span>$prefix[3]</span> <a href=\"$links[3]\">Software</a></li>
			<li><span>$prefix[4]</span> <a href=\"$links[4]\">Publications</a></li>
			<li><span>$prefix[5]</span> <a href=\"$links[5]\">Interests</a></li>
			<li><span>$prefix[6]</span> <a href=\"$links[6]\">Contact</a></li>
		</ul>

		<p>
		<a href=\"http://validator.w3.org/check?uri=referer\" target=\"_blank\">
		<img src=\"http://www.w3.org/Icons/valid-xhtml10\" alt=\"Valid XHTML 1.0 Transitional\" height=\"31\" width=\"88\" /></a>
		</p>
		<p>
		<a href=\"http://jigsaw.w3.org/css-validator/check/referer\" target=\"_blank\">
        <img style=\"border:0;width:88px;height:31px\" src=\"http://jigsaw.w3.org/css-validator/images/vcss\" alt=\"Valid CSS!\" /></a>
		</p>

		</td>
		<td id=\"mc_container\" align=\"left\" valign=\"top\">
";
}

function SKfooter()
{
	print '
		</td>
		</tr>
		<tr>
		<td colspan="2">
		<div id="footer">
			<div id="footer_text">
			<span>2013-2018 &copy; SUN, Kun</span><br />
			<p>
			<a href="http://www.lihs.cuhk.edu.hk/" target="_blank">Li Ka Shing Institute of Health Sciences</a> |
			<a href="http://www.cpy.cuhk.edu.hk/" target="_blank">Department of Chemical Pathology</a>
			<br />
			<a href="http://www.cuhk.edu.hk/" target="_blank">The Chinese University of Hong Kong</a>,
			Hong Kong SAR, China<br />
			</p>
			</div>
		</div>
		</td>
		</tr>
	</tbody>
	</table>
</div>
</body></html>';
}

function SKgetMotto()
{
	return	"<span>Kun Sun, Ph.D.</span><br />" .
			"<span>Computational Biologist</span>";
}

?>

