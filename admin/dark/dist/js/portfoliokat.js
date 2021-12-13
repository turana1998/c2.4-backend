
if(CurentPageName()=="portkat_add.php")
{
    // PotKatSira();
    PotKatSira2();
}

function PotKatSira2(){
    let opt=`<option value="" disabled="disabled" selected="selected">Sec</option>`;
    let PKS=[];

    $.ajax({
        url:"../settings/code/portKat-ajax.php",
        data:{pks:true},
        method:"POST",
        success: function(data){
            PKS=JSON.parse(data);
            console.log(data)
            console.log(PKS)
            for(let i=1;i<=20;i++){
               if(PKS.indexOf(i) == -1)
                opt+=`<option value="${i}">${i}</option>`
               
               else
                opt+=`<option disabled="disabled" value="${i}">${i}</option>`
               
            }
            document.getElementById("sira").innerHTML=opt;
  
        },
        error: function(){
            alert('error!');
        }

    });
}

function CurentPageName(){
    let path=location.pathname;
    let page=path.split("/").pop();
    return page;
}