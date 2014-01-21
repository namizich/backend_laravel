@section("header")
    <html>
        <head>
    {{ HTML::style('css/bootstrap.css')}}

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"></button>
    <a class="navbar-brand" href="#">JDS Labs</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Orders <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Unshipped</a></li>
              <li><a href="#">Backorders</a></li>
              <li><a href="#">Preorders</a></li>
              <li class="divider"></li>
              <li><a href="#">B2B Orders</a></li>
              <li><a href="#">RMA's</a></li>
              <li><a href="#">Cart Editor</a></li>
              <li class="divider"></li>
              <li><a href="#">Manual Import</a></li>
              <li><a href="#">Lost Shipments</a></li>
              <li><a href="#">Temp Carts</a></li>
            </ul>
      </li>
      <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accounting <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Purchase Order</a></li>
              <li><a href="#">Formal PO Items</a></li>
              <li><a href="#">Vendor Editor</a></li>
              <li class="divider"></li>
              <li><a href="#">Ledger Editor</a></li>
              <li><a href="#">General Ledger</a></li>
              <li class="divider"></li>
              <li><a href="#">Profit/Loss Report</a></li>
              <li><a href="#">Expenses Breakdown</a></li>
              <li class="divider"></li>
                <ul class="dropdown-menu">
                    <li><a href="#">Purchase Order</a></li>
                </ul>
            </ul>
      </li>
      <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employees <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Enter Hours</a></li>
              <li><a href="#">Employee Directory</a></li>
            </ul>
      </li>
      <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
      </li>
      <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Queries <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div><!-- /.navbar-collapse -->
</nav>
</head>
</html>
@show