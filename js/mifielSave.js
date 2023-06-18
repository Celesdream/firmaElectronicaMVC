function prepararDocumento()
{
    //datos generales del documento
    var path = $("#path").val();
    var id = $("#id").val();
    var idUSER = $("#idUSER").val();
    var expira = $("#expira").val();

    if(expira==null|| expira<=0)
    {
        expira = 0;
    }

    if(expira>=999)
    {
        expira = 998;
    }



    //datos del firmante #1
    var nombre = $("#nombre1").val();
    var RFC = $("#rfc1").val();
    var correo = $("#correo1").val();

    //datos del firmante #2
    var nombre2 = $("#nombre2").val();
    var RFC2 = $("#rfc2").val();
    var correo2 = $("#correo2").val();

    //datos del firmante #3
    var nombre3 = $("#nombre3").val();
    var RFC3 = $("#rfc3").val();
    var correo3 = $("#correo3").val();


    //Los datos para el firmante #1 son required
    if(nombre.length == 0 || RFC.length == 0 || correo==0)
    {
        Swal.fire({
            icon: 'warning',
            title: 'Faltan Datos',
            text: 'Los datos del Firmante #1 son obligatorios',
          })
    }

    else if(nombre2.length!=0 && RFC2==0 &&correo2==0  || RFC2.length!=0 && nombre2==0 &&correo2==0 || correo2.length!=0 && nombre2==0 &&RFC2==0 
        ||nombre2.length==0
        &&correo2!=0 && RFC2!=0

        ||correo2.length==0
        &&nombre2!=0 && RFC2!=0

        ||RFC2.length==0
        &&correo2!=0 && nombre2!=0
        
        )
    {
        Swal.fire({
            icon: 'warning',
            title: 'Faltan Datos Del Firmante 2',
            text: 'Al parecer desea ingresar 2 firmantes          complete los campos para el firmante #2',
          })

    }

    ///////////////

    else if(nombre3.length!=0 && RFC3==0 &&correo3==0  || RFC3.length!=0 && nombre3==0 &&correo3==0 || correo3.length!=0 && nombre3==0 &&RFC3==0 
        ||nombre3.length==0
        &&correo3!=0 && RFC3!=0

        ||correo3.length==0
        &&nombre3!=0 && RFC3!=0

        ||RFC3.length==0
        &&correo3!=0 && nombre3!=0
        
        )
    {
        Swal.fire({
            icon: 'warning',
            title: 'Faltan Datos Del Firmante 3',
            text: 'Al parecer desea ingresar 3 firmantes complete los campos para el firmante #3',
          })

    }

else{
    $.ajax({
        url:"../../controller/mifielSAVE.php",
        type:"POST",
        data:{
            nombre1:nombre,
            nombre2:nombre2,
            nombre3:nombre3,
            RFC1:RFC,
            RFC2:RFC2,
            RFC3:RFC3,
            correo1:correo,
            correo2:correo2,
            correo3:correo3,
            path:path,
            idUSER:idUSER,
            id:id,
            expira:expira
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
           // alert(textStatus);
           if(XMLHttpRequest.status==500)
           {
            Swal.fire({
                icon: 'error',
                title: 'Lo sentimos...',
                text: 'Ha ocurrido un error, asegúrese de haber ingresado los datos de forma correcta asi como verificar que se haya ingresado un RFC real como un correo electrónico valido. ',
                footer: '<a  href="https://guia.mifiel.com/firma-de-documentos">¿Necesitas más ayuda? </a>'
              })
           }
            
         }
    }).done(function(resp){

        let timerInterval
        Swal.fire({
        title: 'Enviando invitación para firmar',
        html: 'Espere por favor, No cierre esta ventana!!!',
        timer: 5000,
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
            location.href="../../config/documentos.php";
        if (result.dismiss === Swal.DismissReason.timer) {
            console.log('I was closed by the timer')
        }
        })
    })
    
}

}
