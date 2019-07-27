<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total=0;
				if ($keranjang=$this->cart->contents())
				{
					foreach ($keranjang as $items)
					{
						$grand_total = $grand_total + $items['subtotal'];
					}
					echo "<h4>Total Belanja Anda: Rp.".number_format($grand_total, 0,',','.');
				}
				?>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>