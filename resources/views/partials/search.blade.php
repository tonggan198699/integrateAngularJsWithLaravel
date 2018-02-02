<div class="container mt-sm-3">
  <div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6 card">
        <div class="card-body">
          <h2 class="card-title text-dark">Artist Directory</h2>

            <div class="form-row mb-2">
              <div class="col">
                <label class="col-form-label text-right" for="searchQuery">
                  search <span ng-if="query">@{{query}}</span></label>
              </div><!-- label -->

              <div class="col-12">
                <input class="form-control form-control-lg" id="searchQuery" placeholder="Search for artists" autofocus
                ng-model="query">
              </div><!-- col-12 -->
            </div><!-- form-row -->

        </div><!-- card-body -->
    </div><!-- col-12 -->
  </div><!-- row -->
</div><!-- col-container -->

<div class="artist-list container">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-9 col-md-7 col-lg-5">
      <ul class=" list-group d-flex" ng-if="query">
        <li class="list-group-item" ng-repeat="item in artists">

            <div class="media d-flex align-items-center">
              <img class="rounded-circle mr-3"
                ng-src="images/@{{item.shortname}}_tn.jpg">
              <div class="media-body">
                <h5 class="my-0 text-dark">@{{item.name}}</h5>
                <div class="text-secondary font-italic">@{{item.reknown}}</div>
              </div><!-- media-body -->
            </div><!-- media -->

        </li>
      </ul>
    </div><!-- col-12 -->
  </div><!-- row -->
</div><!-- col-container -->
