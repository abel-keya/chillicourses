<!DOCTYPE html>
<html ng-app="chillicourses">
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Chilli Courses</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/reset.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/site.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/container.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/grid.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/header.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/image.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/menu.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/divider.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/dropdown.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/segment.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/button.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/list.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/icon.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/sidebar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/transition.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/form.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/menu.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/label.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/dropdown.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/popup.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/input.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/table.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./vendor/semantic/ui/dist/components/checkbox.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/main.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/loading-bar.css') }}">

  <script src="{{ asset('./assets/library/jquery.min.js') }}"></script>
  <script src="{{ asset('./vendor/semantic/ui/dist/components/visibility.js') }}"></script>
  <script src="{{ asset('./vendor/semantic/ui/dist/components/sidebar.js') }}"></script>
  <script src="{{ asset('./vendor/semantic/ui/dist/components/transition.js') }}"></script>
  <script src="{{ asset('./vendor/semantic/ui/dist/components/dropdown.js') }}"></script>
  <script src="{{ asset('./vendor/semantic/ui/dist/components/popup.js') }}"></script>
  <script src="{{ asset('./vendor/semantic/ui/dist/components/form.js') }}"></script>
  <script src="{{ asset('./vendor/semantic/ui/dist/components/checkbox.js') }}"></script>

  <script>
    $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
      .visibility({
        once: false,
        onBottomPassed: function() {
          $('.fixed.menu').transition('fade in');
        },
        onBottomPassedReverse: function() {
          $('.fixed.menu').transition('fade out');
        }
      })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
      .sidebar('attach events', '.toc.item')
      ;

    })
    ;
  </script>

</head>
<body id="main">
  <div ng-view></div>

  <!-- load angular and angular route via CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ngStorage/0.3.10/ngStorage.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-local-storage/0.7.1/angular-local-storage.min.js"></script>

  <script src="{{ asset('./assets/js/loading-bar.js') }}"></script>

  <script src="{{ asset('./scripts/script.js') }}"></script>
  <script src="{{ asset('./scripts/controllers/HomeCtrl.js') }}"></script>
  <script src="{{ asset('./scripts/services/HomeServices.js') }}"></script>
  
  
  
</body>

</html>
