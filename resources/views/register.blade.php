<html>


    {{"FORM"}}
    {{csrf_field()}}



  <form method="post" action="{{ url('register_post')}}">

      <input type="hidden" name="token" value="{{ csrf_token()}}">

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
      <input type="text" id="first_name" name="first_name">     <br> <br>
      <span>{{$errors->first('first_name')}}</span>        <br> <br>

      <label for="last_name">Last Name  </label>
      <input type="text" id="last_name" name="last_name">       <br>  <br>
      <span>{{$errors->first('last_name')}}</span>  <br> <br>

      <label for="username">UserName  </label>
      <input type="text" id="username" name="username">         <br> <br>

                                                                 <br> <br>
      <label for="password">  Password </label>
      <input type="password" id="password" name="password">     <br> <br>

      <input type="submit" value="Submit">



  </form>





</html>
