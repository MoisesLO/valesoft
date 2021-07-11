<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }"
      x-data="{ dark: !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches}"
      lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simple example using Multi Theme</title>
  <!-- Tailwind Css -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
</head>
<body class="dark:bg-gray-900">