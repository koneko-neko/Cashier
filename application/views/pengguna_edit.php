<div class="container grid px-6 mx-auto">
<form action="<?= base_url('pengguna/update')?>" method="post">
<input type="hidden" name="id_user" value="<?= $user->id_user?>">
	<div class="mt-4 mb-6">
		<!-- Validation inputs -->
		<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
			Edit Data User
		</h4>
		<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
			<label class="block text-sm">
				<span class="text-gray-700 dark:text-gray-400">
					Username
				</span>
				<div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                  <input name="username" value="<?= $user->username ?>" readonly class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="Jane Doe">
                  	<div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
							<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
							<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
						</svg>
					</div>
                </div>
			</label>
			<label class="block mt-4 text-sm">
				<span class="text-gray-700 dark:text-gray-400">
					Nama
				</span>
				<div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                  <input type="text" name="nama" value="<?= $user->nama ?>" class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="Jane Doe">
                  	<div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
					  	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-neutral-fill" viewBox="0 0 16 16">
							<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m-3 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8"/>
						</svg>
					</div>
                </div>
			</label>
			<label class="block mt-4 text-sm">
				<span class="text-gray-700 dark:text-gray-400">
					Level
				</span>
				<select name="level" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
					<option value="Admin" <?php if($user->level=="Admin"){echo "selected";}?>>Admin</option>
					<option value="Kasir" <?php if($user->level=="Kasir"){echo "selected";}?>>Kasir</option>
                </select>
			</label>
		</div>
	</div>
	<footer
		class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
		<a href="<?= base_url('pengguna')?>"
			class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
			Cancel
		</a>
		<button type="submit"
			class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
			Simpan
		</button>
	</footer>
</form>
</div>