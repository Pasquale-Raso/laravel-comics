@extends('layouts.template');
{{-- TITLE --}}
@section('title')Home @endsection
{{-- BUTTON CURRENT SERIES --}}
@section('button-current-series')
<button class="button-banner"><a href="#">CURRENT SERIES</a></button>
@endsection
{{-- PRODUCTS --}}
@section('Products')
<div class="products container">
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam vel doloremque soluta eos in voluptates, enim repellat. Laudantium corrupti aliquam perspiciatis dolor libero sit aliquid incidunt, perferendis doloribus officia error quae? Illum reprehenderit, assumenda eum nemo autem iste provident soluta id laborum in delectus natus quibusdam saepe veritatis ducimus, quaerat optio eos fugiat, quas omnis eligendi. Vitae quidem atque neque impedit magni animi voluptatem nam deleniti. Deserunt molestias, fugiat sunt doloremque ipsam aperiam, quidem beatae quasi, minima quaerat odit excepturi ex perspiciatis sint maiores esse repellat aliquam modi harum nam repudiandae! Cumque, deleniti commodi cupiditate quia perferendis quidem minus dolorem numquam? Hic obcaecati aspernatur nostrum exercitationem dignissimos ratione vero iure, aperiam soluta. Dignissimos corporis ducimus quam nam, modi iusto quas aspernatur enim nemo, assumenda itaque totam quasi veritatis sunt provident, aliquam suscipit molestias deleniti animi! Eius dolores architecto velit itaque debitis placeat dolorem quam, in a, aliquam at quis doloremque pariatur numquam ducimus enim voluptatum totam animi corporis. Inventore, exercitationem tempora quisquam porro officia ipsum ullam in, aut quidem optio non quis neque adipisci totam saepe pariatur id aperiam expedita cumque illum nam nisi rerum quam. Atque at beatae non illo tenetur omnis iusto. Nesciunt neque corrupti ipsam non incidunt!</p>
</div>
@endsection
{{-- NAVBAR ICONS --}}
@section('Navbaricons')
<section class="navbar_blu_line">
  <div class="container">
    <ul>
      <li >
        <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="DIGITAL COMICS">
        <p>DIGITAL COMICS</p>
      </li>
      <li >
        <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="DC MERCHANDISE">
        <p>DC MERCHANDISE</p>
      </li>
      <li >
        <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="SUBSCRIPTIONS">
        <p>SUBSCRIPTIONS</p>
      </li>
      <li >
        <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="COMIC SHOP LOCATOR">
        <p>COMIC SHOP LOCATOR</p>
      </li>
      <li >
        <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="DIGITAL COMICS">
        <p>DC POWER VISA</p>
      </li>
    </ul>
  </div>
</div>
</section>
@endsection




