<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> -->
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
  <script src="{{ mix('/js/app.js') }}" defer></script>
  @inertiaHead
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-2QDCGW0Q4S"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-2QDCGW0Q4S');
  </script>
</head>

<body>
  @inertia
</body>

</html>