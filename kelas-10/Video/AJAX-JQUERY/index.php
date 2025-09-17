<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax-Jquery Bootstrap PHP</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Jquery -->
     <script src="js/jquery.js"></script>
    <!-- App JS -->
    <script src="js/app.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row mt-4">
                <h1>Belajar Ajax-Jquery Bootstrap PHP</h1>
            </div>
            <div class="row mt-4">
                <div class="col-sm">
                    <div class="row">
                        <h2>Input Data Pelanggan</h2>
                    </div>
                    <div class="row">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Pelanggan :</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Harus diisi!</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Alamat :</label>
                                <input type="text" class="form-control" id="alamat">
                                <div id="emailHelp" class="form-text">Harus diisi!</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Telp :</label>
                                <input type="tel" class="form-control" id="telp">
                                <div id="emailHelp" class="form-text">Harus diisi!</div>
                            </div>
                            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm">
                  <div class="row">
                    <h2>Data Pelanggan</h2>
                  </div>
                  <div class="row">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pelanggan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Telp</th>
                            </tr>
                        </thead>
                        <tbody id="isidata">
                            
                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
        
   <!-- <script>
    $(document).ready(function(){
        alert("Tes brooo");
    });
   </script> -->
    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>