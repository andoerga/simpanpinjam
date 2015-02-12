<?php

if(count($data) < 1){
	var_dump($data);
}else{
	foreach($data as $r){
		?>
<table>
	<tr>
		<td><?php echo $r['id']; ?></td>
		<td><?php echo $r['name']; ?></td>
	</tr>
</table>
		<?php
	}
}