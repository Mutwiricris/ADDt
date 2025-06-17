@extends('layouts.app')
@section('content')
    <!-- tp-breadcrumb-area-start -->
    <div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position pt-200" data-background="assets/img/breadcrumb/bg.jpg">
    <div class="container">
     <div class="row">
    <div class="col-xl-5 col-lg-6 col-md-9">
     <div class="tp-breadcrumb-content mr-80">
    <h2 class="tp-breadcrumb-title fw-600 fs-60 fs-xs-40 ls-m-3 tp-text-common-white lh-1">About us</h2>
    <div class="tp-breadcrumb-dvdr">
     <ul>
    <li><a href="/">Main Home</a></li>
    <li class="dvdr">/</li>
    <li>About us</li>
     </ul>
    </div>
     </div>
    </div>
     </div>
    </div>
     </div>
     <!-- tp-breadcrumb-area-end -->
     <div class="tp-chose-area p-relative">
    <div class="container-fluid p-0">
    <div class="row gx-0">
    <div class="col-lg-5">
    <div class="tp-chose-thumb h-100">
    <img class="w-100 h-100" src="{{ asset("img/chose/bg-1.jpg") }}" alt="">
    </div>
    </div>
    <div class="col-lg-7">
    <div class="tp-chose-thumb thumb-2 h-100">
    <img class="w-100 h-100" src="{{ asset("img/chose/chose-6/bg.jpg") }}" alt="">
    </div>
    </div>
    </div>
    </div>
    <div class="tp-chose-middle p-absolute">
    <div class="container">
    <div class="row">
    <div class="col-lg-5 col-md-7">
    <div class="tp-chose-middle-content">
    <div class="tp-chose-middle-title">
    <span class="mb-20 d-inline-block">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd"
    d="M15.8563 19.7444C14.6918 21.6853 13.2836 22.56 12 22.56C10.7163 22.56 9.30814 21.6853 8.14362 19.7444C6.9963 17.8322 6.24 15.0976 6.24 12C6.24 8.9024 6.9963 6.16778 8.14362 4.2556C9.30814 2.31474 10.7163 1.44 12 1.44C13.2836 1.44 14.6918 2.31474 15.8563 4.2556C17.0036 6.16778 17.76 8.9024 17.76 12C17.76 15.0976 17.0036 17.8322 15.8563 19.7444ZM24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24C18.6274 24 24 18.6274 24 12ZM1.44 12C1.44 16.3116 4.02391 20.0196 7.72768 21.66C5.95178 19.4747 4.8 15.9616 4.8 12C4.8 8.03848 5.95178 4.5253 7.72768 2.33994C4.02391 3.98041 1.44 7.68845 1.44 12ZM22.56 12C22.56 16.3116 19.976 20.0196 16.2724 21.66C18.0482 19.4747 19.2 15.9616 19.2 12C19.2 8.03848 18.0482 4.5253 16.2724 2.33994C19.976 3.98041 22.56 7.68845 22.56 12ZM12 13.32C12.729 13.32 13.32 12.729 13.32 12C13.32 11.271 12.729 10.68 12 10.68C11.271 10.68 10.68 11.271 10.68 12C10.68 12.729 11.271 13.32 12 13.32Z"
    fill="#506767" />
    </svg>
    </span>
    <h4 class="fw-500 fs-26 mb-55 lh-30 br">
    Are you looking for<br>
    reliable insurance<br>
    solutions you can trust?
    </h4>
    <p class="tp-text-grey-3 mb-30">We are a leading insurance agency, simplifying insurance with custom cover across all classes—from health and motor to property and liability.</p>                                     
    </div>
    <a href="/contact"
    class="fw-500 tp-text-theme-primary tp-bg-common-white fs-16 d-flex justify-content-between">Talk with us
    <span>
    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path d="M1 7H13" stroke="#1F3130" stroke-width="1.5" stroke-linecap="round"
    stroke-linejoin="round" />
    <path d="M7 1L13 7L7 13" stroke="#1F3130" stroke-width="1.5"
    stroke-linecap="round" stroke-linejoin="round" />
    </svg>
    </span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="tp-chose-bottom tp-bg-theme-primary pt-150 pb-60 p-relative z-indexm-1">
    <span class="tp-chose-shape-2 p-absolute d-none d-xxl-block">
    <svg width="73" height="346" viewBox="0 0 73 346" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="-50" cy="123" r="122.5" stroke="white" stroke-opacity="0.3" />
    <circle cx="-50" cy="223" r="122.5" stroke="white" stroke-opacity="0.3" />
    </svg>
    </span>
    <div class="container">
    <div class="row">
    <div class="col-lg-7">
    <div class="tp-chose-wrapper pb-50">
    <div class="tp-chose-list mb-45">
    <ul>
    <li>
    <i class="fa-sharp fa-solid fa-check"></i>
    Personalized insurance solutions tailored to your specific needs.
    </li>
    <li>
    <i class="fa-sharp fa-solid fa-check"></i>
    Expert guidance on risk management, claims handling, and coverage optimization.
    </li>
    <li>
    <i class="fa-sharp fa-solid fa-check"></i>
    Strong industry partnerships with top-rated underwriters across the region.
    </li>
    <li>
    <i class="fa-sharp fa-solid fa-check"></i>
    Fast-tracked claims processes with dedicated client support.
    </li>
    <li>
    <i class="fa-sharp fa-solid fa-check"></i>
    Over 10 years of trusted service, managing over Ksh 500M in annual premiums.
    </li>
    </ul>

    </div>
    <span class="tp-border mb-45"></span>
    <div class="tp-chose-work">
    <div class="d-flex align-items-center">
    <h2 class="fs-60 tp-text-common-white mr-30">10+</h2>
    <p class="tp-text-grey-3">Years of trusted<br> insurance experience</p>
    </div>
    <div class="d-flex align-items-center">
    <h2 class="fs-30 tp-text-common-white mr-30 d-flex justify-content-start"><span class="fs-60">500M</span>+</h2>
    <p class="tp-text-grey-3">Kenyan Shillings in<br> annual premium portfolio</p>
    </div>
    </div>

    </div>
    </div>
    <div class="col-lg-5">
    <div class="tp-chose-content">
    <p class="tp-text-grey-3 mb-25">
    Our insurance experts provide personalized advice and dedicated support, helping clients navigate policies, claims,
    and risk with confidence.
    </p>
    <p class="tp-text-grey-3 mb-70">
    We take time to understand your unique needs and recommend the best long-term coverage options. At Sepren, you gain
    the expertise, tools, and strategic insight to secure your future.
    </p>

    <a href="/contact"
    class="tp-btn-lg d-inline-block lh-0 tp-round-24 fs-16 tp-bg-common-white ls-0 tp-btn-switch-animation tp-text-theme-primary hover-text-primary fw-500 mb-10">
    <span class="d-flex align-items-center justify-content-center">
    <span class="btn-text"> Learn more why choose us</span>
    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
    </span>
    </a>
    <div class="tp-chose-shape mt-5 text-end">
    <span>
    <svg width="199" height="122" viewBox="0 0 199 122" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path d="M98.4789 0L0 77.1088H198.5L98.4789 0Z" fill="white"
    fill-opacity="0.04" />
    <path d="M98.4789 22.0312L0 99.14H198.5L98.4789 22.0312Z" fill="white"
    fill-opacity="0.07" />
    <path d="M98.4789 44.062L0 121.171H198.5L98.4789 44.062Z" fill="white"
    fill-opacity="0.15" />
    </svg>
    </span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <!-- tp-feature-area-start -->
    <div class="tp-feature-area tp-feature-4-wrap pt-140 fix">
    <div class="container-fluid container-1690">
    <div class="tp-border-bottom">
    <div class="row gx-90">
    <div class="col-lg-4 col-md-6 col-sm-6 tp-counter-3-border">
    <div class="tp-feature-3-wrap tpshake-wrap md-space d-flex ">
    <span class="mr-30">
    <svg class="tpshake" width="41" height="40" viewBox="0 0 41 40" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path
    d="M5.44187 29.1215L0.190977 34.2798C0.100599 34.3685 0.0386949 34.4822 0.0131487 34.6063C-0.0123975 34.7304 -0.00042905 34.8593 0.0475295 34.9765C0.095488 35.0938 0.177266 35.1941 0.282446 35.2648C0.387626 35.3354 0.511447 35.3731 0.638137 35.3731H11.4344C12.4555 36.8041 13.8036 37.9705 15.3665 38.7753C16.9294 39.5801 18.6619 40 20.4199 40C22.1778 40 23.9104 39.5801 25.4733 38.7753C27.0362 37.9705 28.3843 36.8041 29.4054 35.3731H40.2013C40.328 35.3731 40.4519 35.3354 40.557 35.2648C40.6622 35.1941 40.744 35.0938 40.7919 34.9765C40.8399 34.8593 40.8519 34.7304 40.8263 34.6063C40.8008 34.4822 40.7389 34.3685 40.6485 34.2798L35.3976 29.1215L40.6628 23.6085C40.7491 23.5181 40.807 23.4044 40.8293 23.2814C40.8515 23.1585 40.8372 23.0317 40.7881 22.9168C40.7389 22.8019 40.6571 22.7039 40.5528 22.6351C40.4485 22.5663 40.3263 22.5296 40.2013 22.5296H30.0855C30.3009 20.2276 29.9807 16.4312 28.8802 14.7327C28.8004 14.6096 28.6805 14.5177 28.5409 14.4726C26.8566 13.9282 25.1069 13.0922 23.3402 11.9876C23.2676 11.9421 23.1865 11.9118 23.1019 11.8984C23.0172 11.8849 22.9308 11.8887 22.8476 11.9094C22.7645 11.9301 22.6863 11.9674 22.6179 12.019C22.5495 12.0705 22.4921 12.1353 22.4493 12.2096L20.4197 15.725L18.3901 12.2096C18.3473 12.1353 18.2899 12.0705 18.2215 12.019C18.153 11.9674 18.0749 11.9301 17.9918 11.9094C17.9086 11.8887 17.8221 11.8849 17.7375 11.8984C17.6529 11.9118 17.5718 11.9421 17.4992 11.9876C15.7326 13.0922 13.9829 13.9282 12.2985 14.4726C12.1589 14.5177 12.039 14.6096 11.9592 14.7327C10.8685 16.4158 10.5423 20.2445 10.7541 22.5296H0.638137C0.51317 22.5296 0.390953 22.5663 0.28665 22.6351C0.182348 22.7039 0.100551 22.8019 0.0514091 22.9168C0.00226757 23.0317 -0.0120555 23.1585 0.0102173 23.2814C0.0324901 23.4044 0.0903782 23.5181 0.176699 23.6085L5.44187 29.1215ZM20.4197 38.7236C18.487 38.7236 16.5976 38.1505 14.9906 37.0767C13.3835 36.0029 12.131 34.4767 11.3913 32.691C10.6517 30.9054 10.4582 28.9405 10.8352 27.0449C11.2123 25.1492 12.143 23.408 13.5097 22.0413C14.8764 20.6746 16.6176 19.7439 18.5133 19.3668C20.4089 18.9898 22.3738 19.1833 24.1594 19.9229C25.9451 20.6626 27.4713 21.9151 28.5451 23.5222C29.6189 25.1292 30.192 27.0186 30.192 28.9513C30.1891 31.5422 29.1586 34.0261 27.3265 35.8581C25.4945 37.6902 23.0106 38.7207 20.4197 38.7236ZM34.0401 28.6951C33.9243 28.8163 33.8608 28.9783 33.8635 29.146C33.8662 29.3137 33.9347 29.4735 34.0544 29.591L38.6408 34.0969H30.1938C31.0304 32.5108 31.4677 30.7446 31.4677 28.9513C31.4677 27.1581 31.0304 25.3919 30.1938 23.8058H38.7097L34.0401 28.6951ZM12.9219 15.6109C14.5583 15.0459 16.1305 14.3095 17.612 13.4139L19.8674 17.3203C19.9234 17.4173 20.0039 17.4979 20.1009 17.5539C20.1979 17.6099 20.308 17.6393 20.42 17.6393C20.532 17.6393 20.642 17.6099 20.739 17.5539C20.836 17.4979 20.9166 17.4173 20.9726 17.3203L23.2274 13.4139C24.709 14.3095 26.2812 15.0459 27.9176 15.6108C28.6086 16.895 28.9545 19.732 28.8568 21.8265C27.8211 20.5973 26.5293 19.6093 25.0718 18.9315C23.6143 18.2538 22.0264 17.9027 20.419 17.9028C18.8116 17.9029 17.2237 18.2543 15.7663 18.9322C14.3089 19.6102 13.0173 20.5985 11.9818 21.8278C11.8798 19.7223 12.2248 16.9015 12.9219 15.6109ZM10.6452 23.8058C9.80851 25.3919 9.37124 27.1581 9.37124 28.9513C9.37124 30.7446 9.80851 32.5108 10.6452 34.0969H2.19833L6.78479 29.591C6.90443 29.4735 6.97299 29.3137 6.97567 29.146C6.97834 28.9783 6.9149 28.8163 6.79907 28.6951L2.12965 23.8055L10.6452 23.8058ZM20.4612 11.604C20.4871 11.6046 20.5129 11.6049 20.5388 11.6049C21.7193 11.6049 22.8142 10.9887 23.6284 9.86312C24.5144 8.6381 25.0383 6.89915 25.1852 4.69438C25.1865 4.67364 25.1869 4.65291 25.1863 4.63217C25.1525 3.39137 24.6355 2.21281 23.7455 1.34758C22.8555 0.482341 21.6628 -0.00118655 20.4216 2.18666e-06H20.4179C19.1766 -0.00118544 17.9839 0.482364 17.0939 1.34763C16.2039 2.2129 15.687 3.3915 15.6532 4.63233V4.66551C15.6945 6.63737 16.2051 8.35717 17.1299 9.63883C18.0108 10.8595 19.2249 11.5757 20.4612 11.604ZM20.4197 1.27623C21.3241 1.27588 22.1933 1.62653 22.8443 2.25431C23.4953 2.8821 23.8772 3.73803 23.9096 4.64182C23.6215 8.84437 21.9235 10.3286 20.5346 10.3286C20.5198 10.3286 20.505 10.3286 20.4902 10.3281C19.6571 10.3091 18.8095 9.78567 18.1647 8.89231C17.6274 8.14755 16.9777 6.8087 16.9293 4.65602C16.9581 3.74964 17.3386 2.89005 17.99 2.25922C18.6415 1.6284 19.5129 1.27586 20.4197 1.27623ZM27.3168 27.3419C27.2812 27.2323 27.2166 27.1344 27.1297 27.0585C27.0429 26.9827 26.9372 26.9318 26.8238 26.9112L22.8804 26.1962L20.982 22.6668C20.9274 22.5653 20.8463 22.4805 20.7474 22.4213C20.6484 22.3622 20.5353 22.331 20.4201 22.331C20.3048 22.331 20.1917 22.3622 20.0928 22.4213C19.9938 22.4805 19.9127 22.5653 19.8581 22.6668L17.9597 26.1962L14.0163 26.9112C13.9029 26.9318 13.7972 26.9827 13.7104 27.0585C13.6236 27.1343 13.559 27.2323 13.5234 27.3419C13.4878 27.4515 13.4825 27.5687 13.5081 27.6811C13.5338 27.7934 13.5894 27.8967 13.669 27.98L16.439 30.8765L15.9005 34.8478C15.885 34.9621 15.9007 35.0784 15.946 35.1844C15.9913 35.2904 16.0645 35.3822 16.1578 35.4499C16.251 35.5177 16.3609 35.5589 16.4757 35.5692C16.5905 35.5795 16.706 35.5586 16.8098 35.5085L20.4197 33.7693L24.0304 35.5085C24.1342 35.5586 24.2497 35.5795 24.3645 35.5692C24.4793 35.5589 24.5891 35.5177 24.6824 35.4499C24.7757 35.3822 24.8488 35.2904 24.8941 35.1844C24.9394 35.0784 24.9552 34.9622 24.9397 34.8479L24.4013 30.8766L27.1712 27.9801C27.2508 27.8968 27.3064 27.7935 27.3321 27.6811C27.3577 27.5688 27.3524 27.4515 27.3168 27.3419ZM23.2664 30.2166C23.2001 30.2859 23.1504 30.3692 23.1207 30.4603C23.0911 30.5515 23.0824 30.6481 23.0952 30.7431L23.5156 33.8437L20.6968 32.4858C20.6104 32.4441 20.5157 32.4225 20.4198 32.4225C20.3239 32.4225 20.2292 32.4441 20.1428 32.4858L17.3239 33.8437L17.7443 30.7431C17.7571 30.6481 17.7484 30.5515 17.7188 30.4603C17.6892 30.3692 17.6394 30.2859 17.5732 30.2166L15.4105 27.9553L18.4894 27.397C18.5838 27.3799 18.6731 27.3417 18.7507 27.2854C18.8282 27.229 18.8921 27.1559 18.9376 27.0714L20.4197 24.316L21.9021 27.0715C21.9475 27.156 22.0114 27.2291 22.089 27.2854C22.1666 27.3418 22.2558 27.3799 22.3502 27.397L25.4291 27.9554L23.2664 30.2166Z"
    fill="white" />
    </svg>
    </span>
    <div>
    <h3 class="fs-24 fw-500 mb-15">Accredited by the industry</h3>
    <p>Sepren Insurance Agency is fully registered and regulated by the Insurance Regulatory Authority. This accreditation
    reflects our professionalism, compliance, and commitment to delivering trusted insurance solutions.</p>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 tp-counter-3-border">
    <div class="tp-feature-3-wrap tpshake-wrap d-flex md-space pl-15">
    <span class="mr-30">
    <svg class="tpshake" width="37" height="40" viewBox="0 0 37 40" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd"
    d="M23.6797 36.956C21.4986 38.4334 18.9994 39.488 16.2928 39.9892C16.2152 40.0036 16.1355 40.0036 16.0578 39.9892C6.8221 38.278 0 30.1122 0 20.698V7.29708C0 7.03893 0.153871 6.80571 0.391129 6.70409L15.9214 0.0520766C16.0835 -0.0173589 16.2671 -0.0173589 16.4294 0.0520766L31.9649 6.70401C32.2023 6.80562 32.3561 7.03893 32.3561 7.29708V20.698C32.3561 21.6626 32.2846 22.6141 32.1461 23.5468C34.4748 24.9329 36.0403 27.4764 36.0403 30.3738C36.0403 34.7453 32.4764 38.3093 28.1048 38.3093C26.4687 38.3093 24.9454 37.81 23.6797 36.956ZM30.9248 22.9551C31.018 22.2137 31.0658 21.4602 31.0658 20.698V7.72264L16.1754 1.347L1.29032 7.72264V20.698C1.29032 29.4533 7.60653 37.0524 16.1755 38.6983C18.5224 38.2477 20.7002 37.3509 22.6253 36.1065C21.1121 34.6601 20.1673 32.6239 20.1673 30.3738C20.1673 29.6143 20.2748 28.8792 20.4756 28.1828H15.713C13.4974 28.1828 12.1631 27.5593 10.7795 27.0697V27.3939C10.7795 28.0993 10.2033 28.6755 9.49798 28.6755H6.91903C6.21629 28.6755 5.6375 28.0993 5.6375 27.3939V16.2559C5.6375 15.5506 6.21629 14.9744 6.91903 14.9744H9.49798C10.1958 14.9744 10.7672 15.5384 10.7793 16.2334C11.252 16.2043 11.5738 15.9966 11.8029 15.6656C12.8366 14.1699 12.7445 14.198 14.0973 13.3142C15.9278 12.117 15.8602 11.628 16.5572 8.59917C16.5959 8.43079 16.7005 8.28498 16.8476 8.19442C16.9947 8.10385 17.172 8.07603 17.3398 8.11724C18.861 8.49087 19.5327 9.63651 19.6829 10.9909C19.8215 12.2405 19.4779 13.6656 19.04 14.6768H23.7114C24.9068 14.6768 25.8847 15.6534 25.8847 16.8487C25.8847 17.2637 25.7665 17.6526 25.5619 17.9835C26.2488 18.3493 26.7186 19.0731 26.7186 19.9023C26.7186 20.6398 26.3471 21.2939 25.7818 21.6868C25.9885 21.9723 26.1277 22.3093 26.1755 22.674C26.7936 22.5187 27.4398 22.4361 28.1048 22.4361C29.0973 22.4361 30.048 22.6199 30.9248 22.9551ZM20.9742 26.8925C21.2888 26.2518 21.6873 25.6593 22.1552 25.1292H19.7276C19.3715 25.1292 19.0824 24.8401 19.0824 24.484C19.0824 24.128 19.3715 23.8389 19.7276 23.8389H23.6082C24.0098 23.5613 24.4381 23.3199 24.8883 23.1192C24.8983 23.0662 24.9036 23.0117 24.9036 22.9559C24.9036 22.4714 24.5072 22.0743 24.0219 22.0743H19.7276C19.3715 22.0743 19.0824 21.7852 19.0824 21.4292C19.0824 21.073 19.3715 20.784 19.7276 20.784H24.5466C25.0319 20.784 25.4283 20.3876 25.4283 19.9023C25.4283 19.4171 25.0319 19.0207 24.5466 19.0207H19.7276C19.3715 19.0207 19.0824 18.7316 19.0824 18.3755C19.0824 18.0194 19.3715 17.7304 19.7276 17.7304H23.7114C24.1969 17.7304 24.5944 17.3334 24.5944 16.8487C24.5944 16.3633 24.1969 15.9671 23.7114 15.9671H17.9326C17.6802 15.9671 17.4509 15.8198 17.3459 15.5901C17.2409 15.3605 17.2795 15.0908 17.4447 14.8998C17.9544 14.3106 18.5598 12.5696 18.4005 11.1332C18.3337 10.5313 18.1186 9.97966 17.642 9.64175C16.976 12.5451 16.8018 13.0872 14.8036 14.3941L14.8033 14.3943C13.6546 15.1447 13.7419 15.1294 12.8642 16.3995L12.864 16.3999C12.4022 17.0671 11.7552 17.4929 10.7795 17.5254V25.7093C12.193 26.1848 13.4689 26.8925 15.713 26.8925H20.9742ZM28.1048 37.0189C31.7656 37.0189 34.75 34.0344 34.75 30.3738C34.75 26.713 31.7656 23.7264 28.1048 23.7264C24.4441 23.7264 21.4576 26.713 21.4576 30.3738C21.4576 34.0345 24.4441 37.0189 28.1048 37.0189ZM27.1452 30.1008L30.2331 26.9808L30.2343 26.9796C30.905 26.3054 31.9997 26.3022 32.6739 26.9729C33.3477 27.6433 33.3522 28.7339 32.6818 29.4114L32.6815 29.4116C31.2427 30.8634 29.8148 32.3239 28.3696 33.7692C27.6958 34.443 26.6016 34.443 25.9278 33.7692L23.5325 31.3717C22.859 30.6982 22.8578 29.608 23.5314 28.931L23.5325 28.9299C24.2064 28.256 25.3005 28.256 25.9744 28.9299L27.1452 30.1008ZM26.6915 31.4718L25.0619 29.8422C24.8919 29.6722 24.6158 29.672 24.4455 29.8417C24.2755 30.0132 24.2745 30.2889 24.4449 30.4593L26.8402 32.8568C27.0105 33.027 27.2869 33.027 27.4573 32.8568C28.9011 31.413 30.3274 29.9539 31.7647 28.5036C31.934 28.3325 31.9341 28.057 31.7639 27.8876C31.594 27.7187 31.3183 27.7197 31.1493 27.8893L27.6062 31.4694C27.4854 31.5914 27.321 31.6603 27.1493 31.6607C26.9776 31.6612 26.8128 31.5931 26.6915 31.4718ZM6.92782 16.2647V27.3852H9.48919V16.2647H6.92782Z"
    fill="white" />
    </svg>
    </span>
    <div>
    <h3 class="fs-24 fw-500 mb-15">Integrity & Client-Centered Ethics</h3>
    <p>Trust is at the core of our business. We uphold strong ethics and honesty in every client interaction, ensuring
    transparent advice and dependable service at all times.</p>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 ">
    <div class="tp-feature-3-wrap tpshake-wrap d-flex pl-15">
    <span class="mr-30">
    <svg class="tpshake" width="34" height="40" viewBox="0 0 34 40" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path
    d="M17.5534 28.4569C17.6497 29.2505 17.4371 29.9747 16.9385 30.5512C16.3487 31.2332 15.3659 31.6895 14.248 31.8152V32.6712C14.248 33.0275 13.9592 33.3164 13.6029 33.3164C13.2466 33.3164 12.9577 33.0275 12.9577 32.6712V31.806C11.3051 31.5838 10.0198 30.5419 9.64851 29.0528C9.5623 28.7071 9.77271 28.3569 10.1184 28.2707C10.4644 28.185 10.8143 28.395 10.9005 28.7406C11.2325 30.0723 12.5336 30.5489 13.5995 30.5596C13.6051 30.5595 13.6109 30.5597 13.6165 30.5598C13.6523 30.5596 13.6878 30.5596 13.7229 30.5587C14.6553 30.5365 15.5344 30.2023 15.9625 29.7071C16.2238 29.405 16.3252 29.0469 16.2725 28.6123C16.1479 27.5869 15.2953 26.9986 13.5078 26.7052C10.687 26.2421 10.0303 24.8136 9.97617 23.6969C9.90101 22.1492 10.985 20.852 12.6737 20.469C12.7667 20.4479 12.8616 20.4299 12.9577 20.4151V19.5406C12.9577 19.1844 13.2466 18.8955 13.6029 18.8955C13.9592 18.8955 14.248 19.1844 14.248 19.5406V20.4095C15.4589 20.5848 16.6555 21.2834 17.2521 22.7045C17.39 23.033 17.2356 23.4112 16.9071 23.5491C16.5785 23.6871 16.2004 23.5326 16.0625 23.204C15.599 22.1003 14.6074 21.6523 13.6505 21.6506C13.6241 21.6527 13.5968 21.6528 13.5701 21.6516C13.3621 21.6566 13.1565 21.6827 12.9591 21.7274C12.1047 21.9211 11.211 22.5239 11.265 23.6344C11.2818 23.9822 11.3332 25.0406 13.7168 25.432C14.5923 25.5757 17.2567 26.0131 17.5534 28.4569ZM33.1225 32.5085L27.0864 39.6177C26.8771 39.8642 26.5838 39.9999 26.2604 39.9999C25.9371 39.9999 25.6438 39.8641 25.4345 39.6177L23.0194 36.7733C20.5311 38.8631 17.3238 40 13.8913 40C13.8074 40 13.7236 39.9993 13.6394 39.998C13.5573 39.9994 13.4745 39.9999 13.3925 39.9999C8.41803 40.0002 3.90021 37.569 1.55617 33.6136C-0.570843 30.0245 -0.524311 25.7423 1.68375 21.8653C3.06585 19.4386 5.18254 16.6909 8.30521 13.2748C7.41827 12.8715 6.79972 11.9776 6.79972 10.9414C6.79972 9.54895 7.91634 8.41315 9.30109 8.3804L7.2615 6.34089C6.24166 5.32105 6.24166 3.66169 7.2615 2.64194C8.12464 1.77871 9.49722 1.63129 10.5253 2.29113C10.6357 2.36194 10.7438 2.37161 10.865 2.32145C10.9861 2.27129 11.0557 2.18815 11.0837 2.05984C11.3442 0.866452 12.4189 0.00016129 13.6393 0C14.8597 0 15.9346 0.86621 16.1953 2.05968C16.2233 2.18806 16.2928 2.27129 16.4141 2.32153C16.5351 2.37169 16.6431 2.36194 16.7536 2.29113C17.7816 1.63137 19.1541 1.77871 20.0173 2.64185C21.0371 3.66177 21.0371 5.32121 20.0174 6.34097L17.9779 8.38048C19.3625 8.41331 20.4792 9.54911 20.4792 10.9415C20.4792 11.9777 19.8606 12.8715 18.9737 13.2749C20.2892 14.7143 21.4225 16.0316 22.3979 17.2553C22.4703 16.4829 23.1217 15.8762 23.9126 15.8762H28.6084C29.4476 15.8763 30.1304 16.5591 30.1304 17.3983V30.7239H32.2965C32.7238 30.7239 33.1006 30.9648 33.2799 31.3526C33.4592 31.7398 33.3989 32.1829 33.1225 32.5085ZM8.17383 5.42847L11.1243 8.37879H16.1547L19.105 5.42847C19.6217 4.91169 19.6217 4.07097 19.105 3.55427C18.6677 3.11694 17.9719 3.04234 17.4506 3.37694C16.9868 3.67452 16.429 3.72435 15.9202 3.51347C15.4113 3.30266 15.0521 2.87306 14.9346 2.33484C14.8025 1.72968 14.2577 1.29032 13.6394 1.29032C13.0211 1.2904 12.4764 1.72976 12.3443 2.33492C12.2268 2.87315 11.8676 3.30274 11.3587 3.51355C10.8496 3.72419 10.2919 3.67444 9.82835 3.37702C9.30698 3.04234 8.61117 3.11694 8.17375 3.55427C7.65706 4.07097 7.65706 4.91177 8.17383 5.42847ZM8.09004 10.9414C8.09004 11.6429 8.66077 12.2136 9.3623 12.2136H17.9165C18.618 12.2136 19.1888 11.6429 19.1888 10.9415C19.1888 10.2399 18.618 9.66919 17.9165 9.66919H9.3623C8.66077 9.66911 8.09004 10.2398 8.09004 10.9414ZM22.1844 35.7898L19.3985 32.5086C19.122 32.1827 19.0618 31.7397 19.2412 31.3521C19.4204 30.9646 19.7972 30.7237 20.2245 30.7237H22.3906V19.3592C21.1095 17.6356 19.483 15.7159 17.43 13.504H9.84851C6.46504 17.1491 4.22319 20.0138 2.80488 22.504C0.803592 26.0179 0.754318 29.7298 2.66609 32.9559C4.81472 36.5815 9.01634 38.7849 13.6284 38.7077C13.6357 38.7076 13.6429 38.7076 13.6502 38.7077C16.8668 38.7628 19.8718 37.7298 22.1844 35.7898ZM26.1033 38.782C26.1031 38.7823 26.1029 38.7824 26.1028 38.7826L26.1033 38.782ZM31.8497 32.0141H29.4852C29.1289 32.0141 28.84 31.7252 28.84 31.369V17.3981C28.84 17.2724 28.734 17.1664 28.6084 17.1664H23.9126C23.7871 17.1664 23.6809 17.2725 23.6809 17.3981V31.3689C23.6809 31.7252 23.3921 32.014 23.0358 32.014H20.6713L26.2605 38.5969L31.8497 32.0141Z"
    fill="white" />
    </svg>
    </span>
    <div>
    <h3 class="fs-24 fw-500 mb-15">Value-Driven & Cost-Effective</h3>
    <p>We help clients save by offering affordable, customized insurance plans without compromising coverage. Our solutions are
    designed to deliver maximum value while managing financial risk.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- tp-feature-area-end -->

    <!-- tp-testimonial-area-start -->
    <div class="tp-testimonial-area pt-120 pb-105">
    <div class="container">
    <div class="row">
    <div class="col-lg-4">
    <div class="tp-testimonial-2-left tp-bg-theme-primary tp-round-4 text-center mb-30">
    <h3 class="fw-500 fs-36 ls-m-4 tp-text-common-white mb-5">4.8</h3>
    <div class="tp-testimonial-2-left-ratings mb-10">
    <span><i class="fa-sharp fa-solid fa-star"></i></span>
    <span><i class="fa-sharp fa-solid fa-star"></i></span>
    <span><i class="fa-sharp fa-solid fa-star"></i></span>
    <span><i class="fa-sharp fa-solid fa-star"></i></span>
    <span><i class="fa-sharp fa-solid fa-star"></i></span>
    </div>
    <span class="fs-16 tp-text-common-white d-inline-block pb-95">Market have 25 reviews</span>
    <p class="fw-500 tp-text-common-white mb-5">Check all review on</p>
    <span>
    <svg width="148" height="35" viewBox="0 0 148 35" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path
    d="M12.2912 29.11C13.8592 29.0227 15.3833 28.5602 16.7354 27.7615C18.0875 26.9628 19.2281 25.8511 20.0613 24.52C19.0563 16.51 16.1312 14.02 12.2612 14.02C8.39125 14.02 5.45125 17.02 5.45125 21.52C5.45125 26.02 8.45125 29.02 12.2612 29.02M12.2612 9.01C14.9924 8.89933 17.6755 9.75207 19.8416 11.4191C22.0077 13.0862 23.519 15.4616 24.1112 18.13C25.3952 15.4399 26.3666 12.6114 27.0063 9.7H36.5612V21.55C36.5612 25.855 38.5112 29.05 42.3362 29.05C46.1612 29.05 48.3362 25.87 48.3362 21.55V10L52.0002 25C52.5002 27.5 52.8192 28.041 50.6612 30.52C49.608 31.6666 48.3214 32.5745 46.888 33.1825C45.4547 33.7905 43.9077 34.0846 42.3512 34.045C35.7363 34.045 31.1012 28.96 31.1012 21.685V13.675C29.9778 17.9852 28.1207 22.0699 25.6112 25.75L29.0002 34.045H22.0002L21.0362 30.64C20.3957 31.1915 19.7137 31.693 18.9963 32.14C17.1322 33.3173 14.9895 33.9798 12.7862 34.06H12.2762C10.6373 34.0769 9.01188 33.762 7.49779 33.1344C5.9837 32.5067 4.61225 31.5792 3.46596 30.4077C2.31966 29.2362 1.42223 27.8449 0.827667 26.3175C0.233101 24.7901 -0.0463094 23.1582 0.00624936 21.52C-0.0320176 19.8878 0.258251 18.2646 0.859802 16.7468C1.46135 15.229 2.36191 13.8476 3.50794 12.6848C4.65396 11.522 6.02208 10.6014 7.53095 9.97789C9.03983 9.35432 10.6587 9.04048 12.2912 9.055M116.201 12.29V9.77H110.801V33.215H116.276V24.035C116.276 18.38 116.786 14.315 124.376 14.84V9.5C120.836 9.23 118.076 9.965 116.201 12.305M78.2653 9.755L74.3053 26.165L70.0752 9.755H63.1152L58.8852 26.165L55.0002 10H49.5002L55.4652 33.23H62.0352L66.5953 16.565L71.1103 33.23H77.6803L84.1003 9.755H78.2653ZM96.1302 29.105C92.2452 29.105 89.3353 26.03 89.3353 21.605C89.3353 17.18 92.3353 14.105 96.1302 14.105C99.9252 14.105 103 17 103 21.5C103 26 100 29 96.1903 29M96.1903 8.975C94.5488 8.95192 92.9197 9.26171 91.4013 9.88567C89.8829 10.5096 88.5067 11.4348 87.3558 12.6054C86.2048 13.776 85.303 15.1676 84.7048 16.6963C84.1066 18.2251 83.8244 19.8592 83.8753 21.5C83.8025 23.5622 84.2511 25.6094 85.1794 27.4522C86.1078 29.295 87.486 30.8738 89.1865 32.0427C90.887 33.2115 92.8549 33.9325 94.908 34.139C96.9611 34.3455 99.0331 34.0308 100.932 33.224C102.448 32.5797 103.819 31.6369 104.963 30.4519C106.107 29.2668 107.002 27.8637 107.592 26.326C108.183 24.788 108.457 23.146 108.4 21.5C108.461 19.0425 107.775 16.6244 106.434 14.564C105.093 12.5037 103.16 10.8979 100.888 9.958C99.3802 9.33433 97.7621 9.02044 96.1302 9.035M132.205 21.695H133.465L141.1 33.23H147.265L138.49 20.435C140.601 19.5645 142.404 18.0853 143.67 16.1858C144.937 14.2864 145.608 12.0528 145.6 9.77H140.155C140.155 14.825 136.165 16.745 132.205 16.745V0.5H126.73V33.23H132.19L132.205 21.695Z"
    fill="#11E6C2" />
    <path
    d="M13 25C14.6569 25 16 23.6569 16 22C16 20.3431 14.6569 19 13 19C11.3431 19 10 20.3431 10 22C10 23.6569 11.3431 25 13 25Z"
    fill="#11E6C2" />
    </svg>
    </span>
    </div>
    </div>
    <div class="col-lg-8">
    <div class="tp-testimonial-2-slider p-relative mb-30">
    <span class="tp-testimonial-2-qoute p-absolute">
    <svg width="82" height="60" viewBox="0 0 82 60" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path
    d="M19.4157 0C30.6889 0 38.8267 9.30686 38.8264 23.0872C38.7542 43.1092 23.7026 57.2654 1.98853 59.9839C-0.0260156 60.2362 -0.802799 57.4455 1.05234 56.6206C9.38421 52.9158 13.5922 48.2145 14.1358 43.5612C14.5418 40.0847 12.6519 37.0393 10.2788 36.469C4.12668 34.9907 0.0046758 27.3292 0.0046758 19.411C0.0046758 8.6906 8.69527 0 19.4157 0Z"
    fill="#F3F4F4" />
    <path
    d="M61.7667 0C73.04 0 81.1777 9.30686 81.1775 23.0872C81.1053 43.1092 66.0537 57.2654 44.3396 59.9839C42.3251 60.2362 41.5483 57.4455 43.4034 56.6206C51.7353 52.9158 55.9433 48.2145 56.4868 43.5612C56.8929 40.0847 55.003 37.0393 52.6299 36.469C46.4778 34.9907 42.3558 27.3292 42.3558 19.411C42.3558 8.6906 51.0463 0 61.7667 0Z"
    fill="#F3F4F4" />
    </svg>
    </span>
    <span class="fw-500 fs-16 tp-text-grey-1 mb-5 d-inline-block">// Our testimonials</span>
    <h2 class="mb-25 fs-sm-36 tp-text-theme-primary wow img-custom-anim-left"
    data-wow-duration="1.5s" data-wow-delay="0.2s">What our customer <span
    class="text-italic fw-400 tp-ff-heading">say?</span> </h2>
    <div class="tp-testimonial-2-ratings-wrap d-flex flex-wrap mb-25">
    <div class="tp-testimonial-2-ratings mb-10 mr-20">
    <span><i class="fa-sharp fa-solid fa-star"></i></span>
    <span><i class="fa-sharp fa-solid fa-star"></i></span>
    <span><i class="fa-sharp fa-solid fa-star"></i></span>
    <span><i class="fa-sharp fa-solid fa-star"></i></span>
    <span><i class="fa-solid fa-star-sharp-half-stroke"></i></span>
    <span class="points fw-500 tp-text-common-black ml-5">4.9</span>
    </div>
    <p class="mb-10">Achieving success through over 90% customer satisfaction</p>
    </div>
    <div class="swiper-container tp-testimonial-2-slide tp-testimonial-6-slide">
    <div class="swiper-wrapper">

    <!-- Testimonial 1 -->
    <div class="swiper-slide">
    <div class="p-relative z-index-1">
    <div class="tp-testimonial-lwr-content">
    <p class="fs-20 tp-text-grey-1 lh-32">
    "Sepren Insurance has been an incredible partner. Their team provided excellent advice and
    helped us find the right cover for our organization. Claims were processed quickly and
    professionally."
    </p>
    </div>
    <div class="border-bottom pt-15 mb-30"></div>
    <div class="tp-testimonial-2-author d-flex align-items-center">

    <div>
    <h6 class="fs-18 mb-0">Elizabeth Mwangi</h6>
    <span class="tp-text-grey-1">Director, Kippi Ltd</span>
    </div>
    </div>
    </div>
    </div>

    <!-- Testimonial 2 -->
    <div class="swiper-slide">
    <div class="p-relative z-index-1">
    <div class="tp-testimonial-lwr-content">
    <p class="fs-20 tp-text-grey-1 lh-32">
    "We’ve worked with Sepren for over five years now. Their attention to detail, policy
    customization, and reliable service make them stand out from the rest. We feel secure knowing
    they’ve got us covered."
    </p>
    </div>
    <div class="border-bottom pt-15 mb-30"></div>
    <div class="tp-testimonial-2-author-sm d-flex align-items-center">

    <div>
    <h6 class="fs-18 mb-0">James Otieno</h6>
    <span class="tp-text-grey-1">Finance Officer, Youth Fund</span>
    </div>
    </div>
    </div>
    </div>

    <!-- Testimonial 3 -->
    <div class="swiper-slide">
    <div class="p-relative z-index-1">
    <div class="tp-testimonial-lwr-content">
    <p class="fs-20 tp-text-grey-1 lh-32">
    "Their professionalism and speed in handling claims is unmatched. Sepren negotiated on our
    behalf and ensured we got the best cover at a competitive price. Highly recommended!"
    </p>
    </div>
    <div class="border-bottom pt-15 mb-30"></div>
    <div class="tp-testimonial-lwr-author d-flex align-items-center">

    <div>
    <h6 class="fs-18 mb-0">Grace Nduta</h6>
    <span class="tp-text-grey-1">HR, Anti-Counterfeit Agency</span>
    </div>
    </div>
    </div>
    </div>

    </div>
    </div>

    <div class="tp-testimonial-2-navigation">
    <span class="tp-testimonial-2-prev mr-5">
    <svg width="22" height="18" viewBox="0 0 22 18" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path d="M9.2666 1L1 9.00007L9.2666 17" stroke="#1F3130" stroke-width="1.5"
    stroke-linecap="round" stroke-linejoin="round" />
    <path d="M21 8.99805H1" stroke="#1F3130" stroke-width="1.5"
    stroke-linecap="round" stroke-linejoin="round" />
    </svg>
    </span>
    <span class="tp-testimonial-2-next">
    <svg width="22" height="18" viewBox="0 0 22 18" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path d="M12.7334 1L21 9.00007L12.7334 17" stroke="#1F3130" stroke-width="1.5"
    stroke-linecap="round" stroke-linejoin="round" />
    <path d="M0.999999 8.99805H21" stroke="#1F3130" stroke-width="1.5"
    stroke-linecap="round" stroke-linejoin="round" />
    </svg>
    </span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
     <!-- tp-industry-area-start -->
    <div class="tp-industry-area pt-135 pb-110">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8">
    <div class="tp-industry-section-title-wrap text-center mb-50">
    <span class="fw-500 fs-16 tp-text-grey-1 mb-5 d-inline-block">Our industries</span>
    <h2 class="mb-20 fs-xl-40 fs-sm-36 wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.2s">
      Industry we <span class="text-italic fw-400 tp-ff-heading">always help</span>
    </h2>
    </div>
    </div>
    </div>

    <div class="row">
    <!-- Financial Service -->
    <div class="col-xl-3 col-lg-6 col-md-6">
    <div class="tp-industry-content d-flex align-items-center tp-round-4 mb-30">
    <span class="tp-industry-icon d-inline-block tp-text-theme-primary">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
      stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M12 8c-1.657 0-3 1.567-3 3.5S10.343 15 12 15s3-1.567 3-3.5S13.657 8 12 8z" />
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M19 12.5C19 7.253 15.747 3 12 3S5 7.253 5 12.5 8.253 22 12 22s7-4.253 7-9.5z" />
      </svg>
    </span>
    <div class="border-right"></div>
    <h5 class="fw-500 fs-18 mb-0 ml-25 pt-10 pb-10 pr-10">Financial<br> service</h5>
    </div>
    </div>

    <!-- Advanced Manufacturing -->
    <div class="col-xl-3 col-lg-6 col-md-6">
    <div class="tp-industry-content d-flex align-items-center tp-round-4 mb-30">
    <span class="tp-industry-icon d-inline-block tp-text-theme-primary">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
      stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M4 6h16M4 10h16M4 14h16M4 18h16" />
      </svg>
    </span>
    <div class="border-right"></div>
    <h5 class="fw-500 fs-18 mb-0 ml-25 pt-10 pb-10 pr-10">Advanced<br> manufacturing</h5>
    </div>
    </div>

    <!-- Automotive and Mobility -->
    <div class="col-xl-3 col-lg-6 col-md-6">
    <div class="tp-industry-content d-flex align-items-center tp-round-4 mb-30">
    <span class="tp-industry-icon d-inline-block tp-text-theme-primary">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
      stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M5 16L3 8h18l-2 8H5zm0 0v1a3 3 0 006 0v-1m6 0v1a3 3 0 006 0v-1" />
      </svg>
    </span>
    <div class="border-right"></div>
    <h5 class="fw-500 fs-18 mb-0 ml-25 pt-10 pb-10 pr-10">Automotive<br> and mobility</h5>
    </div>
    </div>

    <!-- Energy & Natural Resources -->
    <div class="col-xl-3 col-lg-6 col-md-6">
    <div class="tp-industry-content d-flex align-items-center tp-round-4 mb-30">
    <span class="tp-industry-icon d-inline-block tp-text-theme-primary">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
      stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
      </svg>
    </span>
    <div class="border-right"></div>
    <h5 class="fw-500 fs-18 mb-0 ml-25 pt-10 pb-10 pr-10">Energy &<br> natural resources</h5>
    </div>
    </div>
    </div>

    <div class="row justify-content-center">
    <div class="col-xl-9">
    <div class="row justify-content-center">
    <!-- Banking and Capital Markets -->
    <div class="col-xl-4 col-lg-6 col-md-6">
      <div class="tp-industry-content d-flex align-items-center tp-round-4 mb-30">
      <span class="tp-industry-icon d-inline-block tp-text-theme-primary">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
      stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M3 10h18M3 6h18M3 14h18M3 18h18" />
      </svg>
      </span>
      <div class="border-right"></div>
      <h5 class="fw-500 fs-18 mb-0 ml-25 pt-10 pb-10 pr-10">Banking and<br> capital markets</h5>
      </div>
    </div>

    <!-- Health Care and Life Insurance -->
    <div class="col-xl-4 col-lg-6 col-md-6">
      <div class="tp-industry-content d-flex align-items-center tp-round-4 mb-30">
      <span class="tp-industry-icon d-inline-block tp-text-theme-primary">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
      stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M9 12h6m-3-3v6m5.414-9.414a2 2 0 00-2.828 0L12 5.586l-1.586-1.586a2 2 0 00-2.828 2.828L9.172 8 7.586 9.586a2 2 0 102.828 2.828L12 10.828l1.586 1.586a2 2 0 102.828-2.828L14.828 8l1.586-1.586a2 2 0 000-2.828z" />
      </svg>
      </span>
      <div class="border-right"></div>
      <h5 class="fw-500 fs-18 mb-0 ml-25 pt-10 pb-10 pr-10">Health care<br> and life insurance</h5>
      </div>
    </div>

    <!-- Social and Public Sectors -->
    <div class="col-xl-4 col-lg-6 col-md-6">
      <div class="tp-industry-content d-flex align-items-center tp-round-4 mb-30">
      <span class="tp-industry-icon d-inline-block tp-text-theme-primary">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
      stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M17 20h5V4H2v16h5m10 0v-6a2 2 0 10-4 0v6h4z" />
      </svg>
      </span>
      <div class="border-right"></div>
      <h5 class="fw-500 fs-18 mb-0 ml-25 pt-10 pb-10 pr-10">Social and<br> public sectors</h5>
      </div>
    </div>

    <!-- Digital Media and Entertainment -->
    <div class="col-xl-4 col-lg-6 col-md-6">
      <div class="tp-industry-content d-flex align-items-center tp-round-4 mb-30">
      <span class="tp-industry-icon d-inline-block tp-text-theme-primary">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
      stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M14.752 11.168l-4.596-2.65A1 1 0 009 9.382v5.236a1 1 0 001.156.964l4.596-2.65a1 1 0 000-1.764z" />
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      </span>
      <div class="border-right"></div>
      <h5 class="fw-500 fs-18 mb-0 ml-25 pt-10 pb-10 pr-10">Digital media<br> and entertainment</h5>
      </div>
    </div>

    <!-- Forest Products, Paper & Packaging -->
    <div class="col-xl-4 col-lg-6 col-md-6">
      <div class="tp-industry-content d-flex align-items-center tp-round-4 mb-30">
      <span class="tp-industry-icon d-inline-block tp-text-theme-primary">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
      stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M3 7l6 6-6 6M21 7l-6 6 6 6" />
      </svg>
      </span>
      <div class="border-right"></div>
      <h5 class="fw-500 fs-18 mb-0 ml-25 pt-10 pb-10 pr-10">Forest products<br> paper & packaging</h5>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8">
      <div class="tp-industry-section-title-wrap text-center mb-50">
      <span class="fw-500 fs-16 tp-text-grey-1 mb-5 d-inline-block">Our industries</span>
      <h2 class="mb-20 fs-xl-40 fs-sm-36 wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.2s">
        Industry we <span class="text-italic fw-400 tp-ff-heading">always help</span>
      </h2>
      </div>
    </div>
    </div>
     <!-- tp-industry-area-end -->
    <div class="tp-brands-areas tp-brands-6-wrap">
    <div class="container container-1690">
    <div class="row">
      <div class="col-lg-12">
      <div class="tp-brands-3-slider-inner">
      <div class="swiper-container tp-brands-3-slider-active">
      <div class="swiper-wrapper slide-transtion">
        <div class="swiper-slide">
        <div>
        <a href="#"><img class="" width="" height="" src="{{ asset("img/customerss/1.png") }}" alt=""></a>
        </div>
        </div>
        <div class="swiper-slide">
        <div>
        <a href="#"><img src="{{ asset("img/customerss/2.png") }}" alt=""></a>
        </div>
        </div>
        <div class="swiper-slide">
        <div>
        <a href="#"><img src="{{ asset("img/customerss/3.png") }}" alt=""></a>
        </div>
        </div>
        <div class="swiper-slide">
        <div>
        <a href="#"><img src="{{ asset("img/customerss/4.png") }}" alt=""></a>
        </div>
        </div>
        <div class="swiper-slide">
        <div>
        <a href="#"><img src="{{ asset("img/customerss/5.png") }}" alt=""></a>
        </div>
        </div>
        <div class="swiper-slide">
        <div>
        <a href="#"><img src="{{ asset("img/customerss/2.png") }}" alt=""></a>
        </div>
        </div>
        <div class="swiper-slide">
        <div>
        <a href="#"><img src="{{ asset("img/customerss/4.png") }}" alt=""></a>
        </div>
        </div>
      </div>
      </div>
      </div>
      </div>
    </div>
    </div>
    </div>
     <!-- tp-testimonial-area-start -->

@endsection