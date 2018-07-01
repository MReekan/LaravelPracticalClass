<html>


{{" update FORM"}}



<form method="post" action="{{ url('user_update_post/'.$user->id)}}">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    {{csrf_field()}}

    <label for="first_name">First Name  </label>
    <input type="text" id="first_name" name="first_name" value="{{$user->first_name}}"/>     <br> <br>

    <label for="last_name">Last Name  </label>
    <input type="text" id="last_name" name="last_name" value="{{$user->last_name}}"/>       <br>  <br>

    <label for="age">Age  </label>
    <input type="text" id="age" name="age" value="{{$user['userDetail']['age']}}"/>     <br> <br>

    <label for="address">Address  </label>
    <input type="text" id="address" name="address" value="{{$user['userDetail']['address']}}"/>     <br>  <br>



    <label for="username">User Name  </label>
    <input type="text" id="username" name="username" value="{{$user->username}}" readonly/>         <br> <br>



    <input type="submit" value="Update"/>



</form>





</html>
