<?php 
function _redirect($_url,$_timeout=null)
{
	if(empty($_timeout))
	{
		?>
		<script language="javascript">
			document.location = "<?=$_url?>";
		</script>
		<?php
	}
	else
	{
		?>
		<script language="javascript">
			setTimeout(function (){
				document.location = "<?=$_url?>";	
			}, <?=$_timeout?>);
			
		</script>
	<?php
	}
}

function cout($val)
{
	echo '<pre>';
	print_r($val);
	echo '</pre>';
}
?>