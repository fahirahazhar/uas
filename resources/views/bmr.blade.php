<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator BMR </title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>
<body style="background-color: blanchedalmond;">
    <div class="container p-4" style="background-color: bisque; max-width: 700px;">
        <form action="index.php" method="POST">

            <h2 class="display-6"></h2>
            <div class="p-2" style="border-style: solid; border-color:blueviolet; ">
                <br>
                <div class="input-group mb-3">

                    <div class="input-group-inline p-1">
                        <label class="input-group-inline">
                            <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Ficon-icons.com%2Fid%2Ficon%2Flaki-laki-pria-orang-orang-avatar-putih-nada%2F159363&psig=AOvVaw0cpCTgAsKarGHnHwKF8wHR&ust=1671508995958000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCICX1LDmhPwCFQAAAAAdAAAAABAE" width="50 px" class="mb-2"> 
                            <input type="radio " value="pria" name="gender" id="pria" required>
                        </label>
                    </div>
                    
                    <div class="input-group-inline ">
                        <label class="input-group-inline p-1">
                            <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Ficon-icons.com%2Fid%2Ficon%2Fperempuan-wanita-orang-orang-avatar%2F159366&psig=AOvVaw2Bhb5PKQpSgiLTrwtjt17g&ust=1671509384895000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCPD1iurnhPwCFQAAAAAdAAAAABAE" width="50 px" class="mb-2"> 
                            <input type="radio " value="wanita" name="gender" id="wanita" required>
                        </label>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="number"name="usia" class="form-control" placeholder="usia"required>
                    <label class="input-group-text">tahun</label>
                </div>

                <div class="input-group mb-3">
                    <input type="number"name="tinggi" class="form-control" placeholder="tinggi badan"required>
                    <label class="input-group-text">cm</label>
                </div>

                <div class="input-group mb-3">
                    <input type="number"name="berat" class="form-control" placeholder="Berat badan" aria-label="berat"required>
                    <label class="input-group-text">kg</label>
                </div>

               <label for="basic-url"class="form-label">Tingkat aktivitas harian anda </label>
               <div class="input-group mb-3">
                <div class="form-check-inline">
                    <label class="form-chechk-label">
                        <input type="radio" class="form-check-input" name="aktivitas" value="Ta" required>Tidak  aktif 
                    </label>
                </div>

                <div class="form-check-inline">
                    <label class="form-chechk-label">
                        <input type="radio" class="form-check-input" name="aktivitas" value="Sa" required>Sedikit aktif 
                    </label>
                </div>

                <div class="form-check-inline">
                    <label class="form-chechk-label">
                        <input type="radio" class="form-check-input" name="aktivitas" value="Ca" required>Cukup  aktif 
                    </label>
                </div>

                <div class="form-check-inline">
                    <label class="form-chechk-label">
                        <input type="radio" class="form-check-input" name="aktivitas" value="a" required>aktif 
                    </label>
                </div>

                <div class="form-check-inline">
                    <label class="form-chechk-label">
                        <input type="radio" class="form-check-input" name="aktivitas" value="Sangat" required>Sangat  aktif 
                    </label>
                </div>
               </div>


               <div class="input-group mb-3">
                <button class="btn-success" type="submit">Hitung Data</button>
               </div>

               <br><br>

               <div class="input-group mb-3">
                <div type="text" class="form-control" required>
                    <?php include "hitung.php"; ?>
                </div>
               </div>
            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    
</body>
</html>