@extends('layouts.main')

@section('content')

<!-- begin::main-content -->
<div class="main-content">

        <!-- begin::page-header -->
        <div class="page-header">
            <div class="container-fluid d-sm-flex justify-content-between">
                <h4>Employee Profile</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Admin Management System</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Employee Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- end::page-header -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Overview</h6>
                            <div class="row">
                                <div class="col-md-8">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your
                                                email with
                                                anyone else.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div data-label="CODE EXAMPLE" class="demo-code-preview">
                                <pre><code class="language-html">&lt;form&gt; &lt;div class="form-group"&gt;
                                &lt;label for="exampleInputEmail1"&gt;Email address&lt;/label&gt;
                                &lt;input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email"&gt;
                                &lt;small id="emailHelp" class="form-text text-muted"&gt;We'll never share your email with
                                anyone else.
                                &lt;/small&gt;
                                &lt;/div&gt;
                                &lt;div class="form-group"&gt;
                                    &lt;label for="exampleInputPassword1"&gt;Password&lt;/label&gt;
                                    &lt;input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password"&gt;
                                &lt;/div&gt;
                                &lt;div class="form-group form-check"&gt;
                                    &lt;input type="checkbox" class="form-check-input" id="exampleCheck1"&gt;
                                    &lt;label class="form-check-label" for="exampleCheck1"&gt;Check me out&lt;/label&gt;
                                &lt;/div&gt;
                                &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
                                &lt;/form&gt;</code></pre>
                            </div>
                        </div>
                    </div>

                    

                </div>
            </div>

        </div>

    <!-- begin::footer -->
    <footer>
        <div class="container-fluid">
            <div>© 2019 Protable v1.0.0 Made by <a href="http://laborasyon.com/">Laborasyon</a></div>
            <div>
                <nav class="nav">
                    <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                    <a href="#" class="nav-link">Change Log</a>
                    <a href="#" class="nav-link">Get Help</a>
                </nav>
            </div>
        </div>
    </footer>
    <!-- end::footer -->

</div>
<!-- end::main-content -->
                                                       
@endsection