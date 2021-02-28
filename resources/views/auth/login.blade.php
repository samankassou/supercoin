@include('partials.header', ['title' => 'Login'])

			<div class="content">


    <div class="bannerwrap insideheaders">
      <div class="bannerleft">
        <h1 class="fadeInLeft wow">Member <span>Login</span></h1>
      </div>
    </div>
      </div>
</div>

</div>

<div class="loginpage">
  <div class="content">

    <div class="loginwrappers">
    <div class="icon"><img src="styles/images/logicon.png" alt="" /></div>
      <div class="loginheads">user Login</div>

                  <div class="form-container login">
                      
<form action="{{ route('login') }}" method="POST">
@csrf
<table width="100%" border=0 cellpadding=4 cellspacing=4>
<tr>
 <td colspan="2">
  <div class="form-group @error('username') has-error @enderror">
     <input type=text name="username" value="{{ old('username') }}" class=inpts size=30 autofocus="autofocus" placeholder="Username">
     <span class="help-block">@error('username') {{ $message }} @enderror</span>
  </div>
  </td>
</tr><tr>
 <td colspan="2">
  <div class="form-group @error('password') 'has-error' @enderror">
    <input type='password' required="" name="password" class=inpts size=30 placeholder="Password">
    <span class="help-block">@error('password') {{ $message }} @enderror</span>
  </div></td>
</tr>
<tr>
      <td height="40" valign="middle"><input type="submit" value="Login" name="submit" class=sbmt></td>
			<td align="right" valign="middle"><a href="{{ route('password.reset') }}">Forgot Password?</a></td>
        </tr>
</table>
</form>

    </div>
    
      <div class="loginaction">
    <h4>Do not have an account yet? </h4>
    <a href="{{ route('register') }}" class="signup">Register Here</a></div>
    
  </div>
	</div>
</div> 

 @include('partials.footer')