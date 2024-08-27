<!-- data -->
<div class="pb-12">
  <h2 class="text-lg font-bold leading-7 text-violet-700">Data Pengajuan</h2>
  <p class="mt-1 text-sm leading-6 text-gray-600">Form dengan tanda ( <span class="text-red-500">*</span> ) wajib diisi</p></p>

  <div class="mt-10 grid grid-cols-6 sm:grid-cols-1 gap-x-6 gap-y-8 sm:gap-y-4">
      <div class="col-span-3 sm:col-span-1">
        <label for="cpu" class="block text-sm font-medium leading-6 text-gray-900">CPU <span class="text-red-500">*</span></label>
        <div class="mt-2">
          <input type="text" name="cpu" id="cpu" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-violet-700 ">
        </div>
      </div>                  
                  
      

      <div class="col-span-3 sm:col-span-1">
          <label for="ram" class="block text-sm font-medium leading-6 text-gray-900">RAM <span class="text-red-500">*</span></label>
          <div class="mt-2">
            <input type="text" name="ram" id="ram" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-violet-700 ">
          </div>
      </div>

      <div class="col-span-3 sm:col-span-1">
        <label for="storage" class="block text-sm font-medium leading-6 text-gray-900">Storage <span class="text-red-500">*</span></label>
        <div class="mt-2">
          <input type="text" name="storage" id="storage" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-violet-700 ">
        </div>
      </div>

      <div class="col-span-3 sm:col-span-1">
        <label for="os" class="block text-sm font-medium leading-6 text-gray-900">Operating System<span class="text-red-500">*</span></label>
        <div class="mt-2">
          <input type="text" name="os" id="os" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-violet-700 ">
        </div>
      </div>



    <div class="col-span-full">
      <label for="purpose" class="block text-sm font-medium leading-6 text-gray-900">Tujuan Pengajuan <span class="text-red-500">*</span></label>
      <div class="mt-2">
        <textarea id="purpose" name="purpose" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-violet-700 "></textarea>
      </div>
      <p class="mt-3 text-sm leading-6 text-gray-600">Tuliskan tujuan pengajuan</p>
    </div>

    <div class="col-span-full">
      <label for="add_inform" class="block text-sm font-medium leading-6 text-gray-900">Informasi Tambahan (opsional)</label>
      <div class="mt-2">
        <textarea id="add_inform" name="add_inform" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-violet-700 "></textarea>
      </div>
      <p class="mt-3 text-sm leading-6 text-gray-600">Tuliskan informasi tambahan jika diperlukan</p>
    </div>

    <div class="col-span-full">
      <label for="document" class="block text-sm font-medium leading-6 text-gray-900">Surat Permohonan <span class="text-red-500">*</span></label>
      <input class="block w-full rounded-md border-0 p-6 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-violet-700 " name="document" id="document" type="file" required>
    </div>

    <div class="mx-auto col-span-full">
      <div class="flex flex-row gap-x-4 h-6 items-center">
        <input id="comments" name="comments" type="checkbox" required class="h-4 w-4 rounded border-gray-300 text-violet-700 focus:ring-violet-700">
        <label for="comments" class="text-sm font-medium text-gray-900 sm:text-xs">Saya Menyetujui Syarat & Ketentuan yang berlaku</label>
      </div>
      <div class="text-sm leading-6">
        
      </div>
    </div>
  </div>
</div>