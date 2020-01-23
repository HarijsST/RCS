@extends('layouts.app')

@section('content')
  <section class="jumbotron text-center">
      <div class="container">
          <img src="/todo/public/img/image.jpg" class="img-fluid" alt="Responsive image">
          <br>
          <br>
          <h1 class="jumbotron-heading">Add new task</h1>
          <p></p>
          <div class="row justify-content-center">
            <form class="col-sm-12 col-md-12 col-lg-7" action="/todo/public/task/create" method="POST">
              <div class="input-group mb-3">
                

                @csrf

                <input type="text" class="form-control" name="input-field--name" placeholder="New task title" aria-label="New task title" aria-describedby="button-add">
                
                <div class="input-group-append">
                  <input class="btn btn-outline-success" type="submit" id="button-add" value="Add Task"/>
                </div>

              </div>
            </form>
          </div>
      </div>
</section>