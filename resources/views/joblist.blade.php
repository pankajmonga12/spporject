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
        <?php echo "<pre> Data : ".print_r($jobList['total:protected'] , TRUE)."</pre>"; ?>
<div class="container">
    <?php foreach ($jobList as $user): ?>
 
         <div id="products" class="row list-group">
        <div class="item  col-xs-4 col-lg-4 list-group-item">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <?php echo $user->job_name; ?> </h4>
                    <p class="group inner list-group-item-text">
                        <?php echo $user->job_notification; ?></p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                No. Of Post : <?php echo $user->no_of_post; ?></p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="#">Details</a> &nbsp; &nbsp; &nbsp; &nbsp;  <a class="btn btn-success" href="#">Quick View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php endforeach; ?>
   
</div>

<?php echo $jobList->render(); ?>

   
<script   src="https://code.jquery.com/jquery-2.2.3.js"   integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="   crossorigin="anonymous"></script>
<script   src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<script>
$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
</script>
<style>
.glyphicon { margin-right:5px; }
.thumbnail
{
    margin-bottom: 20px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}

.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 10px;
}
.item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
{
    background: #428bca;
}

.item.list-group-item .list-group-image
{
    margin-right: 10px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
}
.item.list-group-item .caption
{
    padding: 9px 9px 0px 9px;
}
.item.list-group-item:nth-of-type(odd)
{
    background: #eeeeee;
}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item img
{
    float: left;
}
.item.list-group-item:after
{
    clear: both;
}
.list-group-item-text
{
    margin: 0 0 11px;
}

</style>