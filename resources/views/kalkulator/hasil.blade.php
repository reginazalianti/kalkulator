<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><center>KALKULATOR SEDERHANA</h1>
    <center>

        <form action="{{ route('hitung.store') }}"method="post">
        @csrf 
        Angka pertama : <input type="number" name="angka1" id=""><br>
        <br>
        Angka Kedua   : <input type="number" name="angka2" id=""><br>
        <br>
                        <input type="submit" name="op" value="+">
                        <input type="submit" name="op" value="-">
                        <input type="submit" name="op" value="x">
                        <input type="submit" name="op" value="/">
                        <input type="submit" name="op" value="reset">

        </form>         
        
        </center>

        <h1><center>Hasil : {{$hasil}}</center></h1>                    
</body>
</html>