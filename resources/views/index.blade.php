<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OneFish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
    <header class="header">
        <div class="container mt-5 border rounded" style="background-color: #00EEFE;">
            <h1 class="header-text">OneFish</h1>
            <div class="containe" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>
        <div class="contens" id="contens">
            <div class="row justify-content-center mt-3">
                <div class="content" > <!-- Ganti ID menjadi 'contents1' -->
                    <div class="card shadow-sm rounded border" style="background-color: #3141D2;">
                        <div class="card-body text-center" style="color: white;">
                            <h5 class="card-title">pH <img src="{{ asset('img/iconpH.png') }}" alt="pH Icon" ></h5>
                            @php
                                $lastPh = $alats ->last();
                            @endphp
                            @if ($lastPh)
                                <p>{{ $lastPh->ph }}</p>
                            @else
                                <p>Data pH tidak tersedia</p>
                            @endif
                            <img src="{{ asset('img/image.png') }}" alt="wave">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="content" > <!-- Ganti ID menjadi 'contents2' -->
                    <div class="card shadow-sm rounded border" style="background-color: #0A950A;">
                        <div class="card-body text-center" style="color: white;">
                            <h5 class="card-title">Amonia <img src="{{ asset('img/ammonia.png') }}" alt="Ammonia" ></h5>
                            <p>Normal</p>
                            <img src="{{ asset('img/image.png') }}" alt="wave">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <h2 class="mode">Mode</h2>
                </div>
                <div>
                    <h2 class="card shadow-sm rounded auto-border">Auto</h2>
                </div>
            </div>
        </div>
        <div id="desktop">
            <div class="desk" id="desk"> <!-- Tambahkan ID 'desk' untuk merujuk ke elemen desk dalam JavaScript -->
                {{-- <p>Data dalam 2 minggu</p> --}}
                <table>
                    <tr>
                        <th>Tanggal</th>
                        <th>pH</th>
                        <th>Amonia</th>
                        <th>Keterangan</th>
                    </tr>
                    @foreach ($alats as $alat )
                        <tr>
                            <td>{{ $alat->created_at }}</td>
                            <td>{{ $alat->ph }}</td>
                            <td>{{ $alat->amonia }}</td>
                            <td>{{ $alat->keterangan }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </header>

    <script>
        function myFunction(x) {
            x.classList.toggle("change");
            var contens = document.getElementById('contens');
            var desk = document.getElementById('desk');

            if (contens.classList.contains("show")) {
                contens.classList.remove("show");
                desk.classList.remove("show");
            } else {
                contens.classList.add("show");
                desk.classList.contains("show");
                desk.classList.add("show");
            }
        }
    </script>
</body>
</html>
