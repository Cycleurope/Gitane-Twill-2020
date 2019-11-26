<div class="row">
    <div class="col-6 px-0">
        <table class="table table-sm geometries-k">
            <thead><tr><th>Size</th></tr></thead>
            <tbody>
                <tr><td><span class="font-weight-semibold">A</span></td></tr>
                <tr><td><span class="font-weight-semibold">B</span></td></tr>
                <tr><td><span class="font-weight-semibold">C</span></td></tr>
                <tr><td><span class="font-weight-semibold">D</span></td></tr>
                <tr><td><span class="font-weight-semibold">E</span></td></tr>
                <tr><td><span class="font-weight-semibold">F</span></td></tr>
                <tr><td><span class="font-weight-semibold">G</span></td></tr>
                <tr><td><span class="font-weight-semibold">H</span></td></tr>
                <tr><td><span class="font-weight-semibold">I</span></td></tr>
                <tr><td><span class="font-weight-semibold">J</span></td></tr>
                <tr><td><span class="font-weight-semibold">Hauteur (cm)</span></td></tr>
            </tbody>
        </table>
    </div>
    @foreach($bike->geometries as $g)
    {!! $g->renderBlocks() !!}
    @endforeach
</div>