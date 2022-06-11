@extends('layout.main')
@section('meta')
    <meta name="csrf-token" content="{!! csrf_token() !!}" >
@endsection

@section('css')
    <link type="text/css" href={!!asset('css/styles2.css') !!} rel="stylesheet">
	<link type="text/css" href={!!asset('images/icons/css/font-awesome.css') !!} rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection

@section('content')
    <div class="container mt-2">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-12">
                <form id="regForm" >
                    {{ csrf_field() }}
                    <h1 id="register" >Temukan Karakter Kamu</h1>
                    <h5 id="warning" class="warning">Harap pernyataan di isi</h5>
                    <div class="tab">
                        <div class="info mt-3">
                            <div class="d-flex flex-row">
                                <div class="container mt-2 text-center">
                                    <p>Halaman ini merupakan halaman test untuk mengetahui karakter kamu dan genre anime yang kamu suka tonton. Kriteria yang dipakai untuk mengetahi karakter kamu terdiri dari :
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card w-100">
                                        <div class="card-header">
                                            <h5 class="card-title text-center"><strong>Openness</strong></h5>
                                        </div>
                                        <div class="card-body">
                                            Gambaran keluasan, kedalaman,dan kompleksitas mental individu dan pengalamannya
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card w-75">
                                        <div class="card-header">
                                            <h5 class="card-title text-center"><strong>Conscientiousness</strong></h5>
                                        </div>
                                        <div class="card-body">
                                            Mengukur tingkat keter-aturan seseorang,ketahan an dan motivasi dalam mencapai tujuan berlawanan dengan ketergantungan, dan kecenderungan untuk menjadi malas dan lemah
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card w-75">
                                        <div class="card-header">
                                            <h5 class="card-title text-center"><strong>Extraversion</strong></h5>
                                        </div>
                                        <div class="card-body">
                                            Mengukur kuantitas dan intensitas dari interaksi interpersonal, tingkatan aktifitas, kebutuhan akan dorongan, dan kapasitas dan kesenangan
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title text-center"><strong>Agreeableness</strong></h5>
                                        </div>
                                        <div class="card-body">
                                            Mengukur kualitas dari apa yang dilakukan dengan orang lain dan apa yang dilakukan terhadap orang lain
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card w-100">
                                        <div class="card-header">
                                            <h5 class="card-title text-center"><strong>Neuroticism</strong></h5>
                                        </div>
                                        <div class="card-body">
                                            Menggambarkan stabilitas emosional dengan cakupan-cakupan perasaan negatif yang kuat termasuk kecemasan,kesedihan, irritabilitas dan ketidak percaya diri
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <div class="row">
                            <div class="text-center mt-2">
                                <h3 class="text-primary"><strong>Harap mengisi nama kamu</strong></h3>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row m-4">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-6 text-center">
                                    <label for="name" class="form-label">Nama Lengkap Kamu</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" oninput="this.className = ''" name="name">
                                    {{-- <div id="emailHelp" class="form-text">Harap mengisi dengan </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <div class="info mt-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('assets/card/card1.png') }}" alt="Card image cap" width="200" height="130">
                                        <div class="card-body">
                                          <p class="card-text text-center">Terdapat 20 Pernyataan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('assets/card/card2.png') }}" alt="Card image cap" width="200" height="130">
                                        <div class="card-body">
                                          <p class="card-text text-center">
                                            Jawab Dengan Jujur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('assets/card/card3.png') }}" alt="Card image cap" width="200" height="130">
                                        <div class="card-body">
                                          <p class="card-text text-center">Pilih Sesuai Tingkat</b></p>
                                        </div>
                                      </div>
                                </div>
                            </div>
                            <div class="container mt-2">
                                <p> <strong>Pernyataan pertama berisi hal-hal yang berhubungan dengan anime, komunitas, dan tontonan yang mempengaruhi karakter.</strong> Angka 1 mewakili pernyataan tersebut merupakan hal yang tidak pernah anda lakukan / sangat tidak sesuai dengan yang anda lakukan dan angka 5 tersebut mewakili pernyataan tersebut merupakan kebiasaan anda / sangat sesuai dengan anda lakukan. </p> Keterangan :
                            </div>
                            <div class="container row text-center">
                                <div class="col-md-6">
                                    1 : Sangat Tidak Setuju <br>
                                    2 : Tidak Setuju <br>
                                    3 : Cukup Setuju <br>
                                </div>
                                <div class="col-md-6">
                                    4 : Setuju <br>
                                    5 : Sangat Setuju <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($bigfive as $value)
                        <div class="tab">
                            <div id="o">
                                <div class="card col-md-12 m-2">
                                    <div class="card-body">
                                        <h5 class="text-warning"><strong> Openness</strong></h5>
                                        <h4 class="text-center">{{ $value['openness'] }}</h4>
                                        <label class="karakter-inline"> 1 <i class="far fa-tired"></i>
                                            <input type="radio" name="o" class="statement1" value="5">  <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 2 <i class="far fa-frown"></i>
                                            <input type="radio" name="o" class="statement1" value="25"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 3 <i class="far fa-meh"></i>
                                            <input type="radio" name="o" class="statement1" value="50"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 4 <i class="far fa-grin"></i>
                                            <input type="radio" name="o" class="statement1" value="75"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 5 <i class="far fa-grin-hearts"></i>
                                            <input type="radio" name="o" class="statement1" value="100"> <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div id="c">
                                <div class="card col-md-12 m-2">
                                    <div class="card-body ">
                                        <h5 class="text-warning"><strong>Conscientiousness</strong> </h5>
                                        <h4 class="text-center">{{ $value['conscientiousness'] }}</h4>
                                        <label class="karakter-inline"> 1 <i class="far fa-tired"></i>
                                            <input type="radio" name="c" class="statement2" value="5"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 2 <i class="far fa-frown"></i>
                                            <input type="radio" name="c" class="statement2" value="25"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 3 <i class="far fa-meh"></i>
                                            <input type="radio" name="c" class="statement2" value="50"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 4 <i class="far fa-grin"></i>
                                            <input type="radio" name="c" class="statement2" value="75"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 5 <i class="far fa-grin-hearts"></i>
                                            <input type="radio" name="c" class="statement2" value="100"> <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div id="e">
                                <div class="card col-md-12 m-2">
                                    <div class="card-body ">
                                        <h5 class="text-warning"><strong> Extraversion</strong></h5>
                                        <h4 class="text-center">{{ $value['extraversion'] }}</h4>
                                        <label class="karakter-inline"> 1 <i class="far fa-tired"></i>
                                            <input type="radio" name="e" class="statement3" value="5"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 2 <i class="far fa-frown"></i>
                                            <input type="radio" name="e" class="statement3" value="25"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 3 <i class="far fa-meh"></i>
                                            <input type="radio" name="e" class="statement3" value="50"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 4 <i class="far fa-grin"></i>
                                            <input type="radio" name="e" class="statement3" value="75"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 5 <i class="far fa-grin-hearts"></i>
                                            <input type="radio" name="e" class="statement3" value="100"> <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div id="a">
                                <div class="card col-md-12 m-2">
                                    <div class="card-body ">
                                        <h5 class="text-warning"><strong> Agreeableness</strong></h5>
                                        <h4 class="text-center">{{ $value['agreeableness'] }}</h4>
                                        <label class="karakter-inline"> 1 <i class="far fa-tired"></i>
                                            <input type="radio" name="a" class="statement4" value="5"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 2 <i class="far fa-frown"></i>
                                            <input type="radio" name="a" class="statement4" value="25"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 3 <i class="far fa-meh"></i>
                                            <input type="radio" name="a" class="statement4" value="50"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 4 <i class="far fa-grin"></i>
                                            <input type="radio" name="a" class="statement4" value="75"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 5 <i class="far fa-grin-hearts"></i>
                                            <input type="radio" name="a" class="statement4" value="100"> <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div id="n">
                                <div class="card col-md-12 m-2">
                                    <div class="card-body ">
                                        <h5 class="text-warning"><strong> Neuroticism</strong></h5>
                                        <h4 class="text-center">{{ $value['neuroticism'] }}</h4>
                                        <label class="karakter-inline"> 1 <i class="far fa-tired"></i>
                                            <input type="radio" name="n" class="statement5" value="5"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 2 <i class="far fa-frown"></i>
                                            <input type="radio" name="n" class="statement5" value="25"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 3 <i class="far fa-meh"></i>
                                            <input type="radio" name="n" class="statement5" value="50"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 4 <i class="far fa-grin"></i>
                                            <input type="radio" name="n" class="statement5" value="75"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 5 <i class="far fa-grin-hearts"></i>
                                            <input type="radio" name="n" class="statement5" value="100"> <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <div class="tab">
                            <div class="info">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img class="card-img-top" src="{{ asset('assets/card/card1.png') }}" alt="Card image cap" width="200" height="130">
                                            <div class="card-body">
                                              <p class="card-text text-center">Terdapat 6 Pernyataan</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img class="card-img-top" src="{{ asset('assets/card/card2.png') }}" alt="Card image cap" width="200" height="130">
                                            <div class="card-body">
                                              <p class="card-text text-center">
                                                Jawab Dengan Jujur</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img class="card-img-top" src="{{ asset('assets/card/card3.png') }}" alt="Card image cap" width="200" height="130">
                                            <div class="card-body">
                                              <p class="card-text text-center">Pilih Sesuai Tingkat</b></p>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                                <div class="container">
                                   <p> <strong>Pernyataan Kedua berisi berapa banyak anda biasanya menikmati menonton anime.</strong> Angka 1 mewakili genre yang biasanya tidak Anda sukai dan hindari, dan angka 5 mewakili genre yang biasanya Anda sukai dan cari. </p> Keterangan :
                                </div>
                                <div class="container row text-center">
                                    <div class="col-md-6">
                                        1 : Sangat Tidak Suka <br>
                                        2 : Tidak Suka <br>
                                        3 : Cukup Suka <br>
                                    </div>
                                    <div class="col-md-6">
                                        4 : Suka <br>
                                        5 : Sangat Suka <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab">
                            <?php $count = 0; ?>
                            @foreach ($genre_p as $g)
                            <div id="genres">
                                <div class="card col-md-12 m-2">
                                    <div class="card-body ">
                                        <h4 class="text-center">{{ $g['genre'] }}</h4>
                                        <label class="karakter-inline"> 1 <i class="bi bi-emoji-dizzy"></i>
                                            <input type="radio" name="genre{{ $count }}" class="genre" value="0"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 2 <i class="bi bi-emoji-frown"></i>
                                            <input type="radio" name="genre{{ $count }}" class="genre" value="25"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 3 <i class="bi bi-emoji-expressionless"></i>
                                            <input type="radio" name="genre{{ $count }}" class="genre" value="50"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 4 <i class="bi bi-emoji-smile"></i>
                                            <input type="radio" name="genre{{ $count }}" class="genre" value="75"> <span class="checkmark"></span>
                                        </label>
                                        <label class="karakter-inline"> 5 <i class="bi bi-emoji-heart-eyes"></i>
                                            <input type="radio" name="genre{{ $count }}" class="genre" value="100"> <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <?php $count++; ?>
                            @endforeach
                        </div>
                    <div style="margin:5px; margin-top: 15px;" id="nextprevious">
                        <div class="row">
                            <div class="col-3">
                            </div>
                            <div class="col-6 text-center">
                                <button type="button" id="nextBtn" onclick="nextPrev(1)" > Next</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="thanks-message text-center " id="text-message">
        @include('hasil')
    </div>
@endsection

@section('js')
<script src={!!asset('js/scripts2.js') !!} type="text/javascript"></script>
<script>

    $.ajaxSetup({
        headers : {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr("content")
        },
    });

    $("#regForm").submit(function(event){

        event.preventDefault()

        let comedian = [(parseFloat(openes[0]) / 100) , ((parseFloat(cons[2]) + parseFloat(cons[3])) /100) , ((parseFloat(extra[0]) + parseFloat(extra[1])) /100) , 0 , 0];
        let masokis = [(parseFloat(openes[2]) /100) , ((parseFloat(cons[0]) + parseFloat(cons[2]) + parseFloat(cons[3])) /100) , (parseFloat(extra[0]) /100) , (parseFloat(aggre[0]) /100) , 0];
        let pemarah = [(parseFloat(openes[1]) /100) , (parseFloat(cons[2]) /100) , (parseFloat(extra[3]) /100) , (parseFloat(aggre[3]) /100) , (parseFloat(neur[1]) /100) ];
        let sadis = [ 0 , 0 , (parseFloat(extra[2])  /100) , ((parseFloat(aggre[1]) + parseFloat(aggre[2]) + parseFloat(aggre[3])) / 100) , 0 ];
        let bodoh = [(parseFloat(openes[3]) /100) , ((parseFloat(cons[1])+parseFloat(cons[3])) /100) , 0 , 0 , ((parseFloat(neur[0]) + parseFloat(neur[2]) + parseFloat(neur[3])) /100) ];
        let name = $('#name').val();

        $.ajax({
            url: '/getData',
            type: 'POST',
            data : {
                name: name,
                output_nilai: [
                comedian,
                masokis,
                sadis,
                pemarah,
                bodoh,
            ],
                kriteria_nilai: [
                sumA(openes) / 100,
                sumA(cons) / 100,
                sumA(extra) / 100,
                sumA(aggre) / 100,
                sumA(neur) / 100,
            ],
            genre_nilai : genre,
            },
            success: function(response){
                read();
            },
            error: function( errorThrown,  jqXhr, textStatus,){
                console.log( errorThrown );
            },
        });

        $.ajax({
            url: "{{ url('viewKarakter') }}",
            type: 'POST',
            data : {
                name: name,
                output_nilai: [
                comedian,
                masokis,
                sadis,
                pemarah,
                bodoh,
            ],
                kriteria_nilai: [
                sumA(openes) / 100,
                sumA(cons) / 100,
                sumA(extra) / 100,
                sumA(aggre) / 100,
                sumA(neur) / 100,
            ],
            genre_nilai : genre,
            },
            success: function(response){
                $('#karakter').html(response);
            },
            error: function( errorThrown,  jqXhr, textStatus,){
                console.log( errorThrown );
            },
        });

        $.ajax({
            url: "{{ url('viewTableKarakter') }}",
            type: 'POST',
            data : {
                name: name,
                output_nilai: [
                comedian,
                masokis,
                sadis,
                pemarah,
                bodoh,
            ],
                kriteria_nilai: [
                sumA(openes) / 100,
                sumA(cons) / 100,
                sumA(extra) / 100,
                sumA(aggre) / 100,
                sumA(neur) / 100,
            ],
            genre_nilai : genre,
            },
            success: function(response){
                $('#hasil').html(response);
            },
            error: function( errorThrown,  jqXhr, textStatus,){
                console.log( errorThrown );
            },
        });

        $.ajax({
            url: "{{ url('viewBigfive') }}",
            type: 'POST',
            data : {
                name: name,
                output_nilai: [
                comedian,
                masokis,
                sadis,
                pemarah,
                bodoh,
            ],
                kriteria_nilai: [
                sumA(openes) / 100,
                sumA(cons) / 100,
                sumA(extra) / 100,
                sumA(aggre) / 100,
                sumA(neur) / 100,
            ],
            genre_nilai : genre,
            },
            success: function(response){
                $('#bigfive').html(response);
            },
            error: function( errorThrown,  jqXhr, textStatus,){
                console.log( errorThrown );
            },
        });

        $.ajax({
            url: "{{ url('viewGenre') }}",
            type: 'POST',
            data : {
                name: name,
                output_nilai: [
                comedian,
                masokis,
                sadis,
                pemarah,
                bodoh,
            ],
                kriteria_nilai: [
                sumA(openes) / 100,
                sumA(cons) / 100,
                sumA(extra) / 100,
                sumA(aggre) / 100,
                sumA(neur) / 100,
            ],
            genre_nilai : genre,
            },
            success: function(response){
                $('#genre').html(response);
            },
            error: function( errorThrown,  jqXhr, textStatus,){
                console.log( errorThrown );
            },
        });

        $.ajax({
            url: '/user-save',
            type: 'POST',
            data : {
                name: name,
                output_nilai: [
                comedian,
                masokis,
                sadis,
                pemarah,
                bodoh,
            ],
                kriteria_nilai: [
                sumA(openes) / 100,
                sumA(cons) / 100,
                sumA(extra) / 100,
                sumA(aggre) / 100,
                sumA(neur) / 100,
            ],
            genre_nilai : genre,
            },
            success: function(response){
                read();
            },
            error: function( errorThrown,  jqXhr, textStatus,){
                console.log( errorThrown );
            },
        });
    });

    function read()
    {
        let comedian = [(parseFloat(openes[0]) / 100) , ((parseFloat(cons[2]) + parseFloat(cons[3])) /100) , ((parseFloat(extra[0]) + parseFloat(extra[1])) /100) , 0 , 0];
        let masokis = [(parseFloat(openes[2]) /100) , ((parseFloat(cons[0]) + parseFloat(cons[2]) + parseFloat(cons[3])) /100) , (parseFloat(extra[0]) /100) , (parseFloat(aggre[0]) /100) , 0];
        let pemarah = [(parseFloat(openes[1]) /100) , (parseFloat(cons[2]) /100) , (parseFloat(extra[3]) /100) , (parseFloat(aggre[3]) /100) , (parseFloat(neur[1]) /100) ];
        let sadis = [ 0 , 0 , (parseFloat(extra[2])  /100) , ((parseFloat(aggre[1]) + parseFloat(aggre[2]) + parseFloat(aggre[3])) / 100) , 0 ];
        let bodoh = [(parseFloat(openes[3]) /100) , ((parseFloat(cons[1])+parseFloat(cons[3])) /100) , 0 , 0 , ((parseFloat(neur[0]) + parseFloat(neur[2]) + parseFloat(neur[3])) /100) ];
        let name = $('#name').val();
        $.ajax({
            url: "{{ url('viewUser') }}",
            type: 'GET',
            data : {
                name: name,
                output_nilai: [
                comedian,
                masokis,
                sadis,
                pemarah,
                bodoh,
            ],
                kriteria_nilai: [
                sumA(openes) / 100,
                sumA(cons) / 100,
                sumA(extra) / 100,
                sumA(aggre) / 100,
                sumA(neur) / 100,
            ],
            genre_nilai : genre,
            },
            success: function(response){
                $('#viewUser').html(response);
            },
            error: function( errorThrown,  jqXhr, textStatus,){
                console.log( errorThrown );
            },
        });
    };

</script>
@endsection
