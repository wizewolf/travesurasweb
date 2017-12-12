/**
 * Created by wizerwolf on 11/12/2017.
 */
var url = window.location.origin;
var token = $('meta[name="csrf-token"]').attr('content');
$('#btnbuscar').on('click',function(){
    var dni = $('#dni').val();
    if(dni.length == 8){
        $.ajax({
            url: url + '/cliente',
            type: 'post',
            data: {
                dni: dni,
                _token: token
            },
            success: function (data){
                if(data!=null){
                    alert("Se encontro el cliente");
                    console.log(data);
                    setTimeout(function(){
                        window.location.href = url + '/cliente/fotos/'+data;
                    }, 1500);

                }else if(data==null){
                    alert("No se encontro al cliente");
                }
            }
        });
    }else{
        alert("Ingrese un DNI valido")
    }


});