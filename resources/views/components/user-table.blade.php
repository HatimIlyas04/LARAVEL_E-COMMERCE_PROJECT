@props(['users'])
<div>
    <table class="table table-hover">
        <tr>
            <th>id</th>
            <th>Full Name</th>
            <th>Metier</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <th>{{$user['id']}}</th>
                <th>{{$user['nom']}}</th>
                <th>{{$user['metier']}}</th>
            </tr>
        @endforeach
    </table>
</div>