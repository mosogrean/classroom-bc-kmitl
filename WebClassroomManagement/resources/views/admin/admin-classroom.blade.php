<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}

.button1 {
    background-color: #4CAF50; /* GREEN */
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button1 {border-radius: 2px;}

.button2 {
    background-color: #7CFC00; /* LAWNGREEN */
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {border-radius: 2px;}

.button3 {
    background-color: #FF0000; /* RED */
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button3 {border-radius: 2px;}

</style>
</head>
<body>

<h2>Room-List Table</h2>
{{--  {{ dd($books[0]['id']) }}  --}}
    <table>
        <tr>
            <th>Id</th>
            <th>Room</th>
            <th>Building</th>
            <th>Reserve</th>
            <th>Edit</th>
            <th>Cancle</th>
        </tr>
        @foreach ($adRooms as $adRoom)
            <tr>
                <td>{{ $adRoom['id'] }}</td>
                <td>{{ $adRoom['room']}}</td>
                <td>{{ $adRoom['building']}}</td>
                <td><a href="{{ route('admin.reserve', $adRoom['id']) }}"><button type="submit" class="button button1">Reserve</button></a></td>
                <td><a href="{{ route('admin.edit', $adRoom['id']) }}"><button type="submit" class="button button2">Edit</button></a></td>
                <td><a href="{{ route('admin.cancle', $adRoom['id']) }}"><button type="submit" class="button button3">Cancel</button></a></td>
            </tr>
        @endforeach
    </table>
    
</body>
</html>
