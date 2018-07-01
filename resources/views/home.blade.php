<html>


  <body>
  <table border="1">
      <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>

      </tr>

      <?php
          /*
          foreach ($user_data as $user) {
              echo "<tr>";
              echo " <td>".$user->id."</td>";
              echo " <td>".$user->first_name."</td>";
              echo " <td>".$user->last_name."</td>";
              echo " <td>".$user->username."</td>";

              echo "</tr>";
          }
          */
      ?>

      @foreach($user_data as $user)
            <tr>
            <td> {{$user->id}}</td>
            <td> {{$user->first_name}}</td>
            <td> {{$user->last_name}}</td>
            <td> {{$user->username}}</td>
            <td><a href="{{url('user_update/'.$user->id)}}" <button>Update</button> </td>
        </tr>

  @endforeach
  </table></body>

</html>
