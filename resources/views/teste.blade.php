<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Start</title>
    <link rel="stylesheet" href="../css/tailwind.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    Id infomado: {{$id}}

    <h1 class="bg-red-500">

        @foreach($produtos as $itehm)
            <p>Product: {{$item}}</p>

        @endforeach
    </h1>
</body>
</html>
