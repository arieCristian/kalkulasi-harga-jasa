<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Kalkulasi Harga Website</title>
  </head>

  <body onload="rupiahIn()">

    <div class="container mt-4 mb-4">
        <h2 class="text-center">Kalkulasi Harga Pembuatan Website di Projasa</h2>
<br>
    <div class="row ">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">  
        <form action="tampil.php" method="POST">
            <div class="row mb-2">
                <div class="col-4">
                    <label for="nama" for="nama">Nama Pemesan</label>
                </div>
                <div class="col-8">
                    <input class="form-control" name="nama" id="nama" type="text" placeholder="Masukan Nama">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-4 col-sm-12">

                    <label for="domain" for="domain">Domain</label>
                </div>
                <div class="col-lg-4 col-sm-6 mb-2">
                    <select onchange="hitungDomain(this.value)" required  name="domain" id="domain" class="form-select">
                                <option value="sudah-ada">Sudah Ada</option>
                                <option value="prongiklan">Prongiklan</option>
                                <option value="buat-baru">Buat Baru</option>
                    </select>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                        <input class="form-control total" name="tot-domain" id="tot-domain" type="text" readonly value = "0">
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-4 col-sm-12">
                    <label for="email" for="email">Email Bisnis</label>
                </div>
                <div class="col-lg-4 col-sm-6 mb-2">
                    
                    <input onkeypress="return onlyNumberKey(event)" onkeyup="hitungEmail(this.value)" onchange="hitungEmail(this.value)" class="form-control" type="number" id="email" name="email" min="0" value="0">
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                            <input class="form-control total" name="tot-email" id="tot-email" type="text" readonly value="0">
                            </div>                    
                    </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-4 col-sm-12">
                    <label for="web-design" for="web-design">Web Design</label>
                </div>
                <div class="col-lg-4 col-sm-6 mb-2">
                    <input onkeyup="hitungHalaman(this.value)" onchange="hitungHalaman(this.value)" required class="form-control" type="number" id="web-design" name="web-design" min="5" value="5">
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                    
                            <input class="form-control total" name="tot-web-design" id="tot-web-design" type="text" readonly value="1.000.000">
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-4 col-sm-12">
                    <label for="tot-assets" for="tot-assets">Assets Design</label>
                </div>
                <div class="col-lg-4 col-sm-6 mb-2">

                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                        <input class="form-control total" name="tot-assets" id="tot-assets" type="text" readonly value="250000">
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-4 col-sm-12">
                    <label for="tot-cr" for="tot-cr">Copywriting</label>
                </div>
                <div class="col-lg-4 col-sm-6 mb-2">

                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                        <input class="form-control total" name="tot-cr" id="tot-cr" type="text" readonly value="250000">
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-4 col-sm-12">
                    <label for="ml" for="ml">Multi Language</label>
                </div>
                <div class="col-lg-4 col-sm-6 mb-2">
                    <select onchange="hitungMultiLanguage(this.value)" required  name="ml" id="ml" class="form-select">
                        <option value="tidak">Tidak</option>
                        <option value="ya">Ya</option>
                    </select>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                        <input class="form-control total" name="tot-ml" id="tot-ml" type="text" readonly value = "0">
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-4 col-sm-12">
                    <label for="cta" for="cta">Call To Action (Whatsapp, Email, Sosial Media)</label>
                </div>
                <div class="col-lg-4 col-sm-6 mb-2">
                    <select onchange="hitungCta(this.value)" required  name="cta" id="cta" class="form-select">
                        <option value="tidak">Tidak</option>
                        <option value="ya">Ya</option>
                    </select>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                        <input class="form-control total" name="tot-cta" id="tot-cta" type="text" readonly value = "0">
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-4 col-sm-12">
                    <label for="iklan" for="iklan">Iklan</label>
                </div>
                <div class="col-lg-4 col-sm-6 mb-2">
                    <select onchange="hitungIklan(this.value)" required  name="iklan" id="iklan" class="form-select">
                        <option value="tidak">Tidak</option>
                        <option value="instagram">Instagram 7 Hari</option>
                        <option value="facebook">Facebook 7 Hari</option>
                        <option value="google">Google 15 Hari</option>
                    </select>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                        <input class="form-control total" name="tot-iklan" id="tot-iklan" type="text" readonly value = "0">
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-4 col-sm-12">
                    <label for="motion" for="motion">Motion Graphic /30 detik</label>
                </div>
                <div class="col-lg-4 col-sm-6 mb-2">
                    <select disabled onchange="hitungMotion(this.value)" required  name="motion" id="motion" class="form-select">
                        <option value="tidak">Tidak</option>
                        <option value="ya">Ya</option>
                    </select>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                        <input class="form-control total" name="tot-motion" id="tot-motion" type="text" readonly value = "0">
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-4 col-sm-12">
                    <label for="design-iklan" for="design-iklan">Design Iklan</label>
                </div>
                <div class="col-lg-4 col-sm-6 mb-2">
                    <input disabled onkeyup="hitungDesignIklan(this.value)" onchange="hitungDesignIklan(this.value)" class="form-control" type="number" id="design-iklan" name="design-iklan" min="0" value="0">
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                        <input class="form-control total" name="tot-design-iklan" id="tot-design-iklan" type="text" readonly value="0">
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-8 col-sm-12">
                    <label for="total" for="total">Total </label>
                </div>
                <div class="col-lg-4 col-sm-12 mb-2">
                    <div class="input-group">                        
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                        <input class="form-control" name="total" id="total" type="text" readonly value="0">
                    </div>
                </div>
            </div>     

        <div class="text-center">

            <button type="submit" name="submit" class="btn btn-primary"> Simpan Data !</button>
        </div>
    </form>
        </div>
    </div>
   
    </div>


    <!-- Optional JavaScript; choose one of the two! -->
    <script src="scrip.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>