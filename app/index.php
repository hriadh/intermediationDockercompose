<?php

session_start();
include('dbcon.php');

include('header.php');
include('navbar.php');


?>

<div class="py-5">
	<div class="container">
		<div class="row">

				<?php include('message.php'); ?>

			<div class="col-md-12">


				<div class="card-header">
	
	<div class="row">
		<div class="col-md-5">
			<form action="" method="GET">

			<div class="input-group mb-3">
			  <input type="text" name="chercherservice" required 
			  value="<?php if(isset($_GET['chercherservice'])) 
			  {
			  	echo $_GET['chercherservice'];
			  }
			  ?>" 
			  class="form-control" placeholder="Cherchez vous un service">
			  			    
			   <button type="submit" class="btn btn-primary">Chercher</button>
			 </div>
			 </form>
		</div>
	
	
	</div>
	
	
</div>

<div class="col-md-12">
	<div class="card mt-4">
		<div class="card-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th> Nom service </th>
						<th> Description service </th>
						<th> Cout </th>
						<th> Réserver </th>
						
					</tr>
					
				</thead>
				<tbody>

					<?php


		if (isset($_GET['chercherservice'])) 
		{
			$rechercher = $_GET['chercherservice'];
			$query = "SELECT * FROM service WHERE CONCAT(nomService,descriptionService) LIKE '%$rechercher%' ";
			$query_run = mysqli_query($con, $query);

			if (mysqli_num_rows ($query_run) > 0)
			{
				foreach($query_run as $service)
				{
					?>

					<tr>
						<td ><?= $service['nomService'] ?> </td>
						<td ><?= $service['descriptionService'] ?> </td>
						<td ><?= $service['cout'] ?> </td>
						<td> <button type="submit" name="reserverrdvclient" class="btn btn-primary">Réserver</button> </td>

					</tr>

					<?php
				}
			}
			else{
				?>

				<tr>
						<td colspan="3">Aucun résultat trouvé</td>

				</tr>

				<?php 

			}

		}


		?>

					

				</tbody>
			</table>
	
		</div>
	
	</div>
	
</div>
			</div>
			
		</div>
	</div>
</div>

<?php

include('footer.php');

?>