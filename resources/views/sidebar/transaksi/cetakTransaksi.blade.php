<!DOCTYPE html>
<html lang="en">
    <style>
            .table-container {
            display: flex;
            justify-content: space-between;
            }

            /* table {
            border-collapse: collapse;
            width: 48%; /* Sesuaikan lebar tabel */
            } */

            th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            th {
            background-color: #f2f2f2;
            }
    </style>
    <body style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;" onload="print_win()">
        <main>
            <table align="center">
                <td align="center">
                    <span style="font-size: 58px">PT. POS - DBC</span>
                </td>
            </table>

             <div class="table-container">
            <!-- Tabel Pertama -->
            <table border="1px solid #dddddd">
                <tbody>
                  <tr>
                    <td>Tanggal</td>
                    <td>06-october-2024</td>
                  </tr>
                  <tr>
                    <td>Stor</td>
                    <td>Sidoarjo</td>
                  </tr>
                </tbody>
            </table>
          
              <!-- Tabel Kedua -->
              <table border="1px solid #dddddd">
                <thead>
                  <tr>
                    <th colspan="3">Informasi Pelanggan</th>
                    <th>No Rekening</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Nama</td>
                    <td>EMp ID</td>
                    <td>Phone Mobile</td>
                    <td>POS-DBC</td>
                  </tr>
                  <tr>
                    <td>Alice Johnson</td>
                    <td>28</td>
                    <td>Miami</td>
                    <td>998998</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <br>
            <br>
            <table border="1px solid #dddddd" style="width: 100%">
                <thead>
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Dept</th>
                        <th rowspan="2">Barcode</th>
                        <th rowspan="2">Kode Karton</th>
                        <th rowspan="2">Sub Code</th>
                        <th rowspan="2">Item Name</th>
                        <th colspan="2">Jumlah</th>
                        <th rowspan="2">Harga Jual</th>
                        <th rowspan="2">Diskon Emp</th>
                        <th rowspan="2">Total</th>
                        <th rowspan="2">Grand Total</th>
                    </tr>
                    <tr>
                        <th>Qty/pack</th>
                        <th>Box</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>14</td>
                        <td>89999988898</td>
                        <td>77888178</td>
                        <td>001</td>
                        <td>Minyak Filma 34ltr</td>
                        <td>36</td>
                        <td>105</td>
                        <td>190.000</td>
                        <td>10.800</td>
                        <td>180.000</td>
                        <td>18.900</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>14</td>
                        <td>89999988898</td>
                        <td>77888178</td>
                        <td>001</td>
                        <td>Minyak Filma 34ltr</td>
                        <td>36</td>
                        <td>105</td>
                        <td>190.000</td>
                        <td>10.800</td>
                        <td>180.000</td>
                        <td>18.900</td>
                    </tr>
                </tbody>
            </table>
        </main>
    </body>
    <script type="text/javascript">
        function print_win() {
            window.print();
        }
    </script>
</html>