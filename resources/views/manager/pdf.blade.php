
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User PDF</title>
<link href="{{ltrim(public_path('css/bootstrap.min.css'),'/')}}" rel="stylesheet">
<link href="{{ltrim(public_path('css/custom.css'),'/')}}" rel="stylesheet">
</head>
<body>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>      
                @foreach ($data as $key=>$user)
                <tr>
                    <td>{{$key+1}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>    
                @foreach ($user->roles as $role)
                <tr>
                    <td>{{$role->name}}</td>
                    <br>
                <tr>    
                @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>  