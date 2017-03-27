<!DOCTYPE html>
<html>
    <head>
        <title>Forms</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <br><br>
                    <form action="" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <div>
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div>
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <br>
                        <div>
                            <label for="gender">Jenis Kelamin :</label>
                            <br>
                            <div>
                                <label>
                                    <input type="radio" name="gender" value="laki-laki">
                                    Laki-laki
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" name="gender" value="perempuan">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="senjata">Senjata Pilihan</label>
                            <h5>Bisa pilih lebih dari satu</h5>
                            <input type="checkbox" name="senjata[]" value="Muramasa">Muramasa<br>
                            <input type="checkbox" name="senjata[]" value="Masamune">Masamune<br>
                            <input type="checkbox" name="senjata[]" value="Sange & Yasha">Sange & Yasha<br>
                            <input type="checkbox" name="senjata[]" value="ChunChunMaru">ChunChunMaru<br>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </form>
                    <br>
                    <br>
                    @if(isset($nama))
                    Halo, {{ ucwords($nama) }}
                    @endif
                    <br>
                    @if(isset($email))
                    Email kamu {{ $email }}
                    @endif
                    <br>
                    @if(isset($gender))
                    {{ ucwords($nama) }}, kamu seorang @if($gender == "laki-laki" ) laki-laki @else perempuan
                    @endif
                    @endif
                    <br>
                    @if(isset($senjata))
                    Senjata pilihan :
                    @foreach($senjata as $weapon)
                    <br>-> {{ucwords($weapon)}}
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>