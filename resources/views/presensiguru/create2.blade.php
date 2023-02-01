<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GURU</title>
  @vite('resources/css/app.css')
</head>
<body>

<div class="navbar bg-green-600">
  <!-- BUAT MOBILE -->
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-green-600 rounded-box w-52">
        <li><a href="/dashboard" class="rounded-lg  text-black font-medium">DASHBOARD</a></li>
          <div tabindex="0" class="collapse collapse-arrow border border-base-300 bg-base-100 rounded-box">
            <div class="collapse-title text-xl font-medium">
                PRESENSI
            </div>
            <li tabindex="0">
              <a class="rounded-lg text-black" href="/presensisiswa">SISWA</a>
            </li>
            <li tabindex="0">
              <a class="rounded-lg text-black" href="/presensiguru">GURU</a>
            </li>
          </div>
    </div>
    <a class="btn btn-ghost normal-case text-xl text-black" href="/about">ALINGGAM</a>
  </div>


  <!-- BUAT KOMPUTER -->
  <div class="navbar-center hidden lg:flex z-10">
    <ul class="menu menu-horizontal p-0">
    <li><a class="rounded-lg  text-black font-medium" href="/dashboard">DASHBOARD</a></li>
    <div class="dropdown dropdown-bottom">
      <label tabindex="0" class="btn m-1 text-black bg-green-600">PRESENSI</label>
        <ul tabindex="0" class="dropdown-content menu p-2 shadow rounded-box w-52 bg-green-400">
            <li tabindex="0">
              <a class="rounded-lg text-black" href="/presensisiswa">SISWA</a>
            </li>
            <li tabindex="0">
              <a class="rounded-lg text-black" href="/presensiguru">GURU</a>
            </li>
        </ul>
    </div>
    <div class="dropdown">
      <label tabindex="0" class="btn m-1 text-black bg-green-600">LIST INFO</label>
        <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-green-100 rounded-box w-52">
          <li tabindex="0">
            <a class="rounded-lg text-black" href="/siswa">SISWA</a>
          </li>
          <li>
            <a class="rounded-lg  text-black" href="/guru">GURU</a>
          </li>
          <li>
            <a class="rounded-lg  text-black" href="/tingkatan">TINGKATAN</a>
          </li>
          <li>
            <a class="rounded-lg  text-black" href="/jurusan">JURUSAN</a>
          </li>
        </ul>
      </div>
      <div class="dropdown dropdown-bottom">
      <label tabindex="0" class="btn m-1 text-black bg-green-600">HISTORI HAPUS</label>
        <ul tabindex="0" class="dropdown-content menu p-2 shadow rounded-box w-52 bg-green-400">
            <li tabindex="0">
              <a class="rounded-lg text-black" href="/historisiswa">SISWA</a>
            </li>
            <li tabindex="0">
              <a class="rounded-lg text-black" href="/historiguru">GURU</a>
            </li>
        </ul>
    </div>
    </ul>
    </div>
    <div class="navbar-end">
      <a class="btn bg-red-400 text-black" href="">LOGOUT</a>
    </div>
  </div>
</div>




        <div class="card w-96 bg-green-600 shadow-xl mx-auto mt-8">
            @csrf
            <div class="card-body text-black">
            <p class="text-center">BUAT PRESENSI GURU</p>
		          <form action='/presensiguru' method='post'>
                  @csrf
                      <h1>Tanggal</h1>
                    	<input type="date" name="tanggal" placeholder="tanggal" class="input input-bordered w-full max-w-xs bg-white" required />
                      <!--<h1>Guru</h1>
                    	<input type="text" name="kode_guru" placeholder="Guru" class="input input-bordered w-full max-w-xs" />
                      <h1>Keterangan Hadir</h1>
            		      <input type="text" name="kode_keterangan" placeholder="Keterangan" class="input input-bordered w-full max-w-xs" />-->
                      <label class="label">
                        <span class="label-text text-black">Nama Guru</span>
                      </label>
                      <select class="select select-bordered w-full max-w-xs bg-white" name="kode_guru" required>
                        <option disabled selected>-- Pilih Guru --</option>
                        @foreach($guru1 as $item)
                          <option value="{{ $item->id }}">
                          {{ $item->nama_guru }}
                          </option>
                        @endforeach
                      </select>
                      @error('kode_guru')
                                    <p class="text-red-700">Maaf, Data Guru Tidak Ada</p>
                      @enderror

                      <label class="label">
                        <span class="label-text text-black">Keterangan</span>
                      </label>
                      <select class="select select-bordered w-full max-w-xs bg-white" name="kode_keterangan" required>
                        <option disabled selected>-- Pilih Keterangan --</option>
                        @foreach($keterangan as $item1)
                          <option value="{{ $item1->id }}">
                          {{ $item1->keterangan }}
                          </option>
                        @endforeach
                    </select>
                    @error('kode_keterangan')
                        <p class="text-red-700">Maaf, Data Keterangan Tidak Ada</p>
                    @enderror

                      <h1>Agenda KBM</h1>
            		      <input type="text" name="agenda_kbm" placeholder="agenda kbm" class="input input-bordered w-full max-w-xs bg-white" required />
                	<div class="card-actions justify-end">
                    		<button type='submit' class="btn btn-primary mx-auto">Submit</button>
                	</div>
		          </form> 
            </div>
        </div>

        
<div class="p-16">
  <div class="max-w-4xl mx-auto relative" x-data="{
      activeSlide= 1,
      slides: [
        { id 1, title: 'Hello 1', body: 'acdfg'},
        { id 2, title: 'Hello 2', body: 'acdfg'},
        { id 3, title: 'Hello 3', body: 'acdfg'},
        { id 4, title: 'Hello 4', body: 'acdfg'},
        { id 5, title: 'Hello 5', body: 'acdfg'},
        ]
  }">

      <!-- data loop -->
      <template x-for="slide in slides" :key="slide.id">
           <div x-show="activeSlide === slide.id" class="p-24 h-80 flex items-center bg-slate-500 text-white rounded-lg"></div>
      </template>

      <!-- next -->
      <div>

      </div>
      <!-- button -->
      <div>
        <template>

        </template>
      </div>

  </div>
</div>

</body>
</html>