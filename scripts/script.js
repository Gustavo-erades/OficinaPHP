function copiarTexto(){
    const texto= document.getElementById("novaChance");
    const botao=document.querySelector("#copiar");
    botao.addEventListener("click",()=>{
        texto.execCommand("copy");
    })
    
}
function corBorda(){
    const inputNome=document.querySelector("#nome");
    const inputNomeValue=document.querySelector("#nome").value;
    if(inputNomeValue!=""){
        inputNome.style.outlineColor="#32CD32";
        inputNome.style.outlineWidth="1px";
    }else{
        inputNome.style.outlineColor="#DC143C";
        inputNome.style.outlineWidth="1px";
    }
}
function corBorda2(){
    const inputEmail=document.querySelector("#email");
    const inputEmailValue=document.querySelector("#email").value;
    if(inputEmailValue!=""){
        inputEmail.style.outlineColor="#32CD32";
        inputEmail.style.outlineWidth="1px";
    }else{
        inputEmail.style.outlineColor="#DC143C";
        inputEmail.style.outlineWidth="1px";
    }
}
function corBorda3(){
    const inputIdade=document.querySelector("#idade");
    const inputIdadeValue=document.querySelector("#idade").value;
    if(inputIdadeValue!=""){
        inputIdade.style.outlineColor="#32CD32";
        inputIdade.style.outlineWidth="1px";
    }else{
        inputIdade.style.outlineColor="#DC143C";
        inputIdade.style.outlineWidth="1px";
    }
}
function corBorda4(){
    const inputSenha=document.querySelector("#senha");
    const inputSenhaValue=document.querySelector("#senha").value;
    if(inputSenhaValue!=""){
        inputSenha.style.outlineColor="#32CD32";
        inputSenha.style.outlineWidth="1px";
    }else{
        inputSenha.style.outlineColor="#DC143C";
        inputSenha.style.outlineWidth="1px";
    }
}