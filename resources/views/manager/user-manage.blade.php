<div class="container">
    <div class="col-md-4">
        <a class="btn btn-raised btn-info"href="{{ route('export') }}">Export(Excel)</a>
        <a class="btn btn-raised btn-info" href="{{ route('pdf') }}">Export(PDF)</a>
        <a class="btn btn-raised btn-info" href="{{ route('import') }}">Impoert</a>
    </div>
    <input type="file" name="myFile">
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
                @foreach ($users as $key=>$user)
                <tr>
                    <td>{{$key+1}}</td>
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
</div> 