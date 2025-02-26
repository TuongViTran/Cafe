<h1> Đây là trang liên hệ</h1>
<body>
  <div>
    <?php 
      if(DB::connection()->getPdo()) { 
        echo "Successfully connected to the database => " . DB::connection()->getDatabaseName(); 
      }
    ?>
  </div>
</body>
