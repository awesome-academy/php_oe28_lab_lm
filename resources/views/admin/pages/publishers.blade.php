@extends('admin.layouts.app')

@section('title', trans('page.publishers'))

@section('content')
<div class="content-wrapper">
    <div class="container">
        <br>
        @if (session('createsucccessfully'))
            <span class="label label-success">{{ session('createsucccessfully') }}</span>
        @endif
        <br>
        <div class="table-wrapper">
            <table id="publishers-table" class="table table-striped " cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">{{ trans('page.code') }}
                        </th>
                        <th class="th-sm">{{ trans('page.name') }}
                        </th>
                        <th class="th-sm">{{ trans('page.location') }}
                        </th>
                        <th class="th-sm">{{ trans('page.created_at') }}
                        </th>
                        <th class="th-sm">{{ trans('page.updated') }}
                        </th>
                        <th class="th-sm">{{ trans('page.action') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
