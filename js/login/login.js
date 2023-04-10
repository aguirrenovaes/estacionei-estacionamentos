function mostraSenha(){
    let type = document.getElementById("senha")
    if(type.type == 'password') {
        type.type = 'text'
        } else {
        type.type = 'password'
    }
}