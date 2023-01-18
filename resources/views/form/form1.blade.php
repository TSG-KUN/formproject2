@include('bs.bootstrap')

<link rel="stylesheet" href="{{ mix('/css/style.css') }}">
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
    <h1 align="center" class="h"> Sistem Informasi Pelaporan Grafikasi </h1>
    <div>
        <p class="f"><u><b> Menu Laporan Gratifikasi </b></u></p>
    </div>
    <form action="/form-1/proses" method="POST" enctype="multipart/form-data">
      @csrf
    <fieldset class="form-fieldset ghs">
        <table class="table table-borderless">
            <tr>
                <td><b> Email </b></td>
                <td> : </td>
                <td> <input class="form-control" type="email" name="email"> </td>
            </tr>
            <tr>
                <td><b> Nama </b></td>
                <td> : </td>
                <td> <input class="form-control" type="text" name="nama">  </td>
            </tr>
            <tr>
                <td><b> NIP </b></td>
                <td> : </td>
                <td> <input class="form-control" type="number" name="nip">  </td>
            </tr>
            <tr>
                <td><b> Jenis Gratifikasi </b></td>
                <td> : </td>
                <td> 
                  <div class="mb-3">
                    <div>
                      <label class="form-check">
                        <input class="form-check-input" type="radio" 
                             name="jenisgratif" value="uang">
                        <span class="form-check-label">Uang</span>
                      </label>
                      <label class="form-check">
                        <input class="form-check-input" type="radio" 
                             name="jenisgratif" value="barang">
                        <span class="form-check-label">Barang</span>
                      </label>
                      <label class="form-check">
                        <input class="form-check-input" type="radio" 
                             name="jenisgratif" value="rabat">
                        <span class="form-check-label">Rabat (diskon)</span>
                      </label>
                      <label class="form-check">
                        <input class="form-check-input" type="radio" 
                             name="jenisgratif" value="komisi">
                        <span class="form-check-label">Komisi</span>
                      </label>
                      <label class="form-check">
                        <input class="form-check-input" type="radio" 
                             name="jenisgratif" value="tiketperjalanan">
                        <span class="form-check-label">Tiket Perjalanan</span>
                      </label>
                      <label class="form-check">
                        <input class="form-check-input" type="radio" 
                             name="jenisgratif" value="faspenginapan">
                        <span class="form-check-label">Fasilitas Penginapan</span>
                      </label>
                      <label class="form-check">
                        <input class="form-check-input" type="radio" 
                             name="jenisgratif" value="perjalananwis">
                        <span class="form-check-label">Perjalanan Wisata</span>
                      </label>
                      <label class="form-check">
                        <input class="form-check-input" type="radio" 
                             name="jenisgratif" value="pengobatancuma">
                        <span class="form-check-label">Pengobatan Cuma-cuma </span>
                      </label>
                      <label class="form-check">
                        <input class="form-check-input" type="radio" 
                             name="jenisgratif" value="jasalain">
                        <span class="form-check-label">Jasa Lainnya</span>
                      </label>
                    </div>
                  </div>
                </td>
            </tr>
        </table>          

          <b><p> Deskripsi singkat gratifikasi (bentuk, merk, tahun, pembayaran dll) </p></b>
          <div class="mb-3">
            <textarea class="form-control" name="desksingkat"></textarea>
          </div>         

          <b><p> Perkiraan Harga/Nomial (dalam bentuk angka)  Contoh : 1000000 </p></b>
          <div class="mb-3">
            <textarea class="form-control" name="perkirharga"></textarea>
          </div>    

          <div class="mb-3 mt-0">
            <b><p> Peristiwa Penerimaan : </p></b>
            <label class="form-check">
              <input class="form-check-input" type="radio" 
                 name="perispeneri" value="pernikahan">
              <span class="form-check-label"> Pernikahan/Keagamaan/Acara Adat </span>
            </label>
            <label class="form-check">
              <input class="form-check-input" type="radio" 
                 name="perispeneri" value="mutasi">
              <span class="form-check-label"> Mutasi/Promosi/Pisah Sambut </span>
            </label>
            <label class="form-check">
              <input class="form-check-input" type="radio" 
                 name="perispeneri" value="pelayanan">
              <span class="form-check-label"> Tugas Pelayanan </span>
            </label>
            <label class="form-check">
              <input class="form-check-input" type="radio" 
                 name="perispeneri" value="nonpelayanan">
              <span class="form-check-label"> Non Pelayanan </span>
            </label>
            <label class="form-check">
              <input class="form-check-input" type="radio" 
                 name="perispeneri" value="seminar">
              <span class="form-check-label"> Seminar/Diktat/Workshop </span>
            </label>
          </div>
          <div class="p-2 md-2">
            <div class="row">
                <b>Tanggal Pemberian</b>
            </div>
            <div class="row w-25 mx-1 mt-2">
              <input class="form-control" type="date" name="tglpemberi">
            </div>
            <div class="row mt-2">
              <b> Lokasi Pemberian (Ruangan,Tempat,Gedung) </b>
            </div>
            <div class="row w-25 mx-1">
              <input class="form-control" type="text" name="lokasipemberi">
            </div>
            <div class="row mt-2">
            <b> Pemberi Gratifikasi </b>
            </div>
            <div class="row w-25 mx-1">
            <input class="form-control" type="text" name="pemberigratif">
            </div>
            <div class="row mt-2">
              <b> Lampirkan Bukti </b>
            </div>
            {{-- <div class="row">
              <div class="col-md-9">
                <input class="form-control" type="text" readonly>
                <label for="files" class="btn btn-primary w-25">Upload</label>
                <input class="form-control" type="file" id="image" name="image"/>
              </div>
            </div> --}}
            <button type="submit" class="btn btn-primary"> Kirim </button>
            <a type="submit" class="btn btn-danger" href="/home"> Batal </a> 
    </fieldset>
    </form>