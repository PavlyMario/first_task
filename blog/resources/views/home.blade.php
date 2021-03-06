@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Users') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                      
                    @endif
                </div>
                <ul>
                    @foreach ($data as $i)
                        <li>
                            {{$i->name}}
                        </li>
                    @endforeach
                </ul>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
