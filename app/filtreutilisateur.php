<?php

session_start();
include('dbcon.php');

include('header.php');
include('navbar.php');


?>
<div class="card-body">
    <form action="" method="GET">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Date début</label>
                    <input type="date" name="datedebut" class="form-control">

                    					
                </div>
                    				
            </div>
        	<div class="col-md-4">
    			<div class="form-group">
                    <label>Date fin</label>
                    <input type="date" name="datefin" class="form-control">

                    					
                </div>
                    				
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <br>
                <button type="submit" class="btn btn-primary">Filtrer</button>

                    					
                </div>
                    				
            </div>
                    			
        </div>
                    		
    </form>

<div class="card mt-4">
	<div class="card-body">
	    <?php 
	        if (isset($_GET['datedebut']) && isset($_GET['datefin'])) 
	        {
	            $datedebut = date('Y-m-d H:i:s', strtotime($_GET['datedebut'])) ;
	            $datefin = date('Y-m-d H:i:s', strtotime($_GET['datefin']));
	            $query = "SELECT * FROM utilisateur WHERE dcreationUser BETWEEN '$datedebut' AND $datefin ";
	            $query_run = mysqli_query($con, $query );

	                    	if (mysqli_num_rows($query_run) > 0) 
	                    	{
	                    		foreach($query_run as $row)
	                    			{
	                    				echo $row ['nomUser'];
	                    			}
	                    	}
	        }


	        ?>

	                    			
	</div>
</div>


<?php

include('footer.php');

?>