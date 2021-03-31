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
		<h3>Sales Information</h3>

		<?php			
			$this->table->set_heading('Product Id', 'OrderID', 'ProductId', 'Quantity', 'Total');
			
			foreach ($data as $d):
				$this->table->add_row($d->id, $d->order_id, $d->product_id, $d->quantity, $d->sub_total);
			endforeach;
			
			echo $this->table->generate();
		?>
		<br>
<a href=<?php echo base_url('reports/generate_sales_pdf/');?> class="btn btn-primary ">Generate Sales Report </a>
	</div>
</body>
</html>