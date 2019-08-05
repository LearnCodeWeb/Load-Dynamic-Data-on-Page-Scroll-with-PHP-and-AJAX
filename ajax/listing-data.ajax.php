<?php include_once('../config.php');
if(isset($_POST['getData']) and $_POST['getData']=="ok"){
	$sSQL	=	'SELECT * FROM countries ORDER BY countryName ASC';
	$result	=	$db->getRecFrmQry($sSQL.' LIMIT '.$_REQUEST["start"].', '.$_REQUEST["limit"].' ');
}
$n  	=   1;
foreach($result as $val){
	?>	
	<div class="list-group">
		<a href="#" class="list-group-item list-group-item-action">
			<div class="d-flex w-100 justify-content-between">
				<h5 class="mb-1"><?php echo mb_strtoupper($val['countryName'],'UTF-8');?></h5>
				<small><?php echo $val['currencyCode'];?></small>
			</div>
			<small><?php echo 'Captial: '.$val['capital'].' ('.$val['continentName'].')';?></small>
		</a>
	</div>
	<?php
	$n++;
}
?>