<script src="js/pages/casetabs/comments.js"></script>

<div class='justify-content-center'>
    <div class='float-right pale-green-link rounded mr-3 mb-1 p-1 small' id='newCommentBtn'>
        <img src='images/plus.svg' width='12px' /> Note
    </div>
    <div style='clear: both'></div>
    <div class='form-group hidden border rounded p-2 m-2' id='newCommentForm'>
        <h4 class="header">New note</h4>
        <div class="pager rounded-bottom w-100">&nbsp;</div> 
        <textarea class="form-control" id='newComment' rows="4" name='newComment' placeholder="Enter your note here"></textarea><br />
        <button class="form-control pale-green-link" id='submitCommentBtn'>Submit</button>
        
    </div>
</div>
<div style='clear: both'></div>

<div id='commentlist' class='justify-content-center'>
</div>
<?php
  
//Note - change the "x" in the data toggle to the comment id
/* for ($x=1; $x<10; $x++) {
?>
    <div class="card m-2 w-100">
        <div class="card-header">
            <div class="float-right card-heading-border card-heading-inverse border rounded pl-1 pr-1 mr-2">Roger Officer</div>
            12 Mar 2019, 3:32pm
        </div>
        <div class="card-body comment-card">
            <div class=" overflow-auto" style="max-height: 130px">
            A comment was made about this case which was very interesting.<Br /> and went on for a while.<p>Hi there</p>
            <br />
            <br />
            .
            <br />
            </div>
        </div>
    </div>
<?php
} */
?>
