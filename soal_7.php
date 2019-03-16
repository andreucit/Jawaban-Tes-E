<?php
require_once("koneksi.php");
$query2 = " SELECT b.id,
			 b.name
			 as category_name, GROUP_CONCAT(a.name) as categories
			 from products a
			 left join categories b on a.category_id = b.id
			 group by b.id";
$select2=	mysql_query($query2);
var_dump($link);die();
?>

<!DOCTYPE html>
<html>
<head>	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="table_css.css">
		<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
</head>
			
				<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
  Tambah Category
</button>
<br>

<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body col-md 12">
        <form action="inputdata.php" method="post">
        	<table >
        		<tr>
        			<td>Category</td>
        			<td><input type="text" name="name" size="35"></td>
        		</tr>
        	</table>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button class="btn btn-primary">Save changes</button>
      </div>
     </form>
    </div>
  </div>
</div>


			 
			
			 
				<body>
					<table class="table">
						<tr>
							<th>Id</th>
							<th>category_name</th>
							<th>products</th>
						</tr>
						<tr>
							<td>1</td>
							<td>Andi Saputra</td>
							<td>Magelang</td>
						</tr>
					</table>	
</body>
</html>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>	
