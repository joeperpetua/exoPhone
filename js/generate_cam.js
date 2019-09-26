

    var $cantCam = document.getElementById("cant_cam");
    var $generateCam = document.getElementById("generate_cam");
    var $showCam = document.getElementById("show_cam");
    var $php = document.getElementById("php");

    $generateCam.onclick = generarCam;

    function generarCam(event){

        var cams = [];
        var php = [];
        
        for (let index = 0; index < $cantCam.value; index++) {
            
            cams.push(
                        
                            '<p class="subtitle">Sensor '+(index + 1)+'</p>'+
                                '<ul>'+
                                '<li><label class="label">Tipo de lente: <input class="input" type="text" name="lens_type_'+(index + 1)+'"></li>'+
                                '<li><label class="label">MP del lente: <input class="input" type="number" name="lens_mp_'+(index + 1)+'"></li>'+
                                '<li><label class="label">Ubicación lente: <input class="input" type="text" name="lens_ubication_'+(index + 1)+'"></li>'+
                                '<li><label class="label">Grabación lente: <input class="input" type="text" name="lens_recording_'+(index + 1)+'"></li>'+
                                '</ul>'
                        
                    );

        }

        $showCam.innerHTML = cams;

    }

    