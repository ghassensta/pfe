<div class="main-panel">
    <h3>Liste Des preinscription</h3>
<br>
    <br>     <br>
    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif
    <style> th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
  color: rgb(0, 0, 0);


      }</style>

    <table class="table table-striped" id="table-2">
        <thead>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>Nationalitè</th>
                <th>Password</th>
                <th>Confimation password</th>
                <th>Cin/Passport</th>
                <th>Permis d'exercice</th>
                <th>Numèro d'inscrption au conseil de l'ordre </th>



            </tr>
        </thead>
        <tbody>
            @foreach ($senior as $sc)
                <tr>
                    <td>{{ $sc->name }}</td>
                    <td>{{ $sc->email }}</td>
                    <td>{{ $sc->nationalite }}</td>
                    <td>{{ $sc->password }}</td>
                    <td>{{ $sc->confirm }}</td>
                    <td>{{ $sc->cin }}</td>
                    <td style="width:50px; height:50px; align-items:center; border-radius:50%;  rgba(0,0,0,0.75);" src="{{asset('assets/images/document') }}/{{$sc->document}}" ></td>
                    <td>{{ $sc->dateobtention }}</td>






            @endforeach
        </tbody>
    </table>
</div>

