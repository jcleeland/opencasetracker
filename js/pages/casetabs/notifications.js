$(function() {
    if($('#nocase').val() != 0) {
        loadNotifications();
    }

    $('#newNotificationBtn').click(function() {
        $('#newNotificationForm').toggle();    
    }); 

    $('#submitNotificationBtn').click(function() {
        var userId=$('#newUserId').val();
        var caseId=$('#caseid').val();
        
        $.when(notificationCreate(caseId, userId)).done(function(insert) {
            if(insert.count=="1") {
                $('#newUserId').val('');
                $('#newNotificationForm').toggle();
                historyCreate(caseId, userId, '9', null, null, userId);
                loadNotifications();
                loadHistory();
            }
        })
        //Successfully added
    })       
    
    $('#filterNotifications').keyup(function() {
        //console.log($(this).val());
        var search=$(this).val();
        $('.notificationitem').each(function() {
            if($(this).html().toUpperCase().includes(search.toUpperCase())) {
                $(this).show();
            } else {
                $(this).hide();
            }
        })
    })
}) 

function loadNotifications() {
    var today=new Date();
    var caseId=$('#caseid').val();
    var parameters={};
    parameters[':taskid']=caseId;
    
    var conditions='n.task_id = :taskid'
    
    var order='u.real_name';
    
    var start=parseInt($('#notificationsstart').val()) || 0;
    var end=parseInt($('#notificationsend').val()) || 90000000;
    
    $('#notificationlist').html("<center><img src='images/logo_spin.gif' width='50px' /><br />Loading notifications list...</center>");
    
    
    $.when(notificationsList(parameters, conditions, order, start, end)).done(function(notifications) {
        //console.log('Notifications');
        //console.log(notifications);
        if(notifications.count<1) {
            $('#notificationlist').html("<center><br />No notifications set for this case yet<br />&nbsp;</center>");
            $('#notificationscount').html('');
        } else {
            $('#notificationlist').html('');
            $('#notificationscount').html(notifications.total);
            if(globals.user_id==notifications.user_id || globals.is_admin=='1') {
                actionPermissions=['delete'];    
            }            
            $.each(notifications.results, function(i, notificationsdata) {
                //console.log(notificationsdata);
                var parentDiv='notificationlist';
                var uniqueId='notification'+notificationsdata.notify_id;
                
                var primeBox='Notification';
                var briefPrimeBox='N';
                var dateBox='';
                var briefDateBox='';
                var header=notificationsdata.real_name;
                var content=notificationsdata.email_address+' '+notificationsdata.jabber_id;
    
                insertTabCard(parentDiv, uniqueId, primeBox, briefPrimeBox, dateBox, briefDateBox, actionPermissions, header, content);
            })
            
        }
    }).then(function() {
        //toggleCaseCards();
        //toggleDatepickers();        
    }).fail(function() {
        //console.log('Nothing found');
        $('#notificationslist').html("<center><img src='images/logo.png' width='50px' /><br />No notifications for this case yet</center>");
        //pagerNumbers('todo', 0, 0, 0);
    });    
}

