<?php include 'inc/header.php' ?>


	<div class="panel panel-default">
		<div class="panel-heading">
			<h2> <a class="btn btn-success" href="add.php"> Add Student </a>
				<a class=" btn btn-info pull-right" href="">View All </a>
			</h2>
		</div>

	<div class="panel-body">

		<div class="well text-center" style="font-size: 20px;">
			<strong>Date: </strong> <?php $cur_date = date("Y-m-d"); echo $cur_date; ?>
		</div>

	<form action="" method="Post">
	<table class="table table-striped">
		<tr>
			<th>Serial </th>
			<th>Student </th>
			<th>USN </th>
			<th>Attendance</th>
		</tr>

		<tr>
			<td> 1</td>
			<td> Abhijat Dakshesh</td>
			<td> 1RF21IS001</td>
			<td> <input type="radio" name="attend" value="present">P
				<input type="radio" name="attend" value="absent">A

			</td>
		</tr>

		<tr>
			<td> 2</td>
			<td> Darshan Gowda</td>
			<td> 1RF21IS025</td>
			<td> <input type="radio" name="attend" value="present">P
				<input type="radio" name="attend" value="absent">A

			</td>
		</tr>
			

	</table>



	<input type="submit" class ="btn btn-primary" name = "submit" value ="Submit">










</form>
</div>






</div>

<?php include 'inc/footer.php' ?>














	