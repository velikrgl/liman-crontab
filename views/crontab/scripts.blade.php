<script>
    function createNewCrontab(){
        showSwal("{{__('Yükleniyor...')}}", 'info');
        var minValue= document.getElementById("new-minute").value;
        let data = new FormData();
        request("{{API('router_crontab')}}", data, function(response){
        
        
        Swal.close();
          
        }, function(response){
            response = JSON.parse(response);
            showSwal(response.message, 'error');
        });
    }

    function AutoFillforUser($newMinute,$newHour,$newMday,$newMonth,$newWday){
        
            document.getElementById("new-minute").value=$newMinute;
            document.getElementById("new-hour").value=$newHour;
            document.getElementById("new-Mday").value=$newMday;
            document.getElementById("new-month").value=$newMonth;
            document.getElementById("new-Wday").value=$newWday;
    }
    function getSelectedValue1(){
        var term=document.getElementById("dropdown-main-first").value;      
        if(term==1 )
        {AutoFillforUser("*","*","*","*","*");}
        else if(term==2)
        {
            AutoFillforUser("0","*","*","*","*");             
        }
        else if(term==3)
        {
            AutoFillforUser("0","0","1","*","*");      
           
        }
        else if(term==4)
        {
            AutoFillforUser("0","0","*","*","0"); 
            
        }

    }
 function getSelectedValue2(){
var term2=document.getElementById("dropdown-main-second").value;
if(term2==1)
{
    document.getElementById("new-minute").value="*";
                
}
else if(term2==2)
{
    document.getElementById("new-minute").value="*/5";          
}
else if(term2==3)
{
    document.getElementById("new-minute").value="*/15";      
   
}
else if(term2==4)
{
    document.getElementById("new-minute").value="*/30";
    
}

}

function getSelectedValue3(){
var term3=document.getElementById("dropdown-main-third").value;
if(term3==1)
{
    document.getElementById("new-hour").value="*";
                
}
else if(term3==2)
{
    document.getElementById("new-hour").value="*/3";          
}
else if(term3==3)
{
    document.getElementById("new-hour").value="*/6";      
   
}
else if(term3==4)
{
    document.getElementById("new-hour").value="*/12";
    
}
}

function getSelectedValue4(){
var term4=document.getElementById("dropdown-main-fourth").value;
if(term4==1)
{
    document.getElementById("new-Mday").value="1";
                
}
else if(term4==2)
{
    document.getElementById("new-Mday").value="5";          
}
else if(term4==3)
{
    document.getElementById("new-Mday").value="15";      
   
}
else if(term4==4)
{
    document.getElementById("new-Mday").value="20";
    
}

}

function getSelectedValue5(){
var term5=document.getElementById("dropdown-main-fiveth").value;
if(term5==1)
{
document.getElementById("new-month").value="1";
            
}
else if(term5==2)
{
document.getElementById("new-month").value="3";          
}
else if(term5==3)
{
document.getElementById("new-month").value="6";      

}
else if(term5==4)
{
document.getElementById("new-month").value="12";

}

}

function getSelectedValue6(){
var term6=document.getElementById("dropdown-main-sixth").value;

if(term6==1)
{
document.getElementById("new-Wday").value="*";
        
}
else if(term6==2)
{
document.getElementById("new-Wday").value="1";          
}
else if(term6==3)
{
document.getElementById("new-Wday").value="3";      

}
else if(term6==4)
{
document.getElementById("new-Wday").value="5";

}

}
</script>
