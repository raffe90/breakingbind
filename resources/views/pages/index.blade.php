@extends('app')

@section('content')
    <!-- Header -->
    <header class="animated infinite pulse">
        <div class="overlay"></div>
        <div class="container">
            <div class="intro-text">
                {{-- <div class="intro-lead-in">Una fiesta del más allá</div> --}}
                <div class="intro-lead-in">La noche mas esperada, por vivos y muertos</div>
                <div class="intro-heading animated shake">¿Truco o trato?</div>
            </div>
        </div>
    </header>

    <!-- Organizacion Section -->
    <section id="organizacion" class="bg-light-gray">
        <img src="img/witch.svg" class="img-responsive img-centered witch" alt="Bruja">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">¡Come, bebe y espanta!</h2>
                    <h3 class="section-subheading text-muted">Si buscas divertirte en la noche mas terrorífica del año y quieres celebrar Halloween únete a nosotros, si te atreves.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                  <p>Nosotros nos encargamos de preparar el mejor ambiente para que puedas pasar una noche inolvidable. Música, barra libre y picoteo. Tú sólo debes traer el disfraz más aterrador que puedas encontrar.</p>
                  <p>Podrás comer y beber todo lo que quieras por 55 euros. Además, sólo por venir podrás participar en el concurso de disfraces donde se sorteará un masaje oriental.</p>
                  <p>Y como en todos nuestros eventos conocerás gente nueva en un lugar agradable e íntimo para conectar y ampliar tu grupo de amigos. Y quién sabe a lo mejor encontrarás a tu media calabaza.</p>
                </div>
            </div>
        </div>
        <img src="img/spider-web-left-corner.svg" class="img-responsive img-centered logo-aecat spider-web" alt="Spider web">
        <img src="img/open-bar.svg" class="img-responsive img-centered open-bar shake infinite animated" alt="Barra libre">
    </section>

    <!-- About Section -->
    <section id="evento">
        <img src="img/spider.svg" class="img-responsive img-centered spider" alt="Spider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Asiste</h2>
                    <h3 class="section-subheading text-muted">El Sábado 31 de Octubre en Gaztambide, 24 desde las 11.00 PM hasta las 4.00 AM, si sobrevives.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="row slideDownForm">
                        <div class="col-lg-12">
                            <form id="buy-tickets" role="form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Nombre completo *" required data-validation-required-message="Por favor, introduzca su nombre completo.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Correo electrónico *" required data-validation-required-message="Por favor, introduzca un correo electrónico.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" name="phone" placeholder="Teléfono *" required data-validation-required-message="Por favor, introduzca un número telefónico.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="dni" placeholder="DNI/NIE *" required data-validation-required-message="Por favor, introduzca su nombre completo.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" id="tickets" name="tickets" required data-validation-required-message="Por favor, seleccione una cantidad.">
                                                <option value="" disabled selected>Seleccione la cantidad deseada</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="comments" placeholder="Comentarios (Opcional)"></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                {!! HTML::image('img/paypal-logo.svg', 'PayPal', ['class' => 'img-responsive img-centered paypal-logo']) !!}
                                                <label class="radio-inline"><input type="radio" name="payment" value="paypal" required>PayPal</label>
                                            </div>
                                            <div class="col-md-6">
                                                {!! HTML::image('img/wire-transfer.svg', 'Transferencia Bancaria', ['class' => 'img-responsive img-centered wire-transfer']) !!}
                                                <label class="radio-inline"><input type="radio" name="payment" value="transfer">Transferencia Bancaria</label>
                                            </div>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <div id="registrationSuccess"></div>
                                        <button type="submit" class="btn btn-primary btn-xl trigger-zombie-hands">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/zombie-hands.svg" class="img-responsive img-centered zombie-hands" alt="Zombie hands">
    </section>





    <!-- Contact Section -->
    <section id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contacto</h2>
                    <h3 class="section-subheading text-muted"><span class="fa fa-phone"> 913981628</span><br><span class="fa fa-envelope"> info@breakingbind.com</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" class="contact" id="contactForm" novalidate>
                        <input type="hidden" id="url">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre completo *" id="name" required data-validation-required-message="Por favor, introduzca su nombre completo.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Correo electrónico *" id="email" required data-validation-required-message="Por favor, introduzca un correo electrónico.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Teléfono *" id="phone" required data-validation-required-message="Por favor, introduzca un número telefónico.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Comentarios *" id="message" required data-validation-required-message="Por favor, introduzca sus comentarios."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary btn-xl">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <img src="img/ghost.svg" class="img-responsive img-centered ghost" alt="Friendly ghost">
    </section>
    <aside>
        <iframe id="map-canvas"
        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJPx86ikIoQg0R41r4yzvYgJM&amp;key=AIzaSyAlnKDtzJoIfHbA99KRyXgrxZc134M53wk" allowfullscreen></iframe>
    </aside>
@endsection

@section('scripts')

    <script type="text/javascript">
        jQuery.validator.addMethod("DNI", function(value, element) {
        var cadenadni="TRWAGMYFPDXBNJZSQVHLCKET";
        var let = value.substr(value.length-1,1);
        if(/^([0-9]{8})*[a-zA-Z]+$/.test(value)){
        var numero = value.substr(0,value.length-1) % 23;
        letra=cadenadni.substring(numero,numero+1);
        if (letra==let)
        return true;
        return false;
        } else if (/^[XYZ]{1}/.test(value)) {
        var reemplazar = new Array("X", "Y", "Z")
        var por = new Array("0", "1", "2");
        numero=value
        for (var i=0; i<reemplazar.length; i++) {
        numero = numero.replace(reemplazar[i].toUpperCase(), por[i]);
        }
        var numero = numero.substr(0,value.length-1) % 23;
        var letra = cadenadni.substring(numero, numero + 1);
        if (letra==let)
        return true;
        return false;
        }
        return this.optional(element);
        
    }, "Por favor escribe un DNI válido");
        $('form#buy-tickets').validate({
          rules: {
            'dni': { DNI: true }
          }
        });


        $('form#buy-tickets').on('submit', function(e){
            e.preventDefault();
            alert("Ya no se permiten inscripciones al evento de Halloween. El 21 de Noviembre organizaremos otro evento, en breve podrás encontrar los detalles en esta web.");
        });

        $(function() {
            $('button.trigger-zombie-hands').hover(function(){
                $('img.zombie-hands').addClass('animated slideInUp').css('display', 'block');
            });
            
            $(window).scroll(function (event) {
                // console.log($(window).scrollTop());
                if($(window).scrollTop() > 600){
                    $('img.witch').addClass('move-left').css('display', 'block');
                }
                if($(window).scrollTop() > 1200){
                    $('img.spider').addClass('animated slideInDown').css('display', 'block');
                }
                if($(window).scrollTop() > 2400){
                    $('img.ghost').addClass('animated slideInUp').css('display', 'block');
                }
            });
            $( "select[name='activity']").change(function(){
                if(parseInt($(this).find('option:selected').val()) === 181 || parseInt($(this).find('option:selected').val()) === 182){
                    $("select[name='children']").prop('disabled', false);
                    alert('Recuerde que los niños deben de tener entre 3 y 15 años.');
                    if(parseInt($(this).find('option:selected').val()) === 182){
                        $("select[name='children'] option[value='0']").attr("disabled", "disabled");
                    }
                    else{
                        $("select[name='children'] option[value='0']").attr("selected", "selected");
                    }
                }
                else{
                    $("select[name='children'] option[value='0']").attr("selected", "selected");
                    $("select[name='children']").prop('disabled', 'disabled');
                }
            });

            $("div.timeline-heading h4.subheading").click(function(){
                $(this).find('span.fa').hasClass('fa-plus-circle') ?
                    $(this).find('span.fa').removeClass('fa-plus-circle').addClass('fa-minus-circle') :
                    $(this).find('span.fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');
                    $(this).parent('div.timeline-heading').next('div.timeline-body').slideToggle(800, "easeOutQuad");
            });

            $('button#register, button.btn-panel.register').on('click', function(event) {
                var that =  $(this).closest('div.row').find('.slideDownForm');
                that.slideDown(800, "easeOutQuad");
                $('html, body').animate({ scrollTop: that.offset().top - 55 }, 'slow');
            });

            $('button.btn-panel.rifa').on('click', function(event) {
                $('section#rifa-solidaria').find('.slideDownForm').slideDown(800, "easeOutQuad");
                $('html, body').animate({ scrollTop: $('section#rifa-solidaria').find('.slideDownForm').offset().top - 55 }, 'slow');
            });
        });
    </script>
@endsection