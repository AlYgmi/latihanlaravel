@extends('layouts.main')

@section('container')
    
@endsection

@section('contrast')
    <div class="container">
        <div class="text-center">
            <h3 style="font-family: arial; font-weight: bold;">Hasil pencarian</h3>
        </div>
        <form method="post" action="http://localhost/laravel/findsearch">				
            <input type="text" name= "search">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button>Search Now</button>				
            </form>
            <?php
            if(isset($sekolah)){
                
                ?>
                 <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sekolah as $user)
                        <tr>
                            <td>{{$user->nama}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <?php
            }
            ?>
    </div>
@endsection