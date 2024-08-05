<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input {
            text-align: center;
            width: 250px;
            height: 30px;
            background: #e8e8e8;
            color: #000;
            border-radius: 3px;
            border: none;
            border: 1px solid #cdc4c4;
            padding: 5px 10px;
            font-weight: 700;
        }
    </style>
    @livewireStyles
</head>
<body>

    @livewire('counter')

    @livewireScripts
</body>
</html>
