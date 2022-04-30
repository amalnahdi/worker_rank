@extends('layouts.app2')

@section('child')



<div class="container min-vh-100">
    <div class="row">
        <div class="col-sm-3" style="display: flex;justify-content:center;align-items:center;flex:1;flex-direction:column;">
            <svg xmlns="http://www.w3.org/2000/svg" width="500" height="152" viewBox="0 0 466 152">
                <text id="WorkerRank" transform="translate(2 101)" fill="#fff" font-size="90" font-family="Pacifico-Regular, Pacifico"><tspan x="0" y="0">Worker</tspan><tspan y="0" font-family="Poppins-Medium, Poppins" font-weight="500">Rank</tspan></text>
              </svg>
            <h3 style="text-align: center;color:white">
                Tools for the world's
most customer-centric
projects and businesses
            </h3>
              
        </div>
        <div class="col-sm-9" style="display: flex;flex-direction:column;align-items:center;justify-content:center;height:100vh">
            <div style="display: flex;flex-direction:column;justify-content:center">
                <h2 class="text-white text-center">Register</h2>
                <h3 class="text-center  text-muted">To create your account</h3>
        </div>
            <div>
               <form method="POST" action="{{ route('register') }}">
            @csrf

                <div class="form-group">
                    <div>Name <input type="text" name="name" style=" background-color:#E8EFFC ; margin-bottom: 10px" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter name">  </div>
                   <div>Email <input type="email" name="email" style=" background-color:#E8EFFC ; margin-bottom: 10px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">  </div>
                   <div>Password <input type="password" name="password" style="background-color:#E8EFFC  ; margin-bottom: 10px" class="form-control" id="exampleInputPassword1" aria-describedby="passwordHelp" placeholder="Enter password">  </div>
                </div>
               <div class="preference">
                     <a href="#" class="link-info">Already have an account</a>                    
                </div>
                <div> <button type="submit" class="btn btn-secondary btn-dark"> Register</button>
                    <td width="100%"> 
                    <div class="container btn-inline"> </div>
              
                </form>
@endsection
