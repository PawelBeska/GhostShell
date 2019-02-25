<div class="layout-content">
    <div class="layout-content-body">
        <div class="title-bar">
            <h1 class="title-bar-title">
                <span class="d-ib">Panel - Nowe zlecenie</span>

            </h1>

        </div>
        <div class="col-md-12">
            {!! Form::open(['url'=>'/zlecenia/nowe','class'=>'form form-horizontal',"data-toggle"=>"validator", "enctype"=>'multipart/form-data']) !!}
            <div class="form-group">
                {!! Form::label('name','Nazwa:',['class' =>"col-sm-3 col-md-2 control-label"]) !!}
                <div class="col-sm-6 col-md-6">
                    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nazwa projektu','data-rule-required'=>"true", 'data-msg-required'=>"Proszę uzupełnić nazwę swojego projektu."]) !!}
                </div>

            </div>
            <div class="form-group">
                {!! Form::label('value','Proponowana cena:',['class' =>"col-sm-3 col-md-2 control-label"]) !!}
                <div class="col-sm-6 col-md-6">
                    {!! Form::number('value',null,['class'=>'form-control','placeholder'=>'Cena jaka cie interesuje.','data-rule-required'=>"true", 'data-msg-required'=>"Proszę uzupełnić oczekiwaną cene za projekt"]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('description','Opis:',['class' =>"col-sm-3 col-md-2 control-label"]) !!}
                <div class="col-sm-6 col-md-6">
                    {!! Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Opis portalu, wszystkie funkcje portalu.','data-rule-required'=>"true", 'data-msg-required'=>"Proszę uzupełnić opis swojego projektu."]) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 col-md-2 control-label">Umowa:</label>

                <div class="col-sm-9">
                    <div class="custom-controls-stacked m-t">
                        <label class="custom-control custom-control-primary custom-checkbox">
                            <input class="custom-control-input" name="contract" id="contract" type="checkbox" value="1">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label"></span>
                        </label>

                    </div>

                </div>

            </div>
            <div class="form-group" id="contract" style="display: none">
                <label class="col-sm-3 col-md-2 control-label">Własna umowa:</label>

                <div class="col-sm-9">
                    <div class="form-group">
                        <label class="file-upload-btn btn btn-primary ">
                            Wyślij
                            <input class="file-upload-input" type="file" name="file" multiple="multiple">
                        </label>

                        <p class="help-block">
                            <small>Jeżeli nie posiadasz własnej umowy sporządzimy ją za ciebie.</small>
                        </p>

                    </div>

                </div>

            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <small class="has-error help-block">{{ $error }}</small>
                        @endforeach
                    @endif
                    {{Form::submit('Wyślij',['class'=>'btn btn-primary btn-block'])}}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>


    $('input#contract').on("click", function () {

        if ($('div.form-group#contract').css('display') == 'none') {
            $('div.form-group#contract').show();
        } else {
            $('div.form-group#contract').hide();
        }

    });
</script>