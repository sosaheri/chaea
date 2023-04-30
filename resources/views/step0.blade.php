<x-guest-layout>

    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://unsplash.com/es/fotos/sfL_QOnmy00');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-12 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Datos socioacademicos para los estudiantes promocionados al primer ciclo de la UCSG</h4>
                </div>
              </div>
                  <!-- Session Status -->
              <x-auth-session-status class="p-4" :status="session('status')" />

              <div class="card-body">
                
                    <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3 @error('name') is-invalid @else is-valid @enderror">
                                    <input placeholder="Nombre y apellido" name="name" id="name" type="text" value="{{ old('name') }}" class="form-control">
                                </div>                            
                            </div>

                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3 @error('paralelo') is-invalid @else is-valid @enderror">
                                    <input placeholder="Paralelo" name="paralelo" id="paralelo" type="text" value="{{ old('paralelo') }}" class="form-control">
                                </div>
                            </div>
                    </div>

                    <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3 @error('centro_docente') is-invalid @else is-valid @enderror">
                                    <input placeholder="Centro docente donde estudio (privado / público)" name="centro_docente" id="centro_docente" type="text" value="{{ old('centro_docente') }}" class="form-control">
                                </div>                            
                            </div>

                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3 @error('edad') is-invalid @else is-valid @enderror">
                                    <input placeholder="Edad" name="edad" id="edad" type="text" value="{{ old('edad') }}" class="form-control">
                                </div>
                            </div>
                    </div>

                    <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3 @error('sexo') is-invalid @else is-valid @enderror">
                                    <select name="sexo" id="sexo" class="form-control" id="exampleFormControlSelect1">
                                        <option>Sexo</option>
                                        <option value="masculino">Masculino</option>
                                        <option value="femenino">Femenino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3 @error('donde_trabaja') is-invalid @else is-valid @enderror">
                                    <input placeholder="Además de estudiar, trabajo en:" name="donde_trabaja" id="donde_trabaja" type="text" value="{{ old('donde_trabaja') }}" class="form-control">
                                </div>
                            </div>
                    </div>
                    
                    <div class="row">
                            <div class="col-md-4">
                                <div class="input-group input-group-outline my-3 @error('nota_media') is-invalid @else is-valid @enderror">
                                    <input placeholder="Nota media en culminación de bachillerato" name="nota_media" id="nota_media" type="text" value="{{ old('nota_media') }}" class="form-control">
                                </div>                            
                            </div>

                            <div class="col-md-4">
                                <div class="input-group input-group-outline my-3 @error('nota_alta') is-invalid @else is-valid @enderror">
                                    <input placeholder="Materia con nota más alta en bachillerato" name="nota_alta" id="nota_alta" type="text" value="{{ old('nota_alta') }}" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="input-group input-group-outline my-3 @error('nota_baja') is-invalid @else is-valid @enderror">
                                    <input placeholder="Materia con nota más baja en bachillerato" name="nota_baja" id="nota_baja" type="text" value="{{ old('nota_baja') }}" class="form-control">
                                </div>
                            </div>
                    </div>
                    
                    <a id="next-link" href="{{ route('step1') }}" style="background: #0D0E4C !important" class="btn text-center bg-gradient-primary w-100 my-4 mb-2" >Siguiente</a>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>


</x-guest-layout>
<script>
    let nextLink = document.querySelector('#next-link');

    nextLink.addEventListener('click', function(event) {
        event.preventDefault();

        let step0Data = {
            name: document.querySelector('#name').value,
            paralelo: document.querySelector('#paralelo').value,
            centro_docente: document.querySelector('#centro_docente').value,
            edad: document.querySelector('#edad').value,
            sexo: document.querySelector('#sexo').value,
            donde_trabaja: document.querySelector('#donde_trabaja').value,
            nota_media: document.querySelector('#nota_media').value,
            nota_alta: document.querySelector('#nota_alta').value,
            nota_baja: document.querySelector('#nota_baja').value
        };

        sessionStorage.setItem('step0', JSON.stringify(step0Data));

        window.location.href = '/step1';
    });
</script>
