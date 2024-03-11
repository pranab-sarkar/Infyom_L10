<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="teachers-table">
            <thead>
            <tr>
                <th>Name En</th>
                <th>Name Bn</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->name_en }}</td>
                    <td>{{ $teacher->name_bn }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['teachers.destroy', $teacher->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('teachers.show', [$teacher->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('teachers.edit', [$teacher->id]) }}"
                               class='btn btn-default btn-xs'>
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

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $teachers])
        </div>
    </div>
</div>
