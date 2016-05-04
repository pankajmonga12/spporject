<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                  <?php echo "<pre> Data :".print_r( $errors->search->first('email_id') , TRUE)."</pre>"; ?>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
       
            <div class="content">
               {!! Form::open(array('url' => 'jobblist' , 'method' => 'post' , 'files'=>true)) !!}
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Name :  <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                {!!  Form::text('user_name', Input::old('user_name'), array('class' => 'form-control'),array('placeholder' => 'Name')) !!}
                                                {{ $errors->search->first('user_name') }} 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email Id :  <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                {!!  Form::text('email_id', Input::old('email_id'), array('class' => 'form-control'),array('placeholder' => 'Email Id')) !!}
                                                {{ $errors->search->first('email_id') }} 
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Phone No. :  <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                {!!  Form::text('phone_no', Input::old('phone_no'), array('class' => 'form-control'),array('placeholder' => 'Phone No')) !!}
                                                {{ $errors->search->first('phone_no') }} 
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-md-3">Qualification <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                 {!!  Form::select('qualification', $qualification)  !!}
                                            </div>
                                        </div>
                                    </div>
                             <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green">Search Job</button>
                                        </div>
                                    </div>
                                </div>
                            {!! Form::close() !!}     
            </div>
        </div>
    </body>
    <script   src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</html>
