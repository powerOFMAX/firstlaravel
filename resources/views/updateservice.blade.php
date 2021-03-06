@extends('layouts.app')

@section('content')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYG5g2aJ9TjMlbYk7E_VuFYKSvHC1Ee6Y&libraries=places" 
            type="text/javascript">
    </script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">  <h4>Modify a Service</h4> </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class=serviceNumber id="{{$id}}">
                            <h5> Now you are editing the service number: {{$id}}</h5> <br/>
                        </div>

                        {{-- Here the Message is shown --}}
                        <div id="alert_message"></div>     
                        <div class="container">
                            {{-- Title and Description Fields --}}
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="title">Title</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  id="title"  placeholder="Enter a Title..">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <table id="address" class="col">
                                    {{-- Street Direction / Street_Number / Route --}}
                                    <tr>
                                        <td class="label">Street address</td>
                                        <td class="slimField">
                                            <div class="form-group">
                                                <input class="form-control" id="street_number"
                                                    disabled="true"
                                                    placeholder="Enter the Street Number..">
                                            </div>
                                        </td>
                                        <td class="wideField" colspan="2">
                                            <div class="form-group">
                                                <input class="form-control" id="route"
                                                        disabled="true"
                                                        placeholder="Enter the Route..">
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- City Field --}}
                                    <tr>
                                        <td class="label">City</td>
                                        <td class="wideField" colspan="3">
                                            <div class="form-group">
                                                <input class="form-control" id="locality"
                                                   disabled="true"
                                                   placeholder="Enter the City..">
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- State Field --}}
                                    <tr>
                                        <td class="label">State</td>
                                        <td class="slimField">
                                            <div class="form-group">
                                                <input class="form-control" id="administrative_area_level_1"
                                                   disabled="true"
                                                   placeholder="Enter the State..">
                                            </div>
                                        </td>
                                    {{-- Zip Code --}}
                                        <td class="label"> Zip code</td>
                                        <td class="wideField">
                                            <div class="form-group">
                                                <input class="form-control" id="postal_code"
                                                       disabled="true"
                                                       placeholder="Enter the Zip Code..">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div><br/>
                            <div class="form-row">
                                {{-- Search input with Map --}}
                                    <div class="col">
                                        <label for="autocomplete" id="searchLabel">Search a new direction</label>                                        
                                    </div>
                                    <div class="col">
                                        <input type="text" id="autocomplete" class="form-control" placeholder="Enter your address" >
                                    </div>                              
                            </div><br/>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="description">Description</label>
                                    <div class="form-group">
                                        <textarea type="text" class="form-control" rows="4" id="description" placeholder="Enter a Description.."></textarea> 
                                    </div>
                                </div>
                            </div>
                            {{-- Create the Insert Button --}}
                            <div class="form-row">
                                <div class="col-sm-2" >
                                    <button class="btn btn-success btn-block" type="button" id="update">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

    <script src="{{asset('js/update.js')}}"></script>
    <script src="{{mix('js/app.js')}}" ></script>

@endsection
