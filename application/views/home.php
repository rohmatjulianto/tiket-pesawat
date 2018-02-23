    <style>
        body{
        background-image: url('http://localhost/mamen/resource/admin/dist/img/photo1.png');
        }
        .bt-1{
            margin-top:20px;
            width:100%;
        }
        .form-pesan{
            background-color:#eee;
            margin:15%;
            border-radius:5px;
            padding:30px;
        }
        .papan{
            margin:1%;
        }
        .filter{
            background-color:#fff;
            margin:2%;
            border-radius:10px;
        }
        .navbar{
            padding:1%;
        }
        .col-md-6 , .col-md-12{
            margin-bottom:20px;
        }
    </style>

    <div class="container container-fluid">
    <form action="" class="form-pesan">


        <div class="row">
            <div class="col-md-6"> <label>Berangkat</label>
                <input type="text" name="berangkat" class="form-control">
            </div>
            <div class="col-md-6"> <label>Tujuan</label>
                <input type="text" name="tujuan" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"> <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"> <label>Kelas</label>
                <input type="text" name="class" class="form-control">
                <input type="submit" value="Cari" class="btn btn-danger bt-1">
            </div>
        </div>
    </div>
    </form>