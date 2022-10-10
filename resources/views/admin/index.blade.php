<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"> </head>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Email</th>
      <th scope="col">Name</th>
      <th scope="col">city</th>
      <th scope="col">stage</th>
      <th scope="col">Hospital_id</th>
      <th scope="col">Zipcode</th>
      <th scope="col">Speciality</th>
      <th scope="col">Address</th>



      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->email}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->city}}</td>
      <td>{{$user->stage}}</td>
      <td>{{$user->hospital_id}}</td>
      <td>{{$user->zipcode}}</td>
      <td>{{$user->speciality}}</td>
      <td>{{$user->address}}</td>



      
      <td><a href="{{ url('/edit-records/'.$user->id)}}" class="btn btn-primary  active" role="button" aria-pressed="true">edit</a>
</td>
<td><form action="{{ url('/delete-records/'.$user->id)}}" method="POST">
  @csrf
  @method('DELETE')
  <button class="btn btn-danger">Delete</button>
</form>
</td>





    </tr>
   
    </tr>
    @endforeach
    
  </tbody>
</table>
</html>