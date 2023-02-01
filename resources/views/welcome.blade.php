@extends('layouts.app')

@section('title')
    CourseCasts
@endsection

@section('content')

    <!--  -->
    <section class="banner">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-11 col-12">
            <div class="row">
              <div class="col-lg-6 col-12 copywriting">
                <p class="story">Discover the power of Learning</p>
                <h1 class="header">
                  Join The <br />
                  <span class="text-purple"> CourseCast </span>
                  community <br />
                  and elevate your skills
                </h1>
                <p class="support">
                  Whether you are looking to upskill, transform your career, or
                  simply broaden your horizons, CourseCast has everything you
                  need to succeed.
                </p>
                <p class="cta">
                  <a href="#" class="btn btn-master btn-primary">
                    Get Started
                  </a>
                </p>
              </div>
              <div class="col-lg-6 col-12 text-center">
                <a href="#">
                  <img src="{{asset('assets/banner.png')}}" class="img-fluid" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row brands">
          <div class="col-lg-12 col-12 text-center">
            <img src="{{asset('assets/brands.png')}}" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section class="benefits">
      <div class="container">
        <div class="row text-center pb-70">
          <div class="col-lg-12 col-12 header-wrap">
            <p class="story">OUR SUPER BENEFITS</p>
            <h2 class="primary-header">Learn Faster & Better</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-12">
            <div class="item-benefit">
              <img src="{{asset('assets/ic_globe.png')}}" class="icon" alt="" />
              <h3 class="title">Diversity</h3>
              <p class="support">
                Access to high-quality courses <br />
                taught by industry experts
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-12">
            <div class="item-benefit">
              <img src="{{asset('assets/ic_globe-1.png')}}" class="icon" alt="" />
              <h3 class="title">A.I Guideline</h3>
              <p class="support">
                Flexibility to learn at <br />
                your own pace and on any device
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-12">
            <div class="item-benefit">
              <img src="{{asset('assets/ic_globe-2.png')}}" class="icon" alt="" />
              <h3 class="title">1-1 Mentoring</h3>
              <p class="support">
                Interactive learning experiences <br />
                that engage and motivate
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-12">
            <div class="item-benefit">
              <img src="{{asset('assets/ic_globe-3.png')}}" class="icon" alt="" />
              <h3 class="title">Future Job</h3>
              <p class="support">
                Personalized learning journeys <br />
                tailored to your goals and interests
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="steps">
      <div class="container">
        <div class="row item-step pb-70">
          <div class="col-lg-6 col-12 text-center">
            <img src="{{asset('assets/step1.png')}}" class="cover" alt="" />
          </div>
          <div class="col-lg-6 col-12 text-left copywriting">
            <p class="story">BETTER CAREER</p>
            <h2 class="primary-header">Prepare The Journey</h2>
            <p class="support">
              Flexibility to learn at your own pace and on any device
            </p>
            <p class="mt-5">
              <a href="#" class="btn btn-master btn-secondary me-3">
                Learn More
              </a>
            </p>
          </div>
        </div>
        <div class="row item-step pb-70">
          <div class="col-lg-6 col-12 text-left copywriting pl-150">
            <p class="story">STUDY HARDER</p>
            <h2 class="primary-header">Finish The Project</h2>
            <p class="support">
              Interactive learning experiences that engage and motivate
            </p>
            <p class="mt-5">
              <a href="#" class="btn btn-master btn-secondary me-3">
                View Demo
              </a>
            </p>
          </div>
          <div class="col-lg-6 col-12 text-center">
            <img src="{{asset('assets/step2.png')}}" class="cover" alt="" />
          </div>
        </div>
        <div class="row item-step">
          <div class="col-lg-6 col-12 text-center">
            <img src="{{asset('assets/step3.png')}}" class="cover" alt="" />
          </div>
          <div class="col-lg-6 col-12 text-left copywriting">
            <p class="story">END GAME</p>
            <h2 class="primary-header">Big Demo Day</h2>
            <p class="support">
              Learn how to speaking in public to demonstrate your <br />
              final project and receive the important feedbacks
            </p>
            <p class="mt-5">
              <a href="#" class="btn btn-master btn-secondary me-3">
                Showcase
              </a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="pricing">
      <div class="container">
        <div class="row pb-70">
          <div class="col-lg-5 col-12 header-wrap copywriting">
            <p class="story">GOOD INVESTMENT</p>
            <h2 class="primary-header text-white">Start Your Journey</h2>
            <p class="support">
              Don't wait, sign up for CourseCast's courses and experience the
              difference.
            </p>
            <p class="mt-5">
              <a href="#" class="btn btn-master btn-thirdty me-3">
                View Syllabus
              </a>
            </p>
          </div>
          <div class="col-lg-7 col-12">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="table-pricing paket-gila">
                  <p class="story text-center">PAKET HYPE</p>
                  <h1 class="price text-center">$280K</h1>
                  <div class="item-benefit-pricing mb-4">
                    <img src="{{asset('assets/ic_check.svg')}}" alt="" />
                    <p>Pro Techstack Kit</p>
                    <div class="clear"></div>
                    <div class="divider"></div>
                  </div>
                  <div class="item-benefit-pricing mb-4">
                    <img src="{{asset('assets/ic_check.svg')}}" alt="" />
                    <p>iMac Pro 2021 & Display</p>
                    <div class="clear"></div>
                    <div class="divider"></div>
                  </div>
                  <div class="item-benefit-pricing mb-4">
                    <img src="{{asset('assets/ic_check.svg')}}" alt="" />
                    <p>1-1 Mentoring Program</p>
                    <div class="clear"></div>
                    <div class="divider"></div>
                  </div>
                  <div class="item-benefit-pricing mb-4">
                    <img src="{{asset('assets/ic_check.svg')}}" alt="" />
                    <p>Final Project Certificate</p>
                    <div class="clear"></div>
                    <div class="divider"></div>
                  </div>
                  <div class="item-benefit-pricing mb-4">
                    <img src="{{asset('assets/ic_check.svg')}}" alt="" />
                    <p>Offline Course Videos</p>
                    <div class="clear"></div>
                    <div class="divider"></div>
                  </div>
                  <div class="item-benefit-pricing mb-4">
                    <img src="{{asset('assets/ic_check.svg')}}" alt="" />
                    <p>Future Job Opportinity</p>
                    <div class="clear"></div>
                    <div class="divider"></div>
                  </div>
                  <div class="item-benefit-pricing mb-4">
                    <img src="{{asset('assets/ic_check.svg')}}" alt="" />
                    <p>Premium Design Kit</p>
                    <div class="clear"></div>
                    <div class="divider"></div>
                  </div>
                  <div class="item-benefit-pricing">
                    <img src="{{asset('assets/ic_check.svg')}}" alt="" />
                    <p>Website Builder</p>
                    <div class="clear"></div>
                  </div>
                  <p>
                    <a href="{{route('checkout.create', 'paket-hype')}}" class="btn btn-master btn-primary w-100 mt-3">
                      Take This Plan
                    </a>
                  </p>
                </div>
              </div>
              <div class="col-lg-6 col-12">
                <div class="table-pricing paket-biasa">
                  <p class="story text-center">PAKET BAYI</p>
                  <h1 class="price text-center">$140K</h1>
                  <div class="item-benefit-pricing mb-4">
                    <img src="{{asset('assets/ic_check.svg')}}" alt="" />
                    <p>1-1 Mentoring Program</p>
                    <div class="clear"></div>
                    <div class="divider"></div>
                  </div>
                  <div class="item-benefit-pricing mb-4">
                    <img src="{{asset('assets/ic_check.svg')}}" alt="" />
                    <p>Final Project Certificate</p>
                    <div class="clear"></div>
                    <div class="divider"></div>
                  </div>
                  <div class="item-benefit-pricing mb-4">
                    <img src="{{asset('assets/ic_check.svg')}}" alt="" />
                    <p>Offline Course Videos</p>
                    <div class="clear"></div>
                    <div class="divider"></div>
                  </div>
                  <div class="item-benefit-pricing">
                    <img src="{{asset('assets/ic_check.svg')}}" alt="" />
                    <p>Future Job Opportinity</p>
                    <div class="clear"></div>
                  </div>
                  <p>
                    <a href="{{route('checkout.create', 'paket-bayi')}}" class="btn btn-master btn-secondary w-100 mt-3">
                      Start With This Plan
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row pb-70">
          <div class="col-lg-12 col-12 text-center">
            <img src="{{asset('assets/brands.png')}}" height="30" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section class="testimonials">
      <div class="container">
        <div class="row text-center pb-70">
          <div class="col-lg-12 col-12 header-wrap">
            <p class="story">SUCCESS STUDENTS</p>
            <h2 class="primary-header">We Really Love Laracamp</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-10 col-12">
            <div class="row">
              <div class="col-lg-4 col-12">
                <div class="item-review">
                  <img src="{{asset('assets/stars.svg')}}" alt="" />
                  <p class="message">
                    I was not really into code but after they teach me how to
                    train my logic then I was really fall in love with code
                  </p>
                  <div class="user">
                    <img src="{{asset('assets/fanny_photo.png')}}" class="photo" alt="" />
                    <div class="info">
                      <h4 class="name">Fanny</h4>
                      <p class="role">Developer at Google</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-12">
                <div class="item-review">
                  <img src="{{asset('assets/stars.svg')}}" alt="" />
                  <p class="message">
                    Code is really important if we want to build a company and
                    strike to the win
                  </p>
                  <div class="user">
                    <img src="{{asset('assets/angga.png')}}" class="photo" alt="" />
                    <div class="info">
                      <h4 class="name">Angga</h4>
                      <p class="role">CEO at BWA Corp</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-12">
                <div class="item-review">
                  <img src="{{asset('assets/stars.svg')}}" alt="" />
                  <p class="message">
                    My background is design and art but I do really love how to
                    make my design working in the development phase
                  </p>
                  <div class="user">
                    <img src="{{asset('assets/beatrice.png')}}" class="photo" alt="" />
                    <div class="info">
                      <h4 class="name">Beatrice</h4>
                      <p class="role">QA at Facebook</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row copyright">
              <div class="col-lg-12 col-12">
                <p>All Rights Reserved. Copyright CourseCast Indonesia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
@endsection