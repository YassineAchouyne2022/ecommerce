function verificationRegister(){
    var notvide=document.getElementsByClassName('notvide');
    var cp=0
    for(i=0;i<notvide.length;i++){
        if(notvide[i].value==''){
            cp++ 
        }
    }
    if(cp!=0){
        creatAlert()
    }
}
function creatAlert(){
    var prent=document.getElementById('espas');
    var div=document.createElement('div');
    var msg=document.createElement('h1');
    var btn=document.createElement('button');
    msg.innerHTML="Veuillez entrer toutes les informations sont correctes";
    msg.style.color="red";
    btn.innerHTML="D'ACCORD";
    div.className='alert';
    div.append(msg);
    div.append(btn);
    prent.append(div);
    btn.addEventListener('click',function(){
        prent.removeChild(document.getElementsByClassName('alert')[0])
    })
}
function verificationPassword(){
    var pass=document.getElementsByClassName('Password');
    if(pass[0].value==pass[1].value){
        pass[1].style.backgroundColor="rgba(128, 128, 128, 0.329)";
    }else{
        pass[1].style.backgroundColor="rgba(255, 0, 0, 0.404)";
    }
}
function panair(){
    var panai=document.getElementById('panier');
    panai.innerHTML++
}
var chpass=true;
function ShowPassword(){
    var chow=document.getElementsByClassName('Password');
    if(chpass){
        for(i=0;i<2;i++){
            chow[i].type="text";
        }
        chpass=false;
    }else{
        for(i=0;i<2;i++){
            chow[i].type="password";
        }
        chpass=true;
    }
}
function search(){
    var parent=document.querySelector('body');
    var content=parent.getElementsByClassName('content');
    for(i=0;i<content.length;i++){
        content[i].style.display="block"
    }
    var search=document.getElementById('search');
    for(i=0;i<content.length;i++){
        var titre=content[i].getElementsByTagName('h3')[0];
        // if(titre.innerHTML!=search.value){
        if(titre.innerHTML.search(search.value)){
            content[i].style.display="none"
        }
    }
}

function fillter(){
    var parent=document.querySelector('body');
    var content=parent.getElementsByClassName('content');
    var prix=document.getElementById('prix');
    for(i=0;i<content.length;i++){
        content[i].style.display="block"
    }
    for(i=0;i<content.length;i++){
        var pr=content[i].getElementsByTagName('h6')[0];
        if(prix.value!=''){
            if(pr.innerHTML!=prix.value +' DH'){
                content[i].style.display="none"
            }
        }
    }
    
}
var fillter_portables=true


function ordPortables(){
    var parent=document.querySelector('body');
    var content=parent.getElementsByClassName('content');
    var hide=[];
    if(fillter_portables){
        for(i=0;i<content.length;i++){
            var typ=content[i].getElementsByTagName('input');
            if(typ[0].value != "2"){
                content[i].style.display="none"
                hide.push(i)
            }
        }
        fillter_portables=false
    }else{
        for(j=0;j<hide.length;j++){
            a=hide[j]
            content[a].style.display="block"
        }
        fillter_portables=true
    }
}

var fillter_bureau=true

