<!DOCTYPE html>
<html>
<head>
  ＠isset($title)
  <title>{{ $title }} - 自宅でBBQ</title>
  @else
  <title>自宅でBBQ</title>
  @endisset
  
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>