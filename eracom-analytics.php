<?php 

/* Load Google Analytics
 ***********************
*/

function eracom_analytics() {

	$host = $_SERVER['HTTP_HOST'];
	 if ( $host == 'eracom.ch' ) {
?>
<script>
window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
ga('create','UA-109903139-1','auto');ga('send','pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
<?php
	}	
}
add_action('wp_footer', 'eracom_analytics', 99);
