<ol>
    @foreach ($entity as $ent)
        <li>{{($ent->name) ? $ent->name : $ent->local . ' vs ' . $ent->visitor}}</li>
    @endforeach
</ol>
