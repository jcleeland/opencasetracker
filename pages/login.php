<?php
?>
<div class="row h-50 justify-content-center align-items-center">
    <form class="col-5" method="post">
        <input type='hidden' name='login' value='true' />
        <div class='col mb-3 p-0'>
            <h3 style="font-weight: bold"><img src='images/logo.png'>OpenCaseTracker</h3>
        </div>
        <div class="col header mb-3">
            Login
        </div>
        <div class='form-group'>
            <input type='text' class='form-control' name='username' id='username' placeholder='Username' />
        </div> 
        <div class='form-group'>
            <input type='password' class='form-control' name='password' id='password' placeholder='Password' />       
        </div>
        <div class='form-group'>
            <button class='btn btn-primary'>Login</button>
        </div>
    </form> 
</div>
