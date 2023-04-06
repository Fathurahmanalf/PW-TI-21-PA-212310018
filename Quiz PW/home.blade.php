<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Npm</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['students'] as $index => $result)
                <tr>
                    <td>{{ $index+1 }} </td>
                    <td>{{ $result['npm'] }} </td>
                    <td>{{ $result['name'] }} </td>
                    <td>{{ $result['gender'] }} </td>
                    <td>{{ $result['alamat'] }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>