@extends ('layouts.mainLayout')

@section('title')
  Silany - Official Website
@endsection

@section('main_content')
<div class="page_wrapper container">

<div class="container">
  <div class="offset-lg-1 col-lg-10 box-text">
    <h2>Silany, personal advisor for your product enhancement</h2>
    <p>
      Explore competence in front-end coatings and functional materials.
      Products and technology for textile industry, construction,
      medical market, wood industry, and more is ready for your customers.
      100% sustainability included.
    </p>
  </div>
</div>
<div class="container info">
  <div class="row">
    <section class="col-lg-3 offset-lg-1 col-md-4 col-sm-6 box">
      <i class="fas fa-spray-can icon"></i>
      <h3>Technology</h3>
      <p>
        Coatings based on chemistry and nano and microscale topography
        let's precisely tune your surface's properties. Easy applicable
        processes including low costs adds value to your products.
      </p>
      <hr />
      <div class="find_more_container">
        <a class="find_more" href="">Find out more</a>
      </div>
    </section>
    <section class="col-lg-3 col-md-4 col-sm-6 box margin-box">
      <i class="fas fa-flask icon"></i>
      <h3>Products & Applicatons</h3>
      <p>
        Durable coatings for wettability management, from 100% anti wetting
        to superwettability. Waterproof coatings, oil repellent, uv protection,
        IR reflective coatings available
      </p>
      <hr />
      <div class="find_more_container">
        <a class="find_more" href="">Find out more</a>
      </div>
    </section>
    <section class="col-lg-3 col-md-4 col-sm-6 box">
      <i class="far fa-edit icon"></i>
      <h3>Service</h3>
      <p>
        Working closely together with us enables you to deliver premium products
        to your customers. Generate a competitive advantage your customers will appreciate.
      </p>
      <hr />
      <div class="find_more_container">
        <a class="find_more" href="">Find out more</a>
      </div>
    </section>
  </div>
</div>

</div>
@endsection

@section('script')
  <script>
    $(document).ready(function() {

var hamburger = $(".hamb-logo");
var hambMenu = $(".hamb-menu ul");
var hiddenMenu = $(".page-hidden-menu");
var closeIcon = $(".close-icon");

hamburger.click(function() {
  hambMenu.css({display: "block"});
  hiddenMenu.css({display: "block"});
  $(".page-support").addClass("blocked");
  menuAnimation();
});

closeIcon.click(function() {
  closeMenu();
});

$(".close-hidden-menu").click(function() {
  closeMenu();
});

function closeMenu() {
  hiddenMenu.css({display: "none"});
  $(".close-hidden-menu").css({display: "none"});
  $(".hidden-menu").css({marginLeft: "-75%"});
  $(".page-support").removeClass("blocked");
}

function menuAnimation() {
  var menu = $(".hidden-menu");
  var count = 75;
  setInterval(function() {
    if (count == 0) {
      clearInterval();
      $(".close-hidden-menu").css({display: "block"});
    } else {
      count--;
      menu.css({marginLeft: "-"+count+"%"});
    }
  },5);
}

})
  </script>
@endsection
