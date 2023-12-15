<!doctype html>
<html lang="en">
    <head>
        <title>User</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="container">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">OrderId</th>
      <th scope="col">UserId</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Subtotal</th>
      <th scope="col">Status</th>
      <th scope="col">Shipping Address Id</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
    <tr>
      <td>{{$order->order_id}}</td>
      <td>{{$order->user_id}}</td>
      <td>{{$order->total_amount}}</td>
      <td>{{$order->status}}</td>
      <td>{{$order->shipping_address_id}}</td>
     
    </tr>
    @endforeach
  </tbody>
</table>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
