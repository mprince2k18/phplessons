<?php
	require 'session.php';
	require 'db.php';

	$select_query_db	=	"SELECT * FROM form_info";
	$return				=	mysqli_query($db_connecttion,$select_query_db);
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.2/css/mdb.min.css" rel="stylesheet">
</head>
<body>
	<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">ID
      </th>
      <th class="th-sm">Name
      </th>
      <th class="th-sm">Email
      </th>
      <th class="th-sm">Phone
      </th>
     
   
    </tr>
  </thead>
 <tbody>

<?php 
	foreach ($return as $value) {
		# code...
	
 ?>
    <tr>
      <td><?php echo $value['id']; ?></td>
      <td><?php echo $value['name']; ?></td>
      <td><?php echo $value['email']; ?></td>
      <td><?php echo $value['phone']; ?></td>
    </tr>
<?php 
	}
 ?>
</table>


<script type="text/javascript">
	$(document).ready(function () {
	$('#dtBasicExample').DataTable();
	$('.dataTables_length').addClass('bs-select');
});
</script>


</body>
</html>