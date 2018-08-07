<table border="1">
    <tr>
        <th>Angka</th>
        <th>Text</th>
    </tr>


@foreach ($hasil as $item)

        <tr>
            <td>{{ $item['Angka'] }}</td>
            <td>{{ $item['Text'] }}</td>
        </tr>
@endforeach
</table>