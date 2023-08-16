 <!--? Contact form Start -->
 <section class="contact-form-main">
     <div class="container">
         <div class="row justify-content-end">
             <div class="col-xl-7 col-lg-7">
                 <div class="form-wrapper">
                     <!--Section Tittle  -->
                     <div class="form-tittle">
                         <div class="row ">
                             <div class="col-lg-11 col-md-10 col-sm-10">
                                 <div class="section-tittle">
                                     <span>Contact Form</span>
                                     <h2>Feel Free to contact with us!</h2>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--End Section Tittle  -->
                     <form id="contact-form" action="{{ route('constact') }}" method="POST">
                        {{ csrf_field() }}
                        @if (session('success'))
                             <div class="alert alert-success">
                                 {{ session('success') }}
                             </div>
                         @endif
                         <div class="row">
                             <div class="col-lg-6 col-md-6">
                                 <div class="form-box user-icon mb-30">
                                     <input required type="text" name="name" placeholder="Name">
                                 </div>
                             </div>
                             <div class="col-lg-6 col-md-6">
                                 <div class="form-box email-icon mb-30">
                                     <input required type="text" name="phone" placeholder="Phone">
                                 </div>
                             </div>
                             <div class="col-lg-6 col-md-6 mb-30">
                                 <div class="select-itms">
                                     <select required name="type" id="select2">
                                         <option value="Trainnee">Trainee</option>
                                         <option value="Trainners">Trainners</option>
                                         <option value="Nutriction Expect">Nutriction Expect</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="col-lg-6 col-md-6">
                                 <div class="form-box subject-icon mb-30">
                                     <input required type="email" name="email" placeholder="Email">
                                 </div>
                             </div>
                             <div class="col-lg-12">
                                 <div class="submit-info">
                                     <button class="btn" type="submit">Send Message</button>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
     <!-- contact left Img-->
     <div class="from-left d-none d-lg-block">
         <img src="{{ asset('assets/img/gallery/contact_form.png') }}" alt="">
     </div>
 </section>
 <!-- Contact form End -->
