<?php include "admin_header.php"; ?>

<div class="container-fluid"><!-- Page-Title -->
	<div class="row">
		<div class="col-12">
			<div class="card m-b-30">
				<div class="card-body">

					   <form action="docu_status.php" method="post">
	             <div class="form-group">
	              <input type="text" class="form-control" name='search' placeholder="Tracking Id Only">
	               
	             </div>
	             <button type="submit" class=" btn btn-primary btn-lg btn-block">Track</button>
           </form>
					
					<?php
 	$conn = mysqli_connect("localhost", "root", "", "itrace") or die('error');

 	if (isset($_POST['search'])) {
 		$search = mysqli_real_escape_string($conn, $_POST['search']);
 		$sql = "SELECT * FROM documents where tracking_id LIKE '%$search%'";
 		$result = mysqli_query($conn, $sql);
 		$queryResult = mysqli_num_rows($result);

 		if ($queryResult > 0 ) {
 			while ($row = mysqli_fetch_assoc($result)) {
       	  echo" <div class='main-content' style='margin-top: 50px;'>";
     	  echo "<div class='container-fluid'>";
      	  echo "<div class='table table-hover'>";
		  echo "<div class='table-responsive'>";
          echo "<p> Document Title:   <b>".$row['doc_title']."</b></p> ";
          echo "<p> Document Details:   <b>".$row['doc_details']."</b></p>";
          echo "<p> Document Send Date:   <b>".$row['doc_send_date']."</b></p>";
          echo "<p> Document Details:   <b>".$row['doc_details']."</b></p>";

          echo "<p> Document Type: <b>";
							if($row['docu_type']==1) {
							?>
							<span class='label label-info'>Reports</span>
							<?php
							} elseif ($row['docu_type'] == 2){
							?>
							<span class='label label-warning'>Letter</span>
							<?php
							} elseif ($row['docu_type'] == 3) {
							?>
							<span class='label label-warning'>Endorsement</span>
							<?php
							} elseif ($row['docu_type'] == 4) {
							?>
							<span class='label label-warning'>Travel Order</span>
							<?php
							} elseif ($row['docu_type'] == 5) {
							?>
							<span class='label label-warning'>Program of Work</span>
							<?php
							} elseif ($row['docu_type'] == 6) {
							?>
							<span class='label label-warning'>Contract of Service</span>
							<?php
							} elseif ($row['docu_type'] == 7) {
							?>
							<span class='label label-warning'>Memorandum of Agreement</span>
							<?php
							} elseif ($row['docu_type'] == 8) {
							?>
							<span class='label label-warning'>Form 6 - Travel Permit</span>
							<?php
							} elseif ($row['docu_type'] == 9) {
							?>
							<span class='label label-warning'>Form 7 - Payroll</span>
							<?php
							} elseif ($row['docu_type'] == 10) {
							?>
							<span class='label label-warning'>SARO</span>
							<?php
							} elseif ($row['docu_type'] ==11) {
							?>
							<span class='label label-warning'>NOSCA</span>
							<?php
							} elseif ($row['docu_type'] == 12) {
							?>
							<span class='label label-warning'>Loan Application</span>
							<?php
							}

							echo "</b></p>";
          echo "<p> Document Status: <b>";
							if($row['status']==1) {
							?>
							<span class='label label-info'>On Progress</span>
							<?php
							} elseif ($row['status'] == 2){
							?>
							<span class='label label-warning'>Received</span>
							<?php
							} elseif ($row['status'] == 3) {
								?>
							<span class='label label-warning'>On Review</span>
							<?php
							} elseif ($row['status'] == 4) {
								?>
								<span class='label label-warning'>Complete</span>
								<?php
							}

							echo "</b></p>";
              echo "</div>";
              echo "</div>";
               echo "</div>";

 			}
 			   

 		} else {
 			echo "<center><h1 style='margin-top:10px;font-size:30px'>No Document Record</center>";
 		}
 	}



 ?>


				</div>
			</div>
		</div>
	</div>
</div>


<?php include "admin_footer.php"; ?>