<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
        <form action="/fakultas" method="post">
            @csrf
            <div class= "mb-3">
                <h5>Form pengisian Data Fakultas</h5>
                <div class="mb-3">
                <label for="nama" class="form-label">Nama Fakultas</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Fakultas">
                
                <label for="singkatan" class="form-label">Singkatan Fakultas</label>
                <input type="text" class="form-control" id="singkatan" placeholder="Masukkan Singkatan Fakultas">

                <label for="dekan" class="form-label">Nama Dekan Fakultas</label>
                <input type="text" class="form-control" id="dekan" placeholder="Masukkan Nama Dekan Fakultas">
                
                
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>
            </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>