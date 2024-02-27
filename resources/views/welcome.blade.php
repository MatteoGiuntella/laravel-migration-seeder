@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
 <div>
   <ul>
      @foreach ($trains as $item)
        <h3>company: {{$item->company}}</h3>
        <h4>station_departures: {{$item->station_departures}}</h4>
        <h4>station_arrival: {{$item->station_arrival}}</h4>
        <h5>departures: {{$item->departures}}</h5>
        <h5>arrivals: {{$item->arrivals}}</h5>
        <h5>carriages: {{$item->carriages}}</h5>
        <h5>train_code: {{$item->train_code}}</h5>
      @endforeach
   </ul>

 </div>
@endsection
