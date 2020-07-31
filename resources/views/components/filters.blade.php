<div class="filterPanel">
    <form method="POST" action="/movies" class="form">
        @csrf
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Sort<i class="fas fa-chevron-right"></i></h5>
                <select id="sort_by" name="sort_by" class="form-control">
                    @foreach ($selectOptions as $options)
                        <option value="{{$options['id']}}" {{($options['id'] == $sort_by) ? 'selected' : ''}} >{{$options['value']}}</option>
                    @endforeach
                </select>
                <br/>
                <button type="submit" class="form-control btn btn btn-primary">Sort</button>
            </div>
        </div>
    </form>
</div>