<h4>Reports</h4>
<select id="reportTypeSelect" class="form-control mb-2">
    <option value="">All reports</option>
    <option value="summary">Summary reports</option>
</select>
<div class='caselist'>
<?php
  // Get a list of all the reports in the pages/reports folder and show them here
  
  
  for($x=1; $x<10; $x++) {
  ?>
    <div class="card mb-2 p-0 shadow-sm">
        <div class="card-header small display-5">
           <div class="float-right mr-2 border rounded pl-1 pr-1 green-link p-1">
                <img src="images/play.svg" width="16px" title="Run report" />
            </div>
           Report Name
        </div>
        <div class="card-body small p-1">
            A short description of the report and what it needs and produces.
        </div>
    </div>
  <?php    
  }
?>
</div>
