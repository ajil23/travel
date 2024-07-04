<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Pemesanan</title>
    <style>
        body{background-color:#FFEBEE}.card{width:400px;background-color:#fff;border:none;border-radius: 12px}label.radio{cursor: pointer;width: 100%}label.radio input{position: absolute;top: 0;left: 0;visibility: hidden;pointer-events: none}label.radio span{padding: 7px 14px;border: 2px solid #eee;display: inline-block;color: #039be5;border-radius: 10px;width: 100%;height: 48px;line-height: 27px}label.radio input:checked+span{border-color: #039BE5;background-color: #81D4FA;color: #fff;border-radius: 9px;height: 48px;line-height: 27px}.form-control{margin-top: 10px;height: 48px;border: 2px solid #eee;border-radius: 10px}.form-control:focus{box-shadow: none;border: 2px solid #039BE5}.agree-text{font-size: 12px}.terms{font-size: 12px;text-decoration: none;color: #039BE5}.confirm-button{height: 50px;border-radius: 10px}
    </style>
</head>
<body>
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <div class="card-body">
                <h6 class="information mt-4">Isilah kolom berikut dengan tepat dan cermat</h6>
                <form action="{{route('store.pemesanan')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <select name="paket_id" class="form-control" required>
                                    <option selected>Pilih Paket</option>
                                    @foreach ($paket as $paket)
                                        <option value="{{ $paket->id }}">
                                            {{ $paket->nama}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Nama" name="nama" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input class="form-control" type="number" placeholder="Harga" id="firstNumber" value="{{$paket->harga}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input class="form-control" type="number" placeholder="Qty" name="qty" id="secondNumber" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group"> <input class="form-control" type="text" placeholder="Telepon" name="telepon" required> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group"> <input class="form-control" type="email" placeholder="Email" name="email" required> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group"> 
                                    <input class="form-control" type="number" placeholder="Total" name="total" id="total" required>
                                    <span>
                                        <button class="form-control btn btn-success" type="button" onClick="multiplyBy()" Value="Multiply">Hitung</button>
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group"> 
                                    <select  class="form-control" name="pembayaran" required>
                                        <option>Pilih Metode Pembayaran</option>
                                        <option value="bri">Bank BRI</option>
                                        <option value="bni">Bank BNI</option>
                                        <option value="dana">Dana</option>
                                        <option value="gopay">Gopay</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block ">Kirim</button>
                    <button type="button" onclick="history.back()" class="btn btn-outline-primary btn-block ">Kembali</button>
                </form>
            </div>
        </div>
    </div>
    <script>
                     

        function multiplyBy() {
            num1 = document.getElementById("firstNumber").value;
            num2 = document.getElementById( "secondNumber").value;
            document.getElementById( "total").value = num1 * num2;
        }


    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @include('sweetalert::alert')
</body>
</html>