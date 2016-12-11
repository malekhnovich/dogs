@extends('layouts.master')
@section('page_content')
<div class="card">
    <div class="card-block">
        <div class="text-xs-center">
            <h3><i class="fa fa-envelope"></i>FEEDBACK:</h3>
            <hr class="m-t-2 m-b-2">
        </div>
        <p>You can provide your feedback/review using this form.</p>
        <br>
        <div class="md-form">
            <i class="fa fa-user prefix"></i>
            <input type="text" id="form3" class="form-control">
            <label for="form3">Your name</label>
        </div>
    
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" id="form2" class="form-control">
            <label for="form2">Your email</label>
        </div>
    
        <div class="md-form">
            <i class="fa fa-tag prefix"></i>
            <input type="text" id="form32" class="form-control">
            <label for="form34">Subject</label>
        </div>
    
        <div class="md-form">
            <i class="fa fa-pencil prefix"></i>
            <textarea type="text" id="form8" class="md-textarea"></textarea>
            <label for="form8">feedback</label>
        </div>
    
        <div class="text-xs-center">
            <a href="success_feed.html" button class="btn btn-primary">Submit</button></a>
    
            <div class="call">
                <p>Or would you prefer to call?<br><span><i class="fa fa-phone"> </i></span> (999)000-1111</p>
            </div>
        </div>
    </div>
</div>
@stop