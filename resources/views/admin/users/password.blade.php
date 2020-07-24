

	<section class="height-basic">
	    <div class="container" style="margin-top: 180px; margin-bottom: 180px;">
	        <div class="row">
	            <div>
		            <div class="panel panel-default">
		                <div class="panel-heading panel-heading-right"><h1>Cambiar contraseÃ±a</h1></div>
		                <div class="panel-body">
		                    <form class="form-horizontal" role="form" method="POST" action="{{ route('users.updatepassword', $user->id) }}" enctype="multipart/form-data">
		                        {{ csrf_field() }}
		                        <fieldset>
		                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		                                <label for="password" class="col-md-4 control-label">ContraseÃ±a actual*</label>
		                                <div class="col-md-6">
		                                    <input id="password" type="password" class="form-control" name="password" required>
		                                    @if ($errors->has('password'))
		                                        <span class="help-block">
		                                            <strong>{{ $errors->first('password') }}</strong>
		                                        </span>
		                                    @endif
		                                </div>
		                            </div>
		                            <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
		                                <label for="new-password" class="col-md-4 control-label">ContraseÃ±a nueva*</label>
		                                <div class="col-md-6">
		                                    <input id="new_password" type="password" class="form-control" name="new_password" required>
		                                    @if ($errors->has('new_password'))
		                                        <span class="help-block">
		                                            <strong>{{ $errors->first('new_password') }}</strong>
		                                        </span>
		                                    @endif
		                                </div>
		                            </div>
		                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
		                                <label for="password_confirmation" class="col-md-4 control-label">Confirmar contraseÃ±a*</label>
		                                <div class="col-md-6">
		                                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
		                                    @if ($errors->has('password_confirmation'))
		                                        <span class="help-block">
		                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
		                                        </span>
		                                    @endif
		                                </div>
		                            </div>
		                        </fieldset>
		                        <div class="form-group text-center btn-div">
		                            <div class="col-md-6 col-md-offset-4">
		                                <button type="submit" class="btn btn-primary btn-form">Guardar</button>
		                                <a href="{{ route('users.main') }}" class="btn btn-danger btn-form">Cancelar</a>
		                            </div>
		                        </div>
		                    </form>
		                </div>
		            </div>
		        </div>
			</div>
		</div>
	</section>

