<hr/>
    <footer class="py-5 bg-dark" style="background-color:#064762;">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Công Ty ABC 2017</p>
        <h5 class="mt-0 text-center text-white"><b>Ban biên tập trang thông tin điện tử Công Ty ABC</b></h5>
            <p class="mt-0 text-center text-white">Số 18,đường Trần Hưng Đạo, TP Long Xuyên, Tinh An Giang</p>
            <p class="mb-0 text-center text-white">Điện Thoại: 098765431 - Fax: 134567890</p>
      </div>
      </footer>
      <!--core JavaScript -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ckeditor/ckeditor.js"></script>
    <script src="js/ckfinder/ckfinder.js"></script>
    <script type="text/javascript">
      function BrowseServer()
      {
        var finder = new CKFinder();
        finder.basePath = '../';
        finder.selectActionFunction = function(fileUrl) {
          document.getElementById('Hinhanh').value = fileUrl.substring(fileUrl.lastIndexOf('/') + 1);
        };
        finder.popup();
      }
    </script>
    
  </body>

</html>