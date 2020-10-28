<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="{{route('books.store')}}" method="POST">
@csrf
@method('POST')
<label for="titolo">TITOLO
    <input type="text" placeholder="title" name="title" id="titolo">
</label>

<label for="autore">AUTORE
    <input type="text" placeholder="author" name="author" id="autore">
</label>

<label for="genere">GENERE
    <input type="text" placeholder="genre" name="genre" id="genere">
</label>

<label for="casa_editrice">CASA EDITRICE
    <input type="text" placeholder="edition" name="edition" id="casa_editrice">
</label>

<label for="immagine">IMMAGINE
    <input type="text" placeholder="image" name="image" id="immagine">
</label>

<label for="isbn">ISBN
    <input type="text" placeholder="isbn" name="isbn" id="isbn">
</label>

<label for="anno">ANNO
    <input type="date" placeholder="year" name="year" id="anno">
</label>

<label for="pagine">PAGINE
    <input type="number" placeholder="pages" name="pages" id="pagine">
</label>

<input type="submit" value="salva">

</form>


</body>
</html>