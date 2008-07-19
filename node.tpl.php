<table class="contentbody" cellpadding="4" cellspacing="1" width="100%">
 <tbody><tr>
  <td class="heads"><a class="heads" href="<?php print $node_url ?>"><?php print $title ?></a></td>
 </tr>
 <tr>
  <td class="contentodd">
<?php print $content ?>	
  </td>
 </tr>
 
 <?php
 if ($links) {
 ?>
 
 <tr>
  <td class="contenteven">
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
	 <tbody><tr>
<?php print $links; ?>
	 </tr>
	</tbody></table>
  </td>
 </tr>
 
 <?php
 }
 ?>
 
</tbody></table>
<table border="0" cellpadding="0" cellspacing="0">
 <tbody><tr>
  <td><img alt="" src="<?php print base_path() . path_to_theme() ?>/images/blank.gif" border="0" height="5" width="1"></td>
 </tr>
</tbody></table>
