$(document).ready(function(e)
{
    $("#fupForm").on('submit', function(e)
    {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '../../controller/submit.php',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function()
            {
                $('.submitBtn').attr("disabled","disabled");
                $('#fupForm').css("opacity",".5");
            },
            success: function(response){
                $('.statusMsg').html('');
                if(response.status == 1){
                    $('#fupForm')[0].reset();
                    $('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');
                }else{
                    $('.statusMsg').html('<p class="alert alert-danger">'+response.message+'</p>');
                }
                $('#fupForm').css("opacity","");
                $(".submitBtn").removeAttr("disabled");
            }
        });
    });
});

$("#file").change(function()
 {
    var file = this.files[0];
    var fileType = file.type;
    var match = ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
    if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))){
        alert('Solamente archivos PDF, DOC, JPG, JPEG, & PNG son permitidos ');
        $("#file").val('');
        return false;
    }
});