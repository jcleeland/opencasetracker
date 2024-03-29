<?php
/*
 * Copyright [2022] [Jason Alexander Cleeland, Melbourne Australia]
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */  
?>
<div class='col-sm-12 mb-1' id='case-tabs'>
    <ul class="nav nav-tabs w-100">
        <li class="nav-item active no-wrap">
            <a class="nav-link nav-link-tab active" data-toggle="tab" href='#comments'>
                <img src='images/compose.svg' width='20px' class="float-left mr-1" title="Notes" />
                <div class='float-left d-none d-sm-block'>Notes</div>
                <div id='commentcount' class='tabcounter'></div>
            <div style='clear: both'></div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-tab" data-toggle="tab" href='#attachments'>
                <img src='images/portfolio.svg' width='20px' class="float-left mr-1" title="Attachments" />
                <div class='float-left d-none d-sm-block'>Attachments</div>
                <div id='attachmentcount' class='tabcounter'></div>
                <div style="clear: both"></div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-tab" data-toggle="tab" href='#poi'>
                <img src='images/user.svg' width='20px' class="float-left mr-1" title="People of Interest" />
                <div class='float-left d-none d-sm-block'>POI</div>
                <div id='poicount' class='tabcounter'></div>
                <div style='clear: both'></div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-tab" data-toggle="tab" href='#related'>
                <img src='images/activity.svg' width='20px' class="float-left mr-1" title="Related" />
                <div class='float-left d-none d-sm-block'>Related</div>
                <div id='relatedcount' class='tabcounter'></div>
                <div style='clear: both'></div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-tab" data-toggle="tab" href='#linked'>
                <img src='images/link.svg' width='20px' class="float-left mr-1" title="Linked" />
                <div class='float-left d-none d-sm-block'>Linked</div>
                <div id='linkedcount' class='tabcounter'></div>
                <div style='clear: both'></div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-tab" data-toggle="tab" href='#notifications'>
                <img src='images/bell.svg' width='20px' class="float-left mr-1" title="Notifications" />
                <div class='float-left d-none d-sm-block'>Notifications</div>
                <div id='notificationscount' class='tabcounter'></div>
                <div style='clear: both'></div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-tab" data-toggle="tab" href='#planning'>
                <img src='images/flag.svg' width='20px' class="float-left mr-1" title="Planning" />
                <div class='float-left d-none d-sm-block'>Planning</div>
                <div id='strategycount' class='tabcounter'></div>
                <div style='clear: both'></div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-tab" data-toggle="tab" href='#billing'>
                <img src='images/clock.svg' width='20px' class="float-left mr-1" title="Billing" />
                <div class='float-left d-none d-sm-block'>Billing</div>
                <div id='timecount' class='tabcounter'></div>
                <div style='clear: both'></div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-tab" data-toggle="tab" href='#history'>
                <img src='images/archive.svg' width='20px' class="float-left mr-1" title="History" />
                <div class='float-left d-none d-sm-block'>History</div>
                <div id='historycount' class='tabcounter'></div>
                <div style='clear: both'></div>
            </a>
        </li>
    </ul>

    <div class='tab-content bg-white col-12 pt-2 pb-2 pl-0 pr-0'>
        <div class='tab-pane active pl-0 pr-0' id='comments'>
            <?php include("pages/casetabs/comments.php"); ?>
        </div>

        <div class='tab-pane pl-0 pr-0' id='attachments'>
            <?php include("pages/casetabs/attachments.php"); ?>
        </div>
        
        <div class='tab-pane pl-0 pr-0' id='poi'>
            <?php include("pages/casetabs/poi.php"); ?>
        </div>        

        <div class='tab-pane pl-0 pr-0' id='related'>
            <?php include("pages/casetabs/related.php"); ?>
        </div>        

        <div class='tab-pane pl-0 pr-0' id='linked'>
            <?php include("pages/casetabs/linked.php"); ?>
        </div>        

        <div class='tab-pane pl-0 pr-0' id='notifications'>
            <?php include("pages/casetabs/notifications.php"); ?>
        </div>        

        <div class='tab-pane  pl-0 pr-0' id='planning'>
            <?php include("pages/casetabs/strategys.php"); ?>
        </div>        

        <div class='tab-pane  pl-0 pr-0' id='billing'>
            <?php include("pages/casetabs/times.php"); ?>
        </div>
                
        <div class='tab-pane  pl-0 pr-0' id='history'>
            <?php include("pages/casetabs/history.php"); ?>
        </div>        
    
    </div>
        
    
</div>
