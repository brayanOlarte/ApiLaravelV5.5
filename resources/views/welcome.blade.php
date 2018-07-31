<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Formulario</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .thumb {
           height: 300px;
           border: 1px solid #000;
           margin: 10px 5px 0 0;
         }
         body{height:100%;
              width:100%;
              background-image:url(12.jpg);
              background-repeat:no-repeat;
              background-size:cover;
            }
        </style>
    </head>
    <body background="img/12.jpg">
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Formulario
                </div>

                    <input type="file" id="files" name="files[]" />
                    <br />
                    <output id="list"></output>

                <div class="links">
                    Nombre:<br>
                    <input type="text" name="firstname"><br>
                    Apellido:<br>
                    <input type="text" name="lastname"><br>
                    Usuario:<br>
                    <input type="text" name="firstname"><br>
                    Contraseña:<br>
                    <input type="password" name="lastname"><br>
                    Email:<br>
                    <input type="email" name="email"><br>
                    <input type="submit" value="Enviar">
                    <input type="submit" value="Eliminar">
                    <input type="submit" value="Buscar">
                    <input type="submit" value="Modificar">
                </div>
            </div>

        <script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object

                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }

                    var reader = new FileReader();

                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);

                    reader.readAsDataURL(f);
                  }
              }

              document.getElementById('files').addEventListener('change', archivo, false);
      </script>
    </body>
</html>
