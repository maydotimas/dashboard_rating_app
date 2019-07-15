@extends('layouts.app')

@section('content')
<div class="container" id="app">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js"></script>
<script>
    var socket = io('207.38.86.24:13159');
console.log(socket);
    new Vue({
        el: '#app',
        data() {
            return {
                users: [

                ]
            }
        },
        mounted: function (data) {
            socket.on('test-channel:UserReacted', function (data) {
                console.log(data);
                alert('caught!');
            });
        }
    })
</script>
@endsection
