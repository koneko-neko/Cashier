<div class="container grid px-6 mx-auto">
	<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
		Pemilu 2024
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
			Tambah Suara
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
			<!-- Moda	l body -->
			<form action="<?= base_url('suara/simpan')?>" method="post">
				<div class="mt-4 mb-6">
					<!-- Validation inputs -->
					<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
						Tambah Suara
					</h4>
					<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
						<label class="block text-sm">
							<span class="text-gray-700 dark:text-gray-400">
								Total Suara
							</span>
							<input
								class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
								type="number" name="total_suara_17" placeholder="total" required />
						</label>
						<label class="block mt-4 text-sm">
							<span class="text-gray-700 dark:text-gray-400">
								Total Suara Sah
							</span>
							<input
								class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
								type="number" name="total_sah_17" placeholder="total salah" required />
						</label>
						<label class="block mt-4 text-sm">
							<span class="text-gray-700 dark:text-gray-400">
								Total Tidak Sah
							</span>
							<input
								class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
								type="number" name="total_tidaksah_17" placeholder="total tidak sah" required />
						</label>
						<label class="block mt-4 text-sm">
							<span class="text-gray-700 dark:text-gray-400">
								No 1
							</span>
							<input
								class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
								type="number" name="suara_no1_17" placeholder="stok" required />
						</label>
						<label class="block mt-4 text-sm">
							<span class="text-gray-700 dark:text-gray-400">
								No 2
							</span>
							<input
								class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
								type="number" name="suara_no2_17" placeholder="stok" required />
						</label>
						<label class="block mt-4 text-sm">
							<span class="text-gray-700 dark:text-gray-400">
								No 3
							</span>
							<input
								class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
								type="number" name="suara_no3_17" placeholder="stok" required />
						</label>
						<label class="block mt-4 text-sm">
							<span class="text-gray-700 dark:text-gray-400">
								Nama TPS
							</span>
							<input
								class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
								type="text" name="nama_tps_17" placeholder="Kode Produk" required />
						</label>
					</div>
				</div>
				<footer class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
					<button @click="closeModal"
						class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
						Cancel
					</button>
					<button type="submit"
						class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
						Simpan
					</button>
				</footer>
			</form>
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
						<th class="px-4 py-3">Total Suara</th>
						<th class="px-4 py-3">Total Sah</th>
						<th class="px-4 py-3">Total Tidak sah</th>
						<th class="px-4 py-3">No 1</th>
						<th class="px-4 py-3">No 2</th>
						<th class="px-4 py-3">No 3</th>
						<th class="px-4 py-3">Nama TPS</th>
					</tr>
				</thead>
				<?php $no=1; foreach($suara as $ara) { ?>
					<tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
						<tr class="text-gray-700 dark:text-gray-400">
							<td class="px-4 py-3 text-sm"><?= $no; ?>
							</td>
							<td class="px-4 py-3 text-sm"><?= $ara['total_suara_17']?>
							</td>
							<td class="px-4 py-3 text-sm"><?= $ara['total_sah_17']?>
							</td>
							<td class="px-4 py-3 text-sm"><?= $ara['total_tidaksah_17']?>
							</td>
							<td class="px-4 py-3 text-sm"><?= $ara['suara_no1_17']?>
							</td>
							<td class="px-4 py-3 text-sm"><?= $ara['suara_no2_17']?>
							</td>
							<td class="px-2 py-3 text-sm"><?= $ara['suara_no3_17']?>
							</td>
							<td class="px-2 py-3 text-sm"><?= $ara['nama_tps_17']?>
							</td>
						</tr>
					</tbody>
					<?php $no++; } ?>
				</table>
			</div>
		</div>
	</div>
</div>
