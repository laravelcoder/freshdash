<table class="table table-responsive" id="clinics-table">
    <thead>
        <tr>
            <th>Number</th>
        <th>Name</th>
        <th>Device Count</th>
        <th>Group Id</th>
        <th>Date Opened</th>
        <th>Quickbase Id</th>
        <th>Quickbase Company</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clinics as $clinic)
        <tr>
            <td>{!! $clinic->number !!}</td>
            <td>{!! $clinic->name !!}</td>
            <td>{!! $clinic->device_count !!}</td>
            <td>{!! $clinic->group_id !!}</td>
            <td>{!! $clinic->date_opened !!}</td>
            <td>{!! $clinic->quickbase_id !!}</td>
            <td>{!! $clinic->quickbase_company !!}</td>
            <td>
                {!! Form::open(['route' => ['clinics.destroy', $clinic->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('clinics.show', [$clinic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('clinics.edit', [$clinic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>