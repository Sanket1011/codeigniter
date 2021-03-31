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
		<h3>Product Information</h3>

		<?php			
			$this->table->set_heading('Id', 'Name', 'Price', 'Created Date', 'Status');
			
			foreach ($data as $d):
				$this->table->add_row($d->id, $d->name, $d->price, $d->created, $d->status);
			endforeach;
			
			echo $this->table->generate();
		?>
		<br>
<a href=<?php echo base_url('reports/generate_products_pdf/');?> class="btn btn-primary ">Generate Products Report </a>
	</div>
</body>
</html>