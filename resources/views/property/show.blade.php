@extends('property.master')

@section('content')

  <div class="container my-3">

    <h1>Página single</h1>

    <?php

      if (!empty($property)) {
        foreach($property as $prop) {
          ?>
            <h2>Título do imóvel: <?= $prop->title; ?></h2>

            <p>Descrição: <?= $prop->description; ?></p>

            <p>Valor de locação: <?= $prop->rental_price; ?></p>

            <p>Valor de venda: <?= $prop->sale_price; ?></p>
          <?php
        }
      }

    ?>

</div>

@endsection


