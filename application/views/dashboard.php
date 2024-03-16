<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<div class="container grid-cols-12 px-6 mx-auto">
	<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
		Halaman Dashboard
	</h2>
	<div class="mb-8 grid grid-cols-4 gap-4">
		<!-- Card -->
		<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
			<div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket"
					viewBox="0 0 16 16">
					<path
						d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5" />
				</svg>
			</div>
			<div>
				<p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
					Penjualan Har Ini
				</p>
				<p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
					Rp. <?= number_format($hari_ini); ?>
				</p>
			</div>
		</div>
		<!-- Card -->
		<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
			<div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
				<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
					<path fill-rule="evenodd"
						d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
						clip-rule="evenodd"></path>
				</svg>
			</div>
			<div>
				<p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
					Penjualan Bulan Ini
				</p>
				<p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
					Rp. <?= number_format($bulan_ini); ?>
				</p>
			</div>
		</div>
		<!-- Card -->
		<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
			<div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
				<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
					<path
						d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
					</path>
				</svg>
			</div>
			<div>
				<p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
					Transaksi Hari Ini
				</p>
				<p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
					<?= $transaksi; ?> Penjualan
				</p>
			</div>
		</div>
		<!-- Card -->
		<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
			<div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box"
					viewBox="0 0 16 16">
					<path
						d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z" />
				</svg>
			</div>
			<div>
				<p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
					Produk
				</p>
				<p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
					<?= $produk; ?>
				</p>
			</div>
		</div>
	</div>
	<div class="mb-8 grid grid-cols-1 gap-4">
		<div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
			<div>
				<?php
					$bulan_sekarang = date('M');
					$bulan_1 = date('M', strtotime("-1 Months"));
					$bulan_2 = date('M', strtotime("-2 Months"));
					$bulan_3 = date('M', strtotime("-3 Months"));
					$bulan_4 = date('M', strtotime("-4 Months"));
					$bulan_5 = date('M', strtotime("-5 Months"));

					$tanggal = date('Y-m', strtotime("-1 Months"));
					$this->db->select('SUM(total_harga) as total')->from('penjualan')->where("DATE_FORMAT(tanggal, '%Y-%m') = '$tanggal'");
					$bulanke_1 = $this->db->get()->row()->total;

					$tanggal = date('Y-m', strtotime("-2 Months"));
					$this->db->select('SUM(total_harga) as total')->from('penjualan')->where("DATE_FORMAT(tanggal, '%Y-%m') = '$tanggal'");
					$bulanke_2 = $this->db->get()->row()->total;

					$tanggal = date('Y-m', strtotime("-3 Months"));
					$this->db->select('SUM(total_harga) as total')->from('penjualan')->where("DATE_FORMAT(tanggal, '%Y-%m') = '$tanggal'");
					$bulanke_3= $this->db->get()->row()->total;

					$tanggal = date('Y-m', strtotime("-4 Months"));
					$this->db->select('SUM(total_harga) as total')->from('penjualan')->where("DATE_FORMAT(tanggal, '%Y-%m') = '$tanggal'");
					$bulanke_4 = $this->db->get()->row()->total;

					$tanggal = date('Y-m', strtotime("-5 Months"));
					$this->db->select('SUM(total_harga) as total')->from('penjualan')->where("DATE_FORMAT(tanggal, '%Y-%m') = '$tanggal'");
					$bulanke_5 = $this->db->get()->row()->total;

					if($bulanke_1==NULL){ $bulanke_1 = 0; }
					if($bulanke_2==NULL){ $bulanke_2 = 0; }
					if($bulanke_3==NULL){ $bulanke_3 = 0; }
					if($bulanke_4==NULL){ $bulanke_4 = 0; }
					if($bulanke_5==NULL){ $bulanke_5 = 0; }
				?>
				<canvas id="myChart" style="width:100%;max-width:500px"></canvas>
				<script>
					const xValues = ["<?= $bulan_5?>", "<?= $bulan_4?>", "<?= $bulan_3?>", "<?= $bulan_2?>", "<?= $bulan_1?>", "<?= $bulan_sekarang?>"];
					const yValues = [<?= $bulanke_5?>, <?= $bulanke_4?>, <?= $bulanke_3?>, <?= $bulanke_2?>, <?= $bulanke_1?>, <?= $bulan_ini?>];
					const barColors = ["red", "green", "blue", "orange", "brown", "purple"];

					new Chart("myChart", {
						type: "bar",
						data: {
							labels: xValues,
							datasets: [{
							backgroundColor: barColors,
							data: yValues
							}]}, 
						options: {
							legend: {
							display: false
							},
							title: {
							display: true,
							text: "Daftar Penjualan 5 Bulan Terakhir"
							}
						}
					});
				</script>
			</div>
		</div>
	</div>
</div>
