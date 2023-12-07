
<html>

<head>
    <title>Project ujian pweb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<style>
		body{
			overflow-x: hidden;
		}
	</style>
</head>

<body>
    <div class="bg-success text-black text-center py-3 mb-3">
        <h1 class="fw-bold fs-3">CINEMA KAMAL</h1>
    </div>

    <form action="output.php" method="post">
		<div style="height:100vh" class="d-flex justify-content-top flex-column align-items-center">
		<div class="border border-2 border-black p-0 w-75 ">
		<div class="row">
        <div class="col-8 px-5 py-2">
            <div class="row my-2">
                <div class="col-4  pt-1 border border-2 border-black me-1">
                    <h5 class="fs-5 text-left">Kode Tiket</h5>
                </div>
                <div class="col-7 pt-1 border border-2 border-black">
                    <select required name='kode_tiket'>
                        <option>Pilih</option>
                        <option value='TRM'>TRM</option>
                        <option value='MTD'>MTD</option>
                        <option value='TMM'>TMM</optsion>
                        <option value='TWM'>TWM</option>
                    </select>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-4 pt-1 border border-2 border-black me-1">
                    <h5 class="fs-5 text-left mt-3">Waktu</h5>
                </div>
                <div class="col-7 pt-1 border border-2 border-black">
                    <div class="row pt-1 pb-2">
                        <div class="col-12">
                            <input required type="radio" value="12:30" id="1230" name="waktu" />
                            <label for="1230" class="me-5">12:30</label>
                            
                            <input required type="radio" value="13:15" id="1315" name="waktu" />
                            <label for="1315">13:15</label>
                        </div>
                        <div class="col-12">
                            <input required type="radio" value="16:15" id="1615" name="waktu" />
                            <label for="1615" class="me-5">16:15</label>
                            
                            <input required type="radio" value="19:15" id="1915" name="waktu" />
                            <label for="1915">19:15</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-4 pt-1 border border-2 border-black me-1">
                    <h5 class="fs-5 text-left">Hari</h5>
                </div>
                <div class="col-7 pt-1 border border-2 border-black">
                    <select required name="hari">
                        <option>Pilih</option>
                        <option value="senin">Senin</option>
                        <option value="selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-4 pt-1 border border-2 border-black me-1">
                    <h5 class="fs-5 text-left">Tanggal</h5>
                </div>
                <div class="col-7 pt-1 border border-2 border-black">
                    <select required name="tggl">
                    <option value="">-Pilih-</option>
                    <?php
                        for ($tanggal = 1; $tanggal <= 31; $tanggal++) {
                            echo "<option class='text-center' value=$tanggal>$tanggal</option>";
                        }
                    ?>
                    </select>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-4 pt-1 border border-2 border-black me-1">
                    <h5 class="fs-5 text-left mt-2">Jumlah Beli</h5>
                </div>
                <div class="col-7 border border-2 border-black py-2">
                    <div> 
                        <input min="1" max="100" required type="number" class="px-2 py-1" name="jml_beli" style="width: 100%" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3">
         <img class="img-fluid" src="https://media.istockphoto.com/id/1453036806/id/vektor/logo-bioskop.jpg?s=612x612&w=0&k=20&c=gx2A1-TraFJe5jVUy4hHvL8dOGxgdtiieZmt_tK69d8="/>
        </div>
        </div>
            <div class="bg-white text-black text-center py-3 mt-3 mb-0">
                <input type="submit" name="submit" value="Submit"/>
                <input type="reset" value="Cancel"/>
            </div>
		</div>
		</div>
	</form>

</body>

</html>