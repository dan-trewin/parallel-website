//Form Validation
function validateCreateAcctForm () {
    
    if (document.createAcctForm.email.value == '' || document.createAcctForm.username.value == '' || document.createAcctForm.password.value == '' || document.createAcctForm.password2.value == '') {
        
        alert('Please fill in all the fields!');
        return false;
    }
    if (document.createAcctForm.password.value != document.createAcctForm.password2.value) {
        
        alert('Passwords don\'t match!');
        return false;
    }
    
    return true;
}


function validateEmailForm () {
    
    if (document.emailForm.name.value == '' || document.emailForm.email.value == '' || document.emailForm.subject.value == '' || document.emailForm.message.value == '') {
        
        alert('Please fill in all the fields!');
        return false;
    }
    
    return true;
    
}

function validateLoginForm () {
    
    if (document.loginForm.username.value == '' || document.loginForm.password.value == '') {
        
        alert('Please fill in all the fields!');
        return false;
    }
    
    return true;
    
}

function validateChangeUsernameForm() {
    
    if (document.changeUsernameForm.oldUsername.value == '' || document.changeUsernameForm.newUsername.value == '') {
        
        alert('Please fill in all the fields!');
        return false;
    }
    
    return true;
}

function validateChangeEmailForm() {
    
    if (document.changeEmailForm.oldEmail.value == '' || document.changeEmailForm.newEmail.value == '') {
        
        alert('Please fill in all the fields!');
        return false;
    }
    
    return true;
}

function validateChangePasswordForm() {
    
    if (document.changePasswordForm.oldPassword.value == '' || document.changePasswordForm.newPassword.value == '') {
        
        alert('Please fill in all the fields!');
        return false;
    }
    
    return true;
}

function refreshHighscores () {
 
    $delay = 100;
    setTimeout(refreshHighscores2, $delay);
}

function refreshHighscores3 () {
    
    //document.highscoresForm.submit();
    
    $page = "./highscores.php";
    
    $delay = 100;
    setTimeout(function(){ $val = $("input[type='radio'][name='sortRadio']:checked").val();
    alert($val); }, $delay);
    
    //$val = $("input[type='radio'][name='sortRadio']:checked").val();
    //alert($val);
    /*
    alert($page);
    
    if ($val == "0") {
        $page = $page + "?type=top";
    }
    else if ($val == "1") {
        $page = $page + "?type=recent";
    }
    
    alert($page);
    
    window.location = $page;
    */
}

function refreshHighscores2 () {
    $page = "./highscores.php?";
    
    $gameVal = $("input[type='radio'][name='gameRadio']:checked").val();
    $sortVal = $("input[type='radio'][name='sortRadio']:checked").val();
    //alert($gameVal + "   " + $sortVal);
    
    if ($gameVal == "Ridiculous History") {
        $page = $page + "game=Ridiculous History";
    }
    else if ($gameVal == "Block Ooo") {
        $page = $page + "game=Block Ooo";
    }
    else { //WRAITH or nothing
        $page = $page + "game=Wraith";
    }
    
    if ($sortVal == "Top") {
        $page = $page + "&type=Top";
    }
    else if ($sortVal == "Recent") {
        $page = $page + "&type=Recent";
    }
    
    //alert($page);
    
    window.location = $page;
}

function shiftContainer ($page) {
	
    if (loadAnim == true) {
        //move main container out on page link click and delay before loading new page, gets called by html 'a' links

        $("#DT_container").hide("drop", { direction: "right" }, 600);

        $delay = 600; //Your delay in milliseconds
        setTimeout(function(){ window.location = $page; }, $delay);
    }
    else {
        window.location = $page;
    }
}


var loadAnim = true;

//Ready Function
$(
    function () {
        
        //move main container in on page load
        if (loadAnim == true) {
            $("#DT_container").show("drop", { direction: "left" }, 600);
        }
        else {
            $("#DT_container").show();
        }
        
        
        $(".DT_collapse, .DT_expand")
            .click(function(){
                $(this).toggleClass('btn-warning');
                $(this).toggleClass('btn-primary');
            
            
                $(this).find('span').toggleClass('glyphicon-minus');
                $(this).find('span').toggleClass('glyphicon-plus');    
            })
        $(".DT_collapse").click();
        
        
        /*
        $('input[type=radio]').click(function() {
            $("form id or class").submit();
        });*/
    }
)