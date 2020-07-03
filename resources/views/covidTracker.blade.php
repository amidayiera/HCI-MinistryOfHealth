@extends('includes.navbar')

@section('content')

<section class="content">

{{-- <div class="container"> --}}


<div class="backgroundImage covidPageImage">
    <div id="covidPage">
      <h1 class="covidPageTitle text-uppercase align-text-bottom">COVID-19 GUIDELINES</h1>
    </div>
  </div>
{{-- <div >
<img src="{{ url('/images/covid.jpg') }}" class="mx-auto d-block" alt="Covid">
</div> --}}
<div class="container">
<br>
{{-- <h3 style="color:cornflowerblue;  text-align:center;" ><U>COVID-19 GUIDELINES</U></h3> --}}
<h2 style="color:#e20000;  text-align:center; letter-spacing:1rem;" >STAY HOME, STAY SAFE !!!</h2>

<div class="accordion" id="accordionExample">
  {{-- <div class ="container"> --}}
  <div class="card">
    <div class="card-header accordionTitle" id="headingOne">
      <h2 class="mb-0">
        <button class="text-uppercase btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <b>A. SYMPTOMS</b>
        {{-- <hr> --}}
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body text-center">
       <p>
       <p>COVID-19 affects different people in different ways. Most infected people will develop mild to moderate illness and recover without hospitalization.</p>
        {{-- <hr> --}}
        <p>Most common symptoms:</p>
        <ul>
        <li>*Fever</li>
        <li>*Dry cough</li>
        <li>*Tiredness</li>
        </ul>
        <p>Less common symptoms:</p>
        <ul>
        <li>*Aches and pains</li>
        <li>*Sore throat</li>
        <li>*Diarrhoea</li>
        <li>*Conjunctivitis</li>
        <li>*Headache</li>
        <li>*Loss of taste or smell</li>
        <li>*A rash on skin, or discolouration of fingers or toes</li>
        </ul>
       </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header accordionTitle" id="headingTwo">
      <h2 class="mb-0">
        <button class="text-uppercase btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <b>B. PREVENTION</b>
        {{-- <hr> --}}
      </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body text-center">
      <p>Protect yourself and others around you by knowing the facts and taking appropriate precautions. Follow advice provided by your local health authority.</p>
        {{-- <hr> --}}
        <p>To prevent the spread of COVID-19:</p>
        <ul>
        <li> > Clean your hands often. Use soap and water, or an alcohol-based hand rub.</li>
        <li> > Maintain a safe distance from anyone who is coughing or sneezing.</li>
        <li> > Wear a mask when physical distancing is not possible.</li>
        <li> > Don’t touch your eyes, nose or mouth.</li>
        <li> >  Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</li>
        <li> > Stay home if you feel unwell.</li>
        <li> > If you have a fever, cough and difficulty breathing, seek medical attention.</li>
        </ul>
        <hr>
        <h4 style="color: red;"><strong><u>NOTE</u></strong></h4>
        <p><strong>Calling in advance</strong> allows your healthcare provider to quickly direct you to the right health facility. This protects you, and prevents the spread of viruses and other infections.</p>
        <p><strong>Masks</strong> can help prevent the spread of the virus from the person wearing the mask to others. Masks alone do not protect against COVID-19, and should be combined with physical distancing and hand hygiene. Follow the advice provided by your local health authority.</p>
       
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card-header accordionTitle" id="headingThree">
      <h2 class="mb-0">
        <button class="text-uppercase btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <b>C. TREATMENTS</b>
        {{-- <hr> --}}
      </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body text-center">
      <p>
      <p>To date, there are no specific vaccines or medicines for COVID-19. Treatments are under investigation, and will be tested through clinical trials. World Health Organization</p>
        {{-- <hr> --}}
        <h5>Self Care</h5>
        <p>If you feel sick you should rest, drink plenty of fluid, and eat nutritious food. Stay in a separate room from other family members, and use a dedicated bathroom if possible. Clean and disinfect frequently touched surfaces.</p>
        <p>Everyone should keep a healthy lifestyle at home. Maintain a healthy diet, sleep, stay active, and make social contact with loved ones through the phone or internet. Children need extra love and attention from adults during difficult times. Keep to regular routines and schedules as much as possible.</p>
        <p>It is normal to feel sad, stressed, or confused during a crisis. Talking to people you trust, such as friends and family, can help. If you feel overwhelmed, talk to a health worker or counsellor.</p>
        <hr>
        <h5>Medical Treatments</h5>
        <p>If you have mild symptoms and are otherwise healthy, self-isolate and contact your medical provider or a COVID-19 information line for advice.</p>
        <p>Seek medical care if you have a fever, a cough, and difficulty breathing. Call in advance.</p>
       </p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="container">
  <br><br>
<h3 style="text-align: center; color:black;"" class="lineWord">KENYA COVID-19 STATISTICS</h3>

<br><br>

<div style="border: 1px solid blue;">
<input type="text" id="myInput"
  style=" 
  background-image: url('/images/search.png');
  background-size: 30px 30px;
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  margin-bottom: 12px;"
  onkeyup="myFunction()" placeholder="Search for A Specific Date.." title="Type in a Date">
</div>

<div class="card-body">
        <div class="table-responsive center">
            <table class="table">
              <thead class="text-primary">
                <th>Date</th>
                 <th>Status</th>
                <th>Cases</th>

              </thead>
              <tbody id="myTable">
                        @foreach($body as $bodies)
                        <tr>
                            <td>{{ date('d-m-Y', strtotime($bodies['Date'])) }}</td>

                            <td>{{$bodies['Status'] }}</td>
                           <td>{{ $bodies['Cases'] }}</td>
                        </tr>
                        @endforeach
              </tbody>
            </table>
        </div>
      </div>
</div>
</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</section>
@endsection