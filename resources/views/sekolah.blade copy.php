@extends('layouts.main')

@section('container')


@endsection    

@section('contrast')

     
    <!-- Job Header start -->
    <div class="job-header">
        <div class="jobinfo">
          <div class="row">
            <div class="col-md-8">
              <div class="companylogo"><img width="150px" src="https://sekolahpedia.id/medias/logosekolah/SMKN 1 GEBANG.jpeg" alt=""></div>
              <h2>SMKN 1 GEBANG</h2>
              <div class="ptext">SMK</div>
              <div class="salary">Cirebon</div>
            </div>
            <div class="col-md-4">
              <div class="companyinfo">
                <div class="title"><a>Alamat</a></div>
                <div class="ptext">JL. RAYA GEBANG ILIR PERUM GEBANG PERMAI NO. 01, Gebang Ilir, Gebang, Cirebon, Prov. Jawa Barat, 45194</div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Job Detail start -->
      <div class="row">
      
        <!-- Carousel Berita -->
        <div class="col-md-12">        
                    </div>
        <!-- End of carousel berita -->
  
        <div class="col-md-7">
          <!-- Job Description start -->
          <div class="job-header">
            <div class="contentbox">
              <h3>Identitas Satuan Pendidikan</h3>
              <br>
              <table class="table table-striped table-detail">
                <tbody><tr>
                  <th>Nama</th>
                  <td>:</td>
                  <td></td>
                </tr>
                <tr>
                  <th>NPSN</th>
                  <td>:</td>
                  <td>20253778</td>
                </tr>
                <tr>
                  <th>Alamat</th>
                  <td>:</td>
                  <td>JL. RAYA GEBANG ILIR PERUM GEBANG PERMAI NO. 01</td>
                </tr>
                <tr>
                  <th>Kode Pos</th>
                  <td>:</td>
                  <td>45194</td>
                </tr>
                <tr>
                  <th>Desa/Kelurahan</th>
                  <td>:</td>
                  <td>Gebang Ilir</td>
                </tr>
                <tr>
                  <th>Kecamatan/Kota (LN)</th>
                  <td>:</td>
                  <td>Gebang</td>
                </tr>
                <tr>
                  <th>Kab.-Kota/Negara (LN)</th>
                  <td>:</td>
                  <td>Cirebon</td>
                </tr>
                <tr>
                  <th>Propinsi/Luar Negeri (LN)</th>
                  <td>:</td>
                  <td>Prov. Jawa Barat</td>
                </tr>
                <tr>
                  <th>Status Sekolah</th>
                  <td>:</td>
                  <td>NEGERI</td>
                </tr>
                <tr>
                  <th>Waktu Penyelenggaraan</th>
                  <td>:</td>
                  <td>Sehari Penuh/5 hari</td>
                </tr>
                <tr>
                  <th>Jenjang Pendidikan</th>
                  <td>:</td>
                  <td>SMK</td>
                </tr>
              </tbody></table>
            </div>
          </div>
          <!-- Job Description end --> 
                  <div class="job-header">
            <div class="jobdetail">
              <h3>Cek PPDB</h3>
                <div id="AlertPPDB"></div>
                <div class="form-group">
                  <input type="text" class="form-control" name="noppdb" id="NoPPDB" placeholder="Masukkan No PPDB Anda">
                </div>
                <button type="button" id="PPDBSubmit" class="btn btn-primary btn-block">Cek</button>
            </div>
          </div>
                  <!-- Job Detail start -->
          <!-- <div class="job-header">
            <div class="jobdetail">
              <h3>Dokumen dan Perijinan</h3>
              <ul class="jbdetail">
                <li class="row">
                  <div class="col-md-6 col-xs-6">Naungan</div>
                  <div class="col-md-6 col-xs-6"><span>Kementerian Pendidikan dan Kebudayaan</span></div>
                </li>
                <li class="row">
                  <div class="col-md-6 col-xs-6">No. SK. Pendirian</div>
                  <div class="col-md-6 col-xs-6"><span>421.5/kep.84-DISDIK/2009</span></div>
                </li>
                <li class="row">
                  <div class="col-md-6 col-xs-6">Tanggal SK. Pendirian</div>
                  <div class="col-md-6 col-xs-6"><span>2009-01-28</span></div>
                </li>
                <li class="row">
                  <div class="col-md-6 col-xs-6">No. SK. Operasional</div>
                  <div class="col-md-6 col-xs-6"><span>421.5/kep.84-DISDIK/2009</span></div>
                </li>
                <li class="row">
                  <div class="col-md-6 col-xs-6">Tanggal SK. Operasional</div>
                  <div class="col-md-6 col-xs-6"><span>2009-01-28</span> </div>
                </li>
                <li class="row">
                  <div class="col-md-6 col-xs-6"> File SK Operasional</div>
                  <div class="col-md-6 col-xs-6"><span class="freelance">76049-234732-431645-155401624-316361269.pdf</span></div>
                </li>
                <li class="row">
                  <div class="col-md-6 col-xs-6">Akreditasi</div>
                  <div class="col-md-6 col-xs-6"><span class="contract">A</span></div>
                </li>
                <li class="row">
                  <div class="col-md-6 col-xs-6">No. SK. Akreditasi</div>
                  <div class="col-md-6 col-xs-6"><span> 02.00/964/BAP-SM/X/2011</span></div>
                </li>
                <li class="row">
                  <div class="col-md-6 col-xs-6">Tanggal SK. Akreditasi</div>
                  <div class="col-md-6 col-xs-6"><span>28-10-2011</span></div>
                </li>
                <li class="row">
                  <div class="col-md-6 col-xs-6">No. Sertifikasi ISO</div>
                  <div class="col-md-6 col-xs-6"><span>Belum Bersertifikat</span></div>
                </li>
              </ul>
            </div>
          </div> -->
        </div>
        <div class="col-md-5">
                  <div class="job-header">
            <div class="jobdetail">
              <a href="https://sekolahpedia.id/ppdb/25479" class="btn btn-lg btn-block btn-primary" style="border-radius: 0"><i class="fa fa-edit"></i> Pendaftaran Online</a>
            </div>
          </div>
                  <!-- Job Description end --> 
          <div class="job-header">
            <div class="jobdetail">
              <h3>Kepala Sekolah</h3>
              <div class="kepsek">
                <img src="https://sekolahpedia.id/template/images/logodefault.jpg">
                <h3></h3>
              </div>
            </div>
          </div>
          <!-- kontak -->
          <div class="job-header">
            <div class="contentbox">
              <h3>Kontak</h3>
              <br>
              <table class="table table-striped table-detail" style="border:1px solid #ddd;margin-bottom: 10px">
                <tbody><tr>
                  <th>Telepon</th>
                  <td>:</td>
                  <td>-</td>
                </tr>
                <tr>
                  <th>Fax</th>
                  <td>:</td>
                  <td>02318840267</td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td>:</td>
                  <td>smkn1_gebang@yahoo.co.id</td>
                </tr>
                <tr>
                  <th>Website</th>
                  <td>:</td>
                  <td>http://smkn1-gebang.sch.id</td>
                </tr>
                <tr>
                  <th>Operator</th>
                  <td>:</td>
                  <td>1</td>
                </tr>
              </tbody></table>
            </div>
          </div>
          <!-- kontak end -->
        </div>
        
      </div>
    
@endsection