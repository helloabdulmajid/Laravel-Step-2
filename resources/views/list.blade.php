<h1>Member List </h1>
<table>
    <tr>
    <td>ID</td>
    <td>NAME</td>
    <td>EMAIL</td>
    <td>ADDRESS</td>
 </tr>
@foreach($members as $member)
 <tr>
    <td>{{$member['id']}}</td>
    <td>{{$member['name']}}</td>
    <td>{{$member['email']}}</td>
    <td>{{$member['address']}}</td>

 </tr>

 @endforeach

</table>