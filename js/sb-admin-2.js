$(function() {
    $('#side-menu').metisMenu();
});




//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        var topOffset = 50;
        var width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        var height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    // var element = $('ul.nav a').filter(function() {
    //     return this.href == url;
    // }).addClass('active').parent().parent().addClass('in').parent();
    var element = $('ul.nav a').filter(function() {
        return this.href == url;
    }).addClass('active').parent();

    while (true) {
        if (element.is('li')) {
            element = element.parent().addClass('in').parent();
        } else {
            break;
        }
    }
});


/***                                                                 CHART OF ACCOUNTS related scripts here                                                                *****/

//make sure values are not empty
function addChartAccount(){
    var accountName = $("#accountName").val();
    var accountNumber = $("#accountNumber").val();
    var initialBalance = $("#initialBalance").val();

    
    if(accountName == "" || accountNumber == "" || initialBalance == "" || initialBalance == 0){
           if(initialBalance == 0)
                 alert("Initial Balance cannot be zero");
           else
             alert("Cannot have empty fields.");
            
         return false;
    }
    else if(hasDuplicate(accountName)||hasDuplicate(accountNumber))
        alert("Please enter a unique account name and number.");
    else{
        addRow();
    }
}

//add a row 
function addRow(){
            $(document).ready(function() {
            var accountName = $("#accountName").val();
            var accountNumber = $("#accountNumber").val();
            var accountStatus = $("#accountStatus").val();
            var div = '<div class= "chart-row-data-template">';
            var buttonEdit = '<li> <button type="button" class="btn btn-outline btn-success">Edit</button></li>';
            var buttonView = '<li> <button type="button" class="btn btn-outline btn-primary">View</button></li></div>';
            var markup = "<tr><td>" + accountNumber+ "</td><td>" + accountName + "</td><td>" + accountStatus + "</td><td>" + div + buttonEdit + buttonView + "</td></tr>" ;
            $("table tbody").append(markup);

            //TODO find a better way to reset values back
            document.getElementById("accountName").value = "";
            document.getElementById("accountNumber").value = "";
            document.getElementById("initialBalance").value = "";
            $('#myModal').modal('toggle');
            responsive: true
        });
}

//check for duplicates
function hasDuplicate(value){

    if ($('#chart-of-accounts-table td:contains(' + value + ')').length)
        return true
    return false
}

function cancelDialog(){

    var response =  confirm("Your changes will not be saved, are you sure you want to cancel? ");
    if (response == true) {
          //TODO find a better way to reset values back
            document.getElementById("accountName").value = "";
            document.getElementById("accountNumber").value = "";
            document.getElementById("initialBalance").value = "";
            $('#myModal').modal('toggle');
    } 

   
}


  

