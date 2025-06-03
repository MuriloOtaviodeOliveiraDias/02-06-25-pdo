function cadastrar(event){
 
    event.preventDefault();

    var email = document.getElementById('email').value;
    var usuario = document.getElementById('usuario').value;
    var senha = document.getElementById('senha').value;

    if(email == 'admin@mail.com' && usuario == 'admin'  && senha == 'admin123'){
        Swal.fire({
            title: 'Login realizado!',
            text: 'Bem-Vindo(a), ' + usuario + '!', 
            icon: 'success',
            confirmButtonText: 'OK!'
        }).then(() => {
            setTimeout(() => {
                location.href="./index.html";
            }, 100);
        });


    }else{
        Swal.fire({
            title:'Erro!',
            text: 'Email, Usuário ou senha incorretos.',
            icon: 'error',
            confirmButtonText: 'Tentar novamente'
        })
    }

}