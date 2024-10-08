function mascara(i){
    var v = i.value;

    //impede a entrada de caractere que nao é numero
    if(isNaN(v[v.length-1])){
        i.value = v.substring(0, v.length-1);
    }

    i.setAttribute("maxlength", "14");

    if(v.length == 3 || v.length == 7){
        i.value += ".";
    }

    if(v.length == 11){
        i.value += "-";
    }
}

function telefone(i) {
    //impede entrada de caractere que nao é numero
    if(isNaN(v[v.length-1])){
        i.value = v.substring(0, v.length-1);
    }

    i.setAttribute("maxlength", "18");

    if(v.length == 0){
        i.value += "(";
    }

    if(v.length == 2){
        i.value += ")";
    }

    if(v.length == 3){
        i.value += " ";
    }

    if(v.length == 7){
        i.value += "-";
    }
}
