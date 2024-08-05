<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            background: #e5e5e5;
            padding: 0 10px;
            border-radius: 3px;
        }
        section form input {
            display: block;
            background: #faf8f8;
            border: none;
            border: 1px solid #333;
            border-radius: 3px;
            height: 20px;
            width: 200px;
            margin-bottom: 10px;
        }
        section form button {
            background: #4f4fe7;
            color: #fff;
            border: none;
            border: 1px solid #DDD;
            padding: 5px 15px;
            border-radius: 5px;
            width: 100px;
            margin: auto;
            display: block;
        }
    </style>
</head>
<body>

    <section>
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <input type="text" name="name">
            <input type="text" name="email">
            <input type="text" name="password">
            <button type="submit">Send</button>
        </form>

        <table border="1">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a style="text-decoration: none; color: white" href="{{ route('user.delete', [$user->id]) }}">
                            <button style="cursor: pointer; background-color: red; color: white; border: none; border: 1px solid #333">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>

</body>
</html>
