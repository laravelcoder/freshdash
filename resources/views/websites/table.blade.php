<table class="table table-responsive" id="websites-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Website</th>
        <th>Clinic Id</th>
        <th>User Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($websites as $website)
        <tr>
            <td>{!! $website->name !!}</td>
            <td>{!! $website->website !!}</td>
            <td>{!! $website->clinic_id !!}</td>
            <td>{!! $website->user_id !!}</td>
            <td>
                {!! Form::open(['route' => ['websites.destroy', $website->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('websites.show', [$website->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('websites.edit', [$website->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>