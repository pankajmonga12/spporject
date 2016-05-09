  <div class="container">
            <div class="content">
                 {!! Form::open(array('url' => 'jobblist' , 'method' => 'post' , 'files'=>true)) !!}
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Name :  <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
        
<?php if($jobList->total() > 0 ) { ?>
<div class="container">
<div id="products" class="row list-group">
    <?php foreach ($jobList as $user): ?>
 
         
        <div class="item  col-xs-4 col-lg-4 list-group-item">
            <div class="thumbnail">
                <img class="group list-group-image" width="300" height="300" src="http://128.199.192.88/logos/<?php echo $user->logo; ?>" alt="" />
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
                            <a class="btn btn-success" href="http://128.199.192.88/jobDetail/<?php echo $user->id; ?>">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php endforeach; ?>
</div>
</div>

<?php echo $jobList->render(); ?>
 <?php } else {
     echo "No Record found ";
    } ?>
   
   
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