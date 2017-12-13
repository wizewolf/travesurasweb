var emailRegex = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/;
var url = window.location.origin;
var token = $('meta[name="csrf-token"]').attr('content');
$('.register').on('click',function () {
    var nombre = $('#nombre').val();
    var mail = $('#mail').val();
    var dni =$('#dni').val();
    var pass = $('#pass').val();
    var repass = $('#repass').val();

    if(nombre!=''){
        if(mail !=''){
            if(emailRegex.test(mail)){
                if(pass !=''){
                    if(repass!=''){
                        if(pass != repass){
                            alert('Las contraseñas no coinciden');
                        }else{
                            if(dni.length ==8){
                                $.ajax({
                                    url: url + '/registerMobil',
                                    type: 'post',
                                    data: {
                                        user_name: nombre,
                                        email: mail,
                                        dni:dni,
                                        password: pass,
                                        user_type: "cliente",
                                        _token: token
                                    },
                                    success: function (data){
                                        //Controlar si es 400 => lanza una noptificacion de error
                                        //si es 200 lanzar la notificacion q esta debajo

                                        if(data!=null){
                                            alert("Se creo su Usuario");
                                            setTimeout(function(){
                                                window.location.href = url + '/loginMobil';
                                            }, 1500);
                                        }else if(data==null){
                                            alert("No se pudo crear su Usuario");
                                        }
                                    }
                                });
                            }else{
                                alert("Ingrese un DNI valido");
                            }

                        }

                    }else{
                        alert('Reitere su contraseña');
                    }

                }else{
                    alert('Ingrese su contraseña');
                }
            }else{
                alert('Ingrese un correo valido');
            }

        }else{
            alert('Ingrese un correo')
        }
    }else{
        alert('Ingrese su nombre de usuario');
    }



});

