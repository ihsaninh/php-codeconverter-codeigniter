<div class="col-sm-9">
  <h5 class="border-dark border-bottom pt-4 pb-4 text-secondary font-weight-bold"><?= $title; ?></h5>
  <!-- MAIN -->
    <div class="row">
    <div class="col-sm-8" >
          <form action="" method="post">
            <label for="exampleFormControlTextarea1" class="font-weight-bold">Masukkan angka atau text yang akan dikonversi</label>
            <textarea class="form-control" rows="10" name="input" id="input" cols="50" placeholder="Write your code"><?= isset($_POST['convert'])? $_POST['input']: ''; ?></textarea>
            <div class="text-center mt-3 mb-2">
              <button type="convert" name="convert" id="convert" class="convert btn btn-custom btn-lg">Convert</button>
            </div>
          </form>
        <label for="result" class="font-weight-bold">Hasil angka atau text yang dikonversi:</label>
        <textarea class="form-control" id="result" rows="10" cols="50" placeholder="Output"><?= isset($_POST['convert'])? $result: ''; ?></textarea>
    </div>  