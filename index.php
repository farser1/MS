<?php 
$pageTitle="Affordable online personal training";
$pageDesc="Reach your health and fitness goals through goal based communities powered by real coaches.";
include('inc/header.php'); ?>

  <div class="hero hero-home" id="top">
    <div class="w-container">
      <div class="w-row row_courseintro">
        <div class="w-col w-col-6 column_title">
          <h1 class="hero-title">Become<br>the healthier,<br>fitter you.</h1>
          <p class="paragraph-subtitle">12 week online coached courses
            <br>for £3.75 a week</p><a class="button button-hero" href="#current-course">Select a course</a>
        </div>
        <div class="w-col w-col-6">
          <div class="video"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="section section-white" id="how-it-works">
    <div class="w-container">
      <h2>How it Works</h2>
      <div class="w-row row_benefits_1">
        <div class="w-col w-col-3 w-col-small-6 cln_benefits">
          <img class="images_howitworks" src="images/MT_HowItWorks_1.png" width="154" alt="53204611c4db09226500097d_MT_HowItWorks_1.png">
          <h3 class="h3-feature">Choose your goal</h3>
          <p class="p-feature-description">Select a MyTeam online course based on your fitness goals.</p>
        </div>
        <div class="w-col w-col-3 w-col-small-6 cln_benefits">
          <img class="images_howitworks" src="images/MT_HowItWorks_2.png" width="154" alt="53204621b6781caa760009f6_MT_HowItWorks_2.png">
          <h3 class="h3-feature">Join your team</h3>
          <p class="p-feature-description">Each course is run by a coach and has a supportive community of users.</p>
        </div>
        <div class="w-col w-col-3 w-col-small-6 cln_benefits">
          <img class="images_howitworks" src="images/MT_HowItWorks_3.png" width="154" alt="5320462ab6781caa760009f8_MT_HowItWorks_3.png">
          <h3 class="h3-feature">Do your actions</h3>
          <p class="p-feature-description">Your coach will set you weekly tasks, making progress simple.</p>
        </div>
        <div class="w-col w-col-3 w-col-small-6 cln_benefits">
          <img class="images_howitworks" src="images/MT_HowItWorks_4.png" width="154" alt="53204634475bc1a776000aac_MT_HowItWorks_4.png">
          <h3 class="h3-feature">Achieve your goal</h3>
          <p class="p-feature-description">With a coach and weekly actions, you’ll be successful in no time!</p>
        </div>
      </div>
    </div>
  </div>
  <div class="section section-gray" id="current-course">
    <div class="w-container">
      <h2>Current Courses</h2>
      <div class="w-row row-courses">
        <div class="w-col w-col-6">
          <div class="course-boundary">
            <div class="w-clearfix course-image">
              <h3 class="h3-course-name">Weight Loss Made Simple</h3>
              <div class="course-block-text descriptor">No exercise experience required</div>
            </div>
            <div class="w-clearfix trainer-profile">
              <img class="trainer-image-mini" src="images/Paul_Medium.png" width="55" alt="531e281f5fe5f2ee6d00019a_Paul_Medium.png">
              <div class="trainer-name-title"><strong>Paul Rayner<br></strong>Weight Loss Specialist</div>
            </div>
            <div class="course-summary">
              <ol class="w-list-unstyled">
                <li class="w-clearfix course-list">
                  <div class="course-block-text grey">For people wanting to lose serious fat and keep it off.</div>
                </li>
                <li class="w-clearfix">
                  <div class="course-block-text grey below">No gym access required.</div>
                </li>
              </ol><a class="button button-outline" href="weight-loss-made-simple">Learn More</a>
            </div>
          </div>
        </div>
        <div class="w-col w-col-6">
          <div class="course-boundary">
            <div class="w-clearfix course-image strength">
              <h3 class="h3-course-name">Strength &amp;&nbsp;Size</h3>
              <div class="course-block-text descriptor">Basic lifting experience required</div>
            </div>
            <div class="w-clearfix trainer-profile">
              <img class="trainer-image-mini" src="images/Josh_Medium.png" width="55" alt="">
              <div class="trainer-name-title"><strong>Josh O’Leary<br></strong>Stength Coach</div>
            </div>
            <div class="course-summary">
              <ol class="w-list-unstyled">
                <li class="w-clearfix course-list">
                  <div class="course-block-text grey">A strength and power course which builds size and shape.</div>
                </li>
                <li class="w-clearfix">
                  <div class="course-block-text grey below">Gym or weight set required</div>
                </li>
              </ol><a class="button button-outline" href="strength-size">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="call-out call-out-teal">
    <div class="w-container ctn_register" id="trainerbio">
      <p class="p-call-to-action p-call-to-action-on-teal">Get notified about new courses</p>
      <div class="support-copy">We are designing new courses just for triathletes, runners, women, tough mudders and more.</div><a class="button button-subscribe" href="https://confirmsubscription.com/h/d/FD8602C3FEA606C1" onclick="ga('send', 'event', 'button', 'click', 'notify me');">Notify Me!</a>
    </div>
  </div>

<?php include('inc/footer.php'); ?>	