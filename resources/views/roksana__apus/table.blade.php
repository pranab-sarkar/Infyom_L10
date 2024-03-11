<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="roksana_-apus-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Designation</th>
                <th>Emplyee Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roksanaApus as $roksanaApu)
                <tr>
                    <td>{{ $roksanaApu->name }}</td>
                    <td>{{ $roksanaApu->designation }}</td>
                    <td>{{ $roksanaApu->Emplyee_Id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['roksanaApus.destroy', $roksanaApu->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('roksanaApus.show', [$roksanaApu->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('roksanaApus.edit', [$roksanaApu->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $roksanaApus])
        </div>
    </div>
</div>
