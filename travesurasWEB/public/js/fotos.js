/**
 * Created by wizerwolf on 11/12/2017.
 */
var url = window.location.origin;
var token = $('meta[name="csrf-token"]').attr('content');
$('#btnMostra').on('click',function(){
    var codigo = $('#codigo').val();
    console.log('entreo');
        $.ajax({
            url: url + '/comprobarcodigo',
            type: 'post',
            data: {
                codigo: codigo,
                _token: token
            },
            success: function (data){
                if(data=="200"){
                    alert("Codigo correcto");
                    setTimeout(function(){
                        window.location.href = url + '/mostrarfotos';
                    }, 1500);

                }else if(data=="400"){
                    alert("Codigo incorrecto");
                }
            }
        });


});