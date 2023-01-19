@include('bs.bootstrap')

{{-- <link rel="stylesheet" href="{{ mix('/css/style.css') }}"> --}}
<style>
@import url('https://fonts.googleapis.com/css2?family=Barlow&display=swap');
  .container {
    font-family: 'Barlow', sans-serif;
  }
  .f {
    font-size: 20px;
    font-weight: bold; 
  }
  .h {
    font-size: 30px;
    font-weight: bolder;
  }
</style>
<div class="container mt-2">
<div class="mt-4 mb-3 f">
    <u><b>Menu Surat Pernyataan</b></u>
  </div>
  <form action="/form-2/proses" method="POST" enctype="multipart/form-data">
    @csrf
    <fieldset class="form-fieldset">  
        <div class="container">
          <div class="justify-content-left">
            <div class="row">
              <div class="col-md-2">
                  <b>Nama Lengkap</b>
              </div>
              <div class="col">
                <input type="text" class="form-control w-75" name="namalengkap">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-2">
                  <b>NIP</b>
              </div>
              <div class="col">
                <input type="number" class="form-control w-75" name="nip1">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-2">
                  <b>Jabatan</b>
              </div>
              <div class="col">
                <input type="text" class="form-control w-50" name="jabatan">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-2">
                  <b>Pangkat/Golongan</b>
              </div>
              <div class="col">
                <input type="text" class="form-control w-50" name="pangkat">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-2">
                  <b>Bagian/Unit</b>
              </div>
              <div class="col">
                <input type="text" class="form-control w-25" name="bagian">
              </div>
            </div>
          </div>
        </div>
    </fieldset>
        <div class="mb-3 mt-4">
          <u class="f"> Menyatakan dengan sebenarnya memiliki potensi benturan kepentingan dengan
            atasan langsung yaitu :
          </u>
        </div>
    <fieldset class="form-fieldset">
        <div class="container">
          <div class="justify-content-left">
            <div class="row">
              <div class="col-md-2">
                  <b>Nama Lengkap</b>
              </div>
              <div class="col">
                <input type="text" class="form-control w-75" name="namalengkap1">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-2">
                  <b>Jabatan</b>
              </div>
              <div class="col">
                <input type="text" class="form-control w-75" name="jabatan1">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-2">
                  <b>Pangkat/Golongan</b>
              </div>
              <div class="col">
                <input type="text" class="form-control w-50" name="pangkat1">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-2">
                  <b>Bagian/Unit</b>
              </div>
              <div class="col">
                <input type="text" class="form-control w-50" name="bagian1">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-2">
                  <b>Bentuk Potensi Benturan Kepentingan</b>
              </div>
              <div class="col">
                <input type="text" class="form-control w-75" name="bentukpoten">
              </div>
            </div>
          </div>
        </div>
    </fieldset>
    <button type="submit" class="btn btn-primary"> Kirim </button>
    <a type="submit" class="btn btn-danger" href="/form-1"> Batal </a> 
</form>
</div>
<div class="container text-center">
    <small> 2023-2024 | Made with <i class="bi bi-heart-fill"></i> by Yui </small>
  </div>