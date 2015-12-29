     <h1 class="text-center">Hello <strong><?=$name?>!</strong></h1>
        <h2 class="text-center">Here's your current history:</h2>
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <table class="table table-striped margin-top">
    		<thead>
      			<tr>
				<th>Name</th>
        			<th>Spouse/Offspring</th>
				<th>Type</th>
        			<th>Result</th>
      			</tr>
    		</thead>
    		<tbody>
			<?php foreach ($history as $row): ?>
      				<tr>
        				<td><?=$row["name"]?></td>
        				<td><?=$row["so"]?></td>
        				<td><?=$row["type"]?></td>
					<td><?=$row["result"]?></td>
      				</tr>
 			<?php endforeach ?>
    		</tbody>
  	</table>
            </div>
        </div>
<?=$end?>
