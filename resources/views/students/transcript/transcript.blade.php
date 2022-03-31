@extends('layouts.studentsnav')

@section('title', 'trancript application')


@section('content')
    <div class="instructons">
        <h4 class="text-center">TRANSCRIPT APPLICATION</h4>
        @if (session()->has('status'))
            <p class="alert alert-success">{{ session('status') }}</p>
            <script>
                window.location.href; //('/students/transcript/application');
            </script>
        @endif
        <hr>
        <h5>INSTRUCTIONS</h5>
        <ol>
            <li>Fill part A and B of this form and present to the Dean of your school.</li>
            <li>
                Where a PROXY is collecting the transcript, a letter of authorization from
                the claimant and original ID will be required
            </li>
        </ol>
    </div>
    <div class="df_form">
        <form action="{{ route('t.apply') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('post')
            <h5>REQUIRED INFORMATION</h5>
            <div class="rq">
                <p>Request</p>
                <div class="d-flex justify-content-around">
                    <p>a) Provisional <input type="radio" name="requestType" id="request" value="provisional"></p>
                    <p>
                        b) Academic <input type="radio" name="requestType" id="request" value="'academic">
                    </p>
                </div>
            </div>
            <div class="ay">
                <p>Academic year</p>
                <div class="d-flex justify-content-around">
                    <p>1 <input type="checkbox" name="ay" id="ay" value="1"></p>
                    <p>2 <input type="checkbox" name="ay" id="ay" value="2"></p>
                    <p>3 <input type="checkbox" name="ay" id="ay" value="3"></p>
                    <p>4 <input type="checkbox" name="ay" id="ay" value="4"></p>
                </div>
                <br>
                <button class="btn btn-warning">APPLY</button>
            </div>
        </form>
    </div>
@endsection
