
<div class="main-panel">
    <h3>Liste Des users</h3>
    <br>
    <br>     
    <br>
    @if(session('success'))
    <script>
        alert('{{ session('success') }}');
    </script>
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
                <th>Password</th>
               <th>status</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($user as $sc)
                <tr>
                    <td>{{ $sc->name }}</td>
                    <td>{{ $sc->email }}</td>
                    <td>{{ $sc->password }}</td>
                      <td>{{ $sc->status }}</td>

                </tr>


            @endforeach
        </tbody>
    </table>
</div>

