<div>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $data['name'] }}</td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td>{{ $data['nim'] }}</td>
        </tr>
        <tr>
            <td>Jenis Seminar</td>
            <td>:</td>
            <td>{{ $data['type'] }}</td>
        </tr>
    </table>

    <p>Catatan Penolakan : {{ $data['message'] }}</p>
</div>
