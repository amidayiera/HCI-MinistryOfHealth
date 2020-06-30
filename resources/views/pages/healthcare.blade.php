@extends('includes.navbar')

@section('content')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Healthcare</h1>
      <p class="lead">The Ministry of Health ensures that every citizen in the country is able to access medical services.</p>
    </div>
    
    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
        
          </div>
               <div class="row">
                                <div class="col-md-4 h-50">
                                  <div class="card mb-4 box-shadow">
                
                                    <img class="card-img-top w-100"   src="{{ asset('images/hospital.png') }}" alt="Find Hospital">
                                    
                                    <div class="card-body">
                                        <h4 class="card-title">HEALTH CARE LOCATIONS</h4>
                                      <p class="card-text">Find hospitals near me.<br>Locate nearest private/public hospitals</p>
                                     
                                      <div class="d-flex justify-content-between align-items-center float-right">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View More..</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 ">
                                        <div class="card mb-4 box-shadow">
                                                <div class="w-50 align-content-center m-auto">
                                          <img class="card-img-top w-100"  src="{{ asset('images/heart.jpg') }}" alt="CardioVascular guidelines">
                                                </div>
                                          <div class="card-body">
                                              <h4 class="card-title">CARDIOVASCULAR GUIDELINES</h4>
                                            <p class="card-text">The heart is the most important part of the body.It....</p>
                                            <div class="d-flex justify-content-between align-items-center float-right">
                                              <button type="button" class="btn btn-sm btn-outline-secondary">View More..</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="card mb-4 box-shadow">
                                                <div class="w-auto">
                                          <img class="card-img-top" style="width: 10rem" src="{{ asset('images/physicalaction.png') }}" alt="Physical action">
                                                </div>
                                          <div class="card-body">
                                              <h4 class="card-title">PHYSICAL ACTION</h4>
                                            <p class="card-text">The physical action guidelines stated in Kenya are to ensure that every citizen is able to...</p>
                                            <div class="d-flex justify-content-between align-items-center float-right">
                                              <button type="button" class="btn btn-sm btn-outline-secondary">View More..</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                    
                                      <div class="col-md-4">
                                        <div class="card mb-4 box-shadow">
                                          <img class="card-img-top" style="height: 11rem" src="{{ asset('images/hospital.png') }}" alt="Cancer protocols">
                                          <div class="card-body">
                                              <h4 class="card-title">CANCER PROTOCOLS</h4>
                                            <p class="card-text">Find hospitals near me.</p>
                                             
                                            <div class="d-flex justify-content-between align-items-center">
                                              <button type="button" class="btn btn-sm btn-outline-secondary">View More..</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="card mb-4 box-shadow">
                                          <img class="card-img-top" style="height: 11rem" src="{{ asset('images/hospital.png') }}" alt="Violence and injury prevention">
                                          <div class="card-body">
                                              <h4 class="card-title">VIOLENCE AND INJURY PREVENTION</h4>
                                            <p class="card-text">Find hospitals near me.</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                              <button type="button" class="btn btn-sm btn-outline-secondary">View More..</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="card mb-4 box-shadow">
                                          <img class="card-img-top" style="height:11rem" src="{{ asset('images/autopsy.jpg') }}" alt="Autopsy guidelines">
                                                
                                          <div class="card-body">
                                              <h4 class="card-title">AUTOPSY GUIDELINES</h4>
                                            <p class="card-text">Find hospitals near me.</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                              <button type="button" class="btn btn-sm btn-outline-secondary">View More..</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
  </body>
</html>
@endsection   
