@extends('formbuilder::layout')

@section('content')
<div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
    <div class="w-full mb-1">
        <div class="mb-4">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card rounded-0">
                <div class="card-header">
                    <h5 class="card-title">
                        {{ $pageTitle }} ({{ $submissions->count() }})

                        <a href="{{ route('formbuilder::forms.index') }}" class="btn btn-primary float-md-right btn-sm">
                            <i class="fa fa-arrow-left"></i> Back To Forms
                        </a>
                    </h5>
                </div>

                @if($submissions->count())
                    <div class="table-responsive">
                        <table class="table table-bordered d-table table-striped pb-0 mb-0">
                            <thead>
                                <tr>
                                    <th class="five">#</th>
                                    <th class="fifteen">User Name</th>
                                    @foreach($form_headers as $header)
                                        <th>{{ $header['label'] ?? title_case($header['name']) }}</th>
                                    @endforeach
                                    <th class="fifteen">Finish</th>
                                    <th class="fifteen">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($submissions as $submission)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $submission->user->name ?? 'n/a' }}</td>
                                        @foreach($form_headers as $header)
                                            <td>
                                                {{
                                                    $submission->renderEntryContent(
                                                        $header['name'], $header['type'], true
                                                    )
                                                }}
                                            </td>
                                        @endforeach
                                        <td>
                                            @if ($submission->status === 'pending')
                                           <form action="{{ route('submissions.markAsCompleted', $submission->id) }}" method="post">
                                            @csrf
                                            @method('post')
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                Mark as Completed
                                            </button>
                                        </form>
                                        @else

                                        <span
                                        class="rounded-full bg-green-200 px-2 py-0.5 text-xs font-medium text-green-600">Completed</span>
                                        @endif

                                        </td>
                                        <td>

                                            
                                            <a href="{{ route('formbuilder::forms.submissions.show', [$form, $submission->id]) }}" class="btn btn-primary btn-sm" title="View submission">
                                                <i class="fa fa-eye"></i> View
                                            </a>

                                            <form action="{{ route('formbuilder::forms.submissions.destroy', [$form, $submission]) }}" method="POST" id="deleteSubmissionForm_{{ $submission->id }}" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm confirm-form" data-form="deleteSubmissionForm_{{ $submission->id }}" data-message="Delete this submission?" title="Delete submission">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if($submissions->hasPages())
                        <div class="card-footer mb-0 pb-0">
                            <div>{{ $submissions->links() }}</div>
                        </div>
                    @endif
                @else
                    <div class="card-body">
                        <h4 class="text-danger text-center">
                            No submission to display.
                        </h4>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
@endsection
