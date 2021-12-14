<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- MY CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <title><?= $title; ?></title>
</head>

<body>
    <div class="tes" style="background-image: url(/img/4.jpg); height:625px; padding-left:200px">
        <h1 class="tes" style="padding-top: 130px; ">Silahkan Login</h1>

        <form action="/login/validasi" method="post" enctype="multipart/form-data">

            <div class="mb-1">
                <label for="username" class="form-label"> <b> Username </b></label>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <input type="text" id="username" class="form-control" placeholder="Masukkan Username" name="username">
                </div>
            </div>
            <br>
            <div class="mb-1">
                <label for="password" class="form-label"> <b> Password </b></label>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <input type="password" id="password" class="form-control" placeholder="Masukkan Password" name="password">
                </div>
            </div>
            <br>
            <div class="mb-1">
                <label for="password" class="form-label"> <b> Level Akses </b></label>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <input type="text" id="levelakses" class="form-control" placeholder="Masukkan Level Akses" name="levelakses">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-warning"><b>Login</b></button>
        </form>
    </div>
</body>

</html>