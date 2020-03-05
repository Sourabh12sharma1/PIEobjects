@extends('layout.master')
@section('contact')

    <!-- Inner page hedaing start -->
    <section class="irs-inner-page-heading irs-layer-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="irs-inner-heading">
                        <h2>Contact Us</h2>
                        <i class="icofont icofont-education"></i>
                        <p><a href="index-layout1.html">HOME</a> > <a href="#">Contact</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner page hedaing end -->

    <!-- Contact start -->
    <section class="irs-contact-field">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- <div class="google-map irs-google-map" id="map-canvas" style="height: 450px;"></div> -->
					<!-- <iframe width="100%" height="450" src="https://maps.google.com/maps?width=100%&amp;height=450&amp;hl=en&amp;coord=26.859238, 75.362709&amp;q=Bhande%20Ke%20Bajaji%20Th.%20phulcra%20Jaipur(303338)%20Rajasthan.+(Navjeevan%20College)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">latitude longitude finder</a></iframe> -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.393458344823!2d75.36052031504381!3d26.859237683150674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDUxJzMzLjMiTiA3NcKwMjEnNDUuOCJF!5e0!3m2!1sen!2sin!4v1579584313266!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
			<br></br>
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <div class="irs-contact-col">
					@if (count($errors) > 0)
                            <div class="alert alert-danger alert-dismissible">
                                <strong>Whoops!</strong> There were some problems with your input.
                                <br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>{{ $error }}</strong>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('success') }}
                            </div>

                            @endif
                        <div class="row">
                            <form id="contact_form" name="contact_form" action="{{route('form')}}" method="post" novalidate="novalidate" onSubmit="document.getElementById('ssbt').disabled=true;">
							{{csrf_field()}}
                                <div class="col-md-6">
                                    <input id="form_name" name="name" class="form-control" placeholder="Name*" required="required" data-error="Name is required." type="text">
                                </div>
                                <div class="col-md-6">
                                    <input id="form_email" name="email" class="form-control" placeholder="Email*" required="required" data-error="Email is required." type="text">
                                </div>
                                <div class="col-md-12">
                                    <input id="form_subject" name="subject" class="form-control" placeholder="Subject*" required="required" data-error="Subject is required." type="text">
                                </div>
                                <div class="col-md-12">
                                    <textarea id="form_message" name="message" class="form-control irs-textarea" rows="12" placeholder="Comment*" required="required" data-error="Message is required."></textarea>
                                    <button class="btn btn-default irs-big-btn" type="submit" id="ssbt">send</button>
                                </div>
								
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="irs-address-col">
                        <i class="icofont icofont-telephone"></i>
                        <p>01428-264055</p>
                        <p>+91 9314504261</p>
                    </div>
                    <div class="irs-address-col">
                        <i class="icofont icofont-email"></i>
                        <p>navjeevancollege.2016@gmail.com</p>
                    </div>
                    <div class="irs-address-col">
                        <i class="icofont icofont-social-google-map"></i>
                        <p>Bhande Ke Bajaji Th. phulcra Jaipur(303338) Rajasthan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact end -->

@endsection