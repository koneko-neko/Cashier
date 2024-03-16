<div class="container grid px-6 mx-auto">
    <div class="grid-cols-12 px-6">
	    <div class="mt-4 mb-6">
			<body class="bg-gray-50 dark:bg-slate-900">
				<!-- Invoice -->
				<div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10">
					<div class="grid-cols-12 px-6">
						<!-- Card -->
						<div class="flex flex-col p-4 sm:p-10 bg-white shadow-md rounded-xl dark:bg-gray-800">
							<!-- Grid -->
							<div class="flex justify-between">
								<div>
									<h1 class="mt-2 text-lg md:text-3xl font-semibold text-blue-600 dark:text-white">
										KASIR RC</h1>
								</div>
							</div>
							<!-- End Grid -->

							<!-- Grid -->
							<div class="mt-8 grid sm:grid-cols-2 gap-3">
							<div class="text-end">
									<h2 class="text-2xl md:text-3xl font-semibold text-gray-800 dark:text-gray-200">
										#<?= $nota ?></h2>
									<address class="mt-4 not-italic text-gray-800 dark:text-gray-200">
										Jl. Merdeka 404, Kra<br>
										Phone : (03456783456)<br>
										Email : konekko@gmail.com<br>
									</address>
								</div>
								<div class="sm:text-end space-y-2">
									<!-- Grid -->
									<div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
										<dl class="grid sm:grid-cols-5 gap-x-3">
											<dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">
												Bill to </dt>
											<dd class="col-span-2  font-semibold text-gray-500">:: <?= $penjualan->nama;?></dd>
										</dl>
										<dl class="grid sm:grid-cols-5 gap-x-3">
											<dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">
												Alamat </dt>
											<dd class="col-span-2 text-gray-500">:: <?= $penjualan->alamat;?></dd>
										</dl>
										<dl class="grid sm:grid-cols-5 gap-x-3">
											<dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">
												No HP </dt>
											<dd class="col-span-2 text-gray-500">:: <?= $penjualan->telp;?></dd>
										</dl>
										<dl class="grid sm:grid-cols-5 gap-x-3">
											<dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">
												Invoice Date :</dt>
											<dd class="col-span-2 text-gray-500">:: <?php echo date('Y-m-d')?></dd>
										</dl>
									</div>
								</div>
							</div>
							<!-- End Grid -->

							<!-- Table -->
							<div class="mt-6">
								<div class="border border-gray-200 p-4 rounded-lg space-y-4 dark:border-gray-700">
									<div class="hidden sm:grid sm:grid-cols-5">
										<div class="sm:col-span-1 text-xs font-medium text-gray-500 uppercase">Kode Barang</div>
										<div class="text-start text-xs font-medium text-gray-500 uppercase">Produk</div>
										<div class="text-start text-xs font-medium text-gray-500 uppercase">Jumlah</div>
										<div class="text-end text-xs font-medium text-gray-500 uppercase">Harga</div>
										<div class="text-end text-xs font-medium text-gray-500 uppercase">Total</div>
									</div>
									
									<div class="hidden sm:block border-b border-gray-200 dark:border-gray-700"></div>
									
									<div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
									<?php $total=0; $no=1; foreach($detail as $row) { ?>
										<div class="col-span-full sm:col-span-1">
											<h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Kode Barang</h5>
											<p class="font-medium text-gray-800 dark:text-gray-200"><?= $row['kode_produk']?></p>
										</div>
										<div>
											<h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Produk</h5>
											<p class="text-gray-800 dark:text-gray-200"><?= $row['nama']?></p>
										</div>
										<div>
											<h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Jumlah</h5>
											<p class="text-gray-800 dark:text-gray-200"><?= $row['jumlah']?></p>
										</div>
										<div>
											<h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Harga
											</h5>
											<p class="sm:text-end text-gray-800 dark:text-gray-200">Rp. <?= number_format($row['harga']);?></p>
										</div>
										<div>
											<h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Total
											</h5>
											<p class="sm:text-end text-gray-800 dark:text-gray-200">Rp. <?= number_format($row['jumlah']*$row['harga']);?></p>
										</div>
									<?php $total=$total+$row['jumlah']*$row['harga']; $no++; } ?>
									</div>
									<div class="sm:hidden border-b border-gray-200 dark:border-gray-700"></div>
									<div class="hidden sm:block border-b border-gray-200 dark:border-gray-700"></div>
									<div class="hidden sm:grid sm:grid-cols-6">
										<div class="sm:col-span-5 text-gray-800 dark:text-gray-200">SUBTOTAL</div>
										<div class="sm:col-span-1 text-gray-800 dark:text-gray-200">Rp. <?= number_format($total);?></div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Card -->

						<!-- Buttons -->
						<div class="mt-6 flex justify-end gap-x-3">
							<a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
								href="<?= base_url('penjualan/print'.$nota);?>">
								<svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
									height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
									stroke-linecap="round" stroke-linejoin="round">
									<polyline points="6 9 6 2 18 2 18 9" />
									<path
										d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
									<rect width="12" height="8" x="6" y="14" /></svg>
								Print
							</a>
						</div>
						<!-- End Buttons -->
					</div>
				</div>
				<!-- End Invoice -->
			</body>
		</div>
	</div>

</div>
