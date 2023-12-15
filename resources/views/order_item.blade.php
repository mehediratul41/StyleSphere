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
      <th scope="col">ItemId</th>
      <th scope="col">OrderId</th>
      <th scope="col">ProductId</th>
      <th scope="col">Quantity</th>
      <th scope="col">Subtotal</th>
      <th scope="col">CreatedAt</th>
      <th scope="col">UpdatedAt</th>
    </tr>
  </thead>
  <tbody>
    @foreach($order_items as $order_item)
    <tr>
        
      <td>{{$order_item->item_id}}</td>
      <td>{{$order_item->order_id}}</td>
      <td>{{$order_item->product_id}}</td>
      <td>{{$order_item->quantity}}</td>
      <td>{{$order_item->subtotal}}</td>
      <td>{{$order_item->created_at}}</td>
      <td>{{$order_item->updated_at}}</td>
     
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
