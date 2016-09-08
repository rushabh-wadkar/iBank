
<table border="50px">
	<tr>
			
			<th class="info_table"> Withdraw Transaction Information (Last 5)</th>
			<th class="date_table"> Date </th>
	</tr>
	<?php
		if(count($display_withdraw)==0)
		{
			echo "<tr>";
					echo "<td class='info_table' colspan='2'><center> --- No Withdraws From Your Account --- </center></td>";
			echo "</tr>";
		}
		for($i=0;$i<count($display_withdraw);$i++)
		{
			echo "<tr>";
					echo "<td class='info_table'>".$display_withdraw[$i]['wid']."</td>";
					echo "<td class='date_table'>".$display_withdraw[$i]['dow']."</td>";
			echo "</tr>";
		}
	?>
</table>

<br>

<table border="50px">
	<tr>
			
			<th class="info_table"> Transfer Transaction Information (Last 5)</th>
			<th class="date_table"> Date </th>
	</tr>
		<?php
		if(count($display_transfer)==0)
		{
			echo "<tr>";
					echo "<td class='info_table' colspan='2'><center> --- No Transfers From Your Account --- </center></td>";
			echo "</tr>";
		}
		for($i=0;$i<count($display_transfer);$i++)
		{
			echo "<tr>";
					echo "<td class='info_table'>".$display_transfer[$i]['tid']."</td>";
					echo "<td class='date_table'>".$display_transfer[$i]['dot']."</td>";
			echo "</tr>";
		}
	?>
</table>