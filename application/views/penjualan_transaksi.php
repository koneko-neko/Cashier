<?php if ($this->session->flashdata('notif')) : ?>
	<div id="hilang"
		class="flex mt-4 items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
		<?php echo $this->session->flashdata('notif'); ?>
	</div>
	<script>
		$('#hilang').delay('slow').slideDown('slow').delay(2500).slideUp(500);

	</script>
<?php endif; ?>
<div class="grid-cols-12 px-6">
	<div class="mt-4 mb-6">
		<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
			Form Penjualan Produk
		</h4>
		<div class="mb-8 grid grid-cols-4 gap-4">
			<div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
				<h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
					Produk Yang Akan Dijual
				</h4>
				<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
					<label class="block mt-4 text-sm">
						<span class="text-gray-700 dark:text-gray-400">Nama Pelanggan</span>
						<input type="text"
							class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
							name="kode_penjualan" value="<?= $namapelanggan?>" readonly>
					</label>
					<form action="<?= base_url('penjualan/addtemp')?>" method="post">
						<input type="hidden" name="id_pelanggan" value="<?= $id_pelanggan ?>">
						<label class="block mt-4 text-sm">
							<span class="text-gray-700 dark:text-gray-400">Nama Produk</span>
							<input type="hidden" name="kode_penjualan" value="<?= $nota ?>">
							<select name="id_produk"
								class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
								<?php foreach($produk as $pro): ?>
								<option value="<?= $pro['id_produk'] ?>">
									<?= $pro['nama'] ?> - <?= $pro['kode_produk'] ?>(<?= $pro['stok'] ?>)
								</option>
								<?php endforeach; ?>
							</select>
						</label>
						<label class="block mt-4 text-sm">
							<span class="text-gray-700 dark:text-gray-400">Jumlah</span>
							<input type="number"
								class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
								name="jumlah" placeholder="Jumlah barang yang dijual" required>
						</label>
						<button type="submit"
							class="w-full px-5 py-3 mt-5 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
							Masukkan Keranjang
						</button>
					</form>
				</div>
			</div>
			<div class="col-span-3 min-w-0 p-4 bg-white shadow-xs dark:bg-gray-800">
			<h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
					Daftar Produk yang Dipilih
				</h4>
				<div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
					<div class="w-full overflow-hidden rounded-lg shadow-xs">
						<div class="w-full overflow-x-auto">
							<table class="w-full whitespace-no-wrap">
								<thead>
									<tr
										class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
										<th class="px-4 py-3">No</th>
										<th class="px-4 py-3">Kode Barang</th>
										<th class="px-4 py-3">Prosuk</th>
										<th class="px-4 py-3">Jumlah</th>
										<th class="px-4 py-3">Harga</th>
										<th class="px-4 py-3">Total</th>
										<th class="px-4 py-3">Actions</th>
									</tr>
								</thead>
								<tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
									<?php $cek=0; $total=0; $no=1; foreach($temp as $row) { ?>
									<tr class="text-gray-700 dark:text-gray-400">
										<td class="px-4 py-3 text-sm">
											<?= $no;?>
										</td>
										<td class="px-4 py-3 text-sm">
											<?= $row['kode_produk']?>
										</td>
										<td class="px-4 py-3 text-sm">
											<?= $row['nama']?>
										</td>
										<td class="px-4 py-3 text-sm">
											<?= $row['jumlah']?>
											<?php
												if($row['jumlah']>$row['stok']){
													echo '<span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
													Produk Tidak Mencukupi</span>';
													$cek=1;
												} 
											?>
										</td>
										<td class="px-4 py-3 text-sm">
											Rp. <?= number_format($row['harga']);?>
										</td>
										<td class="px-4 py-3 text-sm">
											Rp. <?= number_format($row['jumlah']*$row['harga']);?>
										</td>
										<td class="px-2 py-3">
											<div class="flex items-center space-x-3 text-sm">
												<a href="<?= base_url('penjualan/hapus_temp/'.$row['id_temp'])?>"
													onClick="return confirm('Apakah Anda Yakin?')"
													class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
													aria-label="Delete">
													<svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
														viewBox="0 0 20 20">
														<path fill-rule="evenodd"
															d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
															clip-rule="evenodd"></path>
													</svg>
												</a>
											</div>
										</td>
									</tr>
									<?php $total=$total+$row['jumlah']*$row['harga']; $no++; } ?>
									<tr
										class="text-xs font-semibold tracking-wide text-left text-gray-500 border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
										<td class="px-4 py-3">
											TOTAL HARGA
										</td>
										<td class="px-4 py-3">-</td>
										<td class="px-4 py-3">-</td>
										<td class="px-4 py-3">-</td>
										<td class="px-4 py-3">-</td>
										<td class="px-4 py-3">Rp. <?= number_format($total);?></td>
										<td class="px-4 py-3">-</td>
									</tr>
								</tbody>
							</table>
							<form action="<?= base_url('penjualan/bayar_belanja')?>" method="post">
								<input type="hidden" name="id_pelanggan" value="<?= $id_pelanggan;?>">
								<input type="hidden" name="total_harga" value="<?= $total;?>">
								<?php if(($temp<>NULL) AND ($cek==0)){ ?>
									<button type="submit"
										class="w-full px-5 py-4 mb-5 mt-5 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
										Bayar
									</button>
								<?php } ?>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
