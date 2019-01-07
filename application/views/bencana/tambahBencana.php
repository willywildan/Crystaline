      <div id="content-wrapper">
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Form Tambah Bencana</li>
          </ol>

          <!-- DataTables -->
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
            <div class="row">
          <div class="col-lg-6">
           <form action="peta.php" method="POST">
            <div class="form-group">
                <label>Lokasi:</label><input id="lokasi" name="lokasi" class="form-control" placeholder="Masukan Lokasi Bencana" required="">
            </div>
            <div class="form-group">
                <label>Tipe:</label><select id="tipe" name="tipe" class="form-control" required="">
                                                <option>Banjir</option>
                                                <option>Tanah Longsor</option>
                                                <option>Gempa Bumi</option>
                                                <option>Tsunami</option>
                                                <option>Angin Topan</option>
                                                <option>Gunung Meletus</option>
                                                <option>Kebakaran Hutan</option>
                                                <option>Kekeringan</option>
                                                <option>Badai</option>
                                    </select>
            </div>
            <div class="form-group">
                <label>Skala:</label><select id="skala" name="skala" class="form-control" required="">
                                                <option>Kecil</option>
                                                <option>Sedang</option>
                                                <option>Besar</option>
                                    </select>
            </div>
            <div class="form-group">
                <label>Tingkat Kerusakan:</label><select id="tingkat" name="tingkat" class="form-control" required="">
                                                <option>Ringan</option>
                                                <option>Sedang</option>
                                                <option>Berat</option>
                                                </select>
            </div>
            <div class="form-group">
                <label>Tanggal:</label><input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Masukan Posko Bencana" required="">
            </div>           
          </div>
        
        </div>
         <button type="submit" class="btn btn-primary">Submit</button>
         <button type="reset" class="btn btn-default">Reset</button>
       </form>
      </div>
    </div>
  </div>