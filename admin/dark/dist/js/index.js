function GetUrlQuery(){
    let url_string=location.href;
    let url=new URL(url_string);
    let st=url.searchParams.get("status");
    if(st=="ok"){
        swal({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success",
          });
        setTimeout(Redirect,2000);
    }
    else if(st=="no"){
        swal({
            title: "No",
            text: "You clicked the button!",
            icon: "warning",
          });
        setTimeout(Redirect,2000);
    }
}
function Redirect(){
    location.href=location.protocol+"//"+location.host+location.pathname;
}
GetUrlQuery();