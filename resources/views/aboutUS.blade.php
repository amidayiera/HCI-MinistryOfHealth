<!DOCTYPE html>
<head>
<title>ABOUT US</title>
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 <style>
  .container-fluid {
  position: relative;
  width: 100% !important;
}

.bottomleft {
  position: absolute;
  bottom: 8px;
  left: 16px;
  font-size: 18px;
}

.background { 
  width: 100%;
  height: 500px;
  margin:0px;
  /*background-position-x: 100%;*/
  opacity: 0.6;
}
  .jumbotron {
    background-color: white;
    /*background-image: url('/images/health3.jpg');
   /* background-position-x: 100%;
   /* background-size: 100%;
    height: 500px;
    width: 100%;
    background-attachment: fixed;
    background-repeat: no-repeat, repeat;*/
  }

  .card-deck{
      border-block-color: white !important;
      background-position-x: 100%;
      background-attachment: fixed;
  }

.management{
    margin-top: 30px;
    text-align: center;
    color: darkblue;
}

.departments, .feedback{
    margin-top: 40px;
    text-align: center;
    color: darkblue;
}

.cardset2{
      margin-top: 20px;
  }
  
  .accordion{
    margin-top: 20px;
    margin-left: 250px;
    margin-right: 250px;
  }
   
.card-title{
       color: darkblue;
       text-align: center;
   }
.my-4{
     color:black;
     border-width: 2px;
 }

    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">


<div class="jumbotron  jumbotron-fluid" >
<div class="container-fluid">
  <img class="background" src="{{ url('/images/health3.jpg') }}" alt="Health" width="1000" height="300">
  <div class="bottomleft">
      <h3><b>About The Ministry</b></h3>
      <h4 style="color:#fff;"><b>REPUBLIC OF KENYA</b></h4>
    </div>
    </div>

</div>

<div class="container-fluid">
<div class="card-deck">
  <div class="card" style="text-align: center;">
    <img src="{{ url('/images/vision1.jpg') }}" class="card-img-top" alt="vision">
    <div class="card-body">
      <h5 class="card-title">VISION</h5>
      <p class="card-text">A Healthy, productive and globally competitive nation.</p>
    </div>
  </div>
  <div class="card" style="text-align: center;">
  <img src="{{ url('/images/mission1.png') }}" class="card-img-top" alt="mission">
    <div class="card-body">
      <h5 class="card-title">MISSION</h5>
      <p class="card-text">To build a progressive, responsive and sustainable health care system for accelerated attainment of the highest standard of health to all Kenyans.</p>
    </div>
  </div>
  <div class="card" style="text-align: center;">
  <img src="{{ url('/images/goal4.jpg') }}" class="card-img-top" alt="goals">
    <div class="card-body">
      <h5 class="card-title">GOAL</h5>
      <p class="card-text">Attaining equitable, affordable, accessible and quality health care for all.</p>
    </div>
  </div>
  <div class="card">
  <img src="{{ url('/images/mandate1.png') }}" class="card-img-top" alt="mandate">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">MANDATE</h5>
      <p class="card-text">
      <ul>
        <li>Health Policy</li>
        <li>Health Regulation</li>
        <li>National Referral Health Facilities</li>
        <li>Capacity Building</li>
        <li>Technical Assistance to Counties.</li>
      </ul>  
      </p>
    </div>
  </div>
  <div class="card">
  <img src="{{ url('/images/core4.jpg') }}" class="card-img-top" alt="values">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">CORE VALUES</h5>
      <p class="card-text">
      <ul>
        <li>Professionalism</li>
        <li>Ethics</li>
        <li>Integrity</li>
        <li>Accountability</li>
        <li>Patnership and Collaboration.</li>
      </ul>  
      </p>
    </div>
    </div>
  </div>
</div>

<div class="management">
    <h3>MANAGEMENT</h3>
</div>

<div class="container-fluid">
<div class = "cardset2">
<div class="card-group">
  <div class="card">
    <img src="{{ url('/images/kagwe1.jpg') }}" class="card-img-top" alt="Kagwe">
    <div class="card-body">
      <h5 class="card-title">Hon. Mutahi Kagwe </h5>
      <p class="card-title" style="color: grey; font-size:14px;">**HEALTH CABINET SECRETARY**</p>
      <hr class="my-4">
      <p class="card-text" style="text-align:center;">Ensures that the Cabinet decisions are implemented.</p>
    </div>
  </div>
  <div class="card">
    <img src="{{ url('/images/rashid2.jpg') }}" class="card-img-top" alt="Rashid">
    <div class="card-body">
      <h5 class="card-title">Dr. Rashid Abdi Aman</h5>
      <p class="card-title" style="color: grey; font-size:14px;">**CHIEF ADMINISTRATIVE SECRETARY**</p>
      <hr class="my-4">
      <p class="card-text" style="text-align:center;">Ensures that the policies set by the ministry regarding drug distribution, health facility support and public interest are upheld.</p>
  </div>
  </div>
  <div class="card">
    <img src="{{ url('/images/susan4.jpg') }}" class="card-img-top" alt="Susan">
    <div class="card-body">
      <h5 class="card-title">Ms. Susan Mochache</h5>
      <p class="card-title" style="color: grey; font-size:14px;">**PRINCIPAL SECRETARY**</p>
      <hr class="my-4">
      <p class="card-text" style="text-align:center;">Supports the Cabinet Secretary to cover all loopholes in the ministry.</p>
    </div>
  </div>
  <div class="card">
    <img src="{{ url('/images/patrick3.jpg') }}" class="card-img-top" alt="Patrick">
    <div class="card-body">
      <h5 class="card-title">Dr. Patrick Amoth</h5>
      <p class="card-title" style="color: grey; font-size:14px;">**AG. DG**</p>
      <hr class="my-4">
      <p class="card-text" style="text-align:center;">Performs the role of the Acting Director General</p>
    </div>
  </div>
</div>
</div>

<div class="departments">
    <h3>DEPARTMENTS</h3>
</div>


<div class="accordion" id="accordionExample">
  <div class ="container-fluid">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <b> A. </b>Department of Preventive and Promotive Health.
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
       <p>
       <ul>
       <li>Division of Strategic National Public Health Programs </li>
        <li>Division of Disease Surveillance and Epidemic Response </li>
        <li>Division of Family Health</li> 
        <li>Division of National Public Health Laboratory </li> 
        <li>Division of Environmental Health</li> 
        <li>Division of Non Communicable Diseases</li> 
      </ul>  
       </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <b> B. </b>Department of Curative and Rehabilitation Health Services.
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <p>
       <ul>
        <li>Division of National Referral Health Facilities </li>
        <li>Division of Forensic &Pathology Services</li>
        <li>Division of Clinical Practice </li> 
        <li>Division of Health Emergencies and Disaster Management</li> 
        <li>Division of Blood Transition </li> 
      </ul>  
       </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <b> C. </b> Department of Standards and Quality Assurance and Regulations.
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      <p>
       <ul>
        <li>Division of Quality Assurance</li>
        <li>Division of Alternative and Traditional Medicine</li>
        <li>Division of Legislation and Regulations</li> 
      </ul>  
       </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        <b> D. </b> Department of Policy Planning and Health Financing.
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
      <p>
       <ul>
        <li>Division of Health Policy and Planning </li>
        <li>Division of Health Care Financing </li>
        <li>Division of M&E, Health Research Development & Health Informatics </li> 
      </ul>  
       </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFive">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        <b> E. </b> Department of Health Sector Coordination and Inter Governmental Affairs.
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
      <p>
       <ul>
        <li>Division of Health Sector Coordination </li>
        <li>Division of Health Sector Inter-Governmental Affairs</li>
      </ul>  
       </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        <b> F. </b> Department of Administrative Services.
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
      <p>
       <ul>
        <li>Division of General Administration </li>
        <li>Division of PRO </li>
        <li>Division of ICT </li> 
        <li>Division of Finance </li> 
        <li>Division of HRD</li> 
        <li>Division of Accounts</li> 
        <li>Division of SCMD </li> 
        <li>Division of HRM</li> 
        <li>Division of Legal Matters</li> 
      </ul>  
       </p>
      </div>
    </div>
  </div>
</div>
</div>

<!--<div class="feedback">
    <h3>FEEDBACK</h3>
</div>-->

</body>
</html>