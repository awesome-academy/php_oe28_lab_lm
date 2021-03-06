@component('mail::message')
<h1>{{ trans('page.admin.header') }}</h1>
<h3>{{ trans('page.code') }}&#58; {{ $id }}</h3>
<h3>{{ trans('page.name') }}&#58; {{ $name }}</h3>
<h3>{{ trans('page.admin.book') }}&#58; {{ $number }}</h3>
<h3>{{ trans('page.start_date') }}&#58; {{ $start_date }}</h3>
<h3>{{ trans('page.end_date') }}&#58; {{ $end_date }}</h3>
<h4>{{ trans('page.mail.thanks') }}</h4>
@endcomponent
