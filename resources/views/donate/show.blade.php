<x-app-layout>
    <div
    style="-webkit-transform:translate3d(0, 4EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 4EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 4EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 4EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
    class="section">
    <div class="container-1100">
      <div class="heading-container">
        <div
          style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);opacity:0"
          class="heading-row-1">
          <h1><span class="spark-left brand-color-5 text-6xl">Your</span> <span class="text-6xl">generous</span><span class="underline-sketchy"></span></h1>
        </div>
        <div
          style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);opacity:0"
          class="heading-row-2">
          <h1><span class="underline-sketchy text-6xl">donation</span></h1>
        </div>
        <div
          style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-8DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-8DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-8DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-8DEG) skew(0, 0);opacity:0"
          class="heading-row-3">
          <h1 class="text-6xl">can <span class="underline-wavey brand-color-2 text-6xl">help us...</span></h1>
        </div>
      </div>
    </div>

    <div class="_2-column-grid stack-tablet mx-40">

        {{--Primera columna--}}
        {{-- Dependiendo de la cantidad a donar, se muestra un cuadro diferente ---}}
        
        @if($opc == 25)
        <div id="w-node-_09030bf0-369f-39c6-fec8-82e1a77e7225-a8006982" style="background-color:#ecc3ee" class="card">
          <div class="content-padding donation-cards">
            <div class="icon extra-large centered">
              <div data-w-id="7dd9125e-0a07-7995-ae35-4733d5e6a5e7" data-animation-type="lottie"
                data-src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a03d14384a5_Adoptable_Donate.json"
                data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg"
                data-default-duration="1" data-duration="0"></div>
            </div>
            <h2 class="big-dollar-text">$ {{$opc}}</h2>
          </div>
          <div class="short-fur-pattern"></div>
          <div class="long-fur-pattern w-condition-invisible"></div>
          <div id="paypal-button-container"></div>
        </div>
        @elseif ($opc == 50)
        <div id="w-node-_09030bf0-369f-39c6-fec8-82e1a77e7225-a8006982" style="background-color:#ff8d7b" class="card">
            <div class="content-padding donation-cards">
              <div class="icon extra-large centered">
                <div data-w-id="7dd9125e-0a07-7995-ae35-4733d5e6a5e7" data-animation-type="lottie"
                  data-src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a03d14384a5_Adoptable_Donate.json"
                  data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg"
                  data-default-duration="1" data-duration="0"></div>
              </div>
              <h2 class="big-dollar-text">$ {{$opc}}</h2>
            </div>
            <div class="short-fur-pattern"></div>
            <div class="long-fur-pattern w-condition-invisible"></div>
            <div id="paypal-button-container"></div>
          </div>
        @elseif($opc == 100)
        <div id="w-node-_09030bf0-369f-39c6-fec8-82e1a77e7225-a8006982" style="background-color:#80e6a2" class="card">
            <div class="content-padding donation-cards">
              <div class="icon extra-large centered">
                <div data-w-id="7dd9125e-0a07-7995-ae35-4733d5e6a5e7" data-animation-type="lottie"
                  data-src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a03d14384a5_Adoptable_Donate.json"
                  data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg"
                  data-default-duration="1" data-duration="0"></div>
              </div>
              <h2 class="big-dollar-text">$ {{$opc}}</h2>
            </div>
            <div class="short-fur-pattern"></div>
            <div class="long-fur-pattern w-condition-invisible"></div>
            <div id="paypal-button-container"></div>
          </div>
        @endif


        {{-- Segunda columna --}}
        <div id="w-node-e2b3f777-301e-e46d-da99-be830b4ad437-a8006982" class="content-padding">
          <ol role="list" class="list w-list-unstyled">
            <li>
              <div class="dotted-row-container big-bullets">
                <div class="circle-icon white-bullets"><img
                    src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a098a438502_Icons_Adoptable_Purple_Volunteer.svg"
                    loading="lazy" alt="" /></div>
                <div>Utporttitor Pomeagle leo a diam sollicitudin tempor id. Purus non enimpraesent Chihuahua elementum
                  facilisis leo vel.</div>
              </div>
              <div class="dotted-row-container big-bullets">
                <div class="circle-icon white-bullets"><img
                    src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802ab69e4384c9_Icons_Adoptable_Purple_Dog%20House.svg"
                    loading="lazy" alt="" /></div>
                <div>Est Turkish Angora lorem ipsum dolor sit amet. Elementum Ragamuffin tempus egestas sed sed risus
                  Turkish Van pretium.</div>
              </div>
              <div class="dotted-row-container big-bullets">
                <div class="circle-icon white-bullets"><img
                    src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a3b634384be_Icons_Adoptable_Purple_Bowl.svg"
                    loading="lazy" alt="" /></div>
                <div>Ac Tonkinese turpis egestas Egyptian Mau maecenas pharetra convallis posuere European Burmese morbi
                  leo.</div>
              </div>
              <div class="dotted-row-container big-bullets">
                <div class="circle-icon white-bullets"><img
                    src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802acdaf4384f0_Icons_Adoptable_Purple_Scissors.svg"
                    loading="lazy" alt="" /></div>
                <div>Euturpis Sheltie egestas Basenji pretium aenean pharetra magna acplacerat. Amet tellus cras Bull
                  Terrier adipiscing enim eu turpisegestas.</div>
              </div>
              <div class="dotted-row-container big-bullets">
                <div class="circle-icon white-bullets"><img
                    src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802ac1f74384d6_Icons_Adoptable_Purple_Health%20Check.svg"
                    loading="lazy" alt="" /></div>
                <div>Sapieneget mi proin sed libero enim sed faucibus. Arcu Manx non odio euismodlacinia at quis risus.
                  Curabitur Russian Blue gravida Scottish Fold arcuac tortor dignissim.</div>
              </div>
            </li>
          </ol>
        </div>
      </div>


    {{-- <div class="flex mt-10 justify-center items-center">

        <!-- Contenedor -->
        <div class="w-full text-center text-5xl font-semibold mb-96">
            Usted va a donar $ {{ $opc }} 

            <!-- Botones de paypal -->
            <div class="flex justify-center mt-14 mb-80">
                <div id="paypal-button-container" style="width: 750px; height: 100px; margin: 0 auto;"></div>
            </div>
        </div>

    </div> --}}

        <script src="https://www.paypal.com/sdk/js?client-id={{ config('services.paypal.client_id') }}&currency=MXN"></script>

        <!-- Renderizar boton de paypal -->
        <script>
            paypal.Buttons({
              createOrder: function(data, actions) {
                return actions.order.create({
                  purchase_units: [{
                    amount: {
                      value: "{{ $opc }}",
                      currency_code: "MXN"
                    }
                  }]
                });
              },
              onApprove: function(data, actions) {
                console.log('Pago aprobado');
                window.location.href = "{{ route('donate.finished') }}"; // Reemplaza 'nombre-de-tu-ruta' con el nombre de tu ruta
              }
            }).render('#paypal-button-container');
        </script>
</x-app-layout>
