<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CKFinder 3 Samples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
    <script src="{{ asset('js/ckfinder/samples/js/html5shiv.min.js') }}"></script>
    <![endif]-->
    <link href="{{ asset('js/ckfinder/samples/css/sample.css') }}" rel="stylesheet">
</head>
<body>
<header class="header-a">

</header>
<main class="grid-container">
    <section class="content grid-width-70">
        <div id="ckfinder-widget"></div>
    </section>
</main>


<script src="{{ asset('js/ckfinder/samples/js/sf.js') }}"></script>
<script src="{{ asset('js/ckfinder/samples/js/tree-a.js') }}"></script>
@include('media::setup')
<script>
    CKFinder.widget( 'ckfinder-widget', {
        width: '100%',
        height: 700
    } );
</script>
<script src="//cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>

</body>
</html>
