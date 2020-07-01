@extends('includes.navBar')

@section('content')

<section class="content">
<div class="container-fluid">
<div class="card-body">
        <div class="table-responsive">
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
</section>
@endsection