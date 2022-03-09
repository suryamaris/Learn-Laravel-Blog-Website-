@extends('layouts.main')
@section('content')
    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/foto.jpeg" alt="Surya" width="200px" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Surya Maris Panensa Simarmata</h1>
      <p class="lead">Programmer</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,128L48,138.7C96,149,192,171,288,154.7C384,139,480,85,576,101.3C672,117,768,203,864,234.7C960,267,1056,245,1152,208C1248,171,1344,117,1392,90.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center mb-3">
          <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium assumenda unde similique laudantium eum. Quos voluptates alias iure consequatur exercitationem?</p>
          </div>
          <div class="col-md-4">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error voluptatem facere omnis nihil repellendus! Quisquam tempore eveniet recusandae ea accusantium soluta quia fugiat necessitatibus cumque.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#8ad8f7"
          fill-opacity="1"
          d="M0,32L48,53.3C96,75,192,117,288,117.3C384,117,480,75,576,69.3C672,64,768,96,864,106.7C960,117,1056,107,1152,101.3C1248,96,1344,96,1392,96L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

    <!-- Project -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col"><h2>My Projects</h2></div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
              <a href="project"><img src="img/foto.jpeg" class="card-img-top" alt="Project" /></a>
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <a href="project2"><img src="img/foto.jpeg" class="card-img-top" alt="Project2" /></a>
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <a href="project3"><img src="img/foto.jpeg" class="card-img-top" alt="Project3" /></a>
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <a href="project4"><img src="img/foto.jpeg" class="card-img-top" alt="Project4" /></a>
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <a href="project5"><img src="img/foto.jpeg" class="card-img-top" alt="Project5" /></a>
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <a href="project6"><img src="img/foto.jpeg" class="card-img-top" alt="Project6" /></a>
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,96L48,106.7C96,117,192,139,288,138.7C384,139,480,117,576,138.7C672,160,768,224,864,245.3C960,267,1056,245,1152,213.3C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akkhir Project -->

    @endsection

 
