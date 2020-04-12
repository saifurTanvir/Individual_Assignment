<h1>This is adding buss page</h1>

<form method="post">
    @csrf
    <table> 
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Operator</td> 
            <td><input type="text" name="operator"></td>
        </tr>
        <tr>
            <td>Location</td>
            <td><input type="text" name="location"></td>
        </tr>
        <tr>
            <td>Seat_Row</td>
            <td><input type="text" name="seat_row"></td>
        </tr>
        <tr>
            <td>Seat_Column</td>
            <td><input type="text" name="seat_column"></td>
        </tr>
        <tr>
            <td>Company</td>
            <td><input type="text" name="company"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="ADD"></td>
        </tr>
        <tr>
            <td><a href="{{route("admin.index")}}">Back</a></td>
            <td><a href="{{route("logout")}}">Logout</a></td>
        </tr>

    </table>

    @foreach ($errors->all() as $error)
        {{$error}}<br>
    @endforeach
</form>