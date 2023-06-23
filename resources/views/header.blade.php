@php
    use Illuminate\Support\Facades\Session;
    use App\Http\Controllers\ProductController;
    use App\Models\User;

    $total = 0;
    $user = null;

    if (Session::has('user')) {
        $user = User::find(Session::get('user')['id']);
        $total = ProductController::cartItem();
    }
@endphp

<style>
    .navbar-nav li.nav-item a.nav-link {
        font-size: 14px;
    }

    .navbar-nav li.nav-item a.nav-link:hover {
        color: #fff;
    }

    .navbar .form-control {
        font-size: 12px;
        height: 28px;
        padding: 0.25rem 0.5rem;
    }

    .navbar .btn-outline-success {
        font-size: 12px;
        height: 28px;
        padding: 0.25rem 0.5rem;
    }

    @media (max-width: 991.98px) {
        .navbar-nav {
            text-align: center;
        }

        .navbar-nav .nav-item {
            display: inline-block;
        }

        .navbar-nav .nav-item + .nav-item {
            margin-left: 10px;
        }

        .navbar-nav .nav-link {
            padding: 0.5rem 0;
        }

        .navbar-nav .dropdown-menu {
            text-align: left;
        }

        .navbar-nav .dropdown-menu .dropdown-item {
            padding: 0.25rem 1rem;
        }

        .navbar-collapse .form-inline {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 10px;
        }
    }
</style>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">E-Commerce</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">Categories</a>
                </li>
                @if (Session::has('user'))
                    <li class="nav-item">
                        <a class="nav-link" href="/myorders">Orders</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/products">Products</a>
                    </li>
                @endif
            </ul>

            <ul class="navbar-nav ms-auto">
                @if (Session::has('user'))
                    <li class="nav-item">
                        <a href="/cartlist" class="nav-link">
                            <i class="fas fa-shopping-cart"></i> Cart <span class="badge bg-success">{{ $total }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/orders">My Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">Hi, {{ $user->name }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/products/create">Create Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/settings">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link">
                            <i class="fas fa-user-circle"></i> Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="nav-link">
                            <i class="fas fa-user-plus"></i> Register
                        </a>
                    </li>
                @endif
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
