<?php include('includes/header.php') ?>
<?php include('includes/nav.php') ?>

<?php 
	if(getPermit()==0 || getPermit()==3){
		$cas=show_ca_users();
		ca_calls();
	}else{
		redirect("./logout.php");
	}

?>

	<div class='row justify-content-md-center'>
		<div class="col-md-auto">
		<form class="form-inline" method="post" role="form" id="show_data">
		  <div class="form-group mb-2">
		    <label for="staticEmail2" class="sr-only">Email</label>
		    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Enter the Anwesha ID:">
		  </div>
          <input type="hidden" value="search_ca" name="search_ca" id="search_ca">
		  <div class="form-group mx-sm-3 mb-2">
		    <label for="anweshaid" class="sr-only">Celesta ID</label>
		    <input type="text" class="form-control" name='anweshaid' id="anweshaid" placeholder="ANW1504" value="ANW">
		  </div>
		  <button type="submit" name="get_details" class="btn btn-primary mb-2" target="_blank">Update Points</button>
		</form>
		</div>
	</div>

	<div class="jumbotron">
		<?php display_message() ;?>
		<h1 class="text-center">List of Campus Ambassadors</h1>
	</div>

	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Anwesha ID</th>
				<th scope="col">Name</th>
			 	<th scope="col">School/College</th>
			 	<th scope="col">Phone</th>
				<th scope="col">Score</th>
			</tr>
		</thead>
		<tbody>
			<?php $count=1; foreach($cas as $ca) { ?>
				<tr>
					<th scope='row'><?php echo $count++; ?></th>
					<td><?php echo $ca['anweshaid']; ?></td>
					<td><?php echo $ca['first_name'] ." ". $ca['last_name']; ?></td>
					<td><?php echo $ca['college']; ?></td>
					<td><?php echo $ca['phone']; ?></td>
					<td><?php echo $ca['score']; ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>	

<?php include('includes/footer.php') ?>	