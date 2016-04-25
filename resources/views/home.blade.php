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
            <div class="content">
               {!! Form::open(array('url' => 'jobbist' , 'method' => 'post' , 'files'=>true)) !!}
                <div class="form-group">
                                        <label class="control-label col-md-3">Job Title <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                {!!  Form::text('job_name', Input::old('job_name'), array('class' => 'form-control'),array('placeholder' => 'Job Title')) !!}
                                            </div>
                                        </div>
                                    </div>
        <div class="form-group">
                                        <label class="control-label col-md-3">Eligibility <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                {!!  Form::select('eligibility', $eligibility) !!}
                                            </div>
                                        </div>
                                    </div>
                                 

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Qualification <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-4">
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
</html>
