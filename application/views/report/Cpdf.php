<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width:
			100%;
		}
		td, th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}
		
	</style>
</head>
<body>
	<div style="margin: 10px 0 0 10px;width: 600px">
		<h3>Customer Information</h3>

		<?php			
			$this->table->set_heading('Id', 'Name', 'Email', 'Phone', 'Address');
			
			foreach ($data as $d):
				$this->table->add_row($d->id, $d->name, $d->email, $d->phone, $d->address);
			endforeach;
			
			echo $this->table->generate();
		?>
		<br>
<a href=<?php echo base_url('reports/generate_user_pdf/');?> class="btn btn-primary ">Generate Customer Report </a>
	</div>
</body>
</html>