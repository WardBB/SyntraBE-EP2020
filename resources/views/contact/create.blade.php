@extends('template.index')

@section('contact')
<div class="container contact">
<section class="mb-4">
    <h2 class="h2-responsive font-weight-bold text-center my-4">CONTACT US!</h2>
    <p class="text-center w-responsive mx-auto mb-5">If you have any questions, please do not hesitate to let us know.
        Fill in the contact form and we will get back to you within two working days.</p>

    <div class="row">

        <div class="col-md-9 mb-md-0 mb-5">
            <form method="post" action="{{route('sendContact')}}" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-md-6">
                        <label for="name" class="cntct">Your name:*</label><br>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                            </div>
                            <input type="text" formControlName="firstName" id="name" name="name" class="form-control"
                                required placeholder="name">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="phone" class="cntct">Phone:*</label>
                        <div class="input-group md-form mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                            </div>
                            <input type="text" id="phone" name="phone" class="form-control" required
                                placeholder="phonenumber">
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12">
                        <label for="email" class="cntct">Email:*</label>
                        <div class="input-group md-form mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            </div>
                            <input type="text" id="email" name="email" class="form-control" required
                                placeholder="your-email@mail.com">
                        </div>
                        <div class="md-form mb-0">
                            <label for="subject" class="subject">Subject:*</label>
                            <input type="text" id="subject" name="subject" class="form-control" required
                                placeholder="Contact">
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="question" class="cntct">Your question:</label>
                            <textarea type="text" id="question" name="question" rows="2" class="form-control md-textarea"
                                placeholder="Insert your question here"></textarea>
                        </div>

                    </div>
                </div>

                <br>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>


        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-pin mt-4 fa-2x" id="pin"></i>
                    <p>3600 Genk, Belgium</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x" id="phone"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x" id="envelope"></i><br>
                    <a href="mailto://contact@festifavs.com>contact@festifavs.com">contact@festifavs.com</a>
                </li>
            </ul>
        </div>

    </div>

</section>

@endsection