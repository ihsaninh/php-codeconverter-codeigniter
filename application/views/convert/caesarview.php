<div class="col-sm-9">
    <h5 class="border-dark border-bottom pt-4 pb-4 text-secondary font-weight-bold">Caesar Cipher Encryption</h5>
    <!-- MAIN -->
    <div class="row">
      <div class="col-sm-8" >
        <form action="" method="post">
          <label for="exampleFormControlTextarea1" class="font-weight-bold">Masukkan angka atau text</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="text" cols="50" placeholder="Write your code"><?= isset($_POST['convert'])? $_POST['text']: ''; ?></textarea>
          <div class="form-row mt-2">
            <div class="col-sm-4">
              <label for="key" class="font-weight-bold">Masukkan offset</label>
              <input type="text" class="form-control" placeholder="Default: 2" id="key" name="key" value="<?= isset($_POST['convert'])? $_POST['key']: ''; ?>">
            </div>
            <div class="col-sm-4">
              <label for="delimiter" class="font-weight-bold">Masukkan delimiter</label>
              <input type="text" class="form-control" placeholder="Default: ' ' (space)" id="delimiter" name="delimiter" value="<?= isset($_POST['convert'])? $_POST['delimiter']: ''; ?>">
            </div>
          </div>
          <div class="text-center mt-3 mb-2">
            <button type="convert" name="convert" class="convert btn btn-custom btn-lg">Convert</button>
          </div>
        </form>
        <label for="exampleFormControlTextarea2" class="font-weight-bold">Hasil Cipher:</label>
        <textarea class="form-control" id="exampleFormControlTextarea2" rows="8" cols="50" placeholder="Output"><?= isset($_POST['convert'])? $result: ''; ?></textarea>
      </div>