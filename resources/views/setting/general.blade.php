 <form class="form-horizontal" action="{{ route('setting.update', $setting->id) }}" method="post">
     @csrf
     @method('put')
     <div class="form-group row">
         <label for="inputName" class="col-sm-2 col-form-label">Nama Aplikasi</label>
         <div class="col-sm-10">
             <input type="text" class="form-control @error('nama_aplikasi') is-invalid @enderror" id="inputName"
                 name="nama_aplikasi" placeholder="Nama aplikasi"
                 value="{{ old('nama_aplikasi') ?? $setting->nama_aplikasi }}">

             @error('nama_aplikasi')
                 <span class="invalid-feedback">{{ $message }}</span>
             @enderror
         </div>
     </div>
     <div class="form-group row">
         <label for="singkatan_aplikasi" class="col-sm-2 col-form-label">Singkatan Aplikasi</label>
         <div class="col-sm-10">
             <input type="text" class="form-control  @error('singkatan_aplikasi') is-invalid @enderror "
                 name="singkatan_aplikasi" id="singkatan_aplikasi" placeholder="Singkatan aplikasi"
                 value="{{ old('singkatan_aplikasi') ?? $setting->singkatan_aplikasi }}">
             @error('singkatan_aplikasi')
                 <span class="invalid-feedback">{{ $message }}</span>
             @enderror
         </div>
     </div>
     <div class="form-group row">
         <label for="deskripsi_aplikasi" class="col-sm-2 col-form-label">Deskripsi Aplikasi</label>
         <div class="col-sm-10">
             <textarea class="form-control  @error('deskripsi_aplikasi') is-invalid @enderror" id="deskripsi_aplikasi"
                 placeholder="Deskripsi aplikasi">{{ old('deskripsi_aplikasi') ?? $setting->deskripsi_aplikasi }}</textarea>
         </div>
     </div>
     <div class="form-group row">
         <label for="mahasiswa" class="col-sm-2 col-form-label">Nama Mahasiswa 1</label>
         <div class="col-sm-10">
             <input type="text" class="form-control  @error('mahasiswa') is-invalid @enderror" name="mahasiswa"
                 id="mahasiswa" placeholder="Nama mahasiwa 1" value="{{ old('mahasiswa') ?? $setting->mahasiswa }}">
             @error('mahasiswa')
                 <span class="invalid-feedback">{{ $message }}</span>
             @enderror
         </div>
     </div>
     <div class="form-group row">
         <div class="offset-sm-2 col-sm-10">
             <button type="submit" class="btn btn-danger">Simpan</button>
         </div>
     </div>
 </form>
