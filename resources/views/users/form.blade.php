<div class="row">

	<div class="col-sm-3">
		{!! Form::field('Nazwa', 'name') !!}
	</div>

	<div class="col-sm-3">
		{!! Form::field('Login', 'email') !!}
	</div>

  <div class="col-sm-3">
    {!! Form::passwd('Hasło', 'password') !!}
  </div>

  <div class="col-sm-3">
    {!! Form::passwd('Powtórz hasło', 'repeat') !!}
  </div>

</div>
