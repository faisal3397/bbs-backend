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
                        <div id="modal" class="modal"> <!--OVerlay-->

                          <div class="overlay-content">
                            <form method="post" action="/search">
                            @csrf
                              <!-- <input type="text" placeholder="Search.." name="search"> -->
                              
                              <select name="bloodtype">
                                <option selected value="choose">Choose Blood Type</option>
                                <option value="O+">O+</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="AB+">Ab+</option>
                              </select>
                              <select name="city">
                                  <option value="choose">Select Region:</option>
                                  <option value="Northern Borders">Northern Borders</option>
                                  <option value="Al Jawf">Al Jawf</option>
                                  <option value="Tabuk">Tabuk</option>
                                  <option value="Hail">Hail</option>
                                  <option value="Al Qassim">Al Qassim</option>
                                  <option value="Ar Riyadh">Ar Riyadh</option>
                                  <option value="Al Madinah">Al Madinah</option>
                                  <option value="Asir">Asir</option>
                                  <option value="Al Baha">Al Baha</option>
                                  <option value="Jazan">Jazan</option>
                                  <option value="Makkah">Makkah</option>
                                  <option value="Najran">Najran</option>
                              </select>
                              <button type="submit"><i class="fa fa-search"></i></button>
                             
                            </form>
                          </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>  <!-- Homepage body -->

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