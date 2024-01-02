@foreach($data as $row)
<tr>
    <td height="45" >{{ QrCode::size(45)->generate($row->uid)}}</td>
    <td>{{ $row->groom_first_name }}</td>
    <td>{{ $row->bride_first_name }}</td>
</tr>
@endforeach
<tr>
    <td colspan="3" align="center">
        {!! $data->links() !!}
    </td>
</tr>