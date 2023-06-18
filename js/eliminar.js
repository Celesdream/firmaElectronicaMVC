var button = document.getElementById("descargar");
button.disabled = true;
var estado = $("#estado").val();
if(estado=="COMPLETADO!!")
{
  button.disabled = false;
}
function eliminar()
{
    var idDoc = $("#idDoc").val();
    var widgetID = $("#widgetID").val();
    var docUser = $("#docUser").val();

    if(estado=="COMPLETADO!!")
    {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Los archivos completados no pueden ser eliminados'
      })

    }
    
    else
    {
    Swal.fire({
        title: '¿Está seguro?',
        text: "Tenga en cuenta que esta acción no podrá ser revertida",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Si,Elimina el documento',
        cancelButtonText : 'Quiero esperar'
      }).then((result) => {
        if (result.isConfirmed) 
        {
            $.ajax({
                url:"../../controller/eliminar.php",
                type:"POST",
                data :{
                    idDoc:idDoc,
                    docUser:docUser,
                    widgetID:widgetID

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    // alert(textStatus);
                    if(XMLHttpRequest.status==500)
                    {
                     Swal.fire({
                         icon: 'error',
                         title: 'Lo sentimos...',
                         text: 'Ha ocurrido un error, Contáctese con soporte para obtener ayuda ',
                         footer: '<a  href="https://guia.mifiel.com/firma-de-documentos">¿Necesitas más ayuda? </a>'
                       })
                    }
                     
                  }
            })

            let timerInterval
            Swal.fire({
              title: 'Documento eliminado correctamente',
              html: 'Volviendo NO CIERRE ESTA VENTANA…',
              timer: 4000,
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
                location.href="status.php";
              if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
              }
            })
          
          
        }
      })
}

}

function download()
{
  var widgetID = $("#widgetID").val();
  window.open("https://app-sandbox.mifiel.com/api/v1/documents/"+widgetID+"/zip");
}

function infoDetallada()
{
  var widgetID = $("#widgetID").val();
  window.open("https://app-sandbox.mifiel.com/verify/"+widgetID);
  
}