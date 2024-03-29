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
//TODO: Check to see if there is already a config.php file
// =dirname(__FILE__)."/../config/config.php";
// If there is, then alert the user
// If there isn't, check the permissions on the directory to see if the config.php file is allowed to be created
//  - if there is no permission, alert the user  
?>
<div class="row h-50 justify-content-center align-items-center">
    <form class="col-5" method="post">
        <input type='hidden' name='initialise' value='true' />
        <div class='col mb-3 p-0'>
            <h3 style="font-weight: bold"><img src='images/logo.png'>OpenCaseTracker</h3>
        </div>
        <div class="col header mb-3">
            Local Database Setup
        </div>
        <div class='form-group'>
            <div class='w-75 floatright'><input type='text' class='form-control' name='dbname' id='dbname' placeholder='Database name' /></div>
            <div class='floatright w-25'>DB Name:</div><div style='clear: both'></div>
        </div> 
        <div class='form-group'>
            <div class='w-75 floatright'><input type='text' class='form-control' name='dbhost' id='dbhost' placeholder='Database Host IP' /></div>
            <div class='floatright w-25'>DB Host IP:</div><div style='clear: both'></div>       
        </div>
        <div class='form-group'>
            <div class='w-75 floatright'><input type='text' class='form-control' name='dbuser' id='dbuser' placeholder='Database User Name' /></div>
            <div class='floatright w-25'>DB Username:</div><div style='clear: both'></div>       
        </div>
        <div class='form-group'>
            <div class='w-75 floatright'><input type='password' class='form-control' name='dbpass' id='dbpass' placeholder='Database Password' /></div>
            <div class='floatright w-25'>DB Password:</div><div style='clear: both'></div>       
        </div>
        <div class='form-group'>
            <div class='w-75 floatright'><input type='' class='form-control' name='dbprefix' id='dbprefix' placeholder='Database Prefix' value='oct_' /></div>
            <div class='floatright w-25'>DB Prefix:</div><div style='clear: both'></div>       
        </div>
        
        <div class="col header mb-3">
            External Database Setup
        </div>
        <div class='form-group'>
            <div class='w-75 floatright'>
                <select name='useexternaldb' class='form-control' id='useexternaldb' placeholder='Use external DB?'>
                    <option value='false'>No</option>
                    <option value='true'>Yes</option>
                </select>
            </div>
            <div class='floatright w-25'>Use External DB?:</div><div style='clear: both'></div>
        </div> 
        <div class='form-group'>
            <div class='w-75 floatright'>
                <select class='form-control' name='externaldb' id='externaldb' placeholder='External DB Model' />
                    <option value='oms'>OMS (Open Membership System)</option>
                </select>
            </div>
            <div class='floatright w-25'>External DB Model:</div><div style='clear: both'></div>       
        </div>
        

        <div class='form-group'>
            <button class='btn btn-primary'>Initialise</button>
        </div><div style='clear: both'></div>
    </form> 
</div>