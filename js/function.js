function servicos(){
    let servicos = document.getElementById('servicos');
    if(servicos.classList.contains('OBJhide5')){
        servicos.classList.add('OBJshow5');
        servicos.classList.remove('OBJhide5');
    }else{
        servicos.classList.add('OBJhide5');
        servicos.classList.remove('OBJshow5');
    }
    let servicos2 = document.getElementById('servicos2');
    if(servicos2.classList.contains('OBJhide5')){
        servicos2.classList.add('OBJshow5');
        servicos2.classList.remove('OBJhide5');
    }else{
        servicos2.classList.add('OBJhide5');
        servicos2.classList.remove('OBJshow5');
    }
    let servicosButton = document.getElementById('servicosButton');
    if(servicosButton.classList.contains('bg-ND')){
        servicosButton.classList.add('bg-white');
        servicosButton.classList.remove('bg-ND');
        servicosButton.classList.add('txt-greyDark');
        servicosButton.classList.remove('text-white');
        servicosButton.classList.add('fw-bolder');
    }else{
        servicosButton.classList.add('bg-ND');
        servicosButton.classList.remove('bg-white');
        servicosButton.classList.add('text-white');
        servicosButton.classList.remove('txt-greyDark');
        servicosButton.classList.remove('fw-bolder');
    }

    let dropdownAcessePortal = document.getElementById('dropdownAcessePortal');
    if(dropdownAcessePortal.classList.contains('bg-white2')){
        dropdownAcessePortal.classList.add('bg-ND');
        dropdownAcessePortal.classList.remove('bg-white2');
        dropdownAcessePortal.classList.add('txt-white');
        dropdownAcessePortal.classList.remove('txt-greyDark');
    }
}

function servicosAcessePortal(){
    let servicos = document.getElementById('servicos');
    let servicos2 = document.getElementById('servicos2');
    if(servicos.classList.contains('OBJshow5')){
        servicos.classList.add('OBJhide5');
        servicos.classList.remove('OBJshow5');
    }
    if(servicos2.classList.contains('OBJshow5')){
        servicos2.classList.add('OBJhide5');
        servicos2.classList.remove('OBJshow5');
    }

    let servicosButton = document.getElementById('servicosButton');
    if(servicosButton.classList.contains('bg-white')){
        servicosButton.classList.add('bg-ND');
        servicosButton.classList.remove('bg-white');
        servicosButton.classList.add('text-white');
        servicosButton.classList.remove('txt-greyDark');
        servicosButton.classList.remove('fw-bolder');
    }
}

$(document).ready(function() {
    $('#modalAviso').modal('show');
    $('#avisoToast').addClass('show');
})