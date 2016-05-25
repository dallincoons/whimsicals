<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Whimsicals by MarDee is a boutique full of beautiful handmade crafts.">

    <title>Whimsicals by MarDee</title>

    <link href="/css/bs_css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/whimsical_style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway|Questrial|Poppins' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/basic.css"/>
</head>
<body id="app">

@if(View::hasSection('header'))

    @yield('header')

@else

    <nav class="navbar navbar-default whim_nav">
        <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#whimNav"
                        aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="/">
                    <img src="/img/whim_roses_1.png">
                    <span class="whim_brand">Whimsicals </span> <span> by MarDee</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="whimNav">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/" class="active">Home</a></li>
                    <li><a href="/events">Events</a></li>
                    <li><a href="/products">Our Work</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/contact">About</a></li>

                    @if(!Auth::guest())
                        <li class="dropdown">
                            <a href="/member_portal" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Add & Update <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/events/create">Add Event</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/events/edit">Edit Events</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/products/create">Add New Product</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/products/edit">Edit Products</a></li>
                            </ul>
                        </li>
                        <li><a href="/logout">Logout</a></li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


@endif

<div class="whimsical_wrapper">

    @yield('content')

    @if(View::hasSection('footer'))

        @yield('footer')

    @else

       @include('partials.footer')

    @endif

    <meta id="token" name="token" value="{{ csrf_token() }}">

</div>
<script src="http://sdks.shopifycdn.com/js-buy-sdk/latest/shopify-buy.polyfilled.globals.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>

<script src="/js/bs_js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/app.js"></script>




@yield('scripts.footer')

<script>

    Dropzone.options.uploadImages = {
        autoProcessQueue   : false,
        parallelUploads    : 1,
        maxFiles: 1,
        previewsContainer: "#previews", // Define the container to display the previews

        init: function() {
            var myDropzone = this;

            // First change the button to actually tell Dropzone to process the queue.
            this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {

                console.log(myDropzone);
                // Make sure that the form isn't actually being sent.
                e.preventDefault();
                e.stopPropagation();
                myDropzone.processQueue();
            });

            // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
            // of the sending event because uploadMultiple is set to true.
            this.on("sendingmultiple", function() {
                // Gets triggered when the form is actually being sent.
                // Hide the success button or the complete form.
            });
            this.on("successmultiple", function(files, response) {
                // Gets triggered when the files have successfully been sent.
                // Redirect user or notify of success.
            });
            this.on("errormultiple", function(files, response) {
                // Gets triggered when there was an error sending the files.
                // Maybe show form again, and notify user of error
            });
        }
    };



</script>

<script>
//    var shopClient = ShopifyBuy.buildClient({
//        apiKey: 'f0bd6bfdeb865f6b4e81eba5e6bdb361',
//        myShopifyDomain: 'dallincoons',
//        appId: '6'
//    });
//
//    shopClient.fetchQueryProducts({collection_id: 234516614})
//            .then(function (product) {
//                console.log(product[0].attrs);
//                console.log(product[0].options);
//                console.log(product[0].selectedVariant);
//
//                shopClient.createCart({id: 123, quantity: 1}).then(function (newCart) {
//
//                    // do something with updated cart
//
////        cart.addVariants({variant: product.selectedVariant, quantity: 1}).then(function (cart) {
////            // do something with updated cart
////        });
//
//                    newCart.addVariants({product_id: 6303234566, quantity : 1, variant : product[0].selectedVariant}).then(function(cart){
//
//                        console.log(cart.lineItems);
//
////                        document.location.href = cart.checkoutUrl;
//
//                    });
//
//
//                });
//
//            })
//            .catch(function () {
//                console.log('Request failed');
//            });

</script>


<script>


    $(".thumbnail_img").click(function () {

        var thumbnail_src = $(this).attr('src');

        $('#main_photo').attr("src", thumbnail_src);
    });
</script>

</body>
</html>