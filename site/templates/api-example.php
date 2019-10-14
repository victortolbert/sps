<html>
  <head>
    <title>API Example</title>
  </head>

  <body>
    <script>
      const csrf = "<?= csrf() ?>";

      fetch("/api/pages/example", {
          method: "GET",
          headers: {
            "X-CSRF" : csrf
          }
        })
        .then(response => response.json())
        .then(response => {
          const page = response.data;
          // do something with the page data
        })
        .catch(error => {
          // something went wrong
        });
    </script>
  </body>
</html>