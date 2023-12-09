<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Bangkit Hospital</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/bangkithospi.png" rel="icon" />
    <link href="assets/img/bangkithospi.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Medilab
  * Updated: Jun 23 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
  <main id="main">
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container">
          <div class="section-title">
            <h2>Layanan</h2>
            <p>
              Buat janji temu, lihat produk kesehatan, atau lihat janji temu
              yang sudah kamu buat, semua bisa di Bangkit!
            </p>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-heartbeat"></i></div>
                <h4><a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Buat Janji</a></h4>
                <p>
                  Buat janji dengan Dokter Rumah Sakit dan konsultasikan kesehatanmu.
                </p>
              </div>
            </div>

            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Pengingat Sebelum Membuat Janji</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Pastikan sebelum Anda membuat janji dengan dokter untuk mengisi data diri anda dengan lengkap di bagian profile ya.
                </div>
                <div class="modal-footer">
                  <a href="<?php echo site_url('main/detailprofile');?>"><button type="button" class="btn btn-danger">Belum, Silahkan Lengkapi</button></a>
                  <a href="<?php echo site_url('main/spesialis');?>"><button type="button" class="btn btn-primary">Sudah, Lanjutkan</button></a>
                </div>
              </div>
            </div>
          </div>

            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-pills"></i></div>
                <h4><a href="">Toko Kesehatan</a></h4>
                <p>
                  Penuhi kebutuhan kesehatanmu dengan produk-produk terpercaya.
                </p>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0"
            >
              <div class="icon-box">
                <div class="icon"><i class="fas fa-hospital-user"></i></div>
                <h4><a href="<?php echo site_url('main/detail_temujanji');?>">Janji Saya</a></h4>
                <p>
                  Lihat janji temu anda dan jangan lupa datang sesuai jadwal.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->
      <!-- ======= Departments Section ======= -->
      <!-- <section id="departments" class="departments">
        <div class="container">
          <div class="section-title">
            <h2>Spesialis</h2>
            <p>Pilihlah spesialis yang tersedia sesuai kebutuhanmu.</p>
          </div>

          <div class="row gy-4">
            <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item">
                  <a
                    class="nav-link active show"
                    data-bs-toggle="tab"
                    href="#tab-1"
                    >Kandungan dan Kebidanan</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-2"
                    >Telinga, Hidung, dan Tenggorokan</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-3"
                    >Penyakit Dalam</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-4"
                    >Mata</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-5"
                    >Anak</a
                  >
                </li>
              </ul>
            </div>
            <div class="col-lg-9">
              <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Kandungan dan Kebidanan</h3>
                      <p class="fst-italic">
                        Qui laudantium consequatur laborum sit qui ad sapiente
                        dila parde sonata raqer a videna mareta paulona marka
                      </p>
                      <p>
                        Et nobis maiores eius. Voluptatibus ut enim blanditiis
                        atque harum sint. Laborum eos ipsum ipsa odit magni.
                        Incidunt hic ut molestiae aut qui. Est repellat minima
                        eveniet eius et quis magni nihil. Consequatur dolorem
                        quaerat quos qui similique accusamus nostrum rem vero
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img
                        src="assets/img/departments-1.jpg"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-2">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Telinga, Hidung, dan Tenggorokan</h3>
                      <p class="fst-italic">
                        Qui laudantium consequatur laborum sit qui ad sapiente
                        dila parde sonata raqer a videna mareta paulona marka
                      </p>
                      <p>
                        Ea ipsum voluptatem consequatur quis est. Illum error
                        ullam omnis quia et reiciendis sunt sunt est. Non
                        aliquid repellendus itaque accusamus eius et velit ipsa
                        voluptates. Optio nesciunt eaque beatae accusamus lerode
                        pakto madirna desera vafle de nideran pal
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img
                        src="assets/img/departments-2.jpg"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-3">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Penyakit Dalam</h3>
                      <p class="fst-italic">
                        Eos voluptatibus quo. Odio similique illum id quidem non
                        enim fuga. Qui natus non sunt dicta dolor et. In
                        asperiores velit quaerat perferendis aut
                      </p>
                      <p>
                        Iure officiis odit rerum. Harum sequi eum illum corrupti
                        culpa veritatis quisquam. Neque necessitatibus illo
                        rerum eum ut. Commodi ipsam minima molestiae sed
                        laboriosam a iste odio. Earum odit nesciunt fugiat sit
                        ullam. Soluta et harum voluptatem optio quae
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img
                        src="assets/img/departments-3.jpg"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-4">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Mata</h3>
                      <p class="fst-italic">
                        Totam aperiam accusamus. Repellat consequuntur iure
                        voluptas iure porro quis delectus
                      </p>
                      <p>
                        Eaque consequuntur consequuntur libero expedita in
                        voluptas. Nostrum ipsam necessitatibus aliquam fugiat
                        debitis quis velit. Eum ex maxime error in consequatur
                        corporis atque. Eligendi asperiores sed qui veritatis
                        aperiam quia a laborum inventore
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img
                        src="assets/img/departments-4.jpg"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-5">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Anak</h3>
                      <p class="fst-italic">
                        Omnis blanditiis saepe eos autem qui sunt debitis porro
                        quia.
                      </p>
                      <p>
                        Exercitationem nostrum omnis. Ut reiciendis repudiandae
                        minus. Omnis recusandae ut non quam ut quod eius qui.
                        Ipsum quia odit vero atque qui quibusdam amet. Occaecati
                        sed est sint aut vitae molestiae voluptate vel
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img
                        src="assets/img/departments-5.jpg"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- End Departments Section -->

      <!-- ======= Doctors Section ======= -->
      <!-- <section id="doctors" class="doctors">
        <div class="container">
          <div class="section-title">
            <h2>Dokter</h2>
            <p>
              Seluruh dokter di Bangkit memiliki pengalaman profesional minimal
              10 tahun.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="member d-flex align-items-start">
                <div class="pic">
                  <img
                    src="assets/img/doctors/doctors-1.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="member-info">
                  <h4>Walter White</h4>
                  <span>Chief Medical Officer</span>
                  <p>
                    Explicabo voluptatem mollitia et repellat qui dolorum quasi
                  </p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic">
                  <img
                    src="assets/img/doctors/doctors-2.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="member-info">
                  <h4>Sarah Jhonson</h4>
                  <span>Anesthesiologist</span>
                  <p>
                    Aut maiores voluptates amet et quis praesentium qui senda
                    para
                  </p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start">
                <div class="pic">
                  <img
                    src="assets/img/doctors/doctors-3.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="member-info">
                  <h4>William Anderson</h4>
                  <span>Cardiology</span>
                  <p>
                    Quisquam facilis cum velit laborum corrupti fuga rerum quia
                  </p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start">
                <div class="pic">
                  <img
                    src="assets/img/doctors/doctors-4.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="member-info">
                  <h4>Amanda Jepson</h4>
                  <span>Neurosurgeon</span>
                  <p>
                    Dolorum tempora officiis odit laborum officiis et et
                    accusamus
                  </p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- End Doctors Section -->

      <!-- ======= Testimonials Section ======= -->
      <!-- <section id="testimonials" class="testimonials">
        <div class="container">
          <div
            class="testimonials-slider swiper"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img
                      src="assets/img/testimonials/testimonials-1.jpg"
                      class="testimonial-img"
                      alt=""
                    />
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Proin iaculis purus consequat sem cure digni ssim donec
                      porttitora entum suscipit rhoncus. Accusantium quam,
                      ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                      risus at semper.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div> -->
      <!-- End testimonial item -->

      <!-- <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img
                      src="assets/img/testimonials/testimonials-2.jpg"
                      class="testimonial-img"
                      alt=""
                    />
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Export tempor illum tamen malis malis eram quae irure esse
                      labore quem cillum quid cillum eram malis quorum velit
                      fore eram velit sunt aliqua noster fugiat irure amet legam
                      anim culpa.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div> -->
      <!-- End testimonial item -->

      <!-- <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img
                      src="assets/img/testimonials/testimonials-3.jpg"
                      class="testimonial-img"
                      alt=""
                    />
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Enim nisi quem export duis labore cillum quae magna enim
                      sint quorum nulla quem veniam duis minim tempor labore
                      quem eram duis noster aute amet eram fore quis sint minim.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div> -->
      <!-- End testimonial item -->

      <!-- <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img
                      src="assets/img/testimonials/testimonials-4.jpg"
                      class="testimonial-img"
                      alt=""
                    />
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Fugiat enim eram quae cillum dolore dolor amet nulla culpa
                      multos export minim fugiat minim velit minim dolor enim
                      duis veniam ipsum anim magna sunt elit fore quem dolore
                      labore illum veniam.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div> -->
      <!-- End testimonial item -->

      <!-- <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img
                      src="assets/img/testimonials/testimonials-5.jpg"
                      class="testimonial-img"
                      alt=""
                    />
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Quis quorum aliqua sint quem legam fore sunt eram irure
                      aliqua veniam tempor noster veniam enim culpa labore duis
                      sunt culpa nulla illum cillum fugiat legam esse veniam
                      culpa fore nisi cillum quid.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div> -->
      <!-- End testimonial item -->
      <!-- </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section> -->
      <!-- End Testimonials Section -->
    </main>
    <!-- End #main -->
