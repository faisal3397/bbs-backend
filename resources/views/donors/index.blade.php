@extends ('layout')

@section ('content')


    <div class="section section-header">
        <div class="parallax filter filter-color-red">
            <div class="image"
                style="background-image: url('assets/img/header-1.jpeg')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <p>Welcome to</p>
                        <h1 class="title-modern">OBBS</h1>
                        <h3 class="title-modern">The online blood bank system</h3>
                        <div class="separator line-separator">♦</div>
                    </div>

                    <div class="button-get-started">
                        <!-- <a href="search.html"  class="btn btn-white btn-fill btn-lg js-open-modal">
                            Search for doner
                        </a> -->
                        <a href="#" class="js-open-modal btn btn-white btn-fill btn-lg">Search for donor</a>
                        <a href="#bloods" class=" btn btn-white btn-fill btn-lg">Blood types</a>
                        <div id="modal" class="modal"> <!--OVerlay-->

                          <div class="overlay-content" >
                            <form method="post" action="/search" >
                            @csrf
                              <!-- <input type="text" placeholder="Search.." name="search"> -->
                              <select class="select1"  name="bloodtype" >
                                <option selected value="choose">Choose Blood Type</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                               
                              </select>
                              <select class="select1"  name="city" >
                                  <option value="choose">Select City:</option>
                                  <option value="Riyadh">Riyadh</option>
                                  <option value="Jeddah">Jeddah</option>
                                  <option value="Ad Dammam">Ad Dammam</option>
                                  <option value="Medina">Medina</option>
                                  <option value="At taif">At taif</option>
                                  <option value="Al Hufuf">Al Hufuf</option>
                                  <option value="Tabuk">Tabuk</option>
                                  <option value="Buraydah">Buraydah</option>
                                  <option value="Hail">Hail</option>
                                  <option value="Najran">Najran</option>
                                  <option value="Al Qatif">Al Qatif</option>
                                  <option value="Al Mubarraz">Al Mubarraz</option>
                                  <option value="Al Kharj">Al Kharj</option>
                                  <option value="Al Jubayl">Al Jubayl</option>
                                  <option value="Ar'ar">Ar'ar</option>
                                  <option value="Abha">Abha</option>
                                  <option value="Jazan">Jazan</option>
                                  <option value="Dhahran">Dhahran</option>
                                  <option value="Mecca">Mecca</option>
                                  
                              </select>

                              <button type="submit" class="button1"><i class="fa fa-search fa-lg"></i></button>
                            </form>
                          </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>  <!-- Homepage body -->


    <div  id="bloods" class="section section-our-team-freebie">
        <div>
            <div  style="background-color: #fa8072">
            </div>
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="title-area">
                            <h2> Blood Types </h2>
                            <h3> Which types are compatible ? </h3>
                            <div class="separator separator-danger"></div>
                        </div>
                    </div>

                    <div class="team">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="description">
                                                    <br>
                                                    <h2 class="title">A+</h2>
                                                  <p class = "title">A+ compatible with </p>
                                                  <ul class = "title">
                                                    <li>A +/-</li>
                                                    <li>O +/-</li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="description">
                                                    <br>
                                                    <h2 class="title">B+</h2>
                                                    <p class = "title">B+ compatible with </p>
                                                  <ul class = "title">
                                                    <li>B +/-</li>
                                                    <li>O +/-</li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="description">
                                                    <br>
                                                    <h2 class="title">O+</h2>  
                                                    <p class = "title">O+ compatible with </p>
                                                  <ul class = "title">
                                                    <li>O +</li>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="description">
                                                    <br>
                                                    <h2 class="title">AB+</h2>
                                                    <p class = "title">AB+ compatible with </p>
                                                  <ul class = "title">
                                                    <li>AB +/-</li>
                                                    <li>A +/-</li>
                                                    <li>B +/-</li>
                                                    <li>O +/-</li>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                               
                                    <div class="col-md-3">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="description">
                                                    <br>
                                                    <h2 class="title">A-</h2>
                                                    <p class = "title">A- compatible with </p>
                                                  <ul class = "title">
                                                    <li>A -</li>
                                                    <li>O -</li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="description">
                                                    <br>
                                                    <h2 class="title">B-</h2>
                                                    <p class = "title">B- compatible with </p>
                                                  <ul class = "title">
                                                    <li>B -</li>
                                                    <li>O -</li>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="description">
                                                    <br>
                                                    <h2 class="title">O-</h2>
                                                    <p class = "title">O- compatible with </p>
                                                  <ul class = "title">
                                                    <li>O -</li>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="description">
                                                    <br>
                                                    <h2 class="title">AB-</h2>
                                                    <p class = "title">AB- compatible with </p>
                                                  <ul class = "title">
                                                    <li>A -</li>
                                                    <li>B -</li>
                                                    <li>O -</li>
                                                </div>
                                            </div>
                                       

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--blood types -->




    <div class="section section-our-team-freebie">
        <div class="parallax filter filter-color-black">
            <div class="image" style="background-image:url('assets/img/header-2.jpeg')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="title-area">
                            <h2>Who We Are</h2>
                            <div class="separator separator-danger">✻</div>
                        </div>
                    </div>

                    <div class="team">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar avatar-danger">
                                                    <img alt="..." class="img-circle" src="assets/img/faces/face_1.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <br>
                                                    <h3 class="title">Mohammed</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar avatar-danger">
                                                    <img alt="..." class="img-circle" src="assets/img/faces/face_4.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <br>
                                                    <h3 class="title">Faisal</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar avatar-danger">
                                                    <img alt="..." class="img-circle" src="assets/img/faces/face_2.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <br>
                                                    <h3 class="title">Saud</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar avatar-danger">
                                                    <img alt="..." class="img-circle" src="assets/img/faces/face_3.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <br>
                                                    <h3 class="title">Abdullah</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- who we are -->

@endsection