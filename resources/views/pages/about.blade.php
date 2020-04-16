@extends('layouts.app')
@section('content')
   
<div class="bg-light">
  <div class="container py-5">
    <div class="row h-100 align-items-center py-5">
      <div class="col-lg-6">
        <h1 class="display-4"> Welcome To About us page</h1>
        <p class="lead text-muted mb-0">You can get in touch with us here. Learn more about our system here</p>
         
      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fblogs-images.forbes.com%2Frebeccaskilbeck%2Ffiles%2F2019%2F02%2FMaintianing-Motivation-in-employees-Blog-Graphic-1200x861.jpg" alt="" class="img-fluid"></div>
    </div>
  </div>
</div>

<div class="bg-white py-5">
  <div class="container py-5">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">we value our employees</h2>
        <p class="font-italic text-muted mb-4">our employees are treated with high dignity. conflicts are solved politely</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834139/img-1_e25nvh.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
     
  </div>
</div>

<div class="bg-light py-5">
  <div class="container py-5">
    <div class="row mb-4">
      <div class="col-lg-5">
        <h2 class="display-4 font-weight-light">Our team</h2>
        <p class="font-italic text-muted">The following are some of the members our team</p>
      </div>
    </div>

    <div class="row text-center">
      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQQ_jzsoV6rLlpX3G4T1qhIqg7xAWAUG5A1Me4KPAlI-1dKQWv-&usqp=CAU" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">SAMMY </h5><span class="small text-uppercase text-muted">CEO HR</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="data:image/jpeg;base64,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" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Samuel Munywoki</h5><span class="small text-uppercase text-muted">CEO IT DEPARTMENT</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://smilequestdental.com/wp-content/uploads/2016/11/test24-4.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">GEORGE </h5><span class="small text-uppercase text-muted">CEO ACCOUNTING DEPARTMENT</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://www.orbitmedia.com/wp-content/uploads/2017/03/jen-havice.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">TRACY </h5><span class="small text-uppercase text-muted">CEO PROCUREMENT</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

    </div>
  </div>
</div>


<footer class="bg-light pb-5">
  <div class="container text-center">
    <p class="font-italic text-muted mb-0">&copy; Copyrights Company.com All rights reserved.</p>
  </div>
</footer>
 



     {{-- <div class="container">
          <p> What We Do</p>
     </div>
     <div class="jumbotron text-center bg-lightgreen">
       
         <div class="card-group" style="margin:20px">
    <div class="card">
      <img src="data:image/png;base64,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" 
      alt="" style="margin:5px"/>
      <div class="card-body">
        <h5 class="card-title">Millions of Jobs</h5>
      <br>
      
      <p>With COVID-19 disrupting the global workforce, 
      we are urgently working to provide easy access to new jobs by 
      highlighting active positions. As always, our focus is on helping
       people find work in the days, weeks, and months ahead.</p><br>
       
      
      <p class="card-text"><small class="text-muted">Available for the suitable ones</small></p>
      </div>
    </div>
    <div class="card">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS4gkuv8mLt9nmWgpX0Vk5rXSeueX91ojd3ve-fq_Ta-dpRSePk&usqp=CAU"
       alt="" style="margin:5px"/>
      <div class="card-body">
        <h5 class="card-title">Quick Application Option</h5>
      <br>
      <br>
      <p>In addition to compiling the required materials,
       be sure to note important application dates and deadlines
        for Early Decision applicants, Regular Decision applicants, 
        Transfer applicants and International applicants on our Application 
        Options page. You may
       also wish to refer to our Frequently Asked Questions for more information.</p> <br>
      
      <br>
      
      <p class="card-text"><small class="text-muted">Available for the suitable ones</small></p>
      </div>
    </div>
    <div class="card">
      <img src="https://images.squarespace-cdn.com/content/v1/5bbba6574d8711a7dcafa92a/1539099000504-641AJG6YGAVNQQP2Q9JV/ke17ZwdGBToddI8pDm48kK_XcqNyTD_Z-Nz3DWaOjrpZw-zPPgdn4jUwVcJE1ZvWhcwhEtWJXoshNdA9f1qD7dso8WS9HrXe-DDzLfr_qHkz6Hywt-PP4PdRg7Pl6QGiBTzH0C1k_8DNu259Tirl4w/Icon_Forum.png" 
      alt="" style="margin:5px"/>
      <div class="card-body">
        <h5 class="card-title">Be a Better Conducts</h5>
      <br>
      <br>
           <p>Each year management consultants in the United States receive
            more than $2 billion for their services.1 Much of this money pays 
            for impractical data and poorly implemented recommendations.2 To 
            reduce this waste, clients need a better understanding of what 
            consulting assignments can accomplish. They need to ask more 
            from such advisers, who in turn must learn to satisfy expanded
             expectations.</p> <br>
      
      <br>
      
      <p class="card-text"><small class="text-muted">Available for the suitable ones</small></p>
      </div>
    </div>
      </div>


      
           
      
@endsection
      


  @section('content')
  
     <footer>
          <!-- Copyrights -->
     <div class="bg-light py-4">
        <div class="container text-center">
          <p class="text-muted mb-0 py-2">© 2020 Carental All rights reserved.</p>
        </div>
      </div>
     </footer>
   --}}
     
 @endsection    
