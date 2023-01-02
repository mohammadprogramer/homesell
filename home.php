
<?php 
/*
Template Name:خانه1
*/
?>

<?php get_header();?>
    




      <div class="modal fade" id="cost-calculator" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header d-block position-relative border-0 px-sm-5 px-4">
              <h3 class="h4 modal-title mt-4 text-center">به دنبال خانه هستید؟</h3>
              <button class="btn-close position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-sm-5 px-4">
              <form class="needs-validation" novalidate>
                <div class="mb-3">
                  <label class="form-label fw-bold mb-2" for="property-city">انتخاب موقعیت</label>
                  <select class="form-control form-select" id="property-city" required>
                    <option value="" selected disabled hidden>انتخاب شهر</option>
                    <option value="Chicago">شیکاگو</option>
                    <option value="Dallas">پاریس</option>
                    <option value="Los Angeles">فرانسه</option>
                    <option value="New York">نیویورک</option>
                    <option value="San Diego">سن فراسیسکو</option>
                  </select>
                  <div class="invalid-feedback">لطفا شهر را انتخاب کنید.</div>
                </div>
                <div class="mb-3">
                  <select class="form-control form-select" id="property-district" required>
                    <option value="" selected disabled hidden>انتخاب منطقه</option>
                    <option value="Brooklyn">سوییس</option>
                    <option value="Manhattan">پاریس</option>
                    <option value="Staten Island">آمستردام</option>
                    <option value="The Bronx">سوئد</option>
                    <option value="Queens">برزیل</option>
                  </select>
                  <div class="invalid-feedback">لطفا منطقه را انتخاب کنید.</div>
                </div>
                <div class="pt-2 mb-3">
                  <label class="form-label fw-bold mb-2" for="property-address">آدرس</label>
                  <input class="form-control" type="text" id="property-address" placeholder="آدرس را وارد کنید" required>
                  <div class="invalid-feedback">آدرس ملک را انتخاب کنید0</div>
                </div>
                <div class="pt-2 mb-3">
                  <label class="form-label fw-bold mb-2">تعداد اتاق</label>
                  <div class="btn-group" role="group" aria-label="Choose number of rooms">
                    <input class="btn-check" type="radio" id="rooms-1" name="rooms">
                    <label class="btn btn-outline-secondary" for="rooms-1">1</label>
                    <input class="btn-check" type="radio" id="roome-2" name="rooms">
                    <label class="btn btn-outline-secondary" for="roome-2">2</label>
                    <input class="btn-check" type="radio" id="roome-3" name="rooms">
                    <label class="btn btn-outline-secondary" for="roome-3">3</label>
                    <input class="btn-check" type="radio" id="rooms-4" name="rooms">
                    <label class="btn btn-outline-secondary" for="rooms-4">4</label>
                    <input class="btn-check" type="radio" id="rooms-5" name="rooms">
                    <label class="btn btn-outline-secondary" for="rooms-5">5+</label>
                  </div>
                </div>
                <div class="pt-2 mb-4">
                  <label class="form-label fw-bold mb-2" for="property-area">متراژ (متر مربع)</label>
                  <input class="form-control" type="text" id="property-area" placeholder="متراژ را وارد کنید" required>
                  <div class="invalid-feedback">متراژ را وارد کنید</div>
                </div>
                <button class="btn btn-primary d-block w-100 mb-4" type="submit"><i class="fi-calculator me-2"></i>محاسبه</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero-->
      <section class="container pt-5 my-5 pb-lg-4">
        <div class="row pt-0 pt-md-2 pt-lg-0">
          <div class="col-xl-7 col-lg-6 col-md-5 order-md-2 mb-4 mb-lg-3"><img src="<?php echo get_template_directory_uri(); ?>/img/real-estate/hero-image.jpg" alt="Hero image"></div>
          <div class="col-xl-5 col-lg-6 col-md-7 order-md-1 pt-xl-5 pe-lg-0 mb-3 text-md-start text-center">
            <h1 class="display-4 mt-lg-5 mb-md-4 mb-3 pt-md-4 pb-lg-2">نرخ ارزان خانه <br> در مکان دلخواه شما</h1>
            <p class="position-relative lead ms-lg-n5 fs-5">لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
          </div>
          <!-- Search property form group-->
          <div class="col-xl-8 col-lg-10 order-3 mt-lg-n5">
            <form class="form-group d-block panel-search">
              <div class="row g-0 me-sm-n2">
                <div class="col-md-8 d-sm-flex align-items-center">
                  <div class="dropdown w-sm-50 border-end-sm" data-bs-toggle="select">
                    <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown"><i class="fi-home me-2"></i><span class="dropdown-toggle-label">اجاره</span></button>
                    <input type="hidden">
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">اجاره</span></a></li>
                      <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">فروش</span></a></li>
                    </ul>
                  </div>
                  <hr class="d-sm-none my-2">
                  <div class="dropdown w-sm-50 border-end-sm" data-bs-toggle="select">
                    <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown"><i class="fi-map-pin me-2"></i><span class="dropdown-toggle-label">موقعیت</span></button>
                    <input type="hidden">
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">نیویورک</span></a></li>
                      <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">شیکاگو</span></a></li>
                      <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">لوس آنجلس</span></a></li>
                      <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">سن فرانسیسکو</span></a></li>
                    </ul>
                  </div>
                  <hr class="d-sm-none my-2">
                  <div class="dropdown w-sm-50 border-end-md" data-bs-toggle="select">
                    <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown"><i class="fi-list me-2"></i><span class="dropdown-toggle-label">نوع ملک</span></button>
                    <input type="hidden">
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">خانه</span></a></li>
                      <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">آپارتمان</span></a></li>
                      <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">تجاری و اداری</span></a></li>
                      <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">سوئیت</span></a></li>
                      <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">زمین</span></a></li>
                    </ul>
                  </div>
                </div>
                <hr class="d-md-none mt-2">
                <div class="col-md-4 d-sm-flex align-items-center pt-4 pt-md-0">
                  <div class="d-flex align-items-center w-100 pt-2 pb-4 py-sm-0 pe-2 pe-sm-3"><i class="fi-cash fs-lg text-muted me-2"></i><span class="text-muted">قیمت</span>
                    <div class="range-slider ps-0 ps-sm-3" data-start-min="450" data-min="0" data-max="1000" data-dirction="rtl" data-step="1">
                      <div class="range-slider-ui"></div>
                      <input class="form-control range-slider-value-min" type="hidden">
                    </div>
                  </div>
                  <button class="btn btn-icon btn-primary px-3 w-100 w-sm-auto flex-shrink-0" type="button"><i class="fi-search"></i><span class="d-sm-none d-inline-block ms-2"> جستجو</span></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
      <!-- Property categories-->
      <section class="container mb-5">
        <div class="row row-cols-lg-6 row-cols-sm-3 row-cols-2 g-3 g-xl-4">
          <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover h-100 text-center" href="real-estate-catalog-rent.html">
              <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-real-estate-house"></i></div>
              <h3 class="icon-box-title fs-base mb-0">خانه</h3></a></div>
          <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover h-100 text-center" href="real-estate-catalog-sale.html">
              <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-apartment"></i></div>
              <h3 class="icon-box-title fs-base mb-0">آپارتمان</h3></a></div>
          <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover h-100 text-center" href="real-estate-catalog-rent.html">
              <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-shop"></i></div>
              <h3 class="icon-box-title fs-base mb-0">تجاری و اداری</h3></a></div>
          <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover h-100 text-center" href="real-estate-catalog-sale.html">
              <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-rent"></i></div>
              <h3 class="icon-box-title fs-base mb-0">سوئیت</h3></a></div>
          <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover h-100 text-center" href="real-estate-catalog-rent.html">
              <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-house-chosen"></i></div>
              <h3 class="icon-box-title fs-base mb-0">زمین</h3></a></div>
          <div class="col">
            <div class="dropdown h-100"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover text-center" href="#" data-bs-toggle="dropdown">
                <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-dots-horisontal"></i></div>
                <h3 class="icon-box-title fs-base mb-0">گزینه های بیشتر</h3></a>
              <div class="dropdown-menu dropdown-menu-end my-1"><a class="dropdown-item fw-bold" href="real-estate-catalog-sale.html"><i class="fi-single-bed fs-base opacity-60 me-2"></i>سوئیت</a><a class="dropdown-item fw-bold" href="real-estate-catalog-rent.html"><i class="fi-computer fs-base opacity-60 me-2"></i>دفتر کار</a><a class="dropdown-item fw-bold" href="real-estate-catalog-sale.html"><i class="fi-real-estate-buy fs-base opacity-60 me-2"></i>زمین</a><a class="dropdown-item fw-bold" href="real-estate-catalog-rent.html"><i class="fi-parking fs-base opacity-60 me-2"></i>خانه حیاط دار</a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Services-->
      <section class="container mb-5 mt-n3 mt-lg-0">
        <div class="tns-carousel-wrapper tns-nav-outside tns-nav-outside-flush mx-n2"dir="ltr">
          <div class="tns-carousel-inner row gx-4 mx-0 py-3" data-carousel-options="{&quot;items&quot;: 3, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}}}">
            <div class="col">
              <div class="card card-hover border-0 h-100 pb-2 pb-sm-3 px-sm-3 text-center"><img class="d-block mx-auto my-3" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/illustrations/buy.svg" width="256" alt="Illustration">
                <div class="card-body">
                  <h2 class="h5 card-title">خرید یک ملک</h2>
                  <p class="card-text fs-sm">لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد.</p>
                </div>
                <div class="card-footer pt-0 border-0"><a class="btn btn-outline-primary stretched-link" href="real-estate-catalog-sale.html">جستجوی خانه</a></div>
              </div>
            </div>
            <div class="col">
              <div class="card card-hover border-0 h-100 pb-2 pb-sm-3 px-sm-3 text-center"><img class="d-block mx-auto my-3" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/illustrations/sell.svg" width="256" alt="Illustration">
                <div class="card-body">
                  <h2 class="h5 card-title">فروش یک ملک</h2>
                  <p class="card-text fs-sm">لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد.</p>
                </div>
                <div class="card-footer pt-0 border-0"><a class="btn btn-outline-primary stretched-link" href="#">مکان کسب و کار</a></div>
              </div>
            </div>
            <div class="col">
              <div class="card card-hover border-0 h-100 pb-2 pb-sm-3 px-sm-3 text-center"><img class="d-block mx-auto my-3" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/illustrations/rent.svg" width="256" alt="Illustration">
                <div class="card-body">
                  <h2 class="h5 card-title">اجاره یک ملک</h2>
                  <p class="card-text fs-sm">لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد.</p>
                </div>
                <div class="card-footer pt-0 border-0"><a class="btn btn-outline-primary stretched-link" href="real-estate-catalog-rent.html">یافتن اجاره خانه</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <hr class="mt-n1 mb-5 d-md-none">
      <!-- Top offers (carousel)-->

<?php include 'slider.php';?>

      <!-- Recently added-->
      <section class="container pb-4 pt-1 mb-5">
        <div class="d-flex align-items-end align-items-lg-center justify-content-between mb-4 pb-md-2">
          <div class="d-flex w-100 align-items-center justify-content-between justify-content-lg-start">
            <h2 class="h3 mb-0 ms-md-4 ">ملک های جدید اضافه شده</h2>
            <div class="dropdown d-md-none" data-bs-toggle="select">
              <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"><span class="dropdown-toggle-label">خانه</span></button>
              <input type="hidden">
              <div class="dropdown-menu"><a class="dropdown-item" href="#"><span class="dropdown-item-label">آپارتمان</span></a><a class="dropdown-item" href="#"><span class="dropdown-item-label">خانه</span></a><a class="dropdown-item" href="#"><span class="dropdown-item-label">Rooms</span></a><a class="dropdown-item" href="#"><span class="dropdown-item-label">Commercial</span></a></div>
            </div>
            <ul class="nav nav-tabs d-none d-md-flex ps-lg-2 mb-0">
              <li class="nav-item"><a class="nav-link fs-sm mb-2 mb-md-0" href="#">آپارتمان</a></li>
              <li class="nav-item"><a class="nav-link fs-sm active mb-2 mb-md-0" href="#">خانه</a></li>
              <li class="nav-item"><a class="nav-link fs-sm mb-2 mb-md-0" href="#">سوئیت</a></li>
              <li class="nav-item"><a class="nav-link fs-sm mb-2 mb-md-0" href="#">دفتر تجاری</a></li>
            </ul>
          </div><a class="btn btn-link fw-normal d-none d-lg-block p-0" href="real-estate-catalog-rent.html">مشاهده همه <i class="fi-arrow-long-left me-2"></i></a>
        </div>
        <div class="row g-4">
          <div class="col-md-6">
            <div class="card bg-size-cover bg-position-center border-0 overflow-hidden mb-4" style="background-image: url(img/real-estate/recent/02.jpg);"><span class="img-gradient-overlay"></span>
              <div class="card-body content-overlay pb-0"><span class="badge bg-info fs-sm">جدید</span></div>
              <div class="card-footer content-overlay border-0 pt-0 pb-4">
                <div class="d-sm-flex justify-content-between align-items-end pt-5 mt-2 mt-sm-5"><a class="text-decoration-none text-light pe-2" href="real-estate-single-v1.html">
                  <div class="fs-sm text-uppercase pt-2 mb-1">فروشی</div>
                  <h3 class="h5 text-light mb-1">خانه دوبلکس</h3>
                  <div class="fs-sm opacity-70"><i class="fi-map-pin ms-1"></i> ایران، استان تهران ، میدان آزادی</div></a>
                  <div class="btn-group ms-n2 ms-sm-0 mt-3"><a class="btn btn-primary px-3" href="real-estate-single-v1.html" style="height: 2.75rem;">شروع قیمت از 58.000.000 ت</a>
                    <button class="btn btn-primary btn-icon border-end-0 border-top-0 border-bottom-0 border-light fs-sm" type="button"><i class="fi-heart"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card bg-size-cover bg-position-center border-0 overflow-hidden" style="background-image: url(img/real-estate/recent/03.jpg);"><span class="img-gradient-overlay"></span>
              <div class="card-body content-overlay pb-0"><span class="badge bg-info fs-sm">جدید</span></div>
              <div class="card-footer content-overlay border-0 pt-0 pb-4">
                <div class="d-sm-flex justify-content-between align-items-end pt-5 mt-2 mt-sm-5"><a class="text-decoration-none text-light pe-2" href="real-estate-single-v1.html">
                  <div class="fs-sm text-uppercase pt-2 mb-1">فروشی</div>
                  <h3 class="h5 text-light mb-1">واحد تجاری و اداری</h3>
                  <div class="fs-sm opacity-70"><i class="fi-map-pin ms-1"></i> ایران، استان تهران ، میدان آزادی</div></a>
                  <div class="btn-group ms-n2 ms-sm-0 mt-3"><a class="btn btn-primary px-3" href="real-estate-single-v1.html" style="height: 2.75rem;">شروع قیمت از 58.000.000 ت</a>
                    <button class="btn btn-primary btn-icon border-end-0 border-top-0 border-bottom-0 border-light fs-sm" type="button"><i class="fi-heart"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card bg-size-cover bg-position-center border-0 overflow-hidden h-100" style="background-image: url(img/real-estate/recent/01.jpg);"><span class="img-gradient-overlay"></span>
              <div class="card-body content-overlay pb-0">
                <div class="d-flex"><span class="badge bg-success fs-sm me-2">تایید</span><span class="badge bg-info fs-sm">جدید</span></div>
              </div>
              <div class="card-footer content-overlay border-0 pt-0 pb-4">
                <div class="d-sm-flex justify-content-between align-items-end pt-5 mt-2 mt-sm-5"><a class="text-decoration-none text-light pe-2" href="real-estate-single-v1.html">
                    <div class="fs-sm text-uppercase pt-2 mb-1">اجاره ای</div>
                    <h3 class="h5 text-light mb-1">ویلا اجاره ای لاکچری</h3>
                    <div class="fs-sm opacity-70"><i class="fi-map-pin ms-1"></i> ایران، استان تهران ، میدان آزادی</div></a>
                  <div class="btn-group ms-n2 ms-sm-0 mt-3"><a class="btn btn-primary px-3" href="real-estate-single-v1.html" style="height: 2.75rem;">شروع قیمت از 58.000.000 ت</a>
                    <button class="btn btn-primary btn-icon border-end-0 border-top-0 border-bottom-0 border-light fs-sm" type="button"><i class="fi-heart"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Property cost calculator-->
      <section class="container mb-5 pb-2 pb-lg-4">
        <div class="row align-items-center">
          <div class="col-md-5"><img class="d-block mx-md-0 mx-auto mb-md-0 mb-4 rotate-img" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/illustrations/calculator.svg" width="416" alt="Illustration"></div>
          <div class="col-xxl-6 col-md-7 text-md-start text-center">
            <h2 class="">محاسبه آنلاین و سریع هزینه ملک دلخواه شما</h2>
            <p class="pb-3 fs-lg"> ما املاک خوب زیادی داریم و یکی از آنها این املاک است و برای آن کاتالوگ شما را ترتیب داده ایم. لطفا بر روی زیر کلیک کنید!  <br> فضای داخلی از حجم ، فضا ، هوا ، نسبت ، با نور و روحیه خاص. این فضای داخلی برای همیشه ماندگار است. این واقعا موثر است و ما می توانیم به راحتی این کار را برای مشتریان خود مدیریت کنیم. </p><a class="btn btn-lg btn-primary" href="#cost-calculator" data-bs-toggle="modal"><i class="fi-calculator me-2"></i>شروع کن</a>
          </div>
        </div>
      </section>
      <!-- Cities (carousel)-->
      <section class="container mb-5 pb-2">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <h2 class="h3 mb-0 ">شهرهای پیشنهادی ما</h2><a class="btn btn-link fw-normal ms-md-3 pb-0 px-0" href="real-estate-catalog-rent.html">مشاهده همه <i class="fi-arrow-long-left ms-2"></i></a>
        </div>
        <div class="tns-carousel-wrapper tns-controls-outside-xxl tns-nav-outside tns-nav-outside-flush mx-n2" dir="ltr">
          <div class="tns-carousel-inner row gx-4 mx-0 py-md-4 py-3" data-carousel-options="{&quot;items&quot;: 4, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;992&quot;:{&quot;items&quot;:4}}}">
            <!-- Item-->
            <div class="col"><a class="card shadow-sm card-hover border-0" href="real-estate-catalog-sale.html">
                <div class="card-img-top card-img-hover"><span class="img-overlay opacity-65"></span>
				<img src="<?php echo get_template_directory_uri(); ?>/img/real-estate/city/new-york.jpg" alt="New York">
                  <div class="content-overlay start-0 top-0 d-flex align-items-center justify-content-center w-100 h-100 p-3">
                    <div class="w-100 p-1">
                      <div class="mb-2">
                        <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-wallet mt-n1 me-2 fs-sm align-middle"></i>ملک برای فروش</h4>
                        <div class="d-flex align-items-center">
                          <div class="progress progress-light w-100">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                          </div><span class="text-light fs-sm ps-1 ms-2">893</span>
                        </div>
                      </div>
                      <div class="pt-1">
                        <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-home mt-n1 me-2 fs-sm align-middle"></i>ملک برای اجاره</h4>
                        <div class="d-flex align-items-center">
                          <div class="progress progress-light w-100">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                          </div><span class="text-light fs-sm ps-1 ms-2">3756</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body text-center">
                  <h3 class="mb-0 fs-base text-nav">نیویورک</h3>
                </div></a></div>
            <!-- Item-->
            <div class="col"><a class="card shadow-sm card-hover border-0" href="real-estate-catalog-rent.html">
                <div class="card-img-top card-img-hover"><span class="img-overlay opacity-65"></span><img src="<?php echo get_template_directory_uri(); ?>/img/real-estate/city/chicago.jpg" alt="Chicago">
                  <div class="content-overlay start-0 top-0 d-flex align-items-center justify-content-center w-100 h-100 p-3">
                    <div class="w-100 p-1">
                      <div class="mb-2">
                        <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-wallet mt-n1 me-2 fs-sm align-middle"></i>ملک برای فروش</h4>
                        <div class="d-flex align-items-center">
                          <div class="progress progress-light w-100">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                          </div><span class="text-light fs-sm ps-1 ms-2">268</span>
                        </div>
                      </div>
                      <div class="pt-1">
                        <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-home mt-n1 me-2 fs-sm align-middle"></i>ملک برای اجاره</h4>
                        <div class="d-flex align-items-center">
                          <div class="progress progress-light w-100">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                          </div><span class="text-light fs-sm ps-1 ms-2">1540</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body text-center">
                  <h3 class="mb-0 fs-base text-nav">شیکاگو</h3>
                </div></a></div>
            <!-- Item-->
            <div class="col"><a class="card shadow-sm card-hover border-0" href="real-estate-catalog-sale.html">
                <div class="card-img-top card-img-hover"><span class="img-overlay opacity-65"></span><img src="<?php echo get_template_directory_uri(); ?>/img/real-estate/city/los-angeles.jpg" alt="Los Angeles">
                  <div class="content-overlay start-0 top-0 d-flex align-items-center justify-content-center w-100 h-100 p-3">
                    <div class="w-100 p-1">
                      <div class="mb-2">
                        <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-wallet mt-n1 me-2 fs-sm align-middle"></i>ملک برای فروش</h4>
                        <div class="d-flex align-items-center">
                          <div class="progress progress-light w-100">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div><span class="text-light fs-sm ps-1 ms-2">2750</span>
                        </div>
                      </div>
                      <div class="pt-1">
                        <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-home mt-n1 me-2 fs-sm align-middle"></i>ملک برای اجاره</h4>
                        <div class="d-flex align-items-center">
                          <div class="progress progress-light w-100">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                          </div><span class="text-light fs-sm ps-1 ms-2">692</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body text-center">
                  <h3 class="mb-0 fs-base text-nav">لوس آنجلس</h3>
                </div></a></div>
            <!-- Item-->
            <div class="col"><a class="card shadow-sm card-hover border-0" href="real-estate-catalog-rent.html">
                <div class="card-img-top card-img-hover"><span class="img-overlay opacity-65"></span><img src="<?php echo get_template_directory_uri(); ?>/img/real-estate/city/san-diego.jpg" alt="San Diego">
                  <div class="content-overlay start-0 top-0 d-flex align-items-center justify-content-center w-100 h-100 p-3">
                    <div class="w-100 p-1">
                      <div class="mb-2">
                        <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-wallet mt-n1 me-2 fs-sm align-middle"></i>ملک برای فروش</h4>
                        <div class="d-flex align-items-center">
                          <div class="progress progress-light w-100">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                          </div><span class="text-light fs-sm ps-1 ms-2">1739</span>
                        </div>
                      </div>
                      <div class="pt-1">
                        <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-home mt-n1 me-2 fs-sm align-middle"></i>ملک برای اجاره</h4>
                        <div class="d-flex align-items-center">
                          <div class="progress progress-light w-100">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                          </div><span class="text-light fs-sm ps-1 ms-2">1854</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body text-center">
                  <h3 class="mb-0 fs-base text-nav">فرانسه</h3>
                </div></a></div>
            <!-- Item-->
            <div class="col"><a class="card shadow-sm card-hover border-0" href="real-estate-catalog-sale.html">
                <div class="card-img-top card-img-hover"><span class="img-overlay opacity-65"></span><img src="<?php echo get_template_directory_uri(); ?>/img/real-estate/city/dallas.jpg" alt="Dallas">
                  <div class="content-overlay start-0 top-0 d-flex align-items-center justify-content-center w-100 h-100 p-3">
                    <div class="w-100 p-1">
                      <div class="mb-2">
                        <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-wallet mt-n1 me-2 fs-sm align-middle"></i>ملک برای فروش</h4>
                        <div class="d-flex align-items-center">
                          <div class="progress progress-light w-100">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                          </div><span class="text-light fs-sm ps-1 ms-2">2567</span>
                        </div>
                      </div>
                      <div class="pt-1">
                        <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-home mt-n1 me-2 fs-sm align-middle"></i>ملک برای اجاره</h4>
                        <div class="d-flex align-items-center">
                          <div class="progress progress-light w-100">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div><span class="text-light fs-sm ps-1 ms-2">1204</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body text-center">
                  <h3 class="mb-0 fs-base text-nav">ایتالیا</h3>
                </div></a></div>
          </div>
        </div>
      </section>
      <!-- Partners (carousel)-->
      <section class="container mb-5 pb-2 pb-lg-4">
        <h2 class="h3 mb-4 text-right  text-md-start">مشاوران املاک </h2>
        <div class="tns-carousel-wrapper tns-nav-outside tns-nav-outside-flush" dir="ltr">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 6, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;500&quot;:{&quot;items&quot;:4}, &quot;992&quot;:{&quot;items&quot;:5, &quot;gutter&quot;: 16}, &quot;1200&quot;:{&quot;items&quot;:6, &quot;gutter&quot;: 24}}}">
            <div><a class="swap-image" href="#"><img class="swap-to" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/brands/01_color.svg" alt="Logo" width="196"><img class="swap-from" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/brands/01_gray.svg" alt="Logo" width="196"></a></div>
            <div><a class="swap-image" href="#"><img class="swap-to" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/brands/02_color.svg" alt="Logo" width="196"><img class="swap-from" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/brands/02_gray.svg" alt="Logo" width="196"></a></div>
            <div><a class="swap-image" href="#"><img class="swap-to" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/brands/03_color.svg" alt="Logo" width="196"><img class="swap-from" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/brands/03_gray.svg" alt="Logo" width="196"></a></div>
            <div><a class="swap-image" href="#"><img class="swap-to" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/brands/04_color.svg" alt="Logo" width="196"><img class="swap-from" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/brands/04_gray.svg" alt="Logo" width="196"></a></div>
            <div><a class="swap-image" href="#"><img class="swap-to" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/brands/05_color.svg" alt="Logo" width="196"><img class="swap-from" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/brands/05_gray.svg" alt="Logo" width="196"></a></div>
            <div><a class="swap-image" href="#"><img class="swap-to" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/brands/06_color.svg" alt="Logo" width="196"><img class="swap-from" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/brands/06_gray.svg" alt="Logo" width="196"></a></div>
          </div>
        </div>
      </section>
      <!-- Top agents (lnked carousel)-->
      <section class="container mb-5 pb-2 pb-lg-4">
        <h2 class="h3 mb-4 pb-3 text-right  text-md-start">برترین مشاوران املاک</h2>
        <div class="tns-carousel-wrapper">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 1, &quot;mode&quot;: &quot;gallery&quot;, &quot;controlsContainer&quot;: &quot;#agents-carousel-controls&quot;, &quot;nav&quot;: false}">
            <div>
              <div class="row align-items-center">
                <div class="col-xl-4 d-none d-xl-block"><img class="rounded-3" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/agents/01.jpg" alt="Agent picture"></div>
                <div class="col-xl-4 col-md-5 col-sm-4"><img class="rounded-3" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/agents/02.jpg" alt="Agent picture"></div>
                <div class="col-xl-4 col-md-7 col-sm-8 px-4 px-sm-3 px-md-0 ms-md-n4 mt-n5 mt-sm-0 py-3">
                  <div class="card border-0 shadow-sm ms-sm-n5">
                    <blockquote class="blockquote card-body">
                      <h4 style="max-width: 22rem;font-family:vazir-bold">&quot;من بهترین اقامتگاه را برای شما انتخاب می کنم&quot;</h4>
                      <p class="d-sm-none d-lg-block">لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                      <footer class="d-flex justify-content-between">
                        <div class="ps-3"><a class="text-decoration-none" href="real-estate-vendor-properties.html">
                            <h6 class="mb-0">فلوید مایلز</h6>
                            <div class="text-muted fw-normal fs-sm mb-3">نماینده گروه امپراتوری املاک</div></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-linkedin"></i></a></div>
                        <div><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i></span>
                          <div class="text-muted fs-sm mt-1">45 نظر</div>
                        </div>
                      </footer>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="row align-items-center">
                <div class="col-xl-4 d-none d-xl-block"><img class="rounded-3" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/agents/02.jpg" alt="Agent picture"></div>
                <div class="col-xl-4 col-md-5 col-sm-4"><img class="rounded-3" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/agents/03.jpg" alt="Agent picture"></div>
                <div class="col-xl-4 col-md-7 col-sm-8 px-4 px-sm-3 px-md-0 ms-md-n4 mt-n5 mt-sm-0 py-3">
                  <div class="card border-0 shadow-sm ms-sm-n5">
                    <blockquote class="blockquote card-body">
                      <h4 style="max-width: 22rem;font-family:vazir-bold">&quot;بیش از 10 سال تجربه به عنوان مشاور املاک&quot;</h4>
                      <p class="d-sm-none d-lg-block">لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                      <footer class="d-flex justify-content-between">
                        <div class="ps-3"><a class="text-decoration-none" href="real-estate-vendor-properties.html">
                            <h6 class="mb-0">کریستین واتسون</h6>
                            <div class="text-muted fw-normal fs-sm mb-3">نماینده گروه امپراتوری املاک</div></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-linkedin"></i></a></div>
                        <div><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i></span>
                          <div class="text-muted fs-sm mt-1">24 نظر</div>
                        </div>
                      </footer>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="row align-items-center">
                <div class="col-xl-4 d-none d-xl-block"><img class="rounded-3" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/agents/03.jpg" alt="Agent picture"></div>
                <div class="col-xl-4 col-md-5 col-sm-4"><img class="rounded-3" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/agents/01.jpg" alt="Agent picture"></div>
                <div class="col-xl-4 col-md-7 col-sm-8 px-4 px-sm-3 px-md-0 ms-md-n4 mt-n5 mt-sm-0 py-3">
                  <div class="card border-0 shadow-sm ms-sm-n5">
                    <blockquote class="blockquote card-body">
                      <h4 style="max-width: 22rem;font-family:vazir-bold">&quot;من نه نمی گویم ، من فقط راهی برای کار کردن پیدا کردم&quot;</h4>
                      <p class="d-sm-none d-lg-block">لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                      <footer class="d-flex justify-content-between">
                        <div class="ps-3"><a class="text-decoration-none" href="real-estate-vendor-properties.html">
                            <h6 class="mb-0">گای هاوکینز</h6>
                            <div class="text-muted fw-normal fs-sm mb-3">نماینده گروه امپراتوری املاک</div></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-linkedin"></i></a></div>
                        <div><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i></span>
                          <div class="text-muted fs-sm mt-1">16 نظر</div>
                        </div>
                      </footer>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tns-carousel-controls justify-content-center justify-content-md-start my-2 mt-md-4" id="agents-carousel-controls">
          <button class="mx-2" type="button"><i class="fi-chevron-left"></i></button>
          <button class="mx-2" type="button"><i class="fi-chevron-right"></i></button>
        </div>
      </section>
    </main>
	


	
   <?php get_footer();?>