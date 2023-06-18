function verificarUser()
{
    //obtenemos los valores del login 
    var user = $("#user").val();
    var pass = $("#pass").val();


    //si no hay datos en el login
    if(user.length == 0 || pass.length == 0)
    {
        return Swal.fire("mensaje de advertencia","Complete los campos vacios","warning");
    }

    $.ajax({
            url:"../../controller/verificarUser.php",
            
            type:"POST",
            data:{
                user:user,
                pass:pass
            }


        
    }).done(function(resp)
    {
       if(resp==0)
       {
            Swal.fire(":(Lo sentimos usuario/contraseña incorrectos","error");
       }

       else
       {
            var data = JSON.parse(resp);
            if(data[0][6]==="0")
            {
                return Swal.fire(":(","USUARIO BANEADO","warning");
                
            }
            else{

            $.ajax({
                url:"../../controller/sesion.php",
                type:"POST",
                data:{
                    idusuario:data[0][0],
                    correo:data[0][1],
                    nombre:data[0][3],
                    rfc:data[0][5]

                }

            }).done(function(resp)
            {
                let timerInterval
                Swal.fire({
                title: 'Iniciando Sesion',
                html: 'Espere por favor: <b></b> milisegundos.',
                timer: 2000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                    }, 100)
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
                }).then((result) => {
                    location.reload();
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log('I was closed by the timer')
                }
                })

            }
            
            )
        }
       }
    })

}