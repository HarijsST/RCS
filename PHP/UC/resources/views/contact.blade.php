@extends('layouts.app')

@section('content')
<h1>Contact</h1>
<div class="container">
    <div id="contbc" class="row">
        <div class="col-sm">
        <form id="main-contact-form" name="contact-form" method="post" action="/UC/resources/views/layouts/sendmail.php">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                    <h5>Vārds Uzvārds</h5>
                      <input type="text" name="name" class="form-control" placeholder="Vārds, uzvārds" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                    <h5>e-pasts</h5>
                      <input type="email" name="email" class="form-control" placeholder="e-pasta adrese" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                <h5>Tēma</h5>
                  <input type="text" name="subject" class="form-control" placeholder="Tēma" required="required">
                </div>
                <div class="form-group">
                <h5>Dzejas rindas, kuras veltīsiet mums</h5>
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Ieraksti savu ziņu" required></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Sūtīt</button>
                </div>
              </form>
            <br>
        </div>
        <div class="col-sm">
        <h3>Resident Evil All Trailers 1 2 3 4 5 (Full)</h3>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="1280" height="720" src="https://www.youtube.com/embed/o3ewAW0Ne94" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe> </div>
        </div>
    </div>
</div>
<br>
@endsection
