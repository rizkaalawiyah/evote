@extends('layouts.admin')
@section('nav')
<marquee><h2 style="color: white; margin-top: 2px;">SISTEM PEMILIHAN RW DAN RT </h2></marquee>
@endsection

@section('content')
@include('sweet::alert')
<div class="jumbotron jumbotron-fluid" style="background-color:white">
<div class="container">
<h1 style="border-bottom:solid;" class="display-4">Data Personal Anda:</h1><br>
</div>
</div>
<div class="container-fluid justify-content-center">
  <div class="row ml-5">

                      <div class="container-fluid" style="margin-left: 50px; margin-right: 100px; background-color:#525252; border-radius:10px;border-style:solid; border-color:lightblue;height:100%;  color: white;">
                        <div class="row">
                          <div class="col-12">

                          <article class="part card-details">
                            <div class="card">
                              <table class="table " style="font-size:14px;">
                                        <thead>

                                        </thead>
                                        <tbody>
                                            
                                          <tr>
                                            <th style="width:30px;" scope="row">NIK</th>
                                            <td>:</td>
                                            <td>{{Auth::user()->id}} </td>

                                          </tr>
                                          <tr>
                                            <th scope="row">Nama</th>
                                            <td>:</td>
                                            <td>{{Auth::user()->name}} </td>

                                          </tr>
                                          <tr>
                                            <th scope="row">Alamat</th>
                                              <td>:</td>
                                            <td> {{Auth::user()->email}} </td>

                                          </tr>
                                          <tr>
                                            <th scope="row">Jenis Kelamin</th>
                                                <td>:</td>
                                        <td></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Agama</th>
                                              <td>:</td>
                                            <td></td>

                                          </tr>
                                          <tr>
                                            <th  scope="row">RW</th>
                                              <td>:</td>
                                            <td ></td>

                                          </tr>
                                          <tr>
                                            <th  scope="row">RT</th>
                                              <td>:</td>
                                            <td ></td>
                                          </tr>

                                          
                                        </tbody>
                                      </table>


                            </div>
                            <hr>

                            </article>


    </div>

                                <div class="col-md-5">
                              <a href="" class="btn btn-info ">Mulai Memilih</a>
                            </div>
    </div>




@endsection
