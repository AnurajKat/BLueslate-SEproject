<?php

include ("session.php")
    
    function get_name($id)
    {
        
    }
  <!-- <button type="button" onclick="openNav()" id="menubtn" class="openbut">
                <div class="menuicon"></div>
               <div class="menuicon"></div>
               <div class="menuicon"></div>
           </button>-->

 /*
    function checkLogin() {
    "use strict";
    load_file('login_Id_students.csv',checky);
        }
    function checkLogin() {
     var data3 =""; 
     var csvfile='data/login_Id_students.csv';
    $.get(csvfile, function (data) {
        var csvdata = Papa.parse(data);
        data3= csvdata.data;
        window.alert(data3);
        console.log(data3);
        
        
    });
     var passwd = document.getElementsByName("passwd");
     var uid = document.getElementsByName("uname");
     //if (data3.split(',').indexOf(uid) > -1) {
        var valid =0;
        var data1=data3.split(',');
        for ( var count = 0 ; count < data1.length; count++) {
                
            if(data1[count] === uid) {
                document.getElementsByName("lel")= data1[count];
                        if( uid === passwd) {
                            valid = 1;    
                            }
                    valid = 1; 
                    }
            }
        
    if( valid === 1){
        window.location.href = 'welcomepage.html';
    } else {
        window.alert('login id or password is incorrect.');
    }
        /*if (uid === passwd) {
            window.location.href = 'welcomepage.html';
        } else {
            window.alert('oops! wrong password');
        }
    } else {
        window.alert("wrong user id");
    }
    }*/