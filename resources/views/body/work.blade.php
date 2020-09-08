<section class="features-area sec-padding text-center" data-scroll-index="4">
    <div class="container">
        <h1 class="title-h p-relative">
            <span class="fw-200">  My</span> Best Work
            <span class="line p-absolute bg-orange"></span>
        </h1>
        <p class="title-p">I help you build brand for your business at an affordable price. Hundreds of clients have procured exceptional results while working with Me.</p>
        <div class="row">
        @foreach($projects as $project)
            <div class="col-md-4">
                <div class="mb-25px mt-25px wow fadeInUp work" data-wow-delay="0.3s">
                    <img src="storage/{{ $project->main_image }}" alt="Steak Diane">
                    <div class="work-info" data-mealid="52881">
                        <h5>{{ $project->title }}
                            <br>
                            <span class="techno">{{ $project->type }}</span>
                        </h5>
                    </div>

                    <a class="popup-ajax stretched-link" data-toggle="modal" data-target="#{{$project->id}}" href="#"><i class="fa fa-eye fs-20 bg-orange bg-333-hvr color-fff radius-50 mt-10px transition-4"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@foreach($projects as $project)
<!-- Project Modal -->
<div class="modal fade bd-example-modal-lg" id="{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg projects" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{$project->title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
<div class="container-fluid">
<div class="row">
<div class="col-sm-7 mb-4 mb-md-0">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="storage/{{$project->image_2}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="storage/{{$project->image_3}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="storage/{{$project->image_4}}" alt="Third slide">
                        </div>
                        
                    </div>
                </div>
                </div>
                
                <div class="col-sm-5">

                <div class="card">
  <div class="card-body">
  <span class="fw-600 card-title" > Project Info: </span>
    <p class="card-text">{{$project->desc}}</p>
  </div>
  <div class="card-body">
  <span class="fw-600 card-title" > Project Details: </span>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><span class="fw-600 work-details-slider-span">Client:</span>{{$project->client}}</li>
    <li class="list-group-item"><span class="fw-600 work-details-slider-span">Industry:</span>{{$project->industry}}</li>
    <li class="list-group-item"><span class="fw-600 work-details-slider-span">Location:</span>{{$project->location}}</li>
    <li class="list-group-item"><span class="fw-600 work-details-slider-span">Technologies:</span>{{$project->technologies}}</li>
    <li class="list-group-item"><span class="fw-600 work-details-slider-span">Date:</span>{{$project->date}}</li>
    <li class="list-group-item"><span class="fw-600 work-details-slider-span">URL:</span class="custom-url"><a href="{{$project->url}}">{{$project->title}}</a></li>
  </ul>
  </div>
  <div class="card-body">
   
  </div>
</div>
                
                </div>
                </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Project Modal -->
    @endforeach