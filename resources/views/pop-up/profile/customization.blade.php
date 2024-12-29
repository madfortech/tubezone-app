<div class="modal fade" id="editCustomizationModal" tabindex="-1" 
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">{{('Customization')}}</h1>
         
        </div>
          <div class="modal-body">
            {{-- Row --}}
            <div class="row">
              <div class="col-sm-9">
                
                <div class="row">
                  <div class="col-8 col-lg-12">
                    <div class="d-flex align-items-start">
                      {{-- Start Tabs --}}
                      <div class="d-flex align-items-start">
                        <div class="d-flex align-items-start">
                          <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                              Edit  profile
                            </button>
                           
                            <button class="nav-link" id="v-pills-agreements-tab" data-bs-toggle="pill" data-bs-target="#v-pills-agreements" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">
                              Agreements
                            </button>
                            
                          </div>
                          <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                              @include('pop-up.profile.edit-profile')
                            </div>
                            {{-- Edit profile --}}

                            <div class="tab-pane fade" id="v-pills-agreements" role="tabpanel" aria-labelledby="v-pills-agreements-tab" tabindex="0">
                              @include('pop-up.profile.agreements')
                            </div>
                            {{-- Agreements --}}
                           
                          </div>
                        </div>
                      </div>
                      {{-- End Tabs --}}
                    </div>     
                  </div>
                </div>
              </div>
            </div>
            {{-- Row --}}
          </div>
       
      </div>
    </div>
</div>