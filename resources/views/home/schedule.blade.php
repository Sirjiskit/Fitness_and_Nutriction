 <!--? Date Tabs Start -->
 <section class="date-tabs section-padding30">
     <div class="container">
         <!-- Section Tittle -->
         <div class="row justify-content-center">
             <div class="col-lg-6 col-md-8">
                 <div class="section-tittle text-center mb-100">
                     <span>OUR tIME SCHEDULE</span>
                     <h2>SELECT THE pERFECT TIME YOU NEED NOW</h2>
                 </div>
             </div>
         </div>
         <!-- Heading & Nav Button -->
         <?php
         $day = strtolower((string) date('l'));
         ?>

         <div class="row justify-content-center mb-10">
             <div class="col-lg-11">
                 <div class="properties__button">
                     <!--Nav Button  -->
                     <nav>
                         <div class="nav nav-tabs" id="nav-tab" role="tablist">
                             <a class="nav-item nav-link {{ $day == 'saturday' ? 'active' : '' }}" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                 role="tab" aria-controls="nav-home" aria-selected="true">Saturday</a>
                             <a class="nav-item nav-link {{ $day == 'sunday' ? 'active' : '' }}" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                 role="tab" aria-controls="nav-profile" aria-selected="false">Sunday</a>
                             <a class="nav-item nav-link {{ $day == 'monday' ? 'active' : '' }} " id="nav-contact-tab"
                                 data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact"
                                 aria-selected="false">Monday</a>
                             <a class="nav-item nav-link {{ $day == 'tuesday' ? 'active' : '' }}" id="nav-last-tab" data-toggle="tab" href="#nav-last"
                                 role="tab" aria-controls="nav-contact" aria-selected="false">Tuesday</a>
                             <a class="nav-item nav-link {{ $day == 'wednesday' ? 'active' : '' }}" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport"
                                 role="tab" aria-controls="nav-contact" aria-selected="false">Wednesday</a>
                             <a class="nav-item nav-link {{ $day == 'thursday' ? 'active' : '' }}" id="nav-six" data-toggle="tab" href="#nav-nav-six"
                                 role="tab" aria-controls="nav-contact" aria-selected="false">Thursday</a>
                             <a class="nav-item nav-link {{ $day == 'friday' ? 'active' : '' }}" id="nav-seven" data-toggle="tab" href="#nav-nav-seven"
                                 role="tab" aria-controls="nav-seven" aria-selected="false">Friday</a>
                         </div>
                     </nav>
                     <!--End Nav Button  -->
                 </div>
             </div>
         </div>
         <!-- Tab content -->
         <div class="row justify-content-center">
             <div class="col-lg-11">
                 <!-- Nav Card -->
                 <div class="tab-content" id="nav-tabContent">
                     <!--  one -->
                     <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                         <div class="row">
                             <div class="col-12">
                                 <div class="tab-wrapper">
                                     <!-- single -->
                                     <div class="single-box">
                                         <div class="single-caption text-center">
                                             <div class="caption">
                                                 <span>6am - 8am</span>
                                                 <h3>Yoga</h3>
                                                 <p><span>by</span> Igbashio Kalifort</p>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- single -->
                                     <div class="single-box">
                                         <div class="single-caption text-center">
                                             <div class="caption">
                                                 <span>6am - 8am</span>
                                                 <h3>Nutrition Training</h3>
                                                 <p><span>by</span>Dr Mimi Usman</p>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- single -->
                                     <div class="single-box">
                                         <div class="single-caption text-center">
                                             <div class="caption">
                                                 <span>6am - 8am</span>
                                                 <h3>Exercise</h3>
                                                 <p><span>by</span> Bello Moses</p>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- single -->
                                     <div class="single-box">
                                         <div class="single-caption active text-center">
                                             <div class="caption">
                                                 <span>6am - 8am</span>
                                                 <h3>Kick Boxing</h3>
                                                 <p><span>by</span> Bello Moses</p>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- single -->
                                     <div class="single-box">
                                         <div class="single-caption text-center">
                                             <div class="caption">
                                                 <span>6am - 8am</span>
                                                 <h3>Nutrition Training</h3>
                                                 <p><span>by</span>Dr Mimi Usman</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--  Two -->
                     <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                         <div class="row">
                             <div class="col-12">
                                 <div class="tab-wrapper">
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Yoga</h3>
                                                <p><span>by</span> Igbashio Kalifort</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Nutrition Training</h3>
                                                <p><span>by</span>Dr Mimi Usman</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Exercise</h3>
                                                <p><span>by</span> Bello Moses</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Kick Boxing</h3>
                                                <p><span>by</span> Bello Moses</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption active text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Nutrition Training</h3>
                                                <p><span>by</span>Dr Mimi Usman</p>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--  Three -->
                     <div class="tab-pane fade show active" id="nav-contact" role="tabpanel"
                         aria-labelledby="nav-contact-tab">
                         <div class="row">
                             <div class="col-12">
                                 <div class="tab-wrapper">
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Yoga</h3>
                                                <p><span>by</span> Igbashio Kalifort</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Nutrition Training</h3>
                                                <p><span>by</span>Dr Mimi Usman</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Exercise</h3>
                                                <p><span>by</span> Bello Moses</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption active text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Kick Boxing</h3>
                                                <p><span>by</span> Bello Moses</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Nutrition Training</h3>
                                                <p><span>by</span>Dr Mimi Usman</p>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--  Fur -->
                     <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                         <div class="row">
                             <div class="col-12">
                                 <div class="tab-wrapper">
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Yoga</h3>
                                                <p><span>by</span> Igbashio Kalifort</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Nutrition Training</h3>
                                                <p><span>by</span>Dr Mimi Usman</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption active text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Exercise</h3>
                                                <p><span>by</span> Bello Moses</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Kick Boxing</h3>
                                                <p><span>by</span> Bello Moses</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption  text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Nutrition Training</h3>
                                                <p><span>by</span>Dr Mimi Usman</p>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--  Five -->
                     <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                         <div class="row">
                             <div class="col-12">
                                 <div class="tab-wrapper">
                                    <div class="single-box">
                                        <div class="single-caption active text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Yoga</h3>
                                                <p><span>by</span> Igbashio Kalifort</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Nutrition Training</h3>
                                                <p><span>by</span>Dr Mimi Usman</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Exercise</h3>
                                                <p><span>by</span> Bello Moses</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Kick Boxing</h3>
                                                <p><span>by</span> Bello Moses</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Nutrition Training</h3>
                                                <p><span>by</span>Dr Mimi Usman</p>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--  Six -->
                     <div class="tab-pane fade" id="nav-nav-six" role="tabpanel" aria-labelledby="nav-six">
                         <div class="row">
                             <div class="col-12">
                                 <div class="tab-wrapper">
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Yoga</h3>
                                                <p><span>by</span> Igbashio Kalifort</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Nutrition Training</h3>
                                                <p><span>by</span>Dr Mimi Usman</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Exercise</h3>
                                                <p><span>by</span> Bello Moses</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Kick Boxing</h3>
                                                <p><span>by</span> Bello Moses</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption active text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Nutrition Training</h3>
                                                <p><span>by</span>Dr Mimi Usman</p>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--  seven -->
                     <div class="tab-pane fade" id="nav-nav-seven" role="tabpanel" aria-labelledby="nav-seven">
                         <div class="row">
                             <div class="col-12">
                                 <div class="tab-wrapper">
                                    <div class="single-box">
                                        <div class="single-caption active text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Yoga</h3>
                                                <p><span>by</span> Igbashio Kalifort</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption  text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Nutrition Training</h3>
                                                <p><span>by</span>Dr Mimi Usman</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption  text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Exercise</h3>
                                                <p><span>by</span> Bello Moses</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Kick Boxing</h3>
                                                <p><span>by</span> Bello Moses</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -->
                                    <div class="single-box">
                                        <div class="single-caption text-center">
                                            <div class="caption">
                                                <span>6am - 8am</span>
                                                <h3>Nutrition Training</h3>
                                                <p><span>by</span>Dr Mimi Usman</p>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End Nav Card -->
             </div>
         </div>
     </div>

 </section>
 <!-- Date Tabs End -->
