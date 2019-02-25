<div class="login">
    <div class="login-body" id="login">
        <a class="login-brand" href="/">
            <img class="img-responsive" src="{{URL::asset('assets/panel/img/logo.png')}}" alt="GhostShell">
        </a>

        <h3 class="login-heading">Logowanie</h3>

        <div class="login-form">
                {!! Form::open(['url'=>'/login','data-toggle'=>'validator' ,'method'=>'post']) !!}
                <div class="form-group">
                    {!! Form::label('email','Email') !!}
                    {!! Form::text('email',null,['class'=>'form-control','name'=>'email','spellcheck'=>'false','autocomplete'=>'off','data-msg-required'=>'Uzupełnij swój email.','data-rule-email'=>'true','data-rule-required'=>"true",'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password','Hasło') !!}
                    {!! Form::password('password',['class'=>'form-control','spellcheck'=>'false','minlength'=>"6",'autocomplete'=>'off','data-msg-required'=>'Uzupełnij swóje hasło.','data-msg-minlength'=>"Hasło musi mieć 6 lub więcej znaków.",'required']) !!}
                    @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <small class="has-error help-block">{{ $error }}</small>
                            @endforeach
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::submit('Zaloguj',['class'=>'btn btn-primary btn-block']) !!}
                </div>
                <div class="form-group">
                    <ul class="list-inline">
                        <li>
                            <label class="custom-control custom-control-primary custom-checkbox">
                                <input class="custom-control-input" type="checkbox">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-label">Keep me signed in</span>
                            </label>
                        </li>
                    </ul>
                    <ul class="list-inline">
                        <li><a href="#" for="register">Rejestracja</a></li>
                        <li>
                            <span aria-hidden="true"> · </span>
                        </li>
                        <li><a href="#" for="loss_password">Zapomniałeś hasła?</a></li>

                    </ul>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="login-body" id="loss_password" style="display: none">
        <a class="login-brand" for="login" href="#">
            <img class="img-responsive" src="{{URL::asset('assets/panel/img/logo.png')}}" alt="Elephant">
        </a>

        <h3 class="login-heading">Reset Your Password</h3>

        <div class="login-form">
            {!! Form::open(['url'=>'/password','data-toggle'=>'validator']) !!}
                <div class="form-group">
                    {!! Form::label('name','Login') !!}
                    {!! Form::text('name',null,['class'=>'form-control','name'=>'name','spellcheck'=>'false','autocomplete'=>'off','data-msg-required'=>'Uzupełnij swój login.','required']) !!}

                </div>
                <div class="form-group">
                    {!! Form::submit('Przypomnij hasło',['class'=>'btn btn-primary btn-block']) !!}
                </div>
                <div class="form-group">
                    <ul class="list-inline">
                        <li>
                            <small>Jeżeli zapomniałeś hasła, wyślemy ci na email link do zresetowania go.
                            </small>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
    <div class="login-body" id="register" style="display: none">
        <a class="login-brand" for="login" href="#">
            <img class="img-responsive" src="{{URL::asset('assets/panel/img/logo.png')}}" alt="Elephant">
        </a>

        <h3 class="login-heading">Rejestracja</h3>

        <div class="login-form">
            {!! Form::open(['url'=>'/rejestracja','data-toggle'=>'validator']) !!}
                <div class="form-group">
                    {!! Form::label('name','Login') !!}
                    {!! Form::text('name',null,['class'=>'form-control','name'=>'name','spellcheck'=>'false','autocomplete'=>'off','data-msg-required'=>'Uzupełnij swój login.','required']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('email','Email') !!}
                    {!! Form::text('email',null,['class'=>'form-control','name'=>'email','spellcheck'=>'false','autocomplete'=>'off','data-msg-required'=>'Uzupełnij swój email.','data-rule-email'=>'true','data-rule-required'=>"true",'required']) !!}

                    <small class="help-block">You will occasionally receive account related emails.</small>
                </div>
                <div class="form-group">
                    {!! Form::label('password','Hasło') !!}
                    {!! Form::password('password',['class'=>'form-control','spellcheck'=>'false','minlength'=>"6",'autocomplete'=>'off','data-msg-required'=>'Uzupełnij swóje hasło.','data-msg-minlength'=>"Hasło musi mieć 6 lub więcej znaków.",'required']) !!}

                </div>
                <div class="form-group">
                    {!! Form::submit('Zarejestruj',['class'=>'btn btn-primary btn-block']) !!}
                </div>
                <div class="form-group">

                    <ul class="list-inline">
                        <li><a href="#" for="login">Logowanie</a></li>
                        <li>
                            <span aria-hidden="true"> · </span>
                        </li>
                        <li><a href="#" for="loss_password">Zapomniałeś hasła?</a></li>

                    </ul>
                </div>
            </form>
        </div>
    </div>
    <div class="login-footer">
        <ul class="list-inline">
            <li><a class="link-muted" href="#">Regulamin</a></li>
            <li>|</li>
            <li><a class="link-muted" href="#">Polityka cookies</a></li>
            <li>|</li>
            <li>© GhostShell 2017</li>
        </ul>
    </div>
</div>
<script>
    $('a').on("click", function () {
        if ($(this).attr('for') !== null) {
            open($(this).attr('for'));
        }
    });
    function open(id) {
        $('div.login-body').each(function () {
            if ($(this).attr('id') !== id) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });

    }

</script>