<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SISWA</title>
  @vite('resources/css/app.css')
</head>
<body>

<div class="navbar bg-green-600">
  <!-- BUAT MOBILE -->
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-green-600 rounded-box w-52">
        <li><a href="/dashboard" class="rounded-lg  text-black font-medium">DASHBOARD</a></li>
          <div class="dropdown dropdown-bottom">
              <div tabindex="0" class="collapse collapse-arrow border border-base-300 bg-green-600 rounded-box">
                <div class="collapse-title text-base font-medium text-black">
                  PRESENSI
                </div>
                    <div class="collapse-content"> 
                          <li>
                          <a class="rounded-lg text-black" href="/presensisiswa">SISWA</a>
                          </li>
                          <li>
                          <a class="rounded-lg text-black" href="/presensiguru">GURU</a>
                          </li>
                    </div>
              </div>

              <div tabindex="0" class="collapse collapse-arrow border border-base-300 bg-green-600 rounded-box">
                <div class="collapse-title text-base font-medium text-black">
                  LIST INFO
                </div>
                    <div class="collapse-content"> 
                          <li>
                          <a class="rounded-lg text-black" href="/siswa">SISWA</a>
                          </li>
                          <li>
                          <a class="rounded-lg text-black" href="/guru">GURU</a>
                          </li>
                          <li>
                          <a class="rounded-lg text-black" href="/tingkatan">TINGKATAN</a>
                          </li>
                          <li>
                          <a class="rounded-lg text-black" href="/jurusan">JURUSAN</a>
                          </li>
                    </div>
              </div>
              
              <div tabindex="0" class="collapse collapse-arrow border border-base-300 bg-green-600 rounded-box">
                <div class="collapse-title text-base font-medium text-black">
                  HISTORI HAPUS
                </div>
                    <div class="collapse-content"> 
                          <li>
                          <a class="rounded-lg text-black" href="/historisiswa">SISWA</a>
                          </li>
                          <li>
                          <a class="rounded-lg text-black" href="/historiguru">GURU</a>
                          </li>
                    </div>
              </div>

              <div tabindex="0" class="collapse collapse-arrow border border-base-300 bg-green-600 rounded-box">
                <div class="collapse-title text-base font-medium text-black">
                  PENGGUNA
                </div>
                    <div class="collapse-content"> 
                          <li>
                          <a class="rounded-lg text-black" href="/historisiswa">DAFTAR PENGGUNA</a>
                          </li>
                          <li>
                          <a class="rounded-lg text-black" href="/historiguru">LEVEL PENGGUNA</a>
                          </li>
                    </div>
              </div>

          </div>
      </ul>
    </div>
    <a class="btn btn-ghost normal-case text-xl text-black" href="/dashboard">ALINGGAM</a>
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
                <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-green-400 rounded-box w-52">
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
            <div class="dropdown dropdown-bottom">
            <label tabindex="0" class="btn m-1 text-black bg-green-600">PENGGUNA</label>
                <ul tabindex="0" class="dropdown-content menu p-2 shadow rounded-box w-52 bg-green-400">
                    <li tabindex="0">
                    <a class="rounded-lg text-black" href="/user">DAFTAR PENGGUNA</a>
                    </li>
                    <li tabindex="0">
                    <a class="rounded-lg text-black" href="/leveluser">LEVEL PENGGUNA</a>
                    </li>
                    
                </ul>
            </div>
    </ul>
    </div>
    <div class="navbar-end">
      <a class="btn bg-red-400 text-black"  href="/logout">LOGOUT</a>
    </div>
  </div>
</div>


        <div class="card w-96 bg-green-600 shadow-xl text-primary-content mx-auto mt-8">
          <div class="card-body text-black">
          <p class="text-center">EDIT SISWA</p>
                  <form action="/siswa/{{ $siswa->id }}" method="post">

                  @method('PUT')
                  
                  @csrf

                      <h1  class="mt-5">Nama</h1>
                    	<input type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}" placeholder="Nama Siswa" class="input input-bordered w-full max-w-xs bg-white" required/>
                      <h1  class="mt-5">Jenis Kelamin</h1>
            		      <select class="select select-bordered w-full max-w-xs bg-white" name="jk_siswa" required>
                        {{-- <option disabled selected>-- Pilih JK --</option> --}}
                          <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                        @error('kode_kelas')
                                    <p class="text-red-700">Maaf, Data Jenis Kelamin Tidak Ada</p>
                    @enderror
                      
                      <label class="label">
                        <span class="label-text text-black">Kelas</span>
                      </label>
                      <select class="select select-bordered w-full max-w-xs bg-white text-black" name="kode_kelas" required>
                        {{-- <option disabled selected>-- Pilih Kelas --</option> --}}
                        @foreach($kelas2 as $item01)
                          <option value="{{ $item01->id }}">
                          {{ $item01->tingkatan }}
                          </option>
                        @endforeach
                        </select>
                      @error('kode_kelas')
                                    <p class="text-red-700">Maaf, Data Kelas Tidak Ada</p>
                    @enderror

                        <label class="label">
                        <span class="label-text text-black">Nama jurusan</span>
                      </label>
                      <select class="select select-bordered w-full max-w-xs bg-white text-black" name="kode_jurusan" required>
                        {{-- <option disabled selected>-- Pilih jurusan --</option> --}}
                        @foreach($jurusan2 as $item02)
                          <option value="{{ $item02->id }}">
                          {{ $item02->nama_jurusan }}
                          </option>
                        @endforeach
                      </select>
                      @error('kode_jurusan')
                                    <p class="text-red-700">Maaf, Data Jurusan Tidak Ada</p>
                    @enderror
                    <h1 class="mt-5">NISN</h1>
                    	<input type="number" name="nisn" value="{{ $siswa->nisn }}" placeholder="Nama Siswa" class="input input-bordered w-full max-w-xs bg-white" required/>
                      @error('nisn')
                                    <p class="text-red-700">Maaf, Data NISN Tidak Valid</p>
                    @enderror
                  <div class="card-actions justify-end mt-5">
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