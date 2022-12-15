<h1>Update Member Details</h1>
<form action="edit" method="POST">
    @csrf
 <input type="hidden" name="id" value={{$data['id']}}>  
<input type="text" name="membername" value="{{$data['name']}}"><br><br>
<input type="email" name="memberemail" value="{{$data['email']}}"><br><br>
<input type="text" name="memberaddr" value="{{$data['address']}}"><br><br>
<button type="submit">Update</button>

 </form>