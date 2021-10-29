<div class="table-responsive">
    <table class="table" id="food-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Price</th>
        <th>Ratings</th>
        <th>Baker</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($food as $food)
            <tr>
                <td>{{ $food->name }}</td>
            <td>{{ $food->price }}</td>
            <td>{{ $food->ratings }}</td>
            <td>{{ $food->baker }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['food.destroy', $food->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('food.show', [$food->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('food.edit', [$food->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
