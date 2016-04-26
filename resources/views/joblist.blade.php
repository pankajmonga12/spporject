  <div class="container">
            <div class="content">
               {!! Form::open(array('url' => 'jobblist' , 'method' => 'post' , 'files'=>true)) !!}
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
<div class="container">
    <?php foreach ($jobList as $user): ?>
        <?php echo $user->job_name; ?>
    <?php endforeach; ?>
</div>

<?php echo $jobList->render(); ?>