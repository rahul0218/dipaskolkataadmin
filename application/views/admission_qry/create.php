<h2><?php= $title ?><h2>


<!-- page title -->
<section class="page-title-section overlay" data-background="<?php echo base_url('assets/images/backgrounds/page-title.jpg');?>">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Contact for Admission.</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Do you have other questions? Don't worry, there aren't any dumb questions. Just fill out the form below and we'll get back to you as soon as possible.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- contact -->
<section class="section bg-gray">
  <div class="container">
    
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Contact for Admission.</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 mb-4 mb-lg-0">
      <?php echo validation_errors(); ?>
        <?php echo form_open('admission_qry/create') ?>
          <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Name">
          <!--<input type="email" class="form-control mb-3" id="mail" name="mail" placeholder="Your Email">-->
          <input type="tel" class="form-control mb-3" id="phone" name="phone" pattern="[1-9]{1}[0-9]{9}" placeholder="Your Mobile">
          <select name="course" id="course" class="form-control mb-3" placeholder="Choose course">
            <option value="#">--Choose course--</option>
            <option value="B.Sc BMLT">B.Sc BMLT (Bachelor in Medical laboratory Technician)</option>
            <option value="B.Sc OTT">B.Sc OTT ( B.Sc Operation Theatre Technology)</option>
            <option value="B.Sc CCT">B.Sc CCT ( B.Sc Critical Care Technology)</option>
            <option value="BSc PA">BSc PA(Bachelor in Physician Assistant)</option>
            <option value="BPT">BPT(Bachelor In Physiotherapy)</option>
          </select>
          <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message"></textarea>
          <button type="submit" value="send" class="btn btn-primary">SEND MESSAGE</button>
        </form>
      </div>
      <div class="col-lg-5">
        <p class="mb-5">Please fill out the form for admission queries. We will reach out to you soon.</p>
        <a href="tel:+918250685419" class="text-color h5 d-block">033 71200000 / +91 825 068 5419</a>
        <a href="mailto:dishariparamedical.kolkata@gmail.com" class="mb-5 text-color h5 d-block">dishariparamedical.kolkata@gmail.com</a>
        <p>19, Mollargate Hospital Rd, Santoshpur Govt Colony, Rampur, Santoshpur, <br>Kolkata, West Bengal 700142</p>
      </div>
    </div>
  </div>
</section>
<!-- /contact -->

<!-- gmap -->


