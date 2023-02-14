<div class="main-panel">
    <h3>Liste Des preinscription junior</h3>
<br>
    <br>     <br>

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
                <th>Date de naissance</th>
                <th>Telephone</th>
                <th>Nationalitè</th>
                <th>Adresse</th>
                <th>Code postal</th>
                <th>Diplome</th>
                <th>Atestation du stage d'internat</th>



            </tr>
        </thead>
        <tbody>
            @foreach ($senior as $sc)
                <tr>
                    <td>{{ $sc->name }}</td>
                    <td>{{ $sc->email }}</td>
                    <td>{{ $sc->naiss }}</td>
                    <td>{{ $sc->tel }}</td>
                    <td>{{ $sc->nationalite }}</td>
                    <td>{{ $sc->adresse }}</td>
                    <td>{{ $sc->codepostal }}</td>
                    <td style="width:50px; height:50px; align-items:center; border-radius:50%;  rgba(0,0,0,0.75);" src="{{asset('assets/images/document') }}/{{$sc->document}}" ></td>
                    <td>{{ $sc->dateobtention }}</td>






            @endforeach
        </tbody>
    </table>
</div>

