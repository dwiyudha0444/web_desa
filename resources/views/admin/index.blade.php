@if(Auth::user()->role!='client')
        @include('admin.head')

        @include('admin.navbar')

        @include('admin.sidebar')

        @include('admin.main')

        @include('admin.footer')
@else
  @include('admin.accessDenied')
@endif