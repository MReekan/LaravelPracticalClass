<html>


{{" Login FORM"}}



<form method="post" action="{{ url('login_post')}}">

    <!--<input type="hidden" name="token" value="{{ csrf_token()}}"> -->

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


    <label for="username">User Name  </label>
    <input type="text" id="username" name="username">         <br> <br>

    <label for="password">  Password </label>
    <input type="password" id="password" name="password">     <br> <br>

    <input type="submit" value="Login">



</form>





</html>
