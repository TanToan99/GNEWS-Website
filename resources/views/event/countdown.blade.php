@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="/css/countdown.css" />
@endsection

@section('content') 
    <div id="tempo" class="tempo">
        <ul>
            <h5>EVENT WILL BE START IN..</h5>
            <li>
                <span id="dias">
                </span>
                <p>Days</p>
            </li>
            <li>
                <span id="horas">
                </span>
                <p>Hours</p>
            </li>
            <li>
                <span id="minutos">
                </span>
                <p>Minutes</p>
            </li>
            <li>
                <span id="segundos">
                </span>
                <p>Seconds</p>
            </li>

        </ul>

    </div>
@endsection


@section('custom-js')
<script src="/js/countdown.js"></script>
@endsection
