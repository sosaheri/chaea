<x-guest-layout>

    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://unsplash.com/es/fotos/sfL_QOnmy00');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-12 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Paso 3 / 10</h4>
                </div>
              </div>
                  <!-- Session Status -->
              <x-auth-session-status class="p-4" :status="session('status')" />

              <div class="card-body">
                    <div class="question-wrap">
                        <label class="form-check-label" id="question1">17 Prefiero las cosas estructuradas a las desordenadas.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                            <label class="form-check-label" for="customRadio1">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                            <label class="form-check-label" for="customRadio2">En desacuerdo</label>
                        </div>
                    </div>

                    <div class="question-wrap">
                        <label class="form-check-label" id="question2">18 Cuando poseo cualquier información, trato de interpretarla bien antes manifestar alguna conclusión.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="customRadio3">
                            <label class="form-check-label" for="customRadio3">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="customRadio4">
                            <label class="form-check-label" for="customRadio4">En desacuerdo</label>
                        </div>
                    </div>

                    <div class="question-wrap">
                        <label class="form-check-label" id="question3">19 Antes de hacer algo estudio con cuidado sus ventajas e inconvenientes.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault3" id="customRadio5">
                            <label class="form-check-label" for="customRadio5">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault3" id="customRadio6">
                            <label class="form-check-label" for="customRadio6">En desacuerdo</label>
                        </div>
                    </div>
                    
                    <div class="question-wrap">
                        <label class="form-check-label" id="question4">20 Me crezco con el reto de hacer algo nuevo y diferente.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault4" id="customRadio7">
                            <label class="form-check-label" for="customRadio7">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault4" id="customRadio8">
                            <label class="form-check-label" for="customRadio8">En desacuerdo</label>
                        </div>
                    </div>

                    <div class="question-wrap">
                        <label class="form-check-label" id="question5">21 Casi siempre procuro ser coherente con mis criterios y sistemas de valore. Tengo principios y los sigo</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault5" id="customRadio9">
                            <label class="form-check-label" for="customRadio9">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault5" id="customRadio10">
                            <label class="form-check-label" for="customRadio10">En desacuerdo</label>
                        </div>
                    </div>

                    <div class="question-wrap">
                        <label class="form-check-label" id="question6">22 Cuando hay una discusión no me gusta ir con rodeos.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault6" id="customRadio9">
                            <label class="form-check-label" for="customRadio9">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault6" id="customRadio10">
                            <label class="form-check-label" for="customRadio10">En desacuerdo</label>
                        </div>
                    </div>

                    <div class="question-wrap">
                        <label class="form-check-label" id="question7">23 Me disgusta implicame afectivamente en mi ambiente de trabajo Prefiero mantener relaciones distantes.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault7" id="customRadio11">
                            <label class="form-check-label" for="customRadio11">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault7" id="customRadio12">
                            <label class="form-check-label" for="customRadio12">En desacuerdo</label>
                        </div>
                    </div>

                    <div class="question-wrap">
                        <label class="form-check-label" id="question8">24 Me gustan más las personas realistas y Concretas que las teóricas</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault8" id="customRadio13">
                            <label class="form-check-label" for="customRadio13">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault8" id="customRadio14">
                            <label class="form-check-label" for="customRadio14">En desacuerdo</label>
                        </div>
                    </div>

                    <a id="next-link" href="{{ route('step4') }}" style="background: #0D0E4C !important" class="btn text-center bg-gradient-primary w-100 my-4 mb-2" >Siguiente</a>

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

        let step3Data = {
            q17: document.querySelector('input[name="flexRadioDefault"]').checked ? 1 : 0,
            q18: document.querySelector('input[name="flexRadioDefault2"]').checked ? 1 : 0,
            q19: document.querySelector('input[name="flexRadioDefault3"]').checked ? 1 : 0,
            q20: document.querySelector('input[name="flexRadioDefault4"]').checked ? 1 : 0,
            q21: document.querySelector('input[name="flexRadioDefault5"]').checked ? 1 : 0,
            q22: document.querySelector('input[name="flexRadioDefault6"]').checked ? 1 : 0,
            q23: document.querySelector('input[name="flexRadioDefault7"]').checked ? 1 : 0,
            q24: document.querySelector('input[name="flexRadioDefault8"]').checked ? 1 : 0
        };

        sessionStorage.setItem('step3', JSON.stringify(step3Data));

        window.location.href = '/step4';
    });
</script>
