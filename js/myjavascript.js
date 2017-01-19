
function alertuser() {
    "use strict";
    window.alert("abhi kaam nhi karega pagle!!");
}
function closeNav() {
    "use strict";
    document.getElementById("menubtn").style.marginLeft = "0px";
    document.getElementById("mysidenav").style.width = "0";
    
}
function openNav() {
    "use strict";
    document.getElementById("menubtn").style.marginLeft = "225px";
    document.getElementById("mysidenav").style.width = "225px";
   
}

function clickCheck() {
    "use strict";
    var x = document.getElementById("menubtn");
    if (x.checked === 1) {
        openNav();
    } else {
        closeNav();
    }
}
function gotoLogin() {
    "use strict";
    window.location.href = 'index.php';
}
var toggle_height = false;
function toggleheight() {
    "use strict";
    if (toggle_height === false) {
        document.getElementById('label_0').style.display = "";
        document.getElementById('label_0').style.width = "80%";
        var scroll_height1 = document.getElementById('label_0').scrollHeight;
        document.getElementById('label_0').style.height = scroll_height1 + "px";
        var card_height = 225 + scroll_height1;
        document.getElementById('label_1').style.display = "";
        document.getElementById('label_1').style.width = "80%";
        var scroll_height2 =  document.getElementById('label_1').scrollHeight;
        document.getElementById('label_1').style.height = scroll_height2 + "px";
        card_height = card_height + scroll_height2;
        document.getElementById('announcement_card').style.height = card_height + "px";
        toggle_height = true;
    } else {
        document.getElementById('label_0').style.display = "none";
        document.getElementById('label_1').style.display = "none";
        document.getElementById('announcement_card').style.height = "225px";
        toggle_height = false;
    }
}
var tog_atten=false;
function toggleattendance() {
    "use strict";
    if(tog_atten === false)
        {
            document.getElementById('attendance_card').style.height = "700px";
            document.getElementById('attendance_table_only').style.display= "";
            tog_atten =true;
        } else 
        {
             
          tog_atten= false;
            document.getElementById('attendance_table_only').style.display = "none";
            document.getElementById('attendance_card').style.height = "225px";
          
        }
}
/*
function setheight(my_label) {
    "use strict";
    var card_height = document.getElementById('announcement_card').clientHeight; 
    var label_height = 0 ;
    var card_height_1 = 0;
    var scroll_height = document.getElementById(my_label).scrollHeight;
    var initial_height = document.getElementById('announcement_card').offsetHeight;
    window.console.log("initial height: " + initial_height);
    if (document.getElementById(my_label).style.display === "none") {
        card_height =  document.getElementById('announcement_card').clientHeight;
        document.getElementById(my_label).style.display = '';
        scroll_height = document.getElementById(my_label).scrollHeight;
        document.getElementById(my_label).style.width = "80%";
        document.getElementById(my_label).style.height = scroll_height + "px";
        card_height_1 = card_height + scroll_height;
        document.getElementById('announcement_card').style.height = card_height_1 + "px";
        var cardheight_readafter = document.getElementById('announcement_card').offsetHeight;
        window.console.log("card_height: " + card_height + "\n scroll_height: " + scroll_height + "\nfinal height: " + card_height_1 + "\ncard height read after:" + cardheight_readafter +"\n---------------------");
       */ /*
        label_height = document.getElementById(my_label).offsetHeight;
        document.getElementById(my_label).style.display = '';
         content_heightme = document.getElementById(my_label).scrollHeight;
        document.getElementById(my_label).style.height = (content_heightme) + "px";
        document.getElementById(my_label).style.width = "80%";
        document.getElementById('announcement_card').style.height = (card_height +  content_heightme) + "px";
        card_height_1 =  document.getElementById('announcement_card').offsetHeight;
        toggle_height = true;*/
   /* } else if (document.getElementById(my_label).style.display === "") {
        card_height = document.getElementById('announcement_card').clientHeight;
        window.console.log("card height read: " + card_height);
        label_height = document.getElementById(my_label).offsetHeight;
        var cardheight_via_read_label = card_height - label_height;
        var cardheight_via_read_scroll = card_height - scroll_height;
        var cardheight_via_calc_label = card_height_1 - label_height;
        var cardheight_via_calc_scroll = card_height_1 - scroll_height;
        
       
        //document.getElementById(my_label).textContent="";
        var label_height_after_display_none = document.getElementById(my_label).offsetHeight;
       
        var label_height_after_height_0 = document.getElementById(my_label).offsetHeight;
        
        var new_cardheight = cardheight_via_read_label - 20;
        window.console.log("new_cardeight: " + new_cardheight);
        var new_cardheight_string = "max-height:" + new_cardheight + "px;";
        document.getElementById('announcement_card').style.Height = 225+"px"; //new_cardheight_string;
        var cardheight_readafter = document.getElementById('announcement_card').offsetHeight;
        $('announcement_card').attr('style', new_cardheight_string);
        
        document.getElementById(my_label).style.display = 'none';
        document.getElementById(my_label).style.height = "0";
        window.console.log("label height: " + label_height + "\ncardheight_via_read_label: " +  cardheight_via_read_label +
                            "\ncardheight_via_read_scroll: " + cardheight_via_read_scroll +
                           "\ncardheight_via_calc_label: " + cardheight_via_calc_label +
                           "\ncardheight_via_calc_scroll: " + cardheight_via_calc_scroll +
                           "\nlabel_height_after_display_none" + label_height_after_display_none +
                          "\nlabel_height_after_height_0" + label_height_after_height_0 +
                           "\ncard height read after:" + cardheight_readafter +
                          "\n---------------------");*/
        /*toggle_height = false;
        card_height_1 =  document.getElementById('announcement_card').offsetHeight;
        window.console.log("cardheight_1 : " + card_height_1);
        var difference = card_height_1 - card_height;
        window.console.log("difference :" + difference);
        label_height = document.getElementById(my_label).offsetHeight;
        //difference = difference + label_height;
        document.getElementById(my_label).style.height = "0%";
        document.getElementById(my_label).style.display = 'none';
        //document.getElementById(my_label).style.height = "0%";
        difference = card_height_1 - label_height;
        document.getElementById('announcement_card').style.height = difference + "px";
        window.console.log("difference after card - label :" + difference);*/
    //}
    //var final_height = document.getElementById('announcement_card').offsetHeight;
    //document.getElementById('label_0').style.content = get_content;
   // window.console.log("\ncardheight" + card_height + "\ncardheight1 " +  card_height_1 + "\ncontentheight " + content_heightme + "\nlabelheight " + label_height + "\nfinal height: " + final_height + "\n-------------");
//}
/*function load_file(file) {
    "use strict";
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function () {
        if (rawFile.readyState === 4) {
            if (rawFile.status === 200 || rawFile.status === 0) {
                var allText = rawFile.responseText;
                window.alert(allText);
                return allText;
            }
        }
    }
    rawFile.send(null);
}*/
/*function checky(data) {
    "use strict";
    var uid = document.getElementsByName("uname");
    var passwd = document.getElementsByName("passwd");
    if (data.split(',').indexOf(uid) > -1) {
        if (uid.equals(passwd)) {
            window.location.href = 'welcomepage.html';
        } else {
            window.alert('oops! wrong password');
        }
    } else {
        window.alert("wrong user id");
    }
}

function loadFile(url, Callback) {
    "use strict";
    Papa.parse(url, { 
            download : true, 
            dynamicTyping : true,
            complete : funnction(results) {
                window.alert(results.data);
                Callback(results.data);
                }
    });
    var csvfile='data/login_Id_students.csv';
    $.get(csvfile, function (data) {
        var csvdata = Papa.parse(data);
        window.alert(csvdata);
    })
}
function checkLogin() {
    "use strict";
    var uid = document.getElementsByName("uname");
    var passwd = document.getElementsByName("passwd");
    load_file('data\login_Id_students.csv',checky);
    //window.alert(table);
    
    if (table.split(',').indexOf(uid) > -1) {
        if (uid.equals(passwd)) {
            window.location.href = 'welcomepage.html';
        } else {
            window.alert('oops! wrong password');
        }
    } else {
        window.alert("wrong user id");
    }*/
