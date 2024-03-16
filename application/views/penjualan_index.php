<div class="container grid px-6 mx-auto">
	<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
		Penjualan Hari Ini
	</h2>
	<?php if ($this->session->flashdata('notif')) : ?>
	<div id="hilang"
		class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
		<?php echo $this->session->flashdata('notif'); ?>
	</div>
	<script>
		$('#hilang').delay('slow').slideDown('slow').delay(2500).slideUp(500);
	</script>
	<?php endif; ?>
	<div>
		<button @click="openModal"
			class="px-3 py-2 mt-1 mb-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
			Tambah Penjualan
		</button>
	</div>
	<div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
		x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
		x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
		class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
		<!-- Modal -->
		<div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150"
			x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
			x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
			x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="closeModal"
			@keydown.escape="closeModal"
			class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
			role="dialog" id="modal">
			<!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
			<header class="flex justify-end">
				<button
					class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
					aria-label="close" @click="closeModal">
					<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
						<path
							d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
							clip-rule="evenodd" fill-rule="evenodd"></path>
					</svg>
				</button>
			</header>
			<div class="mt-4 mb-6">
				<!-- Validation inputs -->
				<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
					Tambah Penjualan
				</h4>
				<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
					<div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
						<div class="w-full overflow-hidden rounded-lg shadow-xs">
							<div class="w-full overflow-x-auto">
								<table class="w-full whitespace-no-wrap">
									<thead>
										<tr
											class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
											<th class="px-4 py-3">No</th>
											<th class="px-4 py-3">Nama</th>
											<th class="px-4 py-3">Alamat</th>
											<th class="px-4 py-3">Telp</th>
											<th class="px-4 py-3">Aksi</th>
										</tr>
									</thead>
									<tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
										<?php $no=1; foreach($pelanggan as $row) { ?>
										<tr class="text-gray-700 dark:text-gray-400">
											<td class="px-4 py-3 text-sm">
												<?= $no;?>
											</td>
											<td class="px-4 py-3 text-sm">
												<?= $row['nama']?>
											</td>
											<td class="px-4 py-3 text-sm">
												<?= $row['alamat']?>
											</td>
											<td class="px-4 py-3 text-sm">
												<?= $row['telp']?>
											</td>
											<td class="px-2 py-3">
												<div class="flex items-center space-x-3 text-sm">
													<a href="<?= base_url('penjualan/transaksi/'.$row['id_pelanggan'])?>"
														class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
														aria-label="Edit">
														<button class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
														Pilih
														</button>
													</a>
												</div>
											</td>
										</tr>
										<?php $no++; } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
		<div class="w-full overflow-hidden rounded-lg shadow-xs">
			<div class="w-full overflow-x-auto">
				<table class="w-full whitespace-no-wrap">
					<thead>
						<tr
							class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
							<th class="px-4 py-3">No</th>
							<th class="px-4 py-3">No Nota</th>
							<th class="px-4 py-3">Nominal</th>
							<th class="px-4 py-3">Pelanggan</th>
							<th class="px-4 py-3">Aksi</th>
						</tr>
					</thead>
					<tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
						<?php $no=1; foreach($user as $row) { ?>
						<tr class="text-gray-700 dark:text-gray-400">
							<td class="px-4 py-3 text-sm">
								<?= $no;?>
							</td>
							<td class="px-4 py-3 text-sm">
								#<?= $row['kode_penjualan']?>
							</td>
							<td class="px-4 py-3 text-sm">
								Rp. <?= number_format($row['total_harga']);?>
							</td>
							<td class="px-4 py-3 text-sm">
								<?= $row['nama']?>
							</td>
							<td class="px-2 py-3">
								<div class="flex items-center space-x-3 text-sm">
									<a href="<?= base_url('penjualan/invoice/'.$row['kode_penjualan'])?>"
										class="px-3 py-2 mt-1 mb-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
										aria-label="Edit">
										Cek
									</a>
								</div>
							</td>
						</tr>
						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
