window.addEventListener("load", Init);

function Init(){
    let btn = document.querySelector(".btn-add");
    btn.addEventListener("click", SendData);
}

function SendData(){
    event.preventDefault();
    let email = document.querySelector(".email").value;
    let password = document.querySelector(".pass").value;

    var http = new XMLHttpRequest();
     var url = 'data.php'; 
    var params = `email=${email}&pass=${password}`; 
     http.open('POST', url, true); //Send the proper header information along with the request 
     http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded'); 
     http.onreadystatechange = function() {//Call a function when the state changes. 
        if(http.readyState == 4 && http.status == 200) 
        { 
            let data = http.responseText; 
            console.log(data);
            ShowInDOM(data);
        } 
    } 
    http.send(params);
} 

function ShowInDOM(data){
    let showEmail = document.querySelector(".showEmail");
    showEmail.innerHTML = "Email: " + data;
}