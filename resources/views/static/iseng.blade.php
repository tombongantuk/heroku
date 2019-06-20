@extends('layouts.master')

@section('title','Iseng')

@section('content')
<form class="form-horizontal" action="{{ url('iseng') }}" method="post">
    {{ csrf_field() }}   
        <div style="width:450px">
                <div style="float:left">
                    <form id="eg" action="/">
                        <table>
                            <tr>
                                <td>
                                    <label>Name:</label>
                                </td>
                                <td>
                                    <input type="text" placeholder="user name" id="name" />
                                </td>
                            </tr>
                      
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="test" onclick="return false;" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </form>
@endsection
<div class="row">
        @if (isset($response))
            {{ $response }} <br>
        @endif
</div>      