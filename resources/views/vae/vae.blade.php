@extends('layout')
@section('page-title')
    IGED
@endsection
@section('page-content')
<!-- Post -->
<section class="bg0 p-t-70">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <div class="p-b-20">
                       <!-- Business -->
          <div class="tab01 p-b-20">
                          <div class="how2 how2-cl4 flex-s-c m-b-35">
                              <h3 class="f1-m-2 cl3 tab01-title">
                                VAE
                              </h3>
                          </div>

                          <div>
                              <img width="685" height="400" src="{{URL::asset('public/images/vae1.jpg')}}">
                          </div>
                           <!--Space-->
                          <div style="margin-bottom:5px">
                          </div>
            <h1 class="f1-s-11 cl6 p-b-25" style="text-align: justify;margin-top: auto;">
            </h1>

            <div>
              <h1 class="f1-s-11 cl6 p-b-25" style="text-align: justify;margin-top: auto;"> <i class="fa fa-arrow-right"></i>
                Description:
              </h1>
              <p class="f1-s-11 cl6 p-b-25" style="text-align: justify;margin-top: auto;">
                La validation des acquis professionnels (V.A.P.) permet d’accéder
                directement à une formation universitaire sans avoir le diplôme requis, en
                faisant valider une expérience professionnelle (salariée ou non), les
                formations suivies ou les acquis personnels développés hors de tout
                système de formation.
              </p>

              <h1 class="f1-s-11 cl6 p-b-25" style="text-align: justify;margin-top: auto;"> <i class="fa fa-arrow-right"></i>
                Temp :
              </h1>
              <p class="f1-s-11 cl6 p-b-25" style="text-align: justify;margin-top: auto;">
                    La formation a lieu en <strong>cours du soir OU DE JOUR </strong>
              </p>
              <!-- Item post -->
                  <h1 class="f1-s-11 cl6 p-b-25" style="text-align: justify;margin-top: auto;"> <i class="fa fa-arrow-right"></i>
                  Cible :
                </h1>
                <p class="f1-s-11 cl6 p-b-25" style="text-align: justify;margin-top: auto;">
                  •	Vous avez arrêté vos études au Bac ?</br>
                  •	Vous avez travaillé au moins 5 ans</br>
                  •	Vous voulez continuer à étudier pour booster votre carrière ?</br>
                </p>
                <p>
                  <a class="btn btn-primary" href="{{url('/vaee')}}" role="button">Les Fillieres disponibles</a>
                </p>
              </div>
          </div>
        </div>
      </div>

      <div class="col-md-10 col-lg-4">
        <div class="p-l-10 p-rl-0-sr991 p-b-20">
                      <div class="how2 how2-cl4 flex-s-c m-b-35">
                          <h3 class="f1-m-2 cl3 tab01-title">
                             CONTACT
                          </h3>
                        </div>

                          <div class="wpb_text_column wpb_content_element ">
                              <div class="wpb_wrapper">
                                  <div class="contact-info">
                                        <p class="f1-s-11 cl6 p-b-25"><i class="fa fa-map-marker"></i>BP:10  Nouakchoot-Mauritanie</p>
                                        <p class="f1-s-11 cl6 p-b-25"><i class="fa fa-phone"></i>+222 45 24 63 88</p>
                                        <p class="f1-s-11 cl6 p-b-25"><i class="fa fa-envelope"></i>groupedescartes@gmail.com</p>
                                        <p class="f1-s-11 cl6 p-b-25"><i class="fa fa-fax"></i>+222 48 88 55 50</p>
                                        <p class="f1-s-11 cl6 p-b-25"><i class="fa fa-clock-o"></i> Lundi – Samedi: 8:00 – 18:00</p>
                                    </div>
                                </div>
                      </div>
                        <!-- -->
                    <div class="vc_empty_space" style="height: 32px">
                      <span class="vc_empty_space_inner"></span>
                    </div>
                    <div class="how2 how2-cl4 flex-s-c m-b-35">
                      <h3 class="f1-m-2 cl3 tab01-title">
                         FACEBOOK
                      </h3>
                    </div>
                    <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <div id="fb-root" class=" fb_reset">
                                    <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                                      <div>

                                      </div>
                                  </div>
                              </div>

                              <p><script async="" defer="" crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&amp;version=v4.0&amp;appId=1883542155062259&amp;autoLogAppEvents=1">
                                 </script>
                              </p>
                              <div class="fb-page fb_iframe_widget" data-href="https://web.facebook.com/InstitutGED/"
                               data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true"
                               data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;
                               app_id=1883542155062259&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FISPP.Officiel%2F&amp;
                               locale=fr_FR&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline">
                               <span style="vertical-align: bottom; width: 340px; height: 500px;">
                                <iframe name="f172ce99a08ce1" width="1000px" height="1000px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                allow="encrypted-media" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2FInstitutGED&tabs=timeline&width=0&height=0&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                style="border: none; visibility: visible; width: 340px; height: 500px;" class=""></iframe></span>
                              </div>


                        </div>
                    </div>
                  </div>

           </div>
      </div>
    </div>
  </div>
</section>


@endsection
