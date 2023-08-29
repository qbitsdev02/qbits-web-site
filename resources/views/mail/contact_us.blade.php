<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row mb-4 align-items-center">
                    <div class="col-sm-8">
                        <h3>TIENES UN NUEVO MENSAJE</h3>
                    </div>
                    {{-- <div class="col-sm-4 text-end">
                        <img src="{{ asset('images/logo/qbits_inc.png') }}" alt="Qbits technology Inc" style="width: 100%">
                    </div> --}}
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12 mb-4">
                        <span >NOMBRE:</span>
                        <p class="text-uppercase fw-bold">{{ $contacto['name'] }}</p>
                    </div>

                    <div class="col-sm-12 mb-4">
                        <span >ASUNTO:</span>
                        <p class="text-uppercase fw-bold">{{ $contacto['subject'] }}</p>
                    </div>

                    <div class="col-sm-12 mb-4">
                        <span >CORREO ELECTRONICO:</span>
                        <p class="text-uppercase fw-bold">
                          <a href="mailto:{{ $contacto['email'] }}">{{ $contacto['email'] }}</a>
                        </p>
                    </div>

                    <div class="col-sm-12 mb-4">
                        <span >NUMERO DE TELEFONO:</span>
                        <p class="text-uppercase fw-bold">{{ $contacto['phone_number'] }}</p>
                    </div>

                    <div class="col-sm-12 mb-4">
                        <span >MENSAJE:</span>
                        <p class="text-uppercase fw-bold">{{ $contacto['body'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>