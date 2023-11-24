@extends('layout.master');

@section('content');


<main>
  <!-- Connect-area-start-here -->
        <section class="connect_section">
            <div class="container">
                <div class="row">
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="connect_area">
                        <h3 class="summary_title2">Let's Connect</h3>
                        <p class="summary_p">Please fill out the form on this section to contact with me or call between 9:00 A.M and 8.00 P.M ET, Monday through Friday.</p>
                        <div class="connect_img">
                            <a href="https://www.facebook.com/abdullahalmasum.masum.733" target="_blank"><img src="{{asset('/images/icons/facebook-logo.png')}}" alt="" ></a>
                            <a href="https://twitter.com/abdullah_abd10?t=iMqoG8uo__6MlW0Vup49rQ&s=09&fbclid=IwAR02hZ4sWtfoShICZ9f1URHgnrMMlFe9moImHXa7jYCuxkJWRlAM629RbWk" target="_blank"><img src="{{asset('/images/icons/twitter-logo.png')}}" alt=""></a>
                            <a href="https://github.com/WebDeveloperAbdullah" target="_blank"><img src="{{asset('/images/icons/github.png')}}" alt=""></a>
                            <a href="https://www.fiverr.com/freelanabdullah" target="_blank"><img src="{{asset('/images/icons/fiverr.png')}}" alt=""></a>
                        </div>

                    </div>

                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="message_area">
                        <h3>let's Message me</h3>
                        <form action="">
                            <input class="input_text" type="text" placeholder="Your Name">
                            <input class="input_text" type="text" placeholder="Your Email">
                            <textarea class="input_text" name="" id="" cols="30" rows="7">Message</textarea>
                            <button id="btn_primary">Submit</button>
                        </form>

                    </div>
                  </div>

                </div>

            </div>

        </section>
        <!-- Connect-area-end-here -->

    </main>


@endsection