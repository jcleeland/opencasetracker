<script src="js/pages/dashboard/homeStats.js"></script>
<h4 class="header">Statistics</h4>
<div class="pager rounded-bottom">&nbsp;
    <select id='statsChooser' name='statsChooser' class='form-control-xs float-right p-0 w-25x mr-1' style='font-size: 8pt !important; height: 20px'>
        <optgroup label='My stats'>
            <option value='CaseStats'>My Case Load</option>
            <option value='CaseDepartments'>My Case departments</option>
            <option value='CaseTypes'>My Case types</option>
            <option value='CaseDates'>My Case statuses</option>
        </optgroup>
        <optgroup label='Site stats'>
            <option value='AllCaseStats'>Case Load</option>
            <option value='AllCaseDepartments'>Case departments</option>
            <option value='AllCaseTypes'>Case types</option>
            <option value='AllCaseDates'>Case statuses</option>
        </optgroup>
    </select>
</div>
<div class="row border rounded bg-light justify-content-sm-center m-1 w-100">
    <div class='border rounded m-2 w-100' >
        <div id='dashboardStatistics' class='rounded text-center' style='min-height: 300px'><img src='images/logo_flip.gif' /></div>
    </div>
</div>
<?php
  
?>
