@extends('layouts.publico')
@section('contenido')
<br>
<br>
<div class="container">
    <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
        <li class="breadcrumb-item"><a class="text-primary" href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#">Quienes somos</a></li>
    </ol>
    <br>
    <div class="row">
        <div class="card">
            <div class="card-body">
              <h3 class="card-title">Misión</h3>
              <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. A nam tempora earum amet hic quibusdam dolorem eius ratione cum laudantium, aspernatur, dignissimos delectus corporis nemo aliquam iusto expedita nostrum. Molestias!</p>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Visión</h3>
            </div>
            <div class="card-body">
              <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, totam. Necessitatibus repellat temporibus nobis, vero error ea delectus sint et, dicta dolorum modi, corporis libero quod natus laudantium voluptatum dignissimos.</p>
            </div>
          </div>
    </div>
</div>
@endsection